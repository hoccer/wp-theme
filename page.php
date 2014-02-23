		<?php get_header(); ?>
		<div id="header-teaser">
			<div id="header-teaser-outside">
				<div class="header-teaser-inside inner">
					<h1 class="post-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
		<div id="wrapper">
			<div class="inner">
				<section id="container">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<section id="post-<?php the_ID(); ?>" class="type-page">
							<article class="article">
								<?php the_content(); ?>
							</article>
						</section>			
					<?php endwhile; endif; ?>
				</section>
			</div>
		</div>
		<?php get_footer(); ?>