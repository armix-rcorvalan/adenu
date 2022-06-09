<?php
/**
 * Header
 *
 * @package ARMIX
 */

?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link href="<?php echo esc_attr( TDU ); ?>/favicon.ico" rel="shortcut icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>

<body <?php body_class(); ?>>

<?php
global $template;
echo basename($template);

$social_links = new ARMIX\Social_Links();
$social_links_array = $social_links->get_array();

get_search_form();

?>

<?php include TD . '/parts/organisms/header.php'; ?>
