<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ea
 */

echo '<article class="' . join( ' ', get_post_class() ) . '">';

	echo '<header class="entry-header">';
		tha_entry_top();
	echo '</header>';

	echo '<div class="entry-content">';
		tha_entry_content_before();

		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ea' ),
			'after'  => '</div>',
		) );

		tha_entry_content_after();
	echo '</div>';

	echo '<footer class="entry-footer">';
		tha_entry_bottom();
	echo '</footer>';

echo '</article>';
