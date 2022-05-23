<?php
/**
 * Decanaturas Pre Get Posts
 *
 * @package ARMIX
 */

function armix_decanaturas_pre_get_posts( $query ) 
{
    if ( ! is_admin() && is_post_type_archive( 'decanaturas' ) ) {

    	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    	$args = array(
    	    'post_type' => 'decanaturas',
    	    'paged' => $paged,
    	    'posts_per_page' => 3,
    	    'tax_query' => array(
    	    	'relation' => 'AND',
    	    ),
    	    'orderby' => 'relevance',
    	);

    	$get_data = filter_input_array( INPUT_GET );

    	if ( $get_data ) {

    		if ( isset( $get_data['s'] ) && ! empty( $get_data['s'] ) )
    		{
    			$args['s'] = $get_data['s'];
    		}

    		if ( isset( $get_data['carreras'] ) && ! empty( $get_data['carreras'] ) )
    		{
    			$args['tax_query'][] = array(
    	            'taxonomy' => 'carreras',
    	            'field'    => 'slug',
    	            'terms'    => array( $get_data['carreras'] ),
    	        );
    		}

    		if ( isset( $get_data['tipos-de-programa'] ) && ! empty( $get_data['tipos-de-programa'] ) )
    		{
    			$args['tax_query'][] = array(
    	            'taxonomy' => 'tipos-de-programa',
    	            'field'    => 'slug',
    	            'terms'    => array( $get_data['tipos-de-programa'] ),
    	        );
    		}

    		if ( isset( $get_data['modalidades'] ) && ! empty( $get_data['modalidades'] ) )
    		{
    			$args['tax_query'][] = array(
    	            'taxonomy' => 'modalidades',
    	            'field'    => 'slug',
    	            'terms'    => array( $get_data['modalidades'] ),
    	        );
    		}

    	}

    	$query->query_vars = $args;

    }
}
add_action( 'pre_get_posts', 'armix_decanaturas_pre_get_posts' );
