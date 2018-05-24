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

<div id="main-intro" style="background:url('<?php echo get_bloginfo('template_url') ?>/assets/images/map-pattern.jpg ?>')">
	<div id="main-wrapper" class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell large-12">
				<h2 class="wow slideInLeft"><?php echo $data['why_heading'] ?></h2>
					<?php echo $data['why_desc'] ?>
			</div>
			<div id="service-wrapper" class="grid-x grid-padding-x small-up-1 medium-up-3 large-up-3">
				<?php $why_list = $data['why_list'] ?>
					<?php foreach ($why_list as $why_item): ?>
						<div class="item cell wow fadeIn" data-wow-delay="0.3s">
						 	<div class="item-wrapper">
							 	<img src="<?php echo $why_item['url'] ?>" alt="<?php echo $why_item['description'] ?>">
							 	<h2><?php echo $why_item['title'] ?></h2>
						 	</div>
						</div><!-- #item -->
					<?php endforeach ?>
					<a class="learn-more" href="<?php  echo $data['why_url_plan'] ?>">View Our Winning Plans</a>
			</div><!-- #service-wrapper -->
		</div>
	</div><!-- #main-wrapper -->
</div><!-- #main-intro -->
</div>

<div id="why-us" class="clearfix" style="background:url('<?php echo get_bloginfo('template_url') ?>/assets/images/background-2.jpg ?>');" >
	<div id="why-wrapper" class="grid-container"> 
		<div class="grid-x grid-padding-x">
			<div id="infograph" class="cell large-6">
				<img class="wow fadeInLeftBig" src="<?php echo $data['who_image'] ?>" alt="who-we-are">
			</div>
			<div id="content-graph" class="cell large-6 wow fadeInRightBig">
				<h2><?php echo $data['who_heading'] ?></h2>
				<?php echo $data['who_desc']; ?>
				<div id="marketer-wrapper" class="grid-x grid-padding-x small-up-1 medium-up-3 large-up-3">
					<?php $partnership = $data['who_list'] ?>
					<?php foreach ($partnership as $partnership_list): ?>
						<div class="item cell wow fadeIn" data-wow-delay="0.3s">
						 	<div class="item-wrapper">
							 	<img src="<?php echo $partnership_list['url'] ?>" alt="<?php echo $partnership_list['title'] ?>">
						 	</div>
						</div>
					<?php endforeach ?>
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