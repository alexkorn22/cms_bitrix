var breakpointMD =767;
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
    CustomSlideCircle();
    TagsBlog();
    Preloader();
    var windowWidth = $(window).width();
    var navbarData = startNav();
    $(window).scroll(function(){stickyMenu(navbarData);});
    $('.burger').on('click', clickBurger );
    $( ".block.wmf" ).hover(blockWMFHoverIn,blockWMFHoverOut);
    $( ".block.cms" ).hover(blockCMSHoverIn,blockCMSHoverOut);
    $(window).on('resize',function() {
        if ($(window).width() != windowWidth) {
            windowWidth = $(window).width();
            togglePanel();
            setVideoDimensions();
        }
    });

    $(".tabs-kartochka, .tabs-lease-repair").on("click","a",clickOnTap);

//Cut content based on showChar length
    $(".toggle-text").each(textToggle);

//Toggle content when click on read more link
    $(".toggle-text-link").on('click',linkToggle);

//кнопка на верх
    $(window).on('scroll',showUpButton);
    $('#upbutton').on('click',goUp);

// hide filter form  :
    $(document).on('submit','#filterForm',filterHide);

// filter options :
    $(document).on('change','#cubsOnDay',disableOptions);
});

function filterHide() {
    $('#hideModal').click();
}

function disableOptions(){
    var options = $('#cubsOnHour').find('option');
    options.each(function () {
        if(parseInt($(this).val()) > parseInt($('#cubsOnDay').val())){
            $(this).prop("disabled", true);
        }else{
            $(this).prop("disabled", false);
        }
    });
}

CalculatorPayback = function (urlAjax, productId,view) {
    this.cmServings = $('#cmServings');
    this.priceCofee = $('#priceCofee');
    this.priceSale = $('#priceSale');
    this.productId = $('#productId');
    this.urlAjax = urlAjax;
    var self = this;

    this.constructor = function () {
        self.priceSale.on('change',self.changeValue);
        self.priceCofee.on('change',self.changeValue);
        self.cmServings.on('change',self.changeValue);
        self.productId.on('change', self.changeProduct);
    };

    this.changeProduct = function (e) {
        self.cmServings.val( self.productId.find(':selected').data('servings'));
        self.changeValue(e)
    };

    this.changeValue  = function (e) {
        $.ajax({
            url : self.urlAjax,
            type: 'POST',
            data: {
                action : 'recalculate',
                priceSale : self.priceSale.val(),
                priceCofee : self.priceCofee.val(),
                cmServings : self.cmServings.val(),
                productId : self.productId.val(),
                view      : view
            },
            success : function (html) {
                $("#result").html(html);
                $('#monthIncome').val( Math.round($('#monthIncomeTable').html()));
                if($('#paybackPeriodTable') !== null){
                    $('#paybackPeriod').val( Math.round($('#paybackPeriodTable').html()));
                }
            }
        });
    };
    this.constructor();
};

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
        nav: true,
        arrows: true,
        vertical: true,
        centerMode: false,
        verticalSwiping: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    vertical: false,
                    swipeToSlide: true,
                    verticalSwiping: false,
                    nav: false,
                    arrows: false
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
    var showChar     = 300;   // How many characters are shown by default
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
        var forms = document.getElementsByClassName('check-valid');
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

function CustomSlideCircle() {
    $('.circle').each(function (i, elem) {
        var thisCircle = $(this);
        var circle =  $('.circle');
        var prev = i-1;
        var next = i+1;

        var arrowRight = thisCircle.find('.right-arrow-circle');
        var arrowLeft = thisCircle.find('.left-arrow-circle');
        var elemNextStyle =  circle.get(next);
        var elemPrevStyle =  circle.get(prev);

        var one =  circle.get(0);
        var two =  circle.get(1);
        var three =  circle.get(2);

        arrowRight.on('click', function () {
            thisCircle.toggleClass('circle_active');
            $(elemNextStyle).toggleClass('circle_active');
            if(next == 2) {
                $(one).css('z-index', '3');
                $(two).css('z-index', '4');
            }
            if(next == 3) {
               $(three).css('z-index', '5');
            }
        });

        arrowLeft.on('click', function () {
            thisCircle.toggleClass('circle_active');
            $(elemPrevStyle).toggleClass('circle_active');
            if(prev == 2) {
                var three =  circle.get(2);
                $(three).css('z-index', '2');
            }
        });
    })
}

function TagsBlog() {
    var $nav = $('nav');
    var $btn = $('nav .more-tags');
    var $vlinks = $('nav .tags-blog');
    var $hlinks = $('nav .hidden-tags-blog');

    var numOfItems = 0;
    var totalSpace = 0;
    var breakWidths = [];

    // Get initial state
    $vlinks.children().outerWidth(function(i, w) {
        totalSpace += w;
        numOfItems += 1;
        breakWidths.push(totalSpace);
    });

    var availableSpace, numOfVisibleItems, requiredSpace;

    function check() {

        // Get instant state
        availableSpace = $vlinks.width() - 10;
        numOfVisibleItems = $vlinks.children().length;
        requiredSpace = breakWidths[numOfVisibleItems - 1];

        // Not enough space
        if (requiredSpace > availableSpace) {
            $vlinks.children().last().prependTo($hlinks);

            check();
            // More than enough space
        } else if (availableSpace > breakWidths[numOfVisibleItems]) {
            $hlinks.children().first().appendTo($vlinks);

        }
        // Update the button
        if (numOfVisibleItems === numOfItems) {
            $btn.addClass('hidden');
        } else $btn.removeClass('hidden');
    }

    // Window listeners
    $(window).resize(function() {
        check();
    });

    $btn.on('click', function() {
        $hlinks.toggleClass('hidden');
    });

    check();
}

function Preloader() {
    $(window).on('load', function () {
        var $preloader = $('.preloader');
        $preloader.delay(400).fadeOut('slow');
    });
}

