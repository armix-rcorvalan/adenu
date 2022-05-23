<?php
/**
 * Class Taxonomy Modalidades
 *
 * @package armix
 */

/**
 * Class Taxonomy Modalidades
 */
class Taxonomy_Modalidades {

	/**
	 * Slug
	 *
	 * @var string
	 */
	public static $slug = 'modalidades';

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
			'name'                       => 'Modalidades',
			'singular_name'              => 'Modalidad',
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

new Taxonomy_Modalidades();
