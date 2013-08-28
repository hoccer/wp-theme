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
			header('Location: '. $appstore, true, 307);
		} else {
			header('Location: '. $home, true, 307);
		}
	} else if($Android) {
		$playstore = get_post_meta($post->ID, 'playstore', true);
		if ($playstore) {
			header('Location: '. $playstore, true, 307);
		} else {
			header('Location: '. $home, true, 307);
		}
	} else {
		$default = get_post_meta($post->ID, 'default', true);
		if ($default) {
			header('Location: '. $default, true, 307);
		} else {
			header('Location: '. $home, true, 307);
		}
	}
?> 