<?php

function getJSONFilePath()
{
	$upload_dir = wp_upload_dir();
	return trailingslashit( $upload_dir['basedir'] ) . 'campaign-map.json';
}

// Pull JSON from File
function getMapPointsFromFile()
{
	return file_get_contents( getJSONFilePath() );
}

// Store JSON to File
function storeMapPointsToFile( $json )
{
	return file_put_contents( getJSONFilePath(), $json );
}

// Convert POSTS to JSON
function gatherPostsToJSON() {
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'terms' => array(
					CAT_FRIENDS,
					CAT_ACTIVISTS,
					CAT_BOOKS,
				),
				'field' => 'id'
			)
		),
	);
	$posts = get_posts( $args );
	$points = array();
	foreach( $posts as $post )
	{
		$points[] = new mapPoint( $post );
	}
	return json_encode( $points );
}



class mapPoint {
	public function __construct( $post )
	{
		$cats = wp_get_post_categories( $post->ID );
		if ( in_array( CAT_FRIENDS, $cats ) )
		{
			$this->form_type = 'friends';
		}
		else if ( in_array( CAT_ACTIVISTS, $cats ) )
		{
			$this->form_type = 'activists';
		}
		else if ( in_array( CAT_BOOKS, $cats ) )
		{
			$this->form_type = 'books';
		}
		else
		{
			$this->form_type = false;
		}


		$lat = get_post_meta( $post->ID, 'form_latitude', true );
		$lng = get_post_meta( $post->ID, 'form_longitude', true );

		// If it's an organization, use its name and not the title of the post
		$org = get_post_meta( $post->ID, 'champion_org_person', true );
		$title = ( strtolower( $org ) == 'organization' )
			? get_post_meta( $post->ID, 'organization_name', true )
			: get_the_title( $post );
		$website = ( strtolower( $org ) == 'organization' )
			? get_post_meta( $post->ID, 'organization_website', true )
			: false;


		$city = get_post_meta( $post->ID, 'form_city', true );
		$country = get_post_meta( $post->ID, 'form_country', true );
		$link = ( $this->form_type == 'books' )
			? get_permalink( $post->ID )
			: false;


		$this->type = 'Feature';
		$this->geometry = array(
			'coordinates' => array(
				$lat,
				$lng
			),
			'type' => 'Point'
		);
		$this->properties = array(
			'title' => $title,
			'city' => $city,
			'country' => $country,
			'url' => $link,
			'website' => $website,
			'friends' => ( $this->form_type == 'friends' ),
			'activists' => ( $this->form_type == 'activists' ),
			'books' => ( $this->form_type == 'books' ),
			'icon' => array(
		        'iconUrl' => '/wp-content/themes/SpeakOut/assets/img/map-marker.png',
		        'iconSize' => array(10,10),
		        'iconAnchor' => array(5,5),
		        'popupAnchor' => array(0, -25),
		        'className' => 'dot'
			)
		);
	}
}


/*
    {
      "type": "Feature",
      "geometry": {
        "coordinates": [-74.435720443726, 39.353812390495],
        "type": "Point"
      },
      "properties": {
        "title": "Bill Murray - Campaign Friend",
        "city" : "Los Angeles",
        "country" : "United States",
        "pledgers": true,
        "supporters": false,
        "books": false,
        "icon" : {
	        "iconUrl": "/wp-content/themes/SpeakOut/assets/img/map-marker.png",
	        "iconSize": [10,10],
	        "iconAnchor": [5,5],
	        "popupAnchor": [0, -25],
	        "className": "dot"
  			}
  		}
    },
*/