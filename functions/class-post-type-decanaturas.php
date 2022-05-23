<?php
/**
 * Class Post Type Decanaturas
 *
 * @package armix
 */

/**
 * Class Post Type Decanaturas
 */
class Post_Type_Decanaturas {

	/**
	 * Slug
	 *
	 * @var string
	 */
	public static $slug = 'decanaturas';

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
			'name'           => __( 'Decanaturas', 'armix' ),
			'singular_name'  => __( 'Decanatura', 'armix' ),
			'menu_name'      => __( 'Decanaturas', 'armix' ),
			'name_admin_bar' => __( 'Decanatura', 'armix' ),
		);

		$args = array(
			'label'               => __( 'Decanaturas', 'armix' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'thumbnail', 'custom-fields' ),
			'taxonomies'          => array(),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 20,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'menu_icon'           => 'dashicons-awards',
		);

		register_post_type( self::$slug, $args );
	}

}

new Post_Type_Decanaturas();
