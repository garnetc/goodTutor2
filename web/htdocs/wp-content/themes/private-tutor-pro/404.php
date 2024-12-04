<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Luzuk Premium
 */

get_header(); ?>
<header class="page-main-header">
	 <div>
        <?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
       

         <?php
        //print_r ($post);
            if (!empty($image)){
                echo ' <div class="page_featured wow bounceInLeft"  style="background: url('.$image.'); background-repeat: no-repeat; background-size:cover; background-attachment: fixed; "</div>';
            }
        ?>

        <!-- <img src="<?php //echo !empty($image)?$image : get_template_directory_uri().'/images/innerpage.jpg';?>" class="ht-page-header-img" alt="<?php //the_title();?>" /> -->
    </div>
	<div class="ht-container">
		<h1 class="ht-main-title wow zoomIn"><?php esc_html_e( '404 Error', 'total' ); ?></h1>
		<?php do_action( 'total_breadcrumbs' ); ?>
	</div>   
</header><!-- .entry-header -->
<main id="innerpage-box">
	<div class="container">
        <div class="inner_contentbox">
			<div class="oops-text"><?php esc_html_e( 'Oops! This Page Could Not Be Found.', 'total' ); ?></div>
			<span class="error-404"><?php esc_html_e( '404', 'total' ); ?></span>
			<div class="oops-text"><?php esc_html_e( 'SORRY BUT THE PAGE YOU ARE LOOKING FOR DOES NOT EXIST, HAVE BEEN REMOVED. NAME CHANGED OR IS TEMPORARILY UNAVAILABLE', 'total' ); ?></div>
        <div class="clearfix"></div>
    </div>
	</div>
</main><!-- #main -->

<?php get_footer(); ?>