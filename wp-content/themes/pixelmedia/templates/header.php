<div id="top-cta-wrapper">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell large-8">
				<ul class="cta-list">
					<div id="phone-text" class="cta-top">
						<li>
							<i class="fa fa-phone"></i>Phone:<span> +3900 4444 234</span>
						</li>
					</div>
					<div id="email-text" class="cta-top">
						<li>
							<i class="fa fa-envelope-open"></i>Email:<span> hello@pixelmedia.com</span>
						</li>
					</div>
				</ul>
			</div>
			<div class="cell large-4"> 
				<div class="tagline">
					<span>Helping you meet your next customers online</span>
				</div><!-- .tagline -->
			</div>
		</div>
	</div>
</div><!-- #top-cta-wrapper -->
<div id="header-wrapper">
	<header id="master-header">
	    <div data-sticky-container>
	          <div class="title-bar" data-sticky data-options="marginTop:0;" style="width:100%">
	                <div id="header-wrapper" class="grid-container">
	                      <div class="grid-x grid-padding-x">
	                          <div class="cell medium-3 large-3 title-bar-left">
	                                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo.png" alt="gobpo">
	                          </div>
	                          <div class="cell medium-9 large-9 title-bar-right">
	                           <div id="nav-mobile" class="navTrigger">
	                              <i></i><i></i><i></i>
	                          </div> 
	                                  <nav id="site-navigation" class="main-navigation" role="navigation">
	                                        <?php wp_nav_menu( array( 
	                                          'menu'           => 'main-menu',
	                                          'theme_location' => 'primary', 
	                                          'menu_id'        => 'primary-menu' 
	                                          ) ); 
	                                        ?>       
	                                  </nav><!-- #site-navigation -->
	                          </div>
	                      </div>
	                </div>
	          </div>
	    </div>
	</header><!-- #master-header -->
</div><!-- #header-wrapper -->
