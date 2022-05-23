<?php
/**
 * Single Cover
 *
 * @package ARMIX
 */

if ( is_singular( 'blog' ) ) 
{
	$current_tax = wp_get_object_terms( get_the_ID(), 'blog-categoria' );
}
else if ( is_singular( 'post' ) )
{
	$current_tax = wp_get_object_terms( get_the_ID(), 'category' );
}

?>

<div class="24-single-cover">

	<div class="24-single-cover__inner global-inner">

		<div class="24-single-cover__wrapper">
		
			<div class="24-single-cover__image-wrapper">
				<img src="<?php the_post_thumbnail_url( 'post-item-featured' ); ?>" class="24-single-cover__image" />
			</div>

			<?php if ( is_array( $current_tax ) && ! empty( $current_tax ) ) : ?>
				<?php $current_tax = reset( $current_tax ); ?>
				<a href="<?php echo esc_url( get_term_link( $current_tax->term_id ) ); ?>" class="24-single-cover__tax">
					<?php echo esc_attr( $current_tax->name ); ?>
				</a>
			<?php endif ?>
			
			<h3 class="24-single-cover__title"><?php the_title(); ?></h3>
			
			<div class="24-single-cover__excerpt"><?php the_excerpt(); ?></div>

		</div>

	</div>

</div>

<hr>