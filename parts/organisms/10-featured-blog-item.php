<?php
/**
 * Featured Blog Item
 *
 * @package ARMIX
 */

?>

<?php if ( $blog_query->have_posts() ) : ?>
<div class="module-<?php echo esc_attr( $module_count ); ?> 10-featured-blog-item">
	<div class="10-featured-blog-item__inner global-inner">
		<?php 
		while ( $blog_query->have_posts() ) 
		{
			$blog_query->the_post();
			$featured = true;
			$class    = '10-featured-blog-item__item';
			require TD . '/parts/molecules/blog-item.php';
		}
		?>
	</div>
</div>
<?php endif; ?>

<hr>