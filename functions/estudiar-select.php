<?php
/**
 * Estudiar Select
 *
 * @package ARMIX
 */

function armix_estudiar_select_modalidades( $field )
{
	if ( get_post_type() === 'estudiar' )
	{
		$choices          = get_field( 'modalidades' );
		$choices          = explode( "\r\n", trim( $choices ) );
		$choices_with_key = array();
		foreach ( $choices as $choice )
		{
			$choices_with_key[ sanitize_key( $choice ) ] = $choice;
		}
		$field['choices'] = $choices_with_key;
	}
	return $field;
}
add_filter( 'acf/load_field/name=modalidad', 'armix_estudiar_select_modalidades' );

function armix_estudiar_select_programas( $field )
{
	if ( get_post_type() === 'estudiar' )
	{
		$choices          = get_field( 'programas' );
		$choices          = explode( "\r\n", trim( $choices ) );
		$choices_with_key = array();
		foreach ( $choices as $choice )
		{
			$choices_with_key[ sanitize_key( $choice ) ] = $choice;
		}
		$field['choices'] = $choices_with_key;
	}
	return $field;
}
add_filter( 'acf/load_field/name=programa', 'armix_estudiar_select_programas' );