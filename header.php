<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
		<div class="container">
	<!-- site-header -->
	<header class="site-header">

		<div class="hd-search">
			<?php get_Search_form(); ?>
		</div>




		<h1> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<h5><?php bloginfo('description'); ?></h5>
		<?php if (is_page()){ ?>

		<?php } ?>

		<nav class="site-nav">
			<?php
				$args = array(
					'theme_location' => 'primary'
				);
				?>

		<?php wp_nav_menu($args); ?>
	</nav>
	</header>
	<div class="container">