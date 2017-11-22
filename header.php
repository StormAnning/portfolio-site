<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="" class="">
	<div class="navigationContainer">
		<div class="nameBanner" href="#">
		  	<span>STORM</span><span style="font-weight: 100;"> | </span><span>ANNING</span>
		  </div>
		  <div class="navItems">
		    <?php
								$defaults = array(
									'container' => false,
									'theme_location' => 'primary',
									'menu_class' => ''
								);
								wp_nav_menu($defaults);
							?>
		  </div>
	</div>
	<div id="content" class="site-content">
