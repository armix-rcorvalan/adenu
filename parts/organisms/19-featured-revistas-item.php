<?php
/**
 * Featured Post Item
 *
 * @package ARMIX
 */

?>

<?php if ( $revistas_query->have_posts() ) : ?>
<div class="module-<?php echo esc_attr( $module_count ); ?> 19-featured-revistas-item">
	<div class="19-featured-revistas-item__inner global-inner">
		<?php 
		while ( $revistas_query->have_posts() ) 
		{
			$revistas_query->the_post();
			$featured = true;
			$class    = '19-featured-revistas-item__item';
			require TD . '/parts/molecules/post-item.php';
		}
		?>
	</div>
</div>
<?php endif; ?>

<hr>