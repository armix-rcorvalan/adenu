<?php
/**
 * Featured Post Item
 *
 * @package ARMIX
 */

?>

<?php if ( $post_query->have_posts() ) : ?>
<div class="module-<?php echo esc_attr( $module_count ); ?> 14-featured-post-item">
	<div class="14-featured-post-item__inner global-inner">
		<?php 
		while ( $post_query->have_posts() ) 
		{
			$post_query->the_post();
			$featured = true;
			$class    = '14-featured-post-item__item';
			require TD . '/parts/molecules/post-item.php';
		}
		?>
	</div>
</div>
<?php endif; ?>

<hr>