<footer id="main-footer" class="clearfix">
	<div class="grid-container">
		  <div class="grid-x grid-margin-x">
			    <div id="branding" class="cell medium-4 large-4">
			    	<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/footer-logo.jpg ?>" alt="">
			    	<div class="social-media">
						<?php dynamic_sidebar( 'sidebar-socialnet' ); ?>
			    	</div>
			    	<div id="copywrite">2018 © Pixel X Media. All Rights Reserved.<br>Privacy & Terms of Service</div>
			    </div>
			    <div id="quick-links" class="cell medium-4 large-4">
			    		<?php dynamic_sidebar( 'sidebar-quicklinks' ); ?>
			    </div>
			    <div id="footer-form" class="cell medium-4 large-4">
			    	<span class="footer-heading">Witness great results happen to your brand!</span>
			    	<?php echo do_shortcode('[contact-form-7 id="15" title="Footer Book Now"]') ?>
			    </div>
		  </div>
	</div>
</footer>



