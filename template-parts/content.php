<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Parlorment
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="modal-content">
		<header class="entry-header">
			<?php the_title( '<h1 class="modal-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div>
			<!-- image slider -->
		</div>

		<div class="modal-meta-content">
			<div class="post-meta">
				<div class="author">
					By<br><?php the_author(); ?> 
				</div>

				<div class="date">
					<?php  echo the_date("j<\b\\r>M Y"); ?>
				</div>
			</div>

			<div class="modal-post-content">
				<p><?php the_field('content'); ?></p>
			</div>
		</div>
	</div>

	<div class="modal-sidebar">
	</div>
</article><!-- #post-## -->
