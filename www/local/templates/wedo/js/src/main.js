var breakpointMD =767;
var showChar     = 500;   // How many characters are shown by default
var ellipsestext = "...";
var moretext     = "Подробнее";
var lesstext     = "Скрыть";

$( document ).ready(function() {
    setVideoDimensions();
    loadClientsSlider();
    loadProductSlider();
    loadSimilarProductsSlider();
    loadModelForRentSlider ();
    loadModal();
    togglePanel();
    validateForm();
    var navbarData = startNav();
    $(window).scroll(function(){stickyMenu(navbarData);});
    $('.burger').on('click', clickBurger );
    $( ".block.wmf" ).hover(blockWMFHoverIn,blockWMFHoverOut);
    $( ".block.cms" ).hover(blockCMSHoverIn,blockCMSHoverOut);
    $(window).on('resize',function(){
        togglePanel();
        setVideoDimensions();
    });

    $(".tabs-kartochka, .tabs-lease-repair").on("click","a",clickOnTap);

//Cut content based on showChar length
    $(".toggle-text").each(textToggle);

//Toggle content when click on read more link
    $(".toggle-text-link").on('click',linkToggle);

//кнопка на верх
    $(window).on('scroll',showUpButton);
    $('#upbutton').on('click',goUp);

});


function loadSimilarProductsSlider (){
    $('.slider-similar-products').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        nav: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
}
function loadProductSlider(){
    $('.product-img-main').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        adaptiveHeight: true,
        asNavFor: '.product-img-preview'
    });
    $('.product-img-preview').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.product-img-main',
        dots: false,
        nav: false,
        vertical: true,
        arrows: false,
        centerMode: false,
        verticalSwiping: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    vertical: false,
                    swipeToSlide: true,
                    verticalSwiping: false
                }
            }
        ]
    });

}

function loadModal(){
    $('#filter, #order-consultation').on('shown.bs.modal');
}
function loadClientsSlider(){
    $('.clients-slider').slick({
        centerMode: true,
        infinite: true,
        slidesToShow: 5,
        focusOnSelect: true,
        centerPadding: '60px',
        speed: 500,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        pauseOnFocus: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    centerMode: false
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
}

function blockWMFHoverIn(){
    $('.block.wmf').addClass('big-section');
    $('.block.cms').addClass('small-section');
}
function blockWMFHoverOut(){
    $('.block.wmf').removeClass('big-section');
    $('.block.cms').removeClass('small-section');
}

function blockCMSHoverIn(){
    $('.block.cms').addClass('big-section');
    $('.block.wmf').addClass('small-section');
}

function blockCMSHoverOut(){
    $('.block.cms').removeClass('big-section');
    $('.block.wmf').removeClass('small-section');
}

function startNav(){
    var navbar  = $("#line-menu");
    var sticky = navbar.offset().top;
    var prevScrollPos = $(window).scrollTop();
    var navbarData = {
        'navObject':navbar,
        'sticky':sticky,
        'prevScrollPos':prevScrollPos
    };
    return navbarData;
}

function stickyMenu(navbarData) {
     var navbar = navbarData.navObject;
     var pageYOffset = $(window).scrollTop();
    if ( pageYOffset >= (navbarData.sticky + 1)) {
        navbar.addClass("sticky")
    } else {
        navbar.removeClass("sticky");
    }

    var currentScrollPos = pageYOffset;
    if (navbarData.prevScrollPos > currentScrollPos) {
        navbar.css({transition:"all 0.5s",top:'0'});
    } else {
        navbar.css({transition:"all 0.5s",top:'-125px'});
    }
    navbarData.prevScrollPos = currentScrollPos;
}

function clickBurger(){
        $('.top-fixed-line').toggleClass('open');
        $('.container-line-menu').toggleClass('open');
        $('.burger').toggleClass('open');
        $('.overlay').toggleClass('open');
}

function setVideoDimensions () {
    var video = $('video');
    if (!video) {
        return;
    }
    if ($(window).innerWidth() / $(window).innerHeight() > 16 / 9) {
        video.css({width: '100vw',height:"calc(100vw * 9 / 16)"});
    } else {
        video.css({width: 'calc(100vh * 16 / 9)',height:'100vh'});
    }
}

// product detail page js :

function togglePanel (){
    var w = $(window).width();
    if (w <= breakpointMD) {
        $('.custom-collapse').removeClass('show');
    } else {
        $('.custom-collapse').addClass('show');
    }
}

function clickOnTap (event) {
    event.preventDefault();
    //забираем идентификатор бока с атрибута href
    var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
        top = $(id).offset().top;
    //анимируем переход на расстояние - top за 1500 мс
    $('body,html').animate({scrollTop: top}, 1500);
}

function textToggle(){
    var content = $(this).html();

    if(content.length > showChar) {

        var contentExcert = content.substr(0, showChar);
        var contentRest = content.substr(showChar, content.length - showChar);
        var html = contentExcert + '<span class="toggle-text-ellipses">' + ellipsestext + ' </span> <span class="toggle-text-content"><span class="contentRest">' + contentRest + '</span><a href="javascript:;" class="toggle-text-link">' + moretext + '</a></span>';

        $(this).html(html);
    }
}

function linkToggle(){
    if($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext);
    } else {
        $(this).addClass("less");
        $(this).html(lesstext);
    }

    $('.toggle-text-ellipses').toggle();
    $('.contentRest').toggle();
    return false;
}

function showUpButton(){
    if ($(this).scrollTop() > 500) {
        if ($('#upbutton').is(':hidden')) {
            $('#upbutton').css({opacity : 1}).fadeIn('slow');
        }
    } else { $('#upbutton').stop(true, false).fadeOut('fast'); }
}

function goUp(){
    $('html, body').stop().animate({scrollTop : 0}, 300);
}

function validateForm(){
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('consultation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
}

function loadModelForRentSlider (){
    $('.slider-models-for-rent').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        nav: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
}


