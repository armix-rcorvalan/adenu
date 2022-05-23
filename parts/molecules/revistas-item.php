<?php
/**
 * Revistas Item
 *
 * @package ARMIX
 */

?>

<div class="revistas-item <?php if ( isset( $featured ) && $featured ) echo 'revistas-item--featured'; ?> <?php if ( isset( $class ) && $class ) echo $class; ?>">
		
	<a href="<?php the_permalink(); ?>" class="revistas-item__image-link">
		<?php if ( isset( $featured ) && $featured ) : ?>
		<img src="<?php the_post_thumbnail_url( 'revistas-item-featured' ); ?>" class="revistas-item__image" />
		<?php else : ?>
		<img src="<?php the_post_thumbnail_url( 'revistas-item' ); ?>" class="revistas-item__image" />
		<?php endif; ?>
	</a>
	
	<h3 class="revistas-item__title">
		<a href="<?php the_permalink(); ?>" class="revistas-item__title-link"><?php the_title(); ?></a>
	</h3>
	
	<div class="revistas-item__excerpt"><?php the_excerpt(); ?></div>

	<a href="<?php the_permalink(); ?>" class="revistas-item__read-more">Ver más</a>

</div>

<?php

unset( $featured );
unset( $class );