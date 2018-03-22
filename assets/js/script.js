
$(function(){
    $('#navbar-example2 a').stop().click(function(){
        if (location.pathname.replace(/^\//,'')=== this.pathname.replace(/^\//,'') && location.hostname===this.hostname){
            var UD_HASH= this.hash;
            var UD_ZIEL=$(this.hash);
            if(UD_ZIEL.length){
                var UD_ABSTAND_TOP = UD_ZIEL.offset().top;
                $('html,body').animate({scrollTop:UD_ABSTAND_TOP},1000,function () {
                    window.location.hash=UD_HASH;
                });
                return false;
            }
        }
    });
});

$(window).scroll(function () {
    parallax();

});

$(window).ready(function () {
    if($(window).innerWidth() < 1024){
        $('.slider div').removeClass('.parallax-bg');


    }
});

function parallax() {
    var wScroll = $(window).scrollTop();
    var w2Scroll = $(window).scrollTop();


    $('.parallax-bg').css('background-position','center '+(-wScroll*0.6 )+'px');
    $('.parallax-bg2').css('background-position','center '+(-wScroll*0.1 )+'px');

    $('.parallax-fg').css('top', (w2Scroll*0.15 )+'px')
}
