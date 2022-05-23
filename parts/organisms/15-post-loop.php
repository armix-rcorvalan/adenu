<?php
/**
 * Featured Post Loop
 *
 * @package ARMIX
 */

?>

<?php if ( $post_query->have_posts() ) : ?>
<div class="module-<?php echo esc_attr( $module_count ); ?> 15-post-loop">
	<div class="15-post-loop__inner global-inner">
		<?php 
		while ( $post_query->have_posts() ) 
		{
			$post_query->the_post();
			$class    = '15-post-loop__item';
			require TD . '/parts/molecules/post-item.php';
		}
		?>
	</div>
</div>
<?php endif; ?>

<hr>