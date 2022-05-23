<?php
/**
 * Featured Events
 *
 * @package ARMIX
 */

$group = get_sub_field( '06_featured_events' );

$args = array(
	'post_type' => 'eventos',
	'posts_per_page' => 3,
	'post__in' => $group['events'],
);

$aux_query = new WP_Query( $args );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 06-featured-eventos" style="background: #ddffff;">
	<div class="06-featured-eventos__inner global-inner">
		<h2 class="06-featured-eventos__title"><?php echo esc_attr( $group['title'] ); ?></h2>

		<div class="06-featured-eventos__loop">
		<?php 

		if ( $aux_query->have_posts() ) 
		{
			while ( $aux_query->have_posts() ) 
			{
				$aux_query->the_post();
				require TD . '/parts/molecules/eventos-item.php';
			}
		}

		wp_reset_postdata();

		?>
		</div>

		<a href="<?php echo esc_url( get_post_type_archive_link( 'eventos' ) ); ?>" class="06-featured-eventos__view-all">Ver todos los eventos</a>
	</div>
</div>
