/**
 * She Speaks in Code
 * Author: Galen Strasen
 * Date: 1.1.1980
 */

/**
 * @name Animated
 * @private
 * @param {object} jQuery
 * @returns {object} Animated.init
 * * @returns {object} Animated.ShowAnimated
*/
var Animated = function($) { // ----- static module

  var _init = function() {

    $('.animation, .animation-visible').each(function() {

      var $element = $(this);

      $element.waypoint(function() {
        var delay = 0;

        if ($element.attr('data-delay')) delay = parseInt($element.attr('data-delay'), 0);
        if (!$element.hasClass('animated')) {
          setTimeout(function() {
            $element.addClass('animated ' + $element.attr('data-animation'));
          }, delay);
        }

        delay = 0;

      },
      {
        offset: '80%'
      });

    });

    // console.log("animated init");
  };

  // Show All Animated Items
  var _showAnimated = function() {

      $('.animation, .animation-visible').each(function() {
          $(this).addClass('animated');
      });

  };

  // output/public
  return {
      init: _init,
      ShowAnimated: _showAnimated
  };
}(jQuery);

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

// TMBR Creative Agency
// Author: michael.ross
// Date: 6.27.2016


/**
 * @name Constants
 * @static
 * @param {object} jQuery
 * @returns {object} DIRECTION : UP,DOWN,LEFT,RIGHT
*/
var Constants = function($) {
    
    // output/public     
    return {
		//
		DIRECTION:{
			UP:'direction_up',
			DOWN:'direction_down',
			LEFT:'direction_left',
			RIGHT:'direction_right'
		}
    };
}(jQuery);
// TMBR Creative Agency
// Date: 6.27.2016

/**
 * Provides Lightbox Capabilities
 * @class      Lightbox (name)
 * @param      {element} <element> Pass in jQuery element for event target
 * @return     {Constructor}  Lightbox.init()
 */
var Lightbox = function(element) { // ----- static module

    var _init = function() {


        // team page
        $('.js-work-grid').magnificPopup({
            delegate: 'a.js-work-trigger',
            type: 'ajax',
            fixedContentPos: 'true',
            mainClass: 'gs-overlay mfp-fade work-pop',
            gallery: {
              enabled: true
            // },
            // callbacks: {
            //   buildControls: function() {
            //       this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
            //   }
            }
          });
    };

    // output/public
    return {
        init: _init
    };
}(jQuery);

/**
 * She Speaks in Code
 * Author: Galen Strasen
 * Date: 1.1.1980
 */

// Dependent Upon
// - jQuery
// - Util
// - Constants
// Module(s) (static)
// - Control
//
//

var MobileDetect = function($) { // ----- static module
    // private var(s)
    var ismobile = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));

    // private method(s)
    var _detect = function() {
       if(ismobile == true){
            $('body').addClass('mobile');
        } else {
            $('body').addClass('no-touch');
        }

    };

    // output/public
    return {
        detect: _detect
    };
}(jQuery);
/**
 * She Speaks in Code
 * Author: Galen Strasen
 * Date: 1.1.1980
 */
// Dependent Upon
// - jQuery
//
var NavtoSelectList = function(element) { // ----- static module

    var _init = function() {
      $('ul.js-selectdropdown').each(function() {
        var select = $(document.createElement('select')).insertBefore($(this)).addClass('mobile-select').wrap( "<div class='select-nav-wrap'></div>" );
        $('>li a', this).each(function() {
            var a = $(this).click(function() {
                if ($(this).attr('target')==='_blank') {
                    window.open(this.href);
                }
                else {
                    window.location.href = this.href;
                }
            }),
            option = $(document.createElement('option')).appendTo(select).val(this.href).html($(this).html()).click(function() {
                a.click();
            });
        });
      });
    };
    // output/public
    return {
        init: _init
    };
}(jQuery);
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
        }, 300).addClass('ready-2-roll');

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
/**
 * She Speaks in Code
 * Author: Galen Strasen
 * Date: 8.24.2016
 */

/**
 * Enables TMBR Roadblock modal
 * @class      Roadblock (name)
 * @return     {Constructor} Roadblock.init()
 */
var Roadblock = function() { // ----- static module
    // private var
    var _init = function() {
        $(window).load(function() {
            var complete = jQuery.cookie('email-complete');
            var shown = jQuery.cookie('form-shown');
            var closed = jQuery.cookie('form-closed');
            var modalContent = $('#roadblock').length;

            function showCookieOverlay() {
                $.magnificPopup.open({
                    items: {
                        src: '#roadblock',
                        type: 'inline',
                    },
                    modal: true,
                    removalDelay: 300,
                    mainClass: 'tmbr-overlay -roadblock',
                    fixedContentPos: true,
                    alignTop: true,
                    closeOnBgClick: true,
                    preloader: false,
                    midClick: true,
                    closeBtnInside: false,
                    showCloseBtn: false
                });
                $('.js-alt-close').on('click', function(e) {
                    e.preventDefault();
                    $.magnificPopup.close();
                });
            }
            // IF USER HAS NOT COMPLETED NEWSLETTER FORM
            if (!complete) {
                // SET PAGE COUNT IF NET SET
                if (!shown) {
                    jQuery.cookie('form-shown', '1', {
                        path: '/'
                    });
                } else {
                    var value = parseFloat(shown);
                    value = value + 1;
                    jQuery.cookie('form-shown', value, {
                        path: '/'
                    });
                }
                // IF USER HAS VIEWED 3 PAGES & NOT CLOSED MODAL IN 7 DAYS
                if (shown === '3' && !closed) {
                    //if ( shown === '1' && !closed ) {
                    showCookieOverlay();
                }
                // LISTEN IF THEY CLOSE MODAL & SET THE COOKIE
                $(document).on('click', '.js-close', function(e) {
                    e.preventDefault();
                    $.magnificPopup.close();
                    jQuery.cookie('form-closed', 'true', {
                        expires: 7,
                        path: '/'
                    });
                });
            }
        }); //window.load
    };
    // output/public
    return {
        init: _init
    };
}(jQuery);
/**
 * She Speaks in Code
 * Author: Galen Strasen
 * Date: 7.19.12016
 */

// Dependent Upon
// - jQuery
// - slick slider
// Module(s) (static)
// - slick slider
//
var SlickSlider = function(element) { // ----- static module

    var _init = function() {
        // $('.js-slider').slick({
        //     dots: true,
        //     arrows: false
        // });
        // $('.js-lazy').slick({
        //     lazyLoad: 'ondemand',
        //     dots: true,
        //     arrows: false
        // });
        $('.js-hero-slider').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 3000,
            arrows: false,
            fade: true,
            dots: true
        });
        // $('.js-slider-auto').slick({
        //     autoplay: true,
        //     autoplaySpeed: 5000,
        //     dots: true,
        //     arrows: false
        // });
        // $('.js-adaptive-slider').slick({
        //     autoplay: true,
        //     autoplaySpeed: 5000,
        //     dots: true,
        //     arrows: false,
        //     adaptiveHeight: true
        // });
    };
    // output/public
    return {
        init: _init
    };
}(jQuery);
/**
 * She Speaks in Code
 * Author: Galen Strasen
 * Date: 1.1.1980
 */

/**
 * Set up smooth scroll on anchor click
 *
 * @class      	SmoothScroll (name)
 * @return  	{constructor} init
 */

var SmoothScroll = function($) { // ----- static module

    var _init = function() {
    	$('a[href*="#"]:not([href="#"]).scroll-to').on('click','', function( e ) {
  			e.preventDefault();

  			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
  				var target = $(this.hash);
  				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

  				if (target.length) {
  					$('html,body').animate(
  						{ scrollTop: target.offset().top },
  						{ duration: 600, easing:'easeOutCubic'}
  					);
  					return false;
  				}

  			}

  		});
    };

    return {
        init: _init
    };
}(jQuery);
/**
 * She Speaks in Code
 * Author: Galen Strasen
 * Date: 10.31.2016
 */

/**

 */
var StickyNav = function(element) { // ----- static module

  var _init = function() {
    var waypoints = $('.js-nav-guy').waypoint(function(direction) {
      var totalPrice = $('.js-nav-guy');
      totalPrice.toggleClass('-fix');
    });
  };

  // output/public
  return {
      init: _init
  };

}(jQuery);

/**
 * She Speaks in Code
 * Author: Galen Strasen
 * Date: 1.1.1980
 */

/**
 * Creates Tabs on selected items
 *
 * @class      Tabs (name)
 * @return     {Constructor} init(options)
 * @param      {string} [$tabContainer] - jQuery selector container
 */

var Tabs = function($) {

    var $tabContainer,
        $tabs,
        $tabsContent,
        $firstTabs,
        windowSize,
        mobileWidth,
        isMobile;

    var _init = function(options) {
        $tabContainer = options.container;
        $tabs = $tabContainer.find('[data-tab]');
        $tabsContent = $tabContainer.find('[data-tab-content]');
        $firstTabs = $tabContainer.find('[data-tab-content="1"]');

        windowSize = $(window).outerWidth();
        mobileWidth = 768;
        isMobile = windowSize <= mobileWidth;

        if(isMobile){
            _toggleTabs($firstTabs);
        }

        $(window).on('resize', function(){
            windowSize = $(window).outerWidth();

            if(windowSize > mobileWidth && isMobile === true){
                isMobile = false;
                _toggleTabs($tabsContent);
            } else if(windowSize <= mobileWidth && isMobile === false){
                isMobile = true;
                _toggleTabs($firstTabs);
            }
        });

        $('#checkingtype').on('change', function(){
            if(options.mobileOnly === true && windowSize <= mobileWidth){
                var tab = $(event.target).find(':selected');
                _openTabContent(tab);
            }
        });
    };

    var _openTabContent = function(tab){
        var int = tab.data('tab');
        var selectedTabs = $tabContainer.find('[data-tab-content="'+int+'"]');

        _toggleTabs(selectedTabs);
    }

    var _toggleTabs = function(selectedTabs){
        $tabsContent.addClass('hidden');
        selectedTabs.removeClass('hidden');
    }

    // output/public
    return {
        init: _init
    };
}(jQuery);
// Credit goes to [Underscore.js](http://underscorejs.org/)

/**
 * Returns a function, that, when invoked, will only be triggered at most
 * once during a given window of time. Normally, the throttled function will
 * run as much as it can, without ever going more than once per wait
 * duration; but if you’d like to disable the execution on the leading edge,
 * pass {leading: false}. To disable execution on the trailing edge, ditto.
 */

// throttle's dependent upon _now
_now = Date.now || function() {
  return new Date().getTime();
};

_throttle = function(func, wait, options) {
  var context, args, result;
  var timeout = null;
  var previous = 0;
  if (!options) options = {};
  var later = function() {
    previous = options.leading === false ? 0 : _now();
    timeout = null;
    result = func.apply(context, args);
    if (!timeout) context = args = null;
  };
  return function() {
    var now = _now();
    if (!previous && options.leading === false) previous = now;
    var remaining = wait - (now - previous);
    context = this;
    args = arguments;
    if (remaining <= 0 || remaining > wait) {
      if (timeout) {
        clearTimeout(timeout);
        timeout = null;
      }
      previous = now;
      result = func.apply(context, args);
      if (!timeout) context = args = null;
    } else if (!timeout && options.trailing !== false) {
      timeout = setTimeout(later, remaining);
    }
    return result;
  };
};

/**
 * She Speaks in Code
 * Author: Galen Strasen
 * Date: 1.1.1980
 */

/**
 * Utility functions commonly used in Javascript
  * @class      Util (name)
 */
var Util = function() {

	/**
	 * Enables debug mode
	 *
	 * @type       {boolean} Enables debug mode
	 */
	var __debugMode = false;

	// todo : deine a local storage variable that can turn debugging on/off
	// getter(s)/setter(s) method(s)
	var _debugMode = function() {
		if (!arguments.length) return __debugMode;
		else __debugMode = arguments[0];
	};

	// todo : add a force object for quick logs
	var _log = function() {
		if(!__debugMode) return;
		if (typeof console === "undefined" || typeof console.log === "undefined") return; // no log available

		for (var i = 0; i < arguments.length; i++) {
			var iteredArgument = arguments[i];
			// console.log(iteredArgument);
		}
	};

	/**
	 * Loads a json.
	 *
	 * @param      {string}    JSONLocation  The json location
	 * @param      {Function}  onComplete    On complete
	 */
	var _loadJSON = function(JSONLocation, onComplete) {
		$.ajax({
			url: JSONLocation,
			dataType: 'text',
			success: function(string) {
				data = $.parseJSON(string);
				if (onComplete && typeof(onComplete) === "function") onComplete(data);
			}
		});
	};

	/**
	 * Loads a body html.
	 *
	 * @param      {string}    html_location  The html location
	 * @param      {Function}  onComplete     On complete
	 */
	var _loadBodyHTML = function(html_location, onComplete) {
		$.ajax({
			url: html_location,
			context: document.body,
			success: function(data) {
				if (onComplete && typeof(onComplete) === "function") onComplete(data);
			}
		});
	};

	/**
	 * { function_description }
	 *
	 * @param      {string}  string     The string
	 * @param      {string}  delimiter  The delimiter
	 * @return     {string}  { Returns the string split on the delimiter }
	 */
	var _split = function(string, delimiter) {
		if (typeof string !== 'string') return string;
		// string = string.replace(/\s/g, ''); // remove white space
		string = string.replace(/^\s+|\s+$/g, ""); // remove white space up to first charactor and after last charactor
		// when we drop support for ie 8
		// string = string.trim(); // remove white space up to first charactor and after last charactor
		return string.split(delimiter); // create array
	};

	/**
	 * Returns a random string value
	 *
	 * @return     {string}  Returns a random string value
	 */
	var _uid = function() {
		return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
			var r = Math.random() * 16 | 0,
				v = c == 'x' ? r : (r & 0x3 | 0x8);
			return v.toString(16);
		});
	};

	/**
	 * Removes blank strings.
	 *
	 * @param      {Array}
	 * @return     {Array} Removes blank values in an array
	 */
	var _removeBlankStrings = function(array) {
		var newArray = [];
		for (var i = 0; i < array.length; i++) {
			var iteredItem = array[i];
			if (iteredItem !== '') newArray.push(iteredItem);
		}
		return newArray;
	};

	/**
	 * Suffles an Array
	 *
	 * @param      {Array}
	 * @return     {Array} Shuffled array.
	 */
	var _shuffleArray = function(o) {
		for (var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
		return o;
	};

	/**
	 * Removes array duplicates.
	 *
	 * @param      {Array}
	 * @return     {Array}
	 */
	var _removeArrayDuplicates = function(array) {
		var a = array.concat();
		for (var i = 0; i < a.length; ++i) {
			for (var j = i + 1; j < a.length; ++j) {
				if (a[i] === a[j]) a.splice(j--, 1);
			}
		}
		return a;
	};

	/**
	 * Merges two arrays
	 *
	 * @param      {Array}
	 * @param      {Array}
	 * @return     {Array}
	 */
	var _mergeArrays = function() {
		var i, ii, newArray = [],
			arrayAmount, iteredArray, iteredArrayContentsAmount;
		arrayAmount = arguments.length;
		for (i = 0; i < arrayAmount; i++) {
			iteredArray = arguments[i];
			iteredArrayContentsAmount = iteredArray.length;
			for (ii = 0; ii < iteredArrayContentsAmount; ii++) {
				newArray.push(iteredArray[ii]);
			}
		}
		return newArray;
	};

	/**
	 * Returns a random item from array
	 *
	 * @param      {Array}
	 * @return     {Array}
	 */
	var _randomItemFromArray = function(array) {
		return array[Math.floor(Math.random()*array.length)];
	};

	/**
	 * Debounce
	 *
	 * @param      {Function}  Function to delay
	 * @param      {Number} Miliseconds to delay the function
	 * @return     {Function}
	 */
	var _debounce = function(fn, delay) {
		var timer = null;
		return function() {
			var context = this,
				args = arguments;
			clearTimeout(timer);
			timer = setTimeout(function() {
				fn.apply(context, args);
			}, delay);
		};
	};

	/**
	 * Throttle
	 *
	 * @param      {Function}
	 * @param      {number}    threshhold  The threshhold
	 * @param      {String}    scope       The scope
	 * @return     {Function}
	 */
	var _throttle = function(fn, threshhold, scope) {
		threshhold || (threshhold = 250);
		var last,
			deferTimer;
		return function() {
			var context = scope || this;

			var now = +new Date,
				args = arguments;
			if (last && now < last + threshhold) {
				// hold on to it
				clearTimeout(deferTimer);
				deferTimer = setTimeout(function() {
					last = now;
					fn.apply(context, args);
				}, threshhold);
			} else {
				last = now;
				fn.apply(context, args);
			}
		};
	};

	var _booleanHelper = function(string) {
		if (typeof string === 'boolean') return string;
		if (typeof string === 'undefined') return false;
		switch (string.toLowerCase()) {
			case "true":
			case "yes":
			case "1":
				return true;
			case "false":
			case "no":
			case "0":
			case null:
				return false;
			default:
				return Boolean(string);
		}
	};

	/**
	 * Gets the URL query parameters.
	 *
	 * @param      {String}
	 * @return     {Object}  The query parameters in key / pair.
	 */
	var _getQueryParameters = function(_s) {
		var query = _s;
		var parameters = query.split("&");
		var result = {};
		if (!parameters.length) return false;
		for (var i = 0; i < parameters.length; i++) {
			var iteredParam = parameters[i];
			var item = iteredParam.split("=");
			result[item[0]] = decodeURIComponent(item[1]);
		}
		return result;
	};

	var _deepCompare = function() {
		var i, l, leftChain, rightChain;

		var _compare2Objects = function(x, y) {
			var p;
			// remember that NaN === NaN returns false
			// and isNaN(undefined) returns true
			if (isNaN(x) && isNaN(y) && typeof x === 'number' && typeof y === 'number') return true;
			// Compare primitives and functions.
			// Check if both arguments link to the same object.
			// Especially useful on step when comparing prototypes
			if (x === y) return true;
			// Works in case when functions are created in constructor.
			// Comparing dates is a common scenario. Another built-ins?
			// We can even handle functions passed across iframes
			if ((typeof x === 'function' && typeof y === 'function') ||
				(x instanceof Date && y instanceof Date) ||
				(x instanceof RegExp && y instanceof RegExp) ||
				(x instanceof String && y instanceof String) ||
				(x instanceof Number && y instanceof Number)) {
				return x.toString() === y.toString();
			}
			// At last checking prototypes as good a we can
			if (!(x instanceof Object && y instanceof Object)) return false;
			if (x.isPrototypeOf(y) || y.isPrototypeOf(x)) return false;
			if (x.constructor !== y.constructor) return false;
			if (x.prototype !== y.prototype) return false;
			// Check for infinitive linking loops
			if (leftChain.indexOf(x) > -1 || rightChain.indexOf(y) > -1) return false;
			// Quick checking of one object beeing a subset of another.
			// todo: cache the structure of arguments[0] for performance
			for (p in y) {
				if (y.hasOwnProperty(p) !== x.hasOwnProperty(p)) return false;
				else if (typeof y[p] !== typeof x[p]) return false;
			}

			for (p in x) {
				if (y.hasOwnProperty(p) !== x.hasOwnProperty(p)) return false;
				else if (typeof y[p] !== typeof x[p]) return false;
				switch (typeof(x[p])) {
					case 'object':
					case 'function':
						leftChain.push(x);
						rightChain.push(y);
						if (!_compare2Objects(x[p], y[p])) return false;
						leftChain.pop();
						rightChain.pop();
						break;
					default:
						if (x[p] !== y[p]) return false;
						break;
				}
			}
			return true;
		};

		if (arguments.length < 1) {
			return true; //Die silently? Don't know how to handle such case, please help...
			// throw "Need two or more arguments to compare";
		}
		for (i = 1, l = arguments.length; i < l; i++) {
			leftChain = []; // todo: this can be cached
			rightChain = [];
			if (!_compare2Objects(arguments[0], arguments[i])) {
				return false;
			}
		}
		return true;
	};


	// output/public
	return {
		debugMode: _debugMode,
		log: _log,
		loadJSON: _loadJSON,
		loadBodyHTML: _loadBodyHTML,
		// string
		String: {
			split: _split,
			uid: _uid
		},
		// array todo:organize and name accordingly on the private level
		Array: {
			removeBlankStrings: _removeBlankStrings,
			shuffle: _shuffleArray,
			removeDuplicates: _removeArrayDuplicates,
			merge: _mergeArrays,
			randomItemFromArray:_randomItemFromArray
		},
		//
		debounce: _debounce,
		throttle: _throttle,
		booleanHelper: _booleanHelper,
		getQueryParameters: _getQueryParameters,
		deepCompare:_deepCompare
	};
}();

// function ssc_init() {
//     if (!document.body) return;
//     var e = document.body;
//     var t = document.documentElement;
//     var n = window.innerHeight;
//     var r = e.scrollHeight;

//     ssc_root = document.compatMode.indexOf("CSS") >= 0 ? t : e;
//     ssc_activeElement = e;
//     ssc_initdone = true;

//     if (top != self)
//         ssc_frame = true;

//     else if (r > n && (e.offsetHeight <= n || t.offsetHeight <= n)) {
//         ssc_root.style.height = "auto";
//         if (ssc_root.offsetHeight <= n) {
//             var i = document.createElement("div");
//             i.style.clear = "both";
//             e.appendChild(i)
//         }
//     }

//     if (!ssc_fixedback) {
//         e.style.backgroundAttachment = "scroll";
//         t.style.backgroundAttachment = "scroll"
//     }

//     if (ssc_keyboardsupport)
//         ssc_addEvent("keydown", ssc_keydown);
// }

// function ssc_scrollArray(e, t, n, r) {
//     r || (r = 1e3);
//     ssc_directionCheck(t, n);
//     ssc_que.push({
//         x: t,
//         y: n,
//         lastX: t < 0 ? .99 : -.99,
//         lastY: n < 0 ? .99 : -.99,
//         start: +(new Date)
//     });

//     if (ssc_pending)
//         return;

//     var i = function () {
//         var s = +(new Date);
//         var o = 0;
//         var u = 0;
//         for (var a = 0; a < ssc_que.length; a++) {
//             var f = ssc_que[a];
//             var l = s - f.start;
//             var c = l >= ssc_animtime;
//             var h = c ? 1 : l / ssc_animtime;
//             if (ssc_pulseAlgorithm) {
//                 h = ssc_pulse(h)
//             }
//             var p = f.x * h - f.lastX >> 0;
//             var d = f.y * h - f.lastY >> 0;
//             o += p;
//             u += d;
//             f.lastX += p;
//             f.lastY += d;
//             if (c) {
//                 ssc_que.splice(a, 1);
//                 a--
//             }
//         }
//         if (t) {
//             var v = e.scrollLeft;
//             e.scrollLeft += o;
//             if (o && e.scrollLeft === v) {
//                 t = 0
//             }
//         }
//         if (n) {
//             var m = e.scrollTop;
//             e.scrollTop += u;
//             if (u && e.scrollTop === m) {
//                 n = 0
//             }
//         }
//         if (!t && !n)
//             ssc_que = [];

//         if (ssc_que.length)
//             setTimeout(i, r / ssc_framerate + 1);
//         else
//             ssc_pending = false;
//     };
//     setTimeout(i, 0);
//     ssc_pending = true
// }

// function ssc_wheel(e) {
//     if (!ssc_initdone) {
//         ssc_init()
//     }
//     var t = e.target;
//     var n = ssc_overflowingAncestor(t);
//     if (!n || e.defaultPrevented || ssc_isNodeName(ssc_activeElement, "embed") || ssc_isNodeName(t, "embed") && /\.pdf/i.test(t.src)) {
//         return true
//     }
//     var r = e.wheelDeltaX || 0;
//     var i = e.wheelDeltaY || 0;
//     if (!r && !i)
//         i = e.wheelDelta || 0;

//     if (Math.abs(r) > 1.2)
//         r *= ssc_stepsize / 120;

//     if (Math.abs(i) > 1.2)
//         i *= ssc_stepsize / 120;

//     ssc_scrollArray(n, -r, -i);
//     e.preventDefault()
// }

// function ssc_keydown(e) {
//     var t = e.target;
//     var n = e.ctrlKey || e.altKey || e.metaKey;

//     if (/input|textarea|embed/i.test(t.nodeName) || t.isContentEditable || e.defaultPrevented || n)
//         return true;

//     if (ssc_isNodeName(t, "button") && e.keyCode === ssc_key.spacebar)
//         return true;

//     var r, i = 0,
//         s = 0;
//     var o = ssc_overflowingAncestor(ssc_activeElement);
//     var u = o.clientHeight;

//     if (o == document.body)
//         u = window.innerHeight;

//     switch (e.keyCode) {
//         case ssc_key.up:
//             s = -ssc_arrowscroll;
//             break;
//         case ssc_key.down:
//             s = ssc_arrowscroll;
//             break;
//         case ssc_key.spacebar:
//             r = e.shiftKey ? 1 : -1;
//             s = -r * u * .9;
//             break;
//         case ssc_key.pageup:
//             s = -u * .9;
//             break;
//         case ssc_key.pagedown:
//             s = u * .9;
//             break;
//         case ssc_key.home:
//             s = -o.scrollTop;
//             break;
//         case ssc_key.end:
//             var a = o.scrollHeight - o.scrollTop - u;
//             s = a > 0 ? a + 10 : 0;
//             break;
//         case ssc_key.left:
//             i = -ssc_arrowscroll;
//             break;
//         case ssc_key.right:
//             i = ssc_arrowscroll;
//             break;
//         default:
//             return true
//     }
//     ssc_scrollArray(o, i, s);
//     e.preventDefault()
// }

// function ssc_mousedown(e) {
//     ssc_activeElement = e.target
// }

// function ssc_setCache(e, t) {
//     for (var n = e.length; n--;) ssc_cache[ssc_uniqueID(e[n])] = t;
//     return t
// }

// function ssc_overflowingAncestor(e) {
//     var t = [];
//     var n = ssc_root.scrollHeight;
//     do {
//         var r = ssc_cache[ssc_uniqueID(e)];
//         if (r) {
//             return ssc_setCache(t, r)
//         }
//         t.push(e);
//         if (n === e.scrollHeight) {
//             if (!ssc_frame || ssc_root.clientHeight + 10 < n) {
//                 return ssc_setCache(t, document.body)
//             }
//         } else if (e.clientHeight + 10 < e.scrollHeight) {
//             overflow = getComputedStyle(e, "").getPropertyValue("overflow");
//             if (overflow === "scroll" || overflow === "auto") {
//                 return ssc_setCache(t, e)
//             }
//         }
//     }
//     while (e = e.parentNode)
// }

// function ssc_addEvent(e, t, n) {
//     window.addEventListener(e, t, n || false)
// }

// function ssc_removeEvent(e, t, n) {
//     window.removeEventListener(e, t, n || false)
// }

// function ssc_isNodeName(e, t) {
//     return e.nodeName.toLowerCase() === t.toLowerCase()
// }

// function ssc_directionCheck(e, t) {
//     e = e > 0 ? 1 : -1;
//     t = t > 0 ? 1 : -1;
//     if (ssc_direction.x !== e || ssc_direction.y !== t) {
//         ssc_direction.x = e;
//         ssc_direction.y = t;
//         ssc_que = []
//     }
// }

// function ssc_pulse_(e) {
//     var t, n, r;
//     e = e * ssc_pulseScale;
//     if (e < 1) {
//         t = e - (1 - Math.exp(-e))
//     } else {
//         n = Math.exp(-1);
//         e -= 1;
//         r = 1 - Math.exp(-e);
//         t = n + r * (1 - n)
//     }
//     return t * ssc_pulseNormalize
// }

// function ssc_pulse(e) {
//     if (e >= 1) return 1;
//     if (e <= 0) return 0;
//     if (ssc_pulseNormalize == 1) {
//         ssc_pulseNormalize /= ssc_pulse_(1)
//     }
//     return ssc_pulse_(e)
// }

// var ssc_framerate = 150;
// var ssc_animtime = 500;
// var ssc_stepsize = 150;
// var ssc_pulseAlgorithm = true;
// var ssc_pulseScale = 6;
// var ssc_pulseNormalize = 1;
// var ssc_keyboardsupport = true;
// var ssc_arrowscroll = 50;
// var ssc_frame = false;
// var ssc_direction = {
//     x: 0,
//     y: 0
// };
// var ssc_initdone = false;
// var ssc_fixedback = true;
// var ssc_root = document.documentElement;
// var ssc_activeElement;
// var ssc_key = {
//     left: 37,
//     up: 38,
//     right: 39,
//     down: 40,
//     spacebar: 32,
//     pageup: 33,
//     pagedown: 34,
//     end: 35,
//     home: 36
// };
// var ssc_que = [];
// var ssc_pending = false;
// var ssc_cache = {};

// setInterval(function () {
//     ssc_cache = {}
// }, 10 * 1e3);

// var ssc_uniqueID = function () {
//     var e = 0;
//     return function (t) {
//         return t.ssc_uniqueID || (t.ssc_uniqueID = e++)
//     }
// }();

// var ischrome = /chrome/.test(navigator.userAgent.toLowerCase());
// if (ischrome) {
//     ssc_addEvent("mousedown", ssc_mousedown);
//     ssc_addEvent("mousewheel", ssc_wheel);
//     ssc_addEvent("load", ssc_init)
// }

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
        CheckHeight.init();
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