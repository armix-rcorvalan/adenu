<?php
/**
 * Revistas Related
 *
 * @package ARMIX
 */

// Query

$exclude_ids = array();
$exclude_ids[] = get_the_ID();

$args = array(
	'post_type' => 'revistas',
	'posts_per_page' => 3,
	'post__not_in'   => $exclude_ids,
);
$revistas_query  = new WP_Query( $args );

?>

<?php if ( $revistas_query->have_posts() ) : ?>
<div class="module-<?php echo esc_attr( $module_count ); ?> 23-revistas-related">
	<div class="23-revistas-related__inner global-inner">
		<div class="23-revistas-related__loop">
			<?php 
			while ( $revistas_query->have_posts() ) 
			{
				$revistas_query->the_post();
				$class    = '23-revistas-related__item';
				require TD . '/parts/molecules/revistas-item.php';
			}
			?>
		</div>
	</div>
</div>
<?php endif; ?>

<hr>