<?php
/**
 * Estudiar Search Form
 *
 * @package ARMIX
 */

// Modalidades Select Option
$modalidades          = get_field( 'modalidades' );
$modalidades          = explode( "\r\n", trim( $modalidades ) );
$modalidades_with_key = array();
foreach ( $modalidades as $choice )
{
	$modalidades_with_key[ sanitize_key( $choice ) ] = $choice;
}
$modalidades = $modalidades_with_key;

// Modalidades Select Option
$programas          = get_field( 'programas' );
$programas          = explode( "\r\n", trim( $programas ) );
$programas_with_key = array();
foreach ( $programas as $choice )
{
	$programas_with_key[ sanitize_key( $choice ) ] = $choice;
}
$programas = $programas_with_key;

?>

<div class="estudiar-search-form <?php if ( isset( $class ) && $class ) echo $class; ?>">
	
	<div class="estudiar-search-form__form-group">
		<input type="search" name="s" id="search" class="estudiar-search-form__form-input estudiar-search-form__form-input--search" placeholder="Ej: Marketing" />
	</div>

	<div class="estudiar-search-form__form-group">
		<label for="tipos-de-programa" class="estudiar-search-form__form-label">Tipos de Programa</label>
		<select name="tipos-de-programa" id="tipos-de-programa" class="estudiar-search-form__form-select">
			<option value="-1" selected>Tipos de Programa</option>
			<?php foreach ( $programas as $option_key => $option ) : ?>
				<option value="<?php echo esc_attr( $option_key ); ?>"><?php echo esc_attr( $option ); ?></option>
			<?php endforeach ?>
		</select>
	</div>

	<div class="estudiar-search-form__form-group">
		<label for="modalidades" class="estudiar-search-form__form-label">Modalidades</label>
		<select name="modalidades" id="modalidades" class="estudiar-search-form__form-select">
			<option value="-1" selected>Modalidades</option>
			<?php foreach ( $modalidades as $option_key => $option ) : ?>
				<option value="<?php echo esc_attr( $option_key ); ?>"><?php echo esc_attr( $option ); ?></option>
			<?php endforeach ?>
		</select>
	</div>

</div>

<?php
unset( $class );