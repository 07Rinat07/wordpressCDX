<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpressCDX
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



<?php 

//esc_attr() - attributes escape
//esc_html() - html escape
//esc_url() - link escape
//wp_kses() - allowed html escape | 2
//wp_kses_post() -postt html allowed
//wp_kses_data() - comments html allowed
//esc_js() inline js
//esc_textarea()

$name = 'Alex <a href="#" title="test>"Test</a> aka <strong> Test2</strong>';

echo wp_kses_post($name);
?>

