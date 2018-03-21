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
    $('#filter').on('shown.bs.modal', function () {

    })
//END open modal

});


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
