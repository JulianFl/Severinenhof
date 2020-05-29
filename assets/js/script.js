
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