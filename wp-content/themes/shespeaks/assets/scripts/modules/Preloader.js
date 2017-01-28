/**
 * She Speaks in Code
 * Author: Galen Strasen
 * Date: 1.1.1980
 */

/**
 * Adds a preloader across the site
 * @class      Preloader (name)
 * @return     {Constructor} Preloader.init()
 */

var Preloader = function($) { // ----- static module

  var _init = function() {

    $(window).on("load", function(){
      setTimeout(function() {
        $('.js-sitewrap').animate({
          opacity: 1
        }, 300);
        $('#preloader').fadeOut(300, function() {
          Animated.init();
        });
      }, 300);
    });
  };

  return {
      init: _init
  };
}(jQuery);