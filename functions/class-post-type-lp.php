<?php
/**
 * Class Post Type LP
 *
 * @package armix
 */

/**
 * Class Post Type LP
 */
class Post_Type_LP {

	/**
	 * Slug
	 *
	 * @var string
	 */
	public static $slug = 'LP';

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
			'name'           => __( 'Landings', 'armix' ),
			'singular_name'  => __( 'Landing', 'armix' ),
			'menu_name'      => __( 'Landings', 'armix' ),
			'name_admin_bar' => __( 'Landing', 'armix' ),
		);

		$args = array(
			'label'               => __( 'LP', 'armix' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
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
			'menu_icon'           => 'dashicons-welcome-widgets-menus',
		);

		register_post_type( self::$slug, $args );
	}

}

new Post_Type_LP();
