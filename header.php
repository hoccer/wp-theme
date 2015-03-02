<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<?php $options = get_option('hoccer_theme_options'); ?>
		<title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<meta name="author" content="Hoccer" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<link rel="dns-prefetch" href="//fonts.googleapis.com">
		<link rel="dns-prefetch" href="https://img.youtube.com" />
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/tutorial.css" media="screen" />
		<link rel="icon" type="image/png" href="<?php bloginfo('template_url');?>/images/favicon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel='canonical' href='<?php bloginfo('url'); ?>' />
		<link rel='index' title='<?php bloginfo('description'); ?>' href='<?php bloginfo('url'); ?>' />
		<?php $detect = new Mobile_Detect(); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="header">
			<header class="inner">
				<h1 id="logo">
					<a href="<?php bloginfo('url'); ?>">
						<img class="icon" alt="" src="<?php bloginfo('template_url'); ?>/images/icon.png" alt="" />
						<img class="name" alt="<?php bloginfo('name'); ?>" src="<?php bloginfo('template_url'); ?>/images/logo.svg" />
					</a>
				</h1>
				<nav id="languages">
					<?php /* do_action('icl_language_selector'); */ ?>
					<?php language_selector_custom(); ?>
					<div class="clear"></div>
				</nav>
				<nav id="main-nav">
					<?php wp_nav_menu(array('theme_location'=>'main', 'fallback_cb' => fallback_menu, 'walker' => new My_Walker_Nav_Menu())); ?>
				</nav>
				<div class="clear"></div>
			</header>
		</div>
		<?php if(is_front_page()) : ?>
			<div id="loading">
				<div class="spinner">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>
			</div>

		<?php endif; ?>