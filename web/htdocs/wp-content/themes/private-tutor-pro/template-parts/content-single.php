<?php
/**
 * Template part for displaying single posts.
 *
 * @package Luzuk Premium
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="entry-meta ht-post-info">
			<?php total_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'total' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

