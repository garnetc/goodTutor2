<?php 
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Luzuk Premium
 */
get_header(); ?>
  <?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>

<!-- <header class="page-main-header"  style="background: url('<?php //echo esc_url($image); ?>'); background-repeat: no-repeat; background-size:cover; background-attachment: fixed;">

 -->
<header class="page-main-header"  <?php  if (!empty($image)) : ?>
             style="background: url('<?php echo esc_url($image); ?>'); background-repeat: no-repeat; background-size:cover; background-attachment: fixed;position: relative;"
              <?php endif ?>
                >
      <div class="overlay1"></div>
    <div class="container">
        <?php the_title( '<h1 class="ht-main-title wow zoomIn">', '</h1>' ); ?>
        <div class="clearfix"></div>
    </div>
     <?php if( get_theme_mod('breadcrumb_button_display','show' ) == 'show') :
        ?>
        <div class="breadcrumbbox wow zoomIn">
            <div class="container">
                <div class='button'><?php luzuk_lite_the_breadcrumb(); ?></div>
                <!--  <?php //luzuk_lite_the_breadcrumb(); ?> -->
            </div>
        </div>
    <?php endif ?>    
</header><!-- .entry-header --> 

<main id="innerpage-box">
	<div class="container">
           <div class="inner_contentbox">
		<div id="content-box" class="innerpage-whitebox main-timeline">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			<?php endwhile; // End of the loop. ?>
            <div class="clearfix"></div>
		</div><!-- #main -->
		<div class="clearfix"></div>
		
		<div class="pagingation">
    		<?php lzGetPagination($query);?>
		</div>
            <div class="clearfix"></div>
    </div>
	</div>
</main><!-- #main -->
<?php get_footer(); ?>
