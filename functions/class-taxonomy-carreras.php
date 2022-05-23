<?php
/**
 * Class Taxonomy Carreras
 *
 * @package armix
 */

/**
 * Class Taxonomy Carreras
 */
class Taxonomy_Carreras {

	/**
	 * Slug
	 *
	 * @var string
	 */
	public static $slug = 'carreras';

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
			'name'                       => 'Carreras',
			'singular_name'              => 'Carreras',
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

new Taxonomy_Carreras();
