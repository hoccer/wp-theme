		<?php get_header(); ?>
		<?php $detect = new Mobile_Detect(); ?>
		<?php
			$post_thumbnail_id = get_post_thumbnail_id();
			$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
			if($post_thumbnail_url) : ?>
				<div id="header-teaser" style="background-image: url('<?php echo $post_thumbnail_url; ?>');">
					<div id="header-teaser-outside">
						<div class="header-teaser-inside inner">
							<h1 class="post-title"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
		<?php endif; ?>	
		<div id="wrapper">
			<div class="inner">
				<section id="container">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<section id="post-<?php the_ID(); ?>" class="type-page">
							<?php if(!$post_thumbnail_url) : ?>
								<h1 class="post-title"><?php the_title(); ?></h1>
							<?php endif; ?>
							<article class="article">
								<?php the_content(); ?>
							</article>
						</section>			
					<?php endwhile; endif; ?>
				</section>
			</div>
		</div>
		<?php get_footer(); ?>