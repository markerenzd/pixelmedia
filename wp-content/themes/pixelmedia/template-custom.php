<?php
/**
 * Template Name: Blog
 */
?>
<div id="page-wrapper" class="clearfix">
	<div class="page-title">
		<div id="breadcrumb" class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-6 medium-6 small-3 cell">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
				<div class="large-6 medium-6 small-9 cell">
					<div class="breadcrumbs-wrapper clearfix" typeof="BreadcrumbList" vocab="http://schema.org/">
		   				 <?php if ( function_exists('yoast_breadcrumb') ) {
		   				 	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		   				 }?>
					</div>
				</div>
				</div><!-- #breadcrumb -->
		</div>	
	</div>
	<div id="blog" class="grid-container">
			<div id="blog-wrapper" class="clearfix">
				<div class="grid-x grid-padding-x">
				<div class="large-9 medium-9 cell">
					<?php 
							$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
							$args = array( 'posts_per_page' => 3, 'paged' => $paged );
					 ?>	
					<?php $wpb_all_query = new WP_Query($args); ?>
					<?php if ( $wpb_all_query->have_posts() ) : ?>
						<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
							<article class="large-12 columns nopadding">
								<div  id="post-<?php echo get_the_ID() ?>" <?php post_class(); ?>>
							  		<a href="<?php echo get_permalink(); ?>">
							  			<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
							  			<img src="<?php echo $featured_img_url ?>" alt="<?php echo get_the_title() ?>">
							  		</a>
							  	<div class="blog-content">
							  		<div class="icon pull-left">
										<i class="fa fa-book"></i>
									</div>
									<div class="blog-info">
										<h2><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
										<ul class="meta">
											<li data-toggle="tooltip" data-placement="top" title="" data-original-title="">
													<i class="fa fa-user"></i>
													<?php echo get_the_author(); ?>			
											</li>

											<li data-toggle="tooltip" data-placement="top" title="" data-original-title="Published date">
												<i class="fa fa-calendar-o"></i>
												<?php the_time('jS F Y') ?>
											</li>
										<li data-toggle="tooltip" data-placement="top" title="" data-original-title="">
													<i class="fa fa-comment"></i>
													<?php echo get_comments_number() ?> Comment			
											</li>										
										</ul>
									</div><!-- .blog-info -->
									<p><?php echo wp_trim_words(get_the_content(), 55, '...'); ?></p>
									<a href="<?php echo get_the_permalink() ?>" class="btn btn-default readmore">Read more...</a>
							  	</div><!-- .blog-content -->
								</div>
							</article>
							
						<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
							<?php if (function_exists("pagination")) { pagination($wpb_all_query->max_num_pages);} ?>	
					<?php else : ?>
				   	 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
				<div class="large-3 medium-3 cell">
					<div class="wrapper-reccent">
						<h3>RECENT NEWS</h3>
						<div class="recent-content">
							<?php 
								$args = array( 'post_type' => 'post', 'posts_per_page'  => 4, 'orderby' => 'date', 'order' => 'DESC', 'no_found_rows' => 'true', '_shuffle_and_pick' => 4 );
								$query = new WP_Query( $args );?>
							<ul class="recent-list">
								<?php if ( $query->have_posts() ) : ?>
									<?php while ( $query->have_posts() ) : $query->the_post(); ?>
										<li class="clearfix">
											<a href="recent-img">
												<img class="recent-thumbs" src="<?php the_post_thumbnail_url( array(30, 30) ) ?>" alt="<?php echo get_the_title() ?>">
											</a>
											<h4 class="recent-title"><a href="<?php echo get_permalink() ?>" title="Permalink to Vestibulum Tortor Quam, Feugia" rel="bookmark"><?php echo get_the_title() ?></a></h4>
											<time class="recent-time"><?php the_time('F j, Y')  ?></time>
										</li>
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>
					<div class="wrapper-reccent">
							<?php $num_comments = get_comments_number();?>
							<?php if ($num_comments == 0): ?>
								<div class="wrapper-reccent">
									<h3>RECENT COMMENTS</h3>
									<p>No Recent Comments</p>
								</div>
							<?php else: ?>
								<?php dynamic_sidebar( 'sidebar-comments' ); ?>
							<?php endif ?>
								<?php dynamic_sidebar( 'sidebar-blogsidebar' ); ?>		
					</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>




		
		
