<?php
//if ($form['id'] == '1' || '2' || '8'){}
// gforms hook for iSupport
add_action("gform_after_submission_1", "pre_submission_handler_form1", 10, 2);
function pre_submission_handler_form1($entry, $form){
	
	
	
    // pass the entries relating to the address parts from form
    $query_string = $entry['2.1'] . "+" . $entry['2.3'] . "+" . $entry['2.4'] . "+" . $entry['2.5'] . "+" . $entry['2.6'];
    $coords = getLatLong($query_string);
	
    //update_post_meta($entry['post_id'], 'map', array($coords['latitude'] +','+ $coords['longitude']));
    update_post_meta($entry['post_id'], 'form_longitude', $coords['longitude']);
    update_post_meta($entry['post_id'], 'form_latitude', $coords['latitude']);
	
	
	
}

add_action("gform_after_submission_2", "pre_submission_handler_form2", 10, 2);
function pre_submission_handler_form2($entry, $form){
	
	
	
    // pass the entries relating to the address parts from form
    $query_string = $entry['2.1'] . "+" . $entry['2.3'] . "+" . $entry['2.4'] . "+" . $entry['2.5'] . "+" . $entry['2.6'];
    $coords = getLatLong($query_string);
	
    //update_post_meta($entry['post_id'], 'map', array($coords['latitude'] +','+ $coords['longitude']));
    update_post_meta($entry['post_id'], 'form_longitude', $coords['longitude']);
    update_post_meta($entry['post_id'], 'form_latitude', $coords['latitude']);
	
	
	
}

add_action("gform_after_submission_8", "pre_submission_handler_form3", 10, 2);
function pre_submission_handler_form3($entry, $form){
	
	
	
    // pass the entries relating to the address parts from form
    $query_string = $entry['2.1'] . "+" . $entry['2.3'] . "+" . $entry['2.4'] . "+" . $entry['2.5'] . "+" . $entry['2.6'];
    $coords = getLatLong($query_string);
	
    //update_post_meta($entry['post_id'], 'map', array($coords['latitude'] +','+ $coords['longitude']));
    update_post_meta($entry['post_id'], 'form_longitude', $coords['longitude']);
    update_post_meta($entry['post_id'], 'form_latitude', $coords['latitude']);
	
	
	
}



// function to take address and turn it into coordinates lat and lng
function getLatLong($code){

		
    $mapsApiKey = 'AIzaSyBvTsYYgthDiJYIIBH94VoGgXhS-Htz7PE';
    $query = "https://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($code)."&key=".$mapsApiKey;

    // This takes your full street address to create the lat/long
   	$response = wp_remote_get($query);
    $data = wp_remote_retrieve_body($response);

    // if data returned
    if($data){
        // convert into readable format
        $data = json_decode($data);
        $long = $data->results[0]->geometry->location->lat;
        $lat = $data->results[0]->geometry->location->lng;
        return array('latitude'=>$lat,'longitude'=>$long);
    } else {
        return false;
    }
    }




?>