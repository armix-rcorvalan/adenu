<?php
/**
 * Decanaturas Item
 *
 * @package ARMIX
 */
?>

<a href="<?php the_permalink(); ?>" class="blog-item <?php if ( isset( $class ) && $class ) echo $class; ?>">
	<img src="<?php the_post_thumbnail_url( 'blog-item' ); ?>" class="blog-item__image" />
	<h3 class="blog-item__title"><?php the_title(); ?></h3>
	<div class="blog-item__resolution"><?php the_field( 'resolution' ); ?></div>
</a>

<?php

unset( $class );