<?php
/**
 * Class Taxonomy Blog_Categoria
 *
 * @package armix
 */

/**
 * Class Taxonomy Blog_Categoria
 */
class Taxonomy_Blog_Categoria {

	/**
	 * Slug
	 *
	 * @var string
	 */
	public static $slug = 'blog-categoria';

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
			'name'                       => 'Categorías',
			'singular_name'              => 'Categoría',
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
		register_taxonomy( self::$slug, array( 'blog' ), $args );
	}

}

new Taxonomy_Blog_Categoria();
