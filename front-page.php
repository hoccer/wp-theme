<?php get_header(); ?>
		<?php $detect = new Mobile_Detect(); ?>
		<?php $templatepath = get_bloginfo('template_url'); ?>
		<?php $options = get_option('hoccer_theme_options'); ?>
		
		<?php $appstorexo = get_post_meta($post->ID, 'appstorexo', true); ?>
		<?php $playstorexo = get_post_meta($post->ID, 'playstorexo', true); ?>
		<?php $apk = get_post_meta($post->ID, 'apkxo', true); ?>
		
		<?php $faq = get_post_meta($post->ID, 'faq', true); ?>
		
		<section id="section-header" class="section">
			<div class="inner">
				<div class="three-columns-two">
					<div id="header-text" data-type="prlx" data-speed="0.500">
						<h1 class="section-title"><?php _e('A secure messenger for simplified data sharing.','hoccer'); ?></h1>
						<?php if ($detect->isiOS() && $appstorexo) : ?>
							<a class="button-download button anchor" href="<?php echo $appstorexo; ?>"><i class="fa fa-apple"></i> Download</a>
						<?php elseif ($detect->isAndroidOS() && $playstorexo) : ?>
							<a class="button-download button anchor" href="<?php echo $playstorexo; ?>"><i class="fa fa-android"></i> Download</a>
							<?php if($apk) : ?>
								<a class="button-download button anchor" href="<?php echo $apk; ?>"><i class="fa fa-archive"></i> APK</a>
							<?php endif; ?>
						<?php else : ?>
							<a class="button-download button anchor" href="#section-download"><i class="fa fa-download"></i> Download</a>
						<?php endif; ?>
					</div>
				</div>
				<div class="three-columns-one last">
					<div id="header-image" data-type="prlx" data-speed="0.375"></div>
				</div>
				<div class="divider"></div>
			</div>
			<a class="section-next anchor" href="#section-features"><i class="fa fa-chevron-down"></i></a>
		</section>
		
		<section id="section-features" class="section">
			<div class="inner">
				<?php
					$args = array(
						'post_type' => 'features',
						'posts_per_page' => 6,
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
				<center><a id="button-faq" class="button button-dark button-faq" href="<?php echo $faq ?>"><i class="fa fa-lightbulb-o"></i> FAQ</a></center>
			</div>
<!-- 			<a class="section-next anchor" href="#section-info"><i class="fa fa-chevron-down"></i></a> -->
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
						<div id="<?php echo 'slide-'.$counter; ?>" class="slide-section section <?php echo 'slide-section-'.$counter; ?>" style="background-image: url(<?php echo $image[0]; ?>);">
							<div class="inner">
								<div class="slide-info">
									<h3 class="slide-title"><?php the_title(); ?></h3>
									<div class="slide-text"><?php the_content(); ?></div>
								</div>
							</div>
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
						<div id="info-image" data-type="prlx" data-speed="0.375">
							<img class="appicon" src="<?php echo $templatepath; ?>/images/appicon-hoccer-xo.png" alt="" />
						</div>
					</div>
					<div class="three-columns-two last">
						<div id="info-text" data-type="prlx" data-speed="0.250">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="divider"></div>
				</article>
			</div>
<!-- 			<a class="section-next anchor" href="#section-download"><i class="fa fa-chevron-down"></i></a> -->
		</section>
		
		<?php /*
		
		<section id="section-video" class="section">
			<figure id="video-frame">
				<div id="video-layer"></div>
				<iframe id="video" width="640" height="360" src="http://www.youtube.com/embed/2Fn1t8culTc?showinfo=0&controls=2" frameborder="0" allowfullscreen></iframe>
			</figure>
		</section>
		
		*/ ?>
		
		<section id="section-download" class="section">
			<div class="inner">
				<h2 class="section-title"><?php _e('Start protecting your messages now!','hoccer'); ?></h2>
				<div class="clear"></div>
				<?php if($appstorexo) : ?>									
					<span><a class="button appstore"  href="<?php echo $appstorexo ?>" target="_blank"><i class="fa fa-apple"></i> AppStore</a></span>
				<?php endif; ?>
				<?php if($playstorexo) : ?>
					<span><a class="button gplay"  href="<?php echo $playstorexo ?>" target="_blank"><i class="fa fa-android"></i> Android</a></span>
				<?php endif; ?>
				<?php if($apk) : ?>
					<span><a class="button apk"  href="<?php echo $apk ?>" target="_blank"><i class="fa fa-archive"></i> APK</a></span>
				<?php endif; ?>
			</div>
		</section>
		
		
		<section id="section-social" class="section">
			<div class="inner">
				<div id="social-info" data-type="prlx" data-speed="0.250">
				<figure>
					<img src="<?php echo $templatepath ?>/images/xo.png" alt="" />
				</figure>
				
				<span><a class="button button-dark button-social button-twitter"  href="https://twitter.com/hoccerxo" target="_blank"><i class="fa fa-twitter"></i> Hoccer XO</a></span>
				<span><a class="button button-dark button-social button-twitter"  href="https://twitter.com/hoccer" target="_blank"><i class="fa fa-twitter"></i> Hoccer</a></span>
				<span><a class="button button-dark button-social button-facebook"  href="https://facebook.com/hoccer" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></span>
				<span><a class="button button-dark button-social button-mail"  href="mailto:info@hoccer.com"><i class="fa fa-envelope-o"></i> Mail</a></span>
				</div>
			</div>
		</section>

<?php get_footer(); ?>