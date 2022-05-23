<?php
/**
 * Class Taxonomy Tipos_De_Programa
 *
 * @package armix
 */

/**
 * Class Taxonomy Tipos_De_Programa
 */
class Taxonomy_Tipos_De_Programa {

	/**
	 * Slug
	 *
	 * @var string
	 */
	public static $slug = 'tipos-de-programa';

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'init' ), 0 );
	}

	/**
	 * Init
	 */
	public function init() {

		$labels = array(
			'name'                       => 'Tipo de Programas',
			'singular_name'              => 'Tipo de Programa',
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( self::$slug, array( 'decanaturas' ), $args );
	}

}

new Taxonomy_Tipos_De_Programa();
