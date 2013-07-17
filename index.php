		<?php get_header(); ?>

		<div id="wrapper">
			<div class="inner">
		
				<section id="container">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php if(is_page()) : ?>
							<section id="post-<?php the_ID(); ?>" class="type-page">
								<header class="header">
									<h1 class="post-title">
										<?php the_title(); ?>
									</h1>
								</header>
								<article class="article">
									<?php the_content(); ?>
								</article>
							</section>
						<?php else : ?>
							<section id="post-<?php the_ID(); ?>" class="type-post">
								<header class="header">
									<h2 class="post-title">
										<?php the_title(); ?>
									</h2>
									<time class="post-time post-meta">
										<?php the_time('d.m.y'); ?>
									</time>
									<span class="post-categories post-meta">
										<?php the_category(' ',''); ?>
									</span>
								</header>
								<article class="article">
									<?php the_content(); ?>
								</article>
							</section>
						<?php endif; ?>
			
					<?php endwhile; ?>
						<?php if(!is_page()) : ?>
							<nav id="postnav">
								<div class="alignleft"><?php next_posts_link('&laquo; previous', 0); ?></div>
								<div class="alignright"><?php previous_posts_link('next &raquo;', 0) ?></div>
							</nav>
						<?php endif; ?>
					<?php endif; ?>
				
				</section>
		
			</div>
		</div>

		<?php get_footer(); ?>