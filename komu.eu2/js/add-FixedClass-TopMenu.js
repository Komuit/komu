/**
 * Created by N5 on 30/01/14.
 */
jQuery(document).ready(function(){
    var msie6 = $.browser == 'msie' && $.browser.version < 7;
    if (!msie6) {
        var top = $('.navbar-mind').offset().top - parseFloat($('.navbar-mind').css('margin-top').replace(/auto/, 0));
        $(window).scroll(function(event) {
            var y = $(this).scrollTop();
            /*Valore in cui si aggiunge la classe*/
            var y = y-70;
            if (y >= top) {
                $('.navbar-mind').addClass('fixed-menu-nav');
            } else {
                $('.navbar-mind').removeClass('fixed-menu-nav');
            }



        });
    }
});