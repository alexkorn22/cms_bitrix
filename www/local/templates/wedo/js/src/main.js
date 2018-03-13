$( document ).ready(function() {

/*burger menu*/
    $('.burger').on('click',function() {
        $('.top-fixed-line').toggleClass('open');
        $('.burger').toggleClass('open');
        $('.overlay').toggleClass('open');
    });
/*END burger menu*/

});
