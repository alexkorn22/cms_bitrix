$( document ).ready(function() {
/*burger menu*/
    $('.burger').on('click', clickBurger );
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

    // $('.burger').on('click', function () {
    //     $('#line-menu').toggleClass("none")
    // })
    /*END section wmf-cms*/


    //  Responsice VIDEO background
    window.onresize = setVideoDimensions;
    setVideoDimensions();
    //  END OF VIDEO background


// SCROLL NAVBAR
    var navbarData = startNav();
    window.onscroll = function() {stickyMenu(navbarData)};
// END SCROLL

});

function startNav(){
    var navbar  = $("#line-menu");
    var sticky = navbar.offset().top;
    var prevScrollPos = window.pageYOffset;
    var navbarData = {
        'navObject':navbar,
        'sticky':sticky,
        'prevScrollPos':prevScrollPos
    };
    return navbarData;
}

function stickyMenu(navbarData) {
     var navbar = navbarData['navObject'];
    if (window.pageYOffset >= navbarData['sticky']) {
        navbar.addClass("sticky")
    } else {
        navbar.removeClass("sticky");
    }

    var currentScrollPos = window.pageYOffset;
    if (navbarData['prevScrollPos'] > currentScrollPos) {
        navbar.css({transition:"all 0.5s",top:'0'});
    } else {
        navbar.css({transition:"all 0.5s",top:'-115px'});
    }
    navbarData['prevScrollPos'] = currentScrollPos;
}

function clickBurger(){
        $('.top-fixed-line').toggleClass('open');
        $('.container-line-menu').toggleClass('open');
        $('.burger').toggleClass('open');
        $('.overlay').toggleClass('open');
}

function setVideoDimensions () {
    var video = document.querySelector('video');
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
