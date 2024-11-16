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

esc_html__('Hello', 'wordpresscdx');
esc_html_e('Hello', 'wordpresscdx');

$city = "Uralsk";
$country = "Kazahstan";

printf(esc_html__('My city is %1$s and my country is %2$s' , 'wordpresscdx'), $city, $country);

?>

