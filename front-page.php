		<?php get_header(); ?>
		<?php $detect = new Mobile_Detect(); ?>
		<?php $templatepath = get_bloginfo('template_url'); ?>
		<?php $options = get_option('hoccer_theme_options'); ?>
		
		<?php $playstorexo = get_post_meta($post->ID, 'playstorexo', true); ?>
		<?php $appstorexo = get_post_meta($post->ID, 'appstorexo', true); ?>
		<?php $apkxo = get_post_meta($post->ID, 'apkxo', true); ?>
		
		<!-- Hoccer XO Teaser -->
		<div id="hoccer-xo" class="intro-outside panorama-1">
			<div class="intro-inside">
				<aside class="intro">
					<h1><img src="<?php echo $templatepath; ?>/images/logo-hoccer-xo.png" alt="Hoccer XO" width="352" height="70" /></h1>
					<p><span class="slogan"><?php _e('Share hugs &amp; kisses','hoccer'); ?></span></p>
				</aside>
				<div class="intro-image"></div>
			</div>
			<div class="download-outside">
				<div class="download-inside">
					<?php if($detect->isiOS() && !$detect->isTablet()) : ?>
						<?php if($appstorexo) : ?>
							<aside class="download download-platform">
								<span><a class="button appstore"  href="<?php echo $appstorexo ?>" target="_blank">AppStore</a></span>
							</aside>
						<?php endif; ?>
					<?php elseif($detect->isAndroidOS() && !$detect->isTablet()) : ?>
						<aside class="download download-platform">
							<?php if($playstorexo) : ?>
								<span><a class="button gplay"  href="<?php echo $playstorexo ?>" target="_blank">Android</a></span>
							<?php endif; ?>
							<?php if($apkxo) : ?>
								<span class="last"><a class="button apk"  href="<?php echo $apkxo ?>" target="_blank">.apk</a></span>
							<?php endif; ?>
						</aside>
					<?php else : ?>
						<aside class="download">
							<?php if($appstorexo) : ?>									
								<span><a class="button appstore"  href="<?php echo $appstorexo ?>" target="_blank">AppStore</a></span>
							<?php endif; ?>
							<?php if($playstorexo) : ?>
								<span><a class="button gplay"  href="<?php echo $playstorexo ?>" target="_blank">Android</a></span>
							<?php endif; ?>
							<?php if($apkxo) : ?>
								<span class="last"><a class="button apk"  href="<?php echo $apkxo ?>" target="_blank">.apk</a></span>
							<?php endif; ?>
						</aside>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="article-outside">
			<div class="article-inside inner">
				<article class="article">
					<div class="three-columns-one">
						<img class="appicon" src="<?php echo $templatepath; ?>/images/appicon-hoccer-xo.png" alt="" />
					</div>
					<div class="three-columns-two last">
						<h2><?php _e('Your free Messenger App','hoccer'); ?></h2>
						<div class="two-columns-one">
							<p><?php _e('Your free messenger app! Unlimted data transfer – safe, reliable and fast. Hoccer XO is your personal messenger service. Share text, photos, videos, contacts and places. Protecting your privacy is our highest priority. Your messages are protected using end-to-end encryption.','hoccer'); ?></p>
						</div>
						<div class="two-columns-one last">
							<p><?php _e('Hoccer XO is more secure than most other messaging services. Even we at Hoccer can not read your messages. Your contacts and phone numbers stay with you. We don&#39;t need or want them.','hoccer'); ?></p>
							<p><?php _e('<a href="http://hoccer.com/hoccer-xo-privacy-security-statement/">Our Privacy & Security Statement</a>','hoccer'); ?></p>
						</div>
						<div class="divider"></div>
						<div class="share-links-wrap">
							<ul>
								<li class="twitter">
									<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-lang="<?php bloginfo('language'); ?>"></a>
								</li>
								<li class="gplus">
									<g:plusone size="medium" href="<?php the_permalink(); ?>"></g:plusone>
								</li>
								<li class="fb">
									<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=110&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
								</li>
								<li class="clear"></li>
							</ul>
						</div><!-- share-links-wrap -->
					</div>
					<div class="divider"></div>
				</article>
			</div>
		</div>
		<!-- Hoccer XO Tutorial -->
		<?php if ($options['xo-demo-show']) {
				include('tutorial.php');
			} ?>
		<!-- Hoccer Teaser -->
		<div id="hoccer" class="intro-outside panorama-2">
			<div class="intro-inside">
				<aside class="intro">
					<h1><img src="<?php echo $templatepath; ?>/images/logo-hoccer-classic.png" alt="Hoccer Classic" width="544" height="70" /></h1>
					<p><span class="slogan"><?php _e('Data Sharing simplified','hoccer'); ?></span></p>
				</aside>
			</div>
			<div class="download-outside">
				<div class="download-inside">
					<?php if($detect->isiOS() && !$detect->isTablet()) : ?>
						<aside class="download download-platform">
							<span><a class="button appstore"  href="http://itunes.apple.com/de/app/hoccer/id340180776" target="_blank">AppStore</a></span>
						</aside>
					<?php elseif($detect->isAndroidOS() && !$detect->isTablet()) : ?>
						<aside class="download download-platform">
							<span><a class="button gplay"  href="https://market.android.com/details?id=com.artcom.hoccer" target="_blank">Android</a></span>
						</aside>
					<?php else : ?>
						<aside class="download">
							<span><a class="button appstore"  href="http://itunes.apple.com/de/app/hoccer/id340180776" target="_blank">AppStore</a></span>
							<span><a class="button gplay"  href="https://market.android.com/details?id=com.artcom.hoccer" target="_blank">Android</a></span>
						</aside>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="article-outside">
			<div class="article-inside inner">
				<article class="article">
					<div class="three-columns-one">
						<img class="appicon" src="<?php echo $templatepath; ?>/images/appicon-hoccer-classic.png" alt="" />
					</div>
					<div class="three-columns-two last">
						<h2><?php _e('Gestured controlled content sharing','hoccer'); ?></h2>
						<div class="two-columns-one">
							<p><?php _e('Share your files between mobile and other computing devices. HOCCER is an app for fast, easy and secure file transfer and data exchange. Share any media or other content instantly between all mobile devices – without any setup.','hoccer'); ?></p>
						</div>
						<div class="two-columns-one last">
							<p><?php _e('Use gestures to control the app. “Swipe” between two devices or “throw" and "catch”. Furthermore, with our <a href="http://hocc.it" title="Hoccer WebApp">WebApp</a> you are able to exchange content between your mobile device and your computer.','hoccer'); ?></p>
						</div>
						<div class="divider"></div>
						<div class="share-links-wrap">
							<ul>
								<li class="twitter">
									<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?> – <?php bloginfo('description'); ?>" data-lang="<?php bloginfo('language'); ?>"></a>
								</li>
								<li class="gplus">
									<g:plusone size="medium" href="<?php the_permalink(); ?>"></g:plusone>
								</li>
								<li class="fb">
									<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=110&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
								</li>
								<li class="clear"></li>
							</ul>
						</div><!-- share-links-wrap -->	
					</div>
					<div class="divider"></div>
				</article>
			</div>
		</div>
		<!-- Hoccer Classic Tutorial -->
		<div class="tutorial-outside" id="tutorial-classic">
			<div class="tutorial-inside inner">
				<div class="four-columns-one">
					<img src="<?php echo $templatepath; ?>/images/help/throw.png" />
					<h4><?php _e('Throw','hoccer'); ?></h4>
					<p><?php _e('Move your mobile like throwing a frisbee to share selected content with catchers nearby.','hoccer'); ?></p>
				</div>
				<div class="four-columns-one">
					<img src="<?php echo $templatepath; ?>/images/help/catch.png" />
					<h4><?php _e('Catch','hoccer'); ?></h4>
					<p><?php _e('To catch thrown content, raise your mobile quickly from horizontally to vertical position.','hoccer'); ?></p>
				</div>
				<div class="four-columns-one">
					<img src="<?php echo $templatepath; ?>/images/help/swipe.png" />
					<h4><?php _e('Drag','hoccer'); ?></h4>
					<p><?php _e('In order to share with one person directly, place your mobiles screen to screen and drag the content from one screen to the other mobile.','hoccer'); ?></p>
				</div>
				<div class="four-columns-one last">
					<img src="<?php echo $templatepath; ?>/images/help/autoreceive.png" />
					<h4><?php _e('Auto-Receive','hoccer'); ?></h4>
					<p><?php _e('Hoccer will now automatically "catch" any thrown data if you pull down the handle below the application title bar.','hoccer'); ?></p>
				</div>
				<div class="divider"></div>
				<div class="four-columns-one">
					<img src="<?php echo $templatepath; ?>/images/help/channel.png" />
					<h4><?php _e('Channel','hoccer'); ?></h4>
					<p><?php _e('Create a channel to share content with people over a distance. Enter the same channel name and use auto receive.','hoccer'); ?></p>
				</div>
				<div class="four-columns-one">
					<img src="<?php echo $templatepath; ?>/images/help/encryption.png" />
					<h4><?php _e('Security','hoccer'); ?></h4>
					<p><?php _e('You can restrict communication to one or more partners. Partners with active end-to-end encryption are marked with a key symbol.','hoccer'); ?></p>
				</div>
				<div class="four-columns-two last">
					<article class="article" style="padding-top: 2em;">
						<figure class="video-frame">
							<div class="video-layer">
								<img src="<?php echo $templatepath; ?>/images/video-layer.jpg" />
							</div>
							<iframe class="video" width="640" height="360" src="http://www.youtube.com/embed/2Fn1t8culTc?showinfo=0&controls=2" frameborder="0" allowfullscreen></iframe>
						</figure>
					</article>
				</div>
				<div class="divider"></div>
				<div class="clear"></div>
			</div>
		</div>
		<?php get_footer(); ?>