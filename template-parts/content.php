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
	<div>
		<header class="entry-header">
			<?php the_title( '<h1 class="modal-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	</div>

	<div class="post-sidebar">
	</div>
</article><!-- #post-## -->
