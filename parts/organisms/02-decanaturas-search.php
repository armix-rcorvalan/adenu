<?php
/**
 * Decanaturas Search
 *
 * @package ARMIX
 */

$tipos_de_programa_terms = get_terms( 'tipos-de-programa', array(
	'hide_empty' => false,
) );

$carreras_terms = get_terms( 'carreras', array(
	'hide_empty' => false,
) );

$modalidades = get_terms( 'modalidades', array(
	'hide_empty' => false,
) );

$get_data = filter_input_array( INPUT_GET );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 02-decanaturas-search">
	<div class="02-decanaturas-search__inner global-inner">
		<div class="02-decanaturas-search__form-wrapper">
			
			<form action="<?php echo esc_url( get_post_type_archive_link( 'decanaturas' ) ); ?>" class="02-decanaturas-search__form" method="get">
				
				<div class="02-decanaturas-search__form-group">
					<input type="search" name="ds" value="<?php echo ( $get_data['ds'] ) ? $get_data['ds'] : ''; ?>" class="02-decanaturas-search__form-input 02-decanaturas-search__form-input--search" placeholder="Ej: Marketing" />
				</div>

				<div class="02-decanaturas-search__form-group">
					<label for="carreras" class="02-decanaturas-search__form-label">Tipos de Carrera</label>
					<select name="carreras" id="carreras" class="02-decanaturas-search__form-select">
						<option value="" disabled selected>Tipos de Carrera</option>
						<?php foreach ( $carreras_terms as $term ) : ?>
							<option value="<?php echo esc_attr( $term->slug ); ?>" <?php selected( $get_data['carreras'], $term->slug ); ?>><?php echo esc_attr( $term->name ); ?></option>
						<?php endforeach ?>
					</select>
				</div>
				
				<div class="02-decanaturas-search__form-group">
					<label for="tipos-de-programa" class="02-decanaturas-search__form-label">Tipos de Programa</label>
					<select name="tipos-de-programa" id="tipos-de-programa" class="02-decanaturas-search__form-select">
						<option value="" disabled selected>Tipos de Programa</option>
						<?php foreach ( $tipos_de_programa_terms as $term ) : ?>
							<option value="<?php echo esc_attr( $term->slug ); ?>" <?php selected( $get_data['tipos-de-programa'], $term->slug ); ?>><?php echo esc_attr( $term->name ); ?></option>
						<?php endforeach ?>
					</select>
				</div>

				<div class="02-decanaturas-search__form-group">
					<label for="modalidades" class="02-decanaturas-search__form-label">Modalidades</label>
					<select name="modalidades" id="tipos-de-programa" class="02-decanaturas-search__form-select">
						<option value="" disabled selected>Modalidades</option>
						<?php foreach ( $modalidades as $term ) : ?>
							<option value="<?php echo esc_attr( $term->slug ); ?>" <?php selected( $get_data['modalidades'], $term->slug ); ?>><?php echo esc_attr( $term->name ); ?></option>
						<?php endforeach ?>
					</select>
				</div>

				<div class="02-decanaturas-search__form-group 02-decanaturas-search__form-group--submit">
					<button type="submit 02-decanaturas-search__form-button">Buscar</button>
				</div>

			</form>
		</div>
	</div>
</div>
