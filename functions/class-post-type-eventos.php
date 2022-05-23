<?php
/**
 * Class Post Type Eventos
 *
 * @package armix
 */

/**
 * Class Post Type Eventos
 */
class Post_Type_Eventos {

	/**
	 * Slug
	 *
	 * @var string
	 */
	public static $slug = 'eventos';

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
			'name'           => __( 'Eventos', 'armix' ),
			'singular_name'  => __( 'Evento', 'armix' ),
			'menu_name'      => __( 'Eventos', 'armix' ),
			'name_admin_bar' => __( 'Evento', 'armix' ),
		);

		$args = array(
			'label'               => __( 'Eventos', 'armix' ),
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
			'menu_icon'           => 'dashicons-calendar',
		);

		register_post_type( self::$slug, $args );
	}

}

new Post_Type_Eventos();
