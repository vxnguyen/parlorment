<?php
/**
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Parlorment
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div <?php post_class(); ?>>
				<div class="post-thumbnail">
					<?php echo wp_get_attachment_image( get_field('thumbnail'), 'full'); ?>

					<div class="post-social-media">
						<div>
							<div class="social-media-icon facebook">
								<div class="flipper">
									<div class="front"></div>
									<img class="back" src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png">
								</div>
							</div>

							<div class="social-media-icon twitter">
								<div class="flipper">
									<div class="front"></div>
									<img class="back" src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png">
								</div>
							</div>

							<div class="social-media-icon pinterest">
								<div class="flipper">
									<div class="front"></div>
									<img class="back" src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest.png">
								</div>
							</div>

							<div class="social-media-icon reddit">
								<div class="flipper">
									<div class="front"></div>
									<img class="back" src="<?php bloginfo('stylesheet_directory'); ?>/images/reddit.png">
								</div>
							</div>
						</div>
					</div>

					<div class="post-share">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/share.png">
					</div>
				</div>

				<h2 class="post-title"><?php the_title(); ?></h2>

				<div class="post-meta">
					<div>
						<div class="author">
							By<br><?php the_author(); ?> 
						</div>

						<div class="date">
							<?php  echo the_date("j<\b\\r>M Y"); ?>
							
						</div>
					</div>
				</div>
			</div>	

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
