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

var OnScroll = function($) { // ----- static module

    var throttleTimeOut = 50;

    var _init = function() {

      $(window).on('scroll', _throttle(function(){

        var body = $('body.home');
        var  scrollTop = $(window).scrollTop();
        var screensize = $('.js-doc-nav-wrapper').height() - 50;
        var distance = (screensize - scrollTop);

        if ( distance < 0 ||   $(window).scrollTop() > 0 ) {
            body.addClass('scrollah');
        } else {
            body.removeClass('scrollah');
        }

      }, throttleTimeOut));


      $(window).on('resize', _throttle(function(){

      }, throttleTimeOut));

    };


    // output/public
    return {
        init: _init
    };
}(jQuery);
