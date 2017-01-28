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
        $('.js-team-list').magnificPopup({
            delegate: 'a.js-team-trigger',
            type: 'ajax',
            fixedContentPos: 'true',
            mainClass: 'osm-overlay mfp-fade team-modal',
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
