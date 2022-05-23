<?php
/**
 * Decanaturas Main
 *
 * @package ARMIX
 */

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 34-decanaturas-main 34-decanaturas-main--<?php echo esc_attr( $group['style'] ); ?>">
	<div class="34-decanaturas-main__inner global-inner">
		<div class="34-decanaturas-main__start-date"><?php the_field( 'start_date' ); ?></div>
		<div class="34-decanaturas-main__duration">
			Duración:<?php the_field( 'duration' ); ?>
		</div>
		<div class="34-decanaturas-main__modality">
			Modalidad:<?php the_field( 'modality' ); ?>
		</div>
		<div class="34-decanaturas-main__titulation">
			<h3 class="34-decanaturas-main__titulation-title">Titulación</h3>
			<div class="34-decanaturas-main__titulation-editor editor"><?php the_field( 'titulation' ); ?></div>
		</div>
		<?php if ( get_field( 'study_plan' ) ) : ?>
		<div class="34-decanaturas-main__study-plan">
			<h3 class="34-decanaturas-main__study-plan-title">Plan de estudios</h3>
			<a href="<?php the_field( 'study_plan' ); ?>" class="34-decanaturas-main__study-plan-button">Descargar</a>
		</div>	
		<?php endif ?>

		<?php
		$class = '34-decanaturas-main__form';
		require TD . '/parts/molecules/decanaturas-form.php';
		?>


	</div>
</div>

<hr>