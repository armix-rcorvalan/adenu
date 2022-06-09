<?php
/**
 * Class Post Type LP
 *
 * @package armix
 */

/**
 * Class Post Type LP
 */
class Post_Type_Estudiar {

	/**
	 * Slug
	 *
	 * @var string
	 */
	public static $slug = 'estudiar';

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
			'name'           => __( 'Buscadores', 'armix' ),
			'singular_name'  => __( 'Buscador', 'armix' ),
			'menu_name'      => __( 'Buscadores', 'armix' ),
			'name_admin_bar' => __( 'Buscador', 'armix' ),
		);

		$args = array(
			'label'               => __( 'Buscadores', 'armix' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'custom-fields' ),
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
			'menu_icon'           => 'dashicons-visibility',
		);

		register_post_type( self::$slug, $args );
	}

}

new Post_Type_Estudiar();
