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



});
