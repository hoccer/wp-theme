<?php get_header(); ?>
		<?php $detect = new Mobile_Detect(); ?>
		<?php $templatepath = get_bloginfo('template_url'); ?>
		<?php $options = get_option('hoccer_theme_options'); ?>
		
		<?php $appstorexo = get_post_meta($post->ID, 'appstorexo', true); ?>
		<?php $playstorexo = get_post_meta($post->ID, 'playstorexo', true); ?>
		<?php $apk = get_post_meta($post->ID, 'apkxo', true); ?>
		
		<?php $faq = get_post_meta($post->ID, 'faq', true); ?>
		<?php $slogan = get_post_meta($post->ID, 'slogan', true); ?>
		<?php $description = get_post_meta($post->ID, 'description', true); ?>
		
		<?php $awards = get_post_meta($post->ID, 'awards', true); ?>

		<section id="section-header" class="section">
			<div class="inner">
				<div class="two-columns-one">
					<p><!-- --></p>
				</div>
				<div class="two-columns-one last">
					<div id="header-text">
						<h2 class="section-title"><?php the_title(); ?></h2>
						<h3 class="section-slogan"><?php echo $slogan; ?></h3>
						<h4 class="section-description"><?php echo $description; ?></h4>
						<?php if ($detect->isiOS() && $appstorexo) : ?>
							<a class="button-download button anchor" href="<?php echo $appstorexo; ?>"><i class="fa fa-apple"></i> AppStore</a>
						<?php elseif ($detect->isAndroidOS() && $playstorexo) : ?>
							<a class="button-download anchor" href="<?php echo $playstorexo; ?>"><i class="fa fa-android"></i> PlayStore</a>
							<?php if($apk) : ?>
								<a class="button-download anchor" href="<?php echo $apk; ?>"><i class="fa fa-archive"></i> APK</a>
							<?php endif; ?>
						<?php else : ?>
							<a class="button-download anchor" href="#section-download"><i class="fa fa-cloud-download"></i><?php _e('Free Download','hoccer'); ?></a>
						<?php endif; ?>
						<?php if($awards) : ?>									
							<div class="section-awards"><?php echo $awards ?></div>
						<?php endif; ?>
					</div>
				</div>
				<div class="divider"></div>
			</div>
			<a class="scrollinfo"><i class="fa fa-chevron-down"></i></a>
			<div class="section-background" data-type="prlx" data-speed="0.1"></div>
		</section>
		
		<section id="section-features" class="section">
			<div class="inner">
				<?php
					$args = array(
						'post_type' => 'features',
						'posts_per_page' => 8,
						'orderby' => 'date',
						'order' => 'ASC'
					);
					$counter = 0;
					$loop = new WP_Query($args);
					while ($loop->have_posts()) : $loop->the_post();
					$counter++;
				?>
					<div class="feature <?php echo 'feature-'.$counter; ?>">
						<figure class="feature-image"><?php echo get_post_meta($post->ID, 'feature_icon', true); ?></figure>
						<h3 class="feature-title"><?php the_title(); ?></h3>
						<div class="feature-text"><?php the_excerpt(); ?></div>
					</div>
				<?php endwhile; wp_reset_query(); ?> 
				<div class="clear"></div>
			</div>
		</section>
		
		<section id="section-slider" class="section">
			<div class="flexslider">
				<ul class="slides">
					<?php
						$args = array(
							'post_type' => 'slides',
							'posts_per_page' => 6,
							'orderby' => 'date',
							'order' => 'ASC'
						);
						$counter = 0;
						$loop = new WP_Query($args);
						while ($loop->have_posts()) : $loop->the_post();
						$counter++;

						if(has_post_thumbnail()) {
							$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');	
						}
					?>
					<li>
						<div id="<?php echo 'slide-'.$counter; ?>" class="slide-section section <?php echo 'slide-section-'.$counter; ?>">
							<div class="inner">
								<div class="slide-info">
									<h3 class="slide-title"><?php the_title(); ?></h3>
									<div class="slide-text"><?php the_content(); ?></div>
								</div>
							</div>
							<?php if(get_post(get_post_thumbnail_id())->post_excerpt) : ?>
								<figcaption class="slide-image-caption">
									<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
								</figcaption>
							<?php endif; ?>
							<div class="slide-image" style="background-image: url(<?php echo $image[0]; ?>);" data-type="prlx" data-speed="0.250"></div>
						</div>
					</li>
					<?php endwhile; wp_reset_query(); ?> 
				</ul>
			</div>
		</section>
		
		<section id="section-info" class="section">
			<div class="inner">
				<article class="article">
					<div class="three-columns-one">
						<div id="info-image" data-type="prlx" data-speed="0.2">
							<img class="appicon" src="<?php echo $templatepath; ?>/images/appicon.png" alt="" />
						</div>
					</div>
					<div class="three-columns-two last">
						<div id="info-text">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="divider"></div>
				</article>
			</div>
		</section>
		
		<section id="section-download" class="section">
			<div class="inner">
				<div id="download-wrapper">
					<h2 class="section-title"><?php _e('Chat anonymously, use Hoccer!','hoccer'); ?></h2>
					<div class="clear"></div>
					<?php if($appstorexo) : ?>									
						<span><a class="button appstore"  href="<?php echo $appstorexo ?>" target="_blank"><i class="fa fa-apple"></i> AppStore</a></span>
					<?php endif; ?>
					<?php if($playstorexo) : ?>
						<span><a class="button gplay"  href="<?php echo $playstorexo ?>" target="_blank"><i class="fa fa-android"></i> PlayStore</a></span>
					<?php endif; ?>
					<?php if($apk) : ?>
						<span><a class="button apk"  href="<?php echo $apk ?>" target="_blank"><i class="fa fa-archive"></i> APK</a></span>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<?php /*
		<section id="section-blog" class="section">
			<div class="inner">
				<div class="three-columns-two">
					<div id="blog-wrapper" data-type="prlx" data-speed="0.250">
						<?php
						$args = array(
							'offset' => 0,
							'posts_per_page' => 6,
							'ignore_sticky_posts' => 1
						);
						$counter = 0;
						query_posts($args);
						if (have_posts()) : while (have_posts()) : the_post(); $counter++; ?>
							<section id="post-<?php the_ID(); ?>" <?php post_class('post-count-'.$counter.' front-post'); ?>>
								<header class="header">
									<h4 class="post-title">
										<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h4>
									<time class="post-time">
										<?php the_time('d.m.y'); ?>
									</time>
								</header>
								<a class="post-link" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"></a>
							</section>
						<?php endwhile; endif; wp_reset_query(); ?>
						<div class="clear"></div>
					</div>
				</div>
				<div class="three-columns-one last">
					<div id="info-text" data-type="prlx" data-speed="0.375">

					</div>
				</div>
				<div class="divider"></div>
			</div>
		</section>
		*/ ?>
		<section id="section-social" class="section">
			<div class="inner">
				<div id="social-wrapper">
				<span><a class="button button-dark button-social button-twitter"  href="https://twitter.com/hoccer" target="_blank"><i class="fa fa-twitter"></i> Hoccer</a></span>
				<span><a class="button button-dark button-social button-facebook"  href="https://facebook.com/hoccer" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></span>
				<span><a class="button button-dark button-social button-mail"  href="mailto:info@hoccer.com"><i class="fa fa-envelope-o"></i> Mail</a></span>
				</div>
			</div>
		</section>

<?php get_footer(); ?>