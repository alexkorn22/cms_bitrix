$( document ).ready(function() {

/*burger menu*/
    $('.burger').on('click',function() {
        $('.top-fixed-line').toggleClass('open');
        $('.burger').toggleClass('open');
        $('.overlay').toggleClass('open');
    });
/*END burger menu*/


    $('.center').slick({
        centerMode: true,
        infinite: true,
        slidesToShow: 3,
        focusOnSelect: true,
        centerPadding: '60px',
        speed: 500,
        autoplay: true,
        autoplaySpeed: 2000
});

    $( ".block.wmf" ).hover(function() {
        $( '.block.cms .block-title' ).css('opacity','0');
     }, function(){
            $( '.block.cms .block-title' ).css('opacity','1');
    });

    $( ".block.cms" ).hover(function() {
        $( '.block.wmf .block-title' ).css('opacity','0');
    },  function(){
        $( '.block.wmf .block-title' ).css('opacity','1');
    });

    $('.burger').on('click', function () {
        $('#line-menu').toggleClass("none")
    })
});


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