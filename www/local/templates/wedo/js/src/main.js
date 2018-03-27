$( document ).ready(function() {

    $('.burger').on('click', clickBurger );

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
    $('#filter').on('shown.bs.modal', function () {

    })
//END open modal

    $(window).resize(setVideoDimensions);
    setVideoDimensions();

    var navbarData = startNav();
    $(window).scroll(function(){stickyMenu(navbarData);});

});

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
