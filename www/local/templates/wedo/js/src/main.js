$( document ).ready(function() {


    $('.burger').on('click',function() {

        $(this).toggleClass('open');
        $('.overlay').toggleClass('open');

    });

});
