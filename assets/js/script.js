
$('.cc-allow').on('click', function() {
    var ga = "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){" +
        "(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o)," +
        "m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)" +
        "})(window,document,'script','//www.google-analytics.com/analytics.js','ga');" +
        "ga('create', 'UA-115388787-1', 'auto');" +
        "ga('send', 'pageview');";
    $('head').append('<script>' + ga + '</script>');


});

$('.iframe button').on('click', function() {

    $('.iframe').append('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2093.363587843787!2d8.329289210354402!3d48.19151262739484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4790c6c4424a0101%3A0xba10fdb7ab1b3a2e!2sSeverinenhof!5e0!3m2!1sde!2sde!4v1508593143536" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');
    $('.iframe ').css("border","none");
    $('.iframe button').css("display","none");
    $('.Kontakt .more').css("display","inline");


});

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



/*

        $("a[href*=\"#\"]").on('click', function(event) {

            if (this.hash !== "") {
                event.preventDefault();

                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                    window.location.hash = hash;
                });
            }
        });
*/

    myFunction();
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

function myFunction() {
    if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1 )
    {
        $("html").addClass("opera-1");
    }
    else if(navigator.userAgent.indexOf("Chrome") != -1 )
    {
        $("html").addClass("chrome-1");
    }
    else if(navigator.userAgent.indexOf("Safari") != -1)
    {
        $("html").addClass("safari-1");
    }
    else if(navigator.userAgent.indexOf("Firefox") != -1 )
    {
        $("html").addClass("firefox-1");


    }
    else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
    {
        $("html").addClass("IE-1");
    }
    else
    {
        $("html").addClass("unknown");

    }
}


/*blazy*/
/**
 *
 * The MIT License (MIT)
 *
 *  Copyright (c) 2017
 *  Andreas Hafner <a.hafner@teufels.com>,
 *  Dominik Hilser <d.hilser@teufels.com>,
 *  Georg Kathan <g.kathan@teufels.com>,
 *  Hendrik Krüger <h.krueger@teufels.com>,
 *  Josymar Escalona Rodriguez <j.rodriguez@teufels.com>,
 *  Perrin Ennen <p.ennen@teufels.com>,
 *  Timo Bittner <t.bittner@teufels.com>,
 *  teufels GmbH <digital@teufels.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 */

/*
 * function: addEvent
 *
 *  @param: obj         (Object)(Required)
 *
 *  -   The object which you wish to attach your event to.
 *
 *  @param: type        (String)(Required)
 *
 *  -   The type of event you wish to establish.
 *
 *  @param: callback    (Function)(Required)
 *
 *  -   The method you wish to be called by your event listener.
 *
 *  @param: eventReturn (Boolean)(Optional)
 *
 *  -   Whether you want the event object returned to your callback method.
 */
var addEvent = function(obj, type, callback, eventReturn)
{
    if(obj == null || typeof obj === 'undefined')
        return;

    if(obj.addEventListener)
        obj.addEventListener(type, callback, eventReturn ? true : false);
    else if(obj.attachEvent)
        obj.attachEvent("on" + type, callback);
    else
        obj["on" + type] = callback;
};

/**
 * see http://nimius.net/de/blog/artikel/javascript-debounce-throttle/
 * debouncing, executes the function if there was no new event in $wait milliseconds
 * @param func
 * @param wait
 * @param scope
 * @returns {Function}
 */
var debounce = function(func, wait, scope) {
    var timeout;
    return function() {
        var context = scope || this, args = arguments;
        var later = function() {
            timeout = null;
            func.apply(context, args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
};

var hasClass = function(ele, className) {
    return (' ' + ele.className + ' ').indexOf(' ' + className + ' ') !== -1;
};

var watch = function(evt)
{
    /*
     Older browser versions may return evt.srcElement
     Newer browser versions should return evt.currentTarget
     */
    // var dimensions = {
    //     height: (evt.srcElement || evt.currentTarget).innerHeight,
    //     width: (evt.srcElement || evt.currentTarget).innerWidth
    // };

    var aFocuhilaImg = document.getElementsByClassName('b-lazy');
    if (aFocuhilaImg.length > 0) {
        for(var i = 0; i < aFocuhilaImg.length; i++) {
            var parent = aFocuhilaImg[i].parentNode;
            /**
             * Add height from parent .focuhila element
             */
            if (hasClass(parent, 'focuhila')) {
                if (hive_cfg_typoscript_sStage == "prototype" || hive_cfg_typoscript_sStage == "development") {
                    console.info("Parent height: " + parent.clientHeight);
                }
                aFocuhilaImg[i].style.height = parent.clientHeight + "px";
            }
        }
    }


};

var hive_thm_blazy_addons__interval = setInterval(function () {
    if (typeof hive_cfg_typoscript__windowLoad == 'undefined') {
    } else {
        clearInterval(hive_thm_blazy_addons__interval);
        if (hive_cfg_typoscript_sStage == "prototype" || hive_cfg_typoscript_sStage == "development") {
            console.info('blazy addons initialize');
        }

        /**
         * Set height of images on resize and orientation change
         */
        addEvent(window, 'resize', debounce(watch,1000), true);
        addEvent(window, 'orientationchange', debounce(watch,1000), true);

    }
}, 250);