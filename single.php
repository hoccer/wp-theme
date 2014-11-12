		<?php get_header(); ?>
		<div id="header-teaser">
			<div id="header-teaser-outside">
				<div id="header-teaser-inside" class="inner">
					<a class="post-back" href="<?php echo icl_get_home_url(); ?>/blog/"><i class="fa fa-chevron-left"></i></a>
					<h1 class="post-title"><?php the_title(); ?></h1>
					<time class="post-meta">
						<?php the_time('d.m.y'); ?>
					</time>
				</div>
			</div>
		</div>
		<div id="wrapper">
			<div class="inner">
				<section id="container">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<article class="article">
								<?php the_content(); ?>
							</article>
						</section>
					<?php endwhile; endif; ?>
				</section>
			</div>
		</div>
		<?php get_footer(); ?>