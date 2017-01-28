/**
 * She Speaks in Code
 * Author: Galen Strasen
 * Date: 1.1.1980
 *
 * Doc - https://github.com/documentationjs/documentation/blob/master/docs/GETTING_STARTED.md
 */

/**
 * This function is called at Document.ready()
 * @name Control
 * @private
 * @param {object} jQuery
 * @returns {object} Control + methods
 * @example Control.init();
*/
var Control = function($) { // ----- static module


    // private method(s)
    var _init = function() {

        Preloader.init();
        OnScroll.init();
        SmoothScroll.init();
        Animated.init();
        StickyNav.init();
        //Slider.init(sliderOptions);
        SlickSlider.init();
        Lightbox.init();
    };

    // output/public
    return {
        init: _init
    };
}(jQuery);

/**
 * This function fires off Control.init();
*/
jQuery(document).ready(function() {
    Control.init();
});