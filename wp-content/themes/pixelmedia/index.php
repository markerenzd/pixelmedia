<?php global $data; ?>
<div id="banner-wrapper" style="height: 720px;" data-vide-bg="mp4:<?php echo get_stylesheet_directory_uri(); ?>/assets/video/ocean, webm: <?php echo get_stylesheet_directory_uri(); ?>/assets/video/ocean, ogv:<?php echo get_stylesheet_directory_uri(); ?>/assets/video/ocean, poster: <?php echo get_stylesheet_directory_uri(); ?>/assets/video/ocean" data-vide-options="posterType: jpg, loop: true, muted: false">
	<div class="center-container">
		<div class="center-block">
			<h1>DELIVERING GREAT RESULTS POSSIBLE</h1>
            <p>We are a dynamic team of creatives people of innovation & Marketing Expert</p>
            <a class="booknow-btn" href="#modal" data-remodal-target="modal">Book Now</a>
        </div><!-- .center-block -->
	</div><!-- .center-container -->
</div><!-- #banner-wrapper -->

<div id="main-intro" style="background:url('<?php echo get_bloginfo('template_url') ?>/assets/images/map-pattern.jpg ?>') center center !important;" class="clearfix">
	<div id="main-wrapper" class="grid-x grid-padding-x">
		<div class="grid-container">
			<div class="cell large-12">
				<h2 class="wow slideInLeft"><?php echo $data['why_heading'] ?></h2>
					<?php echo $data['why_desc'] ?>
			</div>
			<div id="service-wrapper" class="grid-x grid-padding-x small-up-1 medium-up-3 large-up-3">
				<div class="item cell wow fadeIn" data-wow-delay="0.3s">
				 	<div class="item-wrapper">
					 	<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/content.png ?>" alt="">
					 	<h2>Increase Your Website Conversion Rates</h2>
				 	</div>
				</div>
				<div class="item cell wow fadeIn " data-wow-delay="0.6s">
					<div class="item-wrapper">
					 	<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/design-development.png ?>" alt="">
					 	<h2>Grow Your Audience & Strengthen Your Brand</h2>
					</div>
				</div>
				<div class="item cell wow fadeIn" data-wow-delay="0.9s">
					<div class="item-wrapper">
					 	<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/online-market.png ?>" alt="">
					 	<h2>Expand YOur Marketing Channel</h2>
				 	</div>
				</div>
				<a class="learn-more" href="<?php  echo $data['why_url_plan'] ?>">View Our Winning Plans</a>
			</div>

		</div>
	</div>
</div>

<div id="why-us" class="grid-x clearfix" style="background:url('<?php echo get_bloginfo('template_url') ?>/assets/images/background-2.jpg ?>');" >
	<div id="why-wrapper" class="grid-container"> 
		<div class="grid-x grid-padding-x">
			<div id="infograph" class="cell large-6">
				<img class="wow fadeInLeftBig" src="<?php echo get_bloginfo('template_url') ?>/assets/images/info-graph.png ?>" alt="">
			</div>
			<div id="content-graph" class="cell large-6  wow fadeInRightBig">
				<h2>Who We Are</h2>
				<span>Poised for ‘Marketing Innovation with a Creative Edge</span>
				<p>We know our market, we choose to whom we market. When it comes to helping brands succeed, we set our full potential in producing high quality work; balancing work of art & science. We create, plan and deliver great results in orer to broaden the recognition your business truly deserves!  </p>
				<span class="left">#digitalmarketingcertified</span><span class="right">#webmastercertified</span>
				<div id="marketer-wrapper" class="grid-x grid-padding-x small-up-1 medium-up-3 large-up-3">
					<div class="item cell wow fadeIn" data-wow-delay="0.3s">
					 	<div class="item-wrapper">
						 	<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/google.png ?>" alt="">
					 	</div>
					</div>
					<div class="item cell wow fadeIn " data-wow-delay="0.6s">
						<div class="item-wrapper">
						 	<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/marketer.png ?>" alt="">
						</div>
					</div>
					<div class="item cell wow fadeIn" data-wow-delay="0.9s">
						<div class="item-wrapper">
						 	<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/facebook.png ?>" alt="">
					 	</div>
					</div>
			</div>
			</div>
		</div>
	</div>
</div>


<div class="remodal" data-remodal-id="modal"
  data-remodal-options="hashTracking: false, closeOnOutsideClick: false">

  <button data-remodal-action="close" class="remodal-close"></button>
  <h1>Book Now</h1>
  <p>
    Responsive, lightweight, fast, synchronized with CSS animations, fully customizable modal window plugin with declarative configuration and hash tracking.
  </p>
  <br>
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
</div>