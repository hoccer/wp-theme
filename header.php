<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<?php $options = get_option('hoccer_theme_options'); ?>
		<title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<meta name="author" content="Peter Amende" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/tutorial.css" media="screen" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel='canonical' href='<?php bloginfo('url'); ?>' />
		<link rel='index' title='<?php bloginfo('description'); ?>' href='<?php bloginfo('url'); ?>' />
		<?php $detect = new Mobile_Detect(); ?>
		<?php if($detect->isTablet() && is_front_page()) : ?>
			<style type="text/css">
				#panorama-1 {background-position: center top !important;}
				#panorama-2 {background-position: center top !important;}
				.intro-image {bottom: 0 !important;}
				.tut-area {top: auto !important;}
			</style>
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="header">
			<header class="inner">
				<a id="logo" href="<?php bloginfo('url'); ?>">
					<img alt="<?php bloginfo('name'); ?>" src="<?php bloginfo('template_url'); ?>/images/logo.png" />
				</a>
				<nav id="languages">
					<?php do_action('icl_language_selector'); ?>
				</nav>
				<nav id="main-nav">
					<?php wp_nav_menu(array('theme_location'=>'main', 'fallback_cb' => fallback_menu, 'walker' => new My_Walker_Nav_Menu())); ?>
				</nav>
				<div class="clear"></div>
			</header>
		</div>