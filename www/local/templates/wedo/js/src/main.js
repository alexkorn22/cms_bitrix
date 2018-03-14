$( document ).ready(function() {

/*burger menu*/
    $('.burger').on('click',function() {
        $('.top-fixed-line').toggleClass('open');
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
                breakpoint: 600,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
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
        $( '.block.cms .block-title' ).css({'opacity':'0','transition':'0.1s'});
     }, function(){
            $( '.block.cms .block-title' ).css({'opacity':'1', 'transition':'0.5s', 'transition-delay':'0.8s'});
    });

    $( ".block.cms" ).hover(function() {
        $( '.block.wmf .block-title' ).css({'opacity':'0', 'transition':'0.1s'});
    },  function(){
        $( '.block.wmf .block-title' ).css({'opacity':'1', 'transition':'0.5s', 'transition-delay':'0.8s'});
    });

    $('.burger').on('click', function () {
        $('#line-menu').toggleClass("none")
    })
});
/*END section wmf-cms*/

// SCROLL NAVBAR
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("line-menu");
var sticky = navbar.offsetTop;
var prevScrollpos = window.pageYOffset;

function myFunction() {
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