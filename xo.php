<?php /* Template Name: xo */ ?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		<title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/xo.css" media="screen" />
	</head>

	<body>

		<div id="wrapper">
			<div class="inner">

				<section id="xo-container">
					<section id="xo-page">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<section class="page-post">
						<article class="article">
							<?php the_content(); ?>
						</article>
					</section>
					<?php endwhile; endif; ?>
					</section>
				</section>	
				</div>
			</div>
	</body>
</html>