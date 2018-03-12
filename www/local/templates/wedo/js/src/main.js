$( document ).ready(function() {


    $('.burger').on('click',function() {
        $('.top-fixed-line').toggleClass('open');
        $('.burger').toggleClass('open');
        $('.overlay').toggleClass('open');
    });

});
