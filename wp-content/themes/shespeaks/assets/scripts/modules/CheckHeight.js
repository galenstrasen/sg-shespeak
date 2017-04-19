/**
 * She Speaks in Code
 * Author: Galen Strasen
 * Date: 1.1.1980
 */

/**
 * Throttle
 *
 * @class      Throttle (name)
 * @param      {Function}  $
 * @return     {Constructor} init
 */

var CheckHeight = function($) { // ----- static module


  var _init = function() {

    $(window).on('resize', function() {

      var body = $('body'),
          wrapper = $('.js-check__height'),
          content = $('.js-content'),
          wrapperHeight = wrapper.outerHeight(),
          contentHeight = content.outerHeight(),
          divs = $('.set__dimensions');

      if(contentHeight > wrapperHeight) {
        if(!body.hasClass('fix-height')) {
          body.addClass('fix-height');
          divs.height(contentHeight + 'px');
        }
      }
      else {
        if(body.hasClass('fix-height')) {
          body.removeClass('fix-height');
          divs.height('');
        }
      }
    }).resize();

  };

  return {
      init: _init
  };

}(jQuery);
