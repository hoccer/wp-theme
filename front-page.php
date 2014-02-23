<?php get_header(); ?>
		<?php $detect = new Mobile_Detect(); ?>
		<?php $templatepath = get_bloginfo('template_url'); ?>
		<?php $options = get_option('hoccer_theme_options'); ?>
		
		<?php $appstorexo = get_post_meta($post->ID, 'appstorexo', true); ?>
		<?php $playstorexo = get_post_meta($post->ID, 'playstorexo', true); ?>
		<?php $apk = get_post_meta($post->ID, 'apkxo', true); ?>		
		
		<section id="section-header" class="section">
			<div class="inner">
				<div class="three-columns-two">
					<div id="header-text">
						<h1 class="section-title">A secure messenger for simplified data sharing.</h1>
						<a id="download" class="download anchor" href="#section-download"><i class="fa fa-download"></i> Download</a>
					</div>
				</div>
				<div class="three-columns-one last">
					<div id="header-image"></div>
				</div>
				<div class="divider"></div>
			</div>
			<a class="section-next anchor" href="#section-features"><i class="fa fa-chevron-down"></i></a>
		</section>
		
		<section id="section-features" class="section">
			<div class="inner">
				<div class="two-columns-one">
					<figure class="feature-image"><i class="fa fa-lock"></i></figure>
					<h3 class="feature-title">End-to-end Encryption</h3>
					<p class="feature-text">Full encryption on your device so only your friend can read your messages.</p>
				</div>
				<div class="two-columns-one last">
					<figure class="feature-image"><i class="fa fa-puzzle-piece"></i></figure>
					<h3 class="feature-title">All types of media</h3>
					<p class="feature-text">Send photos, videos, songs, voice records, contact and your current location as safe as your text messages.</p>
				</div>
				<div class="divider"></div>
				<div class="two-columns-one">
					<figure class="feature-image"><i class="fa fa-truck"></i></figure>
					<h3 class="feature-title">Unlimited filesize</h3>
					<p class="feature-text">Large Videos? Very long Songs? No problem for us, no limits for you.</p>
				</div>
				<div class="two-columns-one last">
					<figure class="feature-image"><i class="fa fa-money"></i></figure>
					<h3 class="feature-title">Free and ad-free</h3>
					<p class="feature-text">Our B2B-Plans allows us, to free our service to all private users without any limitations.</p>
				</div>
				<div class="divider"></div>
				<div class="two-columns-one">
					<figure class="feature-image"><i class="fa fa-eye-slash"></i></figure>
					<h3 class="feature-title">No contacts upload</h3>
					<p class="feature-text">We dont scan any of your data. Not even for pairing with your friends.</p>
				</div>
				<div class="two-columns-one last">
					<figure class="feature-image"><i class="fa fa-group"></i></figure>
					<h3 class="feature-title">Group chats</h3>
					<p class="feature-text">Of course you are able to chat with groups, too.</p>
				</div>
				<div class="divider"></div>
			</div>
			<a class="section-next anchor" href="#section-info"><i class="fa fa-chevron-down"></i></a>
		</section>
		
		<?php /*
		
		<section id="section-slider" class="section">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div id="slide-1" class="slide-section section">
							<div class="inner">
								<h3 class="slide-title">Slide</h3>
							</div>
						</div>
					</li>
					<li>
						<div id="slide-2" class="slide-section section">
							<div class="inner">
								<h3 class="slide-title">Slide</h3>
							</div>
						</div>
					</li>
					<li>
						<div id="slide-3" class="slide-section section">
							<div class="inner">
								<h3 class="slide-title">Slide</h3>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
		
		*/ ?>
		
		<section id="section-info" class="section">
			<div class="inner">
				<article class="article">
					<div class="three-columns-one">
						<div id="info-image">
						<img class="appicon" src="<?php echo $templatepath; ?>/images/appicon-hoccer-xo.png" alt="" />
						</div>
					</div>
					<div class="three-columns-two last">
						<div id="info-text">
						<h2><?php _e('Your free Messenger App','hoccer'); ?></h2>
						<p><?php _e('Unlimted data transfer – safe, reliable and fast. Hoccer XO is your personal messenger service. Share text, photos, videos, contacts and places. Protecting your privacy is our highest priority. Your messages are protected using end-to-end encryption.','hoccer'); ?></p>
						<p><?php _e('Hoccer XO is more secure than most other messaging services. Even we at Hoccer can not read your messages. Your contacts and phone numbers stay with you. We don&#39;t need or want them.','hoccer'); ?></p>
						<p><?php _e('<a href="http://hoccer.com/hoccer-xo-privacy-security-statement/">Our Privacy & Security Statement</a>','hoccer'); ?></p>
						</div>
					</div>
					<div class="divider"></div>
				</article>
			</div>
			<a class="section-next anchor" href="#section-download"><i class="fa fa-chevron-down"></i></a>
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
				<h2 class="section-title">Start protecting your messages now!</h2>
				<div class="clear"></div>
				<?php if($appstorexo) : ?>									
					<span><a class="download appstore"  href="<?php echo $appstorexo ?>" target="_blank"><i class="fa fa-apple"></i> AppStore</a></span>
				<?php endif; ?>
				<?php if($playstorexo) : ?>
					<span><a class="download gplay"  href="<?php echo $playstorexo ?>" target="_blank"><i class="fa fa-android"></i> Android</a></span>
				<?php endif; ?>
				<?php if($apk) : ?>
					<span><a class="download apk"  href="<?php echo $apk ?>" target="_blank"><i class="fa fa-archive"></i> APK</a></span>
				<?php endif; ?>
			</div>
		</section>

<?php get_footer(); ?>