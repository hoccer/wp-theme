<?php
	/* Template Name: download */

	$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
	$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
	$Android= stripos($_SERVER['HTTP_USER_AGENT'],"Android");

	$home = get_bloginfo('url');
	if($iPod || $iPhone || $iPad) {
		$appstore = get_post_meta($post->ID, 'appstore', true);
		if ($appstore) {
			header('Location: '. $appstore);
		} else {
			header('Location: '. $home);
		}
	} else if($Android) {
		$playstore = get_post_meta($post->ID, 'playstore', true);
		if ($playstore) {
			header('Location: '. $playstore);
		} else {
			header('Location: '. $home);
		}
	} else {
		$default = get_post_meta($post->ID, 'default', true);
		if ($default) {
			header('Location: '. $default);
		} else {
			header('Location: '. $home);
		}
	}
?> 