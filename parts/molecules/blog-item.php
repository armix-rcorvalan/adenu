<?php
/**
 * Blog Item
 *
 * @package ARMIX
 */

$current_tax = wp_get_object_terms( get_the_ID(), 'blog-categoria' );

?>

<div class="blog-item <?php if ( isset( $featured ) && $featured ) echo 'blog-item--featured'; ?> <?php if ( isset( $class ) && $class ) echo $class; ?>">
		
	<a href="<?php the_permalink(); ?>" class="blog-item__image-link">
		<?php if ( isset( $featured ) && $featured ) : ?>
		<img src="<?php the_post_thumbnail_url( 'blog-item-featured' ); ?>" class="blog-item__image" />
		<?php else : ?>
		<img src="<?php the_post_thumbnail_url( 'blog-item' ); ?>" class="blog-item__image" />
		<?php endif; ?>
	</a>

	<?php if ( is_array( $current_tax ) && ! empty( $current_tax ) ) : ?>
		<?php $current_tax = reset( $current_tax ); ?>
		<a href="<?php echo esc_url( get_term_link( $current_tax->term_id ) ); ?>" class="blog-item__tax">>
			<?php echo esc_attr( $current_tax->name ); ?>
		</a>
	<?php endif ?>
	
	<h3 class="blog-item__title">
		<a href="<?php the_permalink(); ?>" class="blog-item__title-link"><?php the_title(); ?></a>
	</h3>
	
	<div class="blog-item__excerpt"><?php the_excerpt(); ?></div>

	<a href="<?php the_permalink(); ?>" class="blog-item__read-more">Ver más</a>

</div>

<?php

unset( $featured );
unset( $class );