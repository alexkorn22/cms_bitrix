var  breakpointMD=768;

$( document ).ready(function() {

/*burger menu*/
    $('.burger').on('click',function() {
        $('.top-fixed-line').toggleClass('open');
        $('.container-line-menu').toggleClass('open');
        $('.burger').toggleClass('open');
        $('.overlay').toggleClass('open');
    });
/*END burger menu*/

/*slider clients*/
    $('.center').slick({
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
/*END slider clients*/

/*section wmf-cms*/
    $( ".block.wmf" ).hover(function() {
        $('.block.wmf').addClass('big-section');
        $('.block.cms').addClass('small-section');
     }, function(){
        $('.block.wmf').removeClass('big-section');
        $('.block.cms').removeClass('small-section');
    });

    $( ".block.cms" ).hover(function() {
        $('.block.cms').addClass('big-section');
        $('.block.wmf').addClass('small-section');
    },  function(){
        $('.block.cms').removeClass('big-section');
        $('.block.wmf').removeClass('small-section');
    });
    /*END section wmf-cms*/


//open modal
    $('#filter, #order-consultation').on('shown.bs.modal');
//END open modal

//плавный скролл к якорю
    $(".tabs-kartochka").on("click","a", function (event) {
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
        top = $(id).offset().top;
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });
//конец плавный скролл к якорю


//слайдер в карточке товара
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
        focusOnSelect: true
    });
//Конец слайдер в карточке товара


//карточка товара - описание - показать больше

    // Show more text option
    var showChar = 500;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Подробнее";
    var lesstext = "Скрыть";

    //Cut content based on showChar length
    if ($(".toggle-text").length) {
        $(".toggle-text").each(function() {

            var content = $(this).html();

            if(content.length > showChar) {

                var contentExcert = content.substr(0, showChar);
                var contentRest = content.substr(showChar, content.length - showChar);
                var html = contentExcert + '<span class="toggle-text-ellipses">' + ellipsestext + ' </span> <span class="toggle-text-content"><span>' + contentRest + '</span><a href="javascript:;" class="toggle-text-link">' + moretext + '</a></span>';

                $(this).html(html);
            }
        });
    }

    //Toggle content when click on read more link
    $(".toggle-text-link").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });

//конец карточка товара - описание - показать больше


//кнопка на верх
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            if ($('#upbutton').is(':hidden')) {
                $('#upbutton').css({opacity : 1}).fadeIn('slow');
            }
        } else { $('#upbutton').stop(true, false).fadeOut('fast'); }
    });
    $('#upbutton').click(function() {
        $('html, body').stop().animate({scrollTop : 0}, 300);
    });
//КОнец кнопка на верх


//валидация форм
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
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
    })();
//Конец валидация форм



//слайдер похожих товаров
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
//Конец слайдер похожих товаров


//ресайз табов
    $(window).resize(function(){
        togglePanel();
    });

    togglePanel();
//конец ресайз табов

});

//табы на мобильном
function togglePanel (){
    var w = $(window).width();
    if (w <= breakpointMD) {
        $('.custom-collapse').removeClass('show');
    } else {
        $('.custom-collapse').addClass('show');
    }
}
//конец табы на мобильном


// SCROLL NAVBAR
window.onscroll = function() {stickyMenu()};

var navbar = document.getElementById("line-menu");
var sticky = navbar.offsetTop;
var prevScrollpos = window.pageYOffset;

function stickyMenu() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }

    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        navbar.style.transition = "all 0.5s";
        navbar.style.top = "0";
    } else {
        navbar.style.transition = "all 0.5s";
        navbar.style.top = "-115px";
    }
    prevScrollpos = currentScrollPos;
}
// END SCROLL

//  Responsice VIDEO background
var video = document.querySelector('video');
function setVideoDimensions () {
    if (!video) {
        return;
    }
    if (window.innerWidth / window.innerHeight > 16 / 9) {
        video.style.width = '100vw';
        video.style.height = 'calc(100vw * 9 / 16)';
    } else {
        video.style.width = 'calc(100vh * 16 / 9)';
        video.style.height = '100vh';
    }
}

window.onresize = setVideoDimensions;
setVideoDimensions();
//  END OF VIDEO background
