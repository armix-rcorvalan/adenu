<?php
/**
 * Featured Eventos Loop
 *
 * @package ARMIX
 */

?>

<?php if ( $revistas_query->have_posts() ) : ?>
<div class="module-<?php echo esc_attr( $module_count ); ?> 21-revistas-loop">
	<div class="21-revistas-loop__inner global-inner">
		<?php 
		while ( $revistas_query->have_posts() ) 
		{
			$revistas_query->the_post();
			$class    = '21-revistas-loop__item';
			require TD . '/parts/molecules/revistas-item.php';
		}
		?>
	</div>
</div>
<?php endif; ?>

<hr>