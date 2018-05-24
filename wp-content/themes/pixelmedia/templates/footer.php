<footer id="main-footer" class="clearfix">
	<div class="grid-container">
		  <div class="grid-x grid-margin-x">
			    <div id="branding" class="cell large-4">
			    	<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/footer-logo.jpg ?>" alt="">
			    	<div class="social-media">
			    		<ul>
			    			<li><i class="fa fa-facebook-square"></i></li>
			    			<li><i class="fa fa-twitter-square"></i></li>
			    			<li><i class="fa fa-linkedin-square"></i></li>
			    			<li><i class="fa fa-instagram"></i></li>
			    		</ul>
			    	</div>
			    	<div id="copywrite">2018 © Pixel X Media. All Rights Reserved.<br>Privacy & Terms of Service</div>
			    </div>
			    <div id="quick-links" class="cell large-4">
			    		<?php dynamic_sidebar( 'sidebar-quicklinks' ); ?>
			    </div>
			    <div id="footer-form" class="cell large-4">
			    	<span>Witness great results happen to your brand!</span>
			    	<?php echo do_shortcode('[contact-form-7 id="15" title="Footer Book Now"]') ?>
			    </div>
		  </div>
	</div>
</footer>



