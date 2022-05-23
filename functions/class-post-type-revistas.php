<?php
/**
 * Class Post Type Revistas
 *
 * @package armix
 */

/**
 * Class Post Type Revistas
 */
class Post_Type_Revistas {

	/**
	 * Slug
	 *
	 * @var string
	 */
	public static $slug = 'revistas';

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}

	/**
	 * Init
	 */
	public function init() {

		$labels = array(
			'name'           => __( 'Revistas', 'armix' ),
			'singular_name'  => __( 'Revista', 'armix' ),
			'menu_name'      => __( 'Revistas', 'armix' ),
			'name_admin_bar' => __( 'Revista', 'armix' ),
		);

		$args = array(
			'label'               => __( 'Revista', 'armix' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'excerpt', 'thumbnail', 'custom-fields' ),
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
			'menu_icon'           => 'dashicons-analytics',
		);

		register_post_type( self::$slug, $args );
	}

}

new Post_Type_Revistas();
