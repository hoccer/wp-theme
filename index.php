		<?php get_header(); ?>
	<?php if(is_home()) : ?>	
		<div id="header-teaser">
			<div id="header-teaser-outside">
				<div class="header-teaser-inside inner">
					<h1 class="post-title"><?php _e('Blog','hoccer'); ?></h1>
				</div>
			</div>
		</div>
	<?php endif; ?>
		<div id="wrapper">
			<div class="inner">
				<section id="container">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<section id="post-<?php the_ID(); ?>" class="type-post">
							<header class="header">
								<h2 class="post-title">
									<?php the_title(); ?>
								</h2>
								<time class="post-time">
									<?php the_time('d.m.y'); ?>
								</time>
							</header>
							<article class="article">
								<?php the_content(); ?>
							</article>
						</section>
					<?php endwhile; ?>
						<nav id="postnav">
							<div class="alignleft"><?php next_posts_link('&laquo; previous', 0); ?></div>
							<div class="alignright"><?php previous_posts_link('next &raquo;', 0) ?></div>
						</nav>
					<?php endif; ?>
				</section>
			</div>
		</div>
		<?php get_footer(); ?>