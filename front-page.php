		<?php get_header(); ?>
		<?php $detect = new Mobile_Detect(); ?>
		<?php $templatepath = get_bloginfo('template_url'); ?>
		<!-- Hoccer XO Teaser -->
		<div id="panorama-1" class="intro-outside panorama-1">
			<div class="intro-inside">
				<aside class="intro">
					<h1><img src="<?php echo $templatepath; ?>/images/logo-hoccer-xo.png" alt="Hoccer XO" width="352" height="70" /></h1>
					<p><span class="slogan"><?php _e('Share hugs &amp; kisses','hoccer'); ?></span></p>
				</aside>
				<div class="intro-image"></div>
			</div>
			<span class="credits">
				Photo CC BY 2.0: <a target="_blank" rel="nofollow" href="http://www.flickr.com/photos/65845331@N07/5996763395/sizes/l/in/photostream/">ik ben bram</a>
			</span>
			<div class="download-outside">
				<div class="download-inside">
					<?php if($detect->isiOS() && !$detect->isTablet()) : ?>
						<aside class="download download-platform">
							<span><a class="button appstore"  href="https://itunes.apple.com/gb/app/hoccer-xo/id641387450" target="_blank">AppStore</a></span>
						</aside>
					<?php //elseif($detect->isAndroidOS() && !$detect->isTablet()) : ?>
						<!--<aside class="download download-platform">
							<span><a class="button gplay-teaser"  href="#" target="_blank">Android</a></span>
						</aside>-->
					<?php else : ?>
						<aside class="download">
							<span><a class="button appstore"  href="https://itunes.apple.com/gb/app/hoccer-xo/id641387450" target="_blank">AppStore</a></span>
							<!--<span><a class="button gplay-teaser"  href="#" target="_blank">Android</a></span>-->
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
							<p><a href="<?php bloginfo('url'); ?>/hoccer-xo-privacy-security-statement/"><?php _e('Our Privacy & Security Statement','hoccer'); ?></a></p>
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
		<div class="tutorial-outside" id="tutorial-xo">
			<div class="tutorial-inside inner">
				<div class="tut-nav">
					<ul>
					<li><img src="<?php echo $templatepath; ?>/images/tutorial/tut-icon-0.png" alt="" /><a class="tut-0"><?php _e('Conversation','hoccer'); ?></a></li>
					<li><img src="<?php echo $templatepath; ?>/images/tutorial/tut-icon-1.png" alt="" /><a class="tut-1"><?php _e('Chat','hoccer'); ?></a></li>
					<li><img src="<?php echo $templatepath; ?>/images/tutorial/tut-icon-2.png" alt="" /><a class="tut-2"><?php _e('Contacts','hoccer'); ?></a></li>
					<li><img src="<?php echo $templatepath; ?>/images/tutorial/tut-icon-3.png" alt="" /><a class="tut-3"><?php _e('Group','hoccer'); ?></a></li>
					<li><img src="<?php echo $templatepath; ?>/images/tutorial/tut-icon-4.png" alt="" /><a class="tut-4"><?php _e('Profile','hoccer'); ?></a></li>
					<li><img src="<?php echo $templatepath; ?>/images/tutorial/tut-icon-5.png" alt="" /><a class="tut-5"><?php _e('Settings','hoccer'); ?></a></li>
					</ul>
				</div>
				<div class="tut-area">
					<div class="tut-area-device">
						<div class="tut-img-0 tut-cnt-0">
							<img src="<?php echo $templatepath; ?>/images/tutorial/tut-img-0.png" />
						</div>
						<div class="tut-img-1 tut-cnt-1">
							<img src="<?php echo $templatepath; ?>/images/tutorial/tut-img-1.png" />
						</div>
						<div class="tut-img-2 tut-cnt-2">
							<img src="<?php echo $templatepath; ?>/images/tutorial/tut-img-2.png" />
						</div>
						<div class="tut-img-3 tut-cnt-3">
							<img src="<?php echo $templatepath; ?>/images/tutorial/tut-img-3.png" />
						</div>
						<div class="tut-img-4 tut-cnt-4">
							<img src="<?php echo $templatepath; ?>/images/tutorial/tut-img-4.png" />
						</div>
						<div class="tut-img-5 tut-cnt-5">
							<img src="<?php echo $templatepath; ?>/images/tutorial/tut-img-5.png" />
						</div>
					</div>
				</div>
				<div class="tut-info">
					<div class="tut-info-inner">
						<div class="tut-info-0 tut-cnt-0">
							<h4><?php _e('Some Info Headline','hoccer'); ?></h4>
							<p><?php _e('Some Info Text.','hoccer'); ?></p>
						</div>
						<div class="tut-info-1 tut-cnt-1">
							<h4><?php _e('Some Info Headline','hoccer'); ?></h4>
							<p><?php _e('Some Info Text','hoccer'); ?></p>
						</div>
						<div class="tut-info-2 tut-cnt-2">
							<h4><?php _e('Some Info Headline','hoccer'); ?></h4>
							<p><?php _e('Some Info Text','hoccer'); ?></p>
						</div>
						<div class="tut-info-3 tut-cnt-3">
							<h4><?php _e('Some Info Headline','hoccer'); ?></h4>
							<p><?php _e('Some Info Text','hoccer'); ?></p>
						</div>
						<div class="tut-info-4 tut-cnt-4">
							<h4><?php _e('Some Info Headline','hoccer'); ?></h4>
							<p><?php _e('Some Info Text','hoccer'); ?></p>
						</div>
						<div class="tut-info-5 tut-cnt-5">
							<h4><?php _e('Some Info Headline','hoccer'); ?></h4>
							<p><?php _e('Some Info Text','hoccer'); ?></p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<!-- Hoccer Teaser -->
		<div id="panorama-2" class="intro-outside panorama-2">
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
							<iframe class="video" width="640" height="360" src="http://www.youtube.com/embed/2Fn1t8culTc" frameborder="0" allowfullscreen></iframe>
						</figure>
					</article>
				</div>
				<div class="divider"></div>
				<div class="clear"></div>
			</div>
		</div>
		<?php get_footer(); ?>