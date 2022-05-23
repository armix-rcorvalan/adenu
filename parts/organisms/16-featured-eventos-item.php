<?php
/**
 * Featured Post Item
 *
 * @package ARMIX
 */

?>

<?php if ( $eventos_query->have_posts() ) : ?>
<div class="module-<?php echo esc_attr( $module_count ); ?> 16-featured-eventos-item">
	<div class="16-featured-eventos-item__inner global-inner">
		<?php 
		while ( $eventos_query->have_posts() ) 
		{
			$eventos_query->the_post();
			$featured = true;
			$class    = '16-featured-eventos-item__item';
			require TD . '/parts/molecules/eventos-item.php';
		}
		?>
	</div>
</div>
<?php endif; ?>

<hr>