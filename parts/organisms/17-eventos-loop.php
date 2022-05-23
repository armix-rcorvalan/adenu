<?php
/**
 * Featured Eventos Loop
 *
 * @package ARMIX
 */

?>

<?php if ( $eventos_query->have_posts() ) : ?>
<div class="module-<?php echo esc_attr( $module_count ); ?> 15-eventos-loop">
	<div class="15-eventos-loop__inner global-inner">
		<?php 
		while ( $eventos_query->have_posts() ) 
		{
			$eventos_query->the_post();
			$class    = '15-eventos-loop__item';
			require TD . '/parts/molecules/eventos-item.php';
		}
		?>
	</div>
</div>
<?php endif; ?>

<hr>