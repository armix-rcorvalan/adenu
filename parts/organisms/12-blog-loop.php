<?php
/**
 * Featured Blog Loop
 *
 * @package ARMIX
 */

?>

<?php if ( $blog_query->have_posts() ) : ?>
<div class="module-<?php echo esc_attr( $module_count ); ?> 12-blog-loop">
	<div class="12-blog-loop__inner global-inner">
		<?php 
		while ( $blog_query->have_posts() ) 
		{
			$blog_query->the_post();
			$class    = '12-blog-loop__item';
			require TD . '/parts/molecules/blog-item.php';
		}
		?>
	</div>
</div>
<?php endif; ?>

<hr>