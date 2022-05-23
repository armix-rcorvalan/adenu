<?php
/**
 * Last Posts
 *
 * @package ARMIX
 */

$group = get_sub_field( '05_last_posts' );

$args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
);

$aux_query = new WP_Query( $args );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 05-last-posts" style="background: #eee;">
	<div class="05-last-posts__inner global-inner">
		<h2 class="05-last-posts__title"><?php echo esc_attr( $group['title'] ); ?></h2>

		<div class="05-last-posts__loop">
		<?php 

		if ( $aux_query->have_posts() ) 
		{
			while ( $aux_query->have_posts() ) 
			{
				$aux_query->the_post();
				require TD . '/parts/molecules/post-item.php';
			}
		}

		wp_reset_postdata();

		?>
		</div>

		<a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>" class="05-last-posts__view-all">Ver todas las novedades</a>
	</div>
</div>
