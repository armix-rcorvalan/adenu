<?php

function armix_acf_google_map_api( $api )
{	
	$api['key'] = 'AIzaSyCNPkglxhUyMP1F53fn3r5xCgczUUDnkZo';	
	return $api;
	
}

add_filter( 'acf/fields/google_map/api', 'armix_acf_google_map_api' );