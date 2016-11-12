

<!-- THIS IS THE POPUP MARKUP -->
<div class="hidden" id="map-popup-placeholder">
	<div class="map-popup">
		<h4 class="tmpl-title"></h4>
		<p><span class="tmpl-city"></span>, <span class="tmpl-country"></span></p>
		<a href="" class="tmpl-website" rel="no-follow">Website</a>
		<a href="" class="tmpl-permalink">Link</a>
	</div><!-- /map-popup -->
</div><!-- #map-popup-placeholder -->

<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
<script src="https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.js"></script>


<script>
	(function($){
    var templatePopupContent = $('#map-popup-placeholder'),
      geojson = <?php echo getMapPointsFromFile(); ?>;

		L.mapbox.accessToken = 'pk.eyJ1IjoiZ2FsZWZhY2VraWxsYWgiLCJhIjoiZHVRTlFoNCJ9.3y48kHTZ1qJe7TzQihZu9g';

		var map = L.mapbox
      .map(
        'campaign-map',
        'galefacekillah.mfagu8fr',
        {
          center: [35,5],
          zoom: 3,
          zoomControl: false
        }
      );


		new L.Control.Zoom({ position: 'bottomright' }).addTo(map);
		map.scrollWheelZoom.disable();

		
    function bindPopupContentToLayer( feature, layer )
    {
    	popupOptions = {
        	"keepInView" : true,
        	"autoPanPaddingTopLeft" : [20,150]
        	};
        	
      layer.bindPopup( generatePopupContent(  feature ), popupOptions );
      
    }

    function generatePopupContent( feature )
    {
      var elem = templatePopupContent;
      elem.find('.tmpl-title').text(feature.properties.title);
      elem.find('.tmpl-city').text(feature.properties.city);
      elem.find('.tmpl-country').text(feature.properties.country);

      if ( feature.properties.url )
      {
        elem.find('.tmpl-permalink')
          .attr('href', feature.properties.url)
          .text('Read More');
      }
      else
      {
        elem.find('.tmpl-permalink').remove();
      }

      if ( feature.properties.website )
      {
        elem.find('.tmpl-website')
          .attr('href', feature.properties.website)
          .text('(Visit Website)');
      }
      else
      {
        elem.find('.tmpl-website').remove();
      }
      return elem.html();
    }

		var booksLayer = L
      .geoJson(geojson, {
        onEachFeature : bindPopupContentToLayer,
        pointToLayer: function (feature, latlng) {
          return L.circleMarker(latlng, {
            radius: 4,
            fillColor: "#ff0000",
            color: "#9F0000",
            weight: 2,
            opacity: 1,
            fillOpacity: 1
          });
        },
        filter: function( feature, layer ) {
          return feature.properties.books;
        }
      })
      .addTo(map);


    var activistsLayer = L
      .geoJson(geojson, {
        onEachFeature : bindPopupContentToLayer,
        pointToLayer: function (feature, latlng) {
          return L.circleMarker(latlng, {
            radius: 4,
            fillColor: "#ff0000",
            color: "#9F0000",
            weight: 2,
            opacity: 1,
            fillOpacity: 1
          });
        },
        filter: function( feature, layer ) {
          return feature.properties.activists;
        }
      })
      .addTo(map);

    var friendsLayer = L
      .geoJson(geojson, {
        onEachFeature : bindPopupContentToLayer,
        pointToLayer: function (feature, latlng) {
          return L.circleMarker(latlng, {
            radius: 4,
            fillColor: "#ff0000",
            color: "#9F0000",
            weight: 2,
            opacity: 1,
            fillOpacity: 1
          });
        },
        filter: function( feature, layer ) {
          return feature.properties.friends;
        }
      })
      .addTo(map);


$('.menu-ui a').on('click', function(e) {
  e.preventDefault();

    // For each filter link, get the 'data-filter' attribute value.
    var filter = $(this).data('filter');
    $(this).addClass('active').siblings().removeClass('active');

    if ( filter == 'books' )
    {
        map.addLayer( booksLayer );
        map.removeLayer( activistsLayer );
        map.removeLayer( friendsLayer );
        $('#champions-count').addClass('count-view');
        $('#all-count').removeClass('count-view');
        $('#activists-count').removeClass('count-view');
        $('#friends-count').removeClass('count-view');
    }
    else if ( filter == 'activists' )
    {
        map.removeLayer( booksLayer );
        map.addLayer( activistsLayer );
        map.removeLayer( friendsLayer );
        $('#activists-count').addClass('count-view');
        $('#champions-count').removeClass('count-view');
        $('#all-count').removeClass('count-view');
        $('#friends-count').removeClass('count-view');
    }
    else if ( filter == 'friends' )
    {
        map.removeLayer( booksLayer );
        map.removeLayer( activistsLayer );
        map.addLayer( friendsLayer );
        $('#friends-count').addClass('count-view');
        $('#champions-count').removeClass('count-view');
        $('#all-count').removeClass('count-view');
        $('#activists-count').removeClass('count-view');
        
    }
    else
    {
        map.addLayer( booksLayer );
        map.addLayer( activistsLayer );
        map.addLayer( friendsLayer );
        $('#activists-count').removeClass('count-view');
        $('#champions-count').removeClass('count-view');
        $('#all-count').addClass('count-view');
        $('#friends-count').removeClass('count-view');
    }
});




})(jQuery);

</script>
