<?php
/**
 * Class Post Type Blog
 *
 * @package armix
 */

/**
 * Class Post Type Blog
 */
class Post_Type_Blog {

	/**
	 * Slug
	 *
	 * @var string
	 */
	public static $slug = 'blog';

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
			'name'           => __( 'Blog', 'armix' ),
			'singular_name'  => __( 'Blog', 'armix' ),
			'menu_name'      => __( 'Blog', 'armix' ),
			'name_admin_bar' => __( 'Blog', 'armix' ),
		);

		$args = array(
			'label'               => __( 'Blog', 'armix' ),
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
			'menu_icon'           => 'dashicons-text',
		);

		register_post_type( self::$slug, $args );
	}

}

new Post_Type_Blog();
