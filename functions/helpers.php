<?php
/**
 * Helpers
 *
 * @package armix
 */

define( 'TD', get_template_directory() );
define( 'TDU', get_template_directory_uri() );

function armix_get_loop_IDs( $current_query, $ids = array() ) 
{
	if ( $current_query->have_posts() )
	{
		while ( $current_query->have_posts() )
		{
			$current_query->the_post();
			$ids[] = get_the_ID();
		}
	}
	return $ids;
}
