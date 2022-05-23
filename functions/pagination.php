<?php
/**
 * Pagination
 *
 * @package ARMIX
 */

function armix_pagination( $pages = '', $range = 2 ) 
{

	$show_items = ( $range * 2 ) + 1;

	global $paged;

	if ( empty( $paged ) ) $paged = 1;

	if ( $pages == '' )
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if ( ! $pages )
		{
			$pages = 1;
		}
	}

	if ( 1 != $pages )
	{
		echo "<nav class='pagination'>";
			echo "<ul class='pagination__list'>";
		
			if ( $paged > 2 && $paged > $range + 1 && $show_items < $pages )
			{
				echo "<li class='pagination__item'>";
					echo "<a href='" . get_pagenum_link(1) . "' class='pagination__link'>&laquo;</a>";
				echo "</li>";
			}
			
			if ( $paged > 1 && $show_items < $pages )
			{
				echo "<li class='pagination__item'>";
					echo "<a href='" . get_pagenum_link( $paged - 1 ) . "' class='pagination__link'>&lsaquo;</a>";
				echo "</li>";
			}

			for ( $i = 1; $i <= $pages; $i++ )
			{
				if ( 1 != $pages && ( !( $i >= $paged + $range + 1 || $i <= $paged - $range -1 ) || $pages <= $show_items ) )
				{
					echo "<li class='pagination__item'>";
						echo ( $paged == $i ) ? "<span class='pagination__current'>" . $i ."</span>" : "<a href='" . get_pagenum_link( $i ) . "' class='pagination__link' >" . $i ."</a>";
					echo "</li>";
				}
			}

			if ( $paged < $pages && $show_items < $pages )
			{
				echo "<li class='pagination__item'>";
					echo "<a href='" . get_pagenum_link( $paged + 1 ) . "' class='pagination__link'>&rsaquo;</a>";
				echo "</li>";
			}

			if ( $paged < $pages - 1 &&  $paged + $range - 1 < $pages && $show_items < $pages )
			{
				echo "<li class='pagination__item'>";
					echo "<a href='" . get_pagenum_link( $pages ) . "' class='pagination__link'>&raquo;</a>";
				echo "</li>";
			}

			echo "</ul>";
		echo "</nav>";
	}

}
