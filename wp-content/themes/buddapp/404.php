<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BuddApp
 */

get_header(); ?>

	<section class="feature-image feature-image-default" data-type="background" data-speed="2">
		<h1>Bummer, that page can't be found!</h1>
	</section>

	<div class="container">
		<div id="primary" class="row">
			<main id="content" class="col-md-8">
				<div class="error-404 not-found">
					<div class="page-content">
						<h2>Don't fret lets get you back on track</h2>

						<!-- RESOURCES -->
						<h3>Resources</h3>
						<p>Perhaps you were looking for a specific resource?</p>

						<div class="resource-row clearfix">

							<?php $loop = new WP_Query( array( 'post_type' => 'resource', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
					
								<div class="resource">
							    	
									<img src="<?php echo get_field('resource_image')[url] ?>" alt="<?php echo get_field('resource_image')[ini_alter()] ?>">

							    	<h3><a href="<?php echo get_field('resource_url') ?>"><?php the_title(); ?></a></h3>
							    	
									<?php the_excerpt(); ?>

									<?php if( !empty(get_field('button_text')) ) :  ?>
							    	<a class="btn btn-success" href="<?php echo get_field('resource_url'); ?>"><?php echo get_field('button_text'); ?></a>

							    <?php endif; ?>
						    	</div>

							<?php endwhile; ?>

				    	</div><!-- resource row -->

				    	<!-- CATEGORY -->
				    	<h3>Categories</h3>
				    	<p>Or maybe a popular category?</p>

				    	<div class="widget widget_categories">
				    		<h4 class="widget-title">
				    			Most used categories
				    		</h4>
				    		<ul>
				    			<?php wp_list_categories( array(

				    				'orderby'	=> 'count',
				    				'order'		=> 'DESC',
				    				'show_count' => 1,
				    				'title_li'	=> '',
				    				'number'	=> 10


				    			) ) ?>
				    		</ul>
				    	</div><!-- WIDGET -->

				    	<!-- ARCHIVES -->
						<h3>Archives</h3>
						<p>You can always sort through our archives...</p>
						<?php the_widget( 'WP_Widget_Archives', 'title=Our Archives' ); ?>




					</div>
				</div><!-- error -->
			</main><!-- content -->

			<!-- SIDEBAR -->

			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>


		</div><!-- primary -->
	</div><!-- container -->
	

<?php get_footer(); ?>
