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
 * @package luzuk
 */
get_header(); ?>
<div class="clearfix"></div>

	<?php do_action('woocommerce_before_main_content'); ?>
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="page-title wow zoomIn"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>						
	<?php do_action( 'woocommerce_archive_description' ); ?>		
	
<div class="single-productpage">
	<main id="innerpage-box">
		<?php
			//if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
			//get_header('shop'); ?>
			<div id="page" class="container" >
				<div class="inner_contentbox" >
				<article id="content" class="article">
					

					<div class="col-sm-9 col-sm-push-3">	
											
							<?php if ( have_posts() ) : ?>						
								<?php do_action( 'woocommerce_before_shop_loop' ); ?>
								<?php woocommerce_product_loop_start(); ?>
								<?php woocommerce_product_subcategories(); ?>
								<?php while ( have_posts() ) : the_post(); ?>
									<?php wc_get_template_part( 'content', 'product' ); ?>
								<?php endwhile; // end of the loop. ?>
								<?php woocommerce_product_loop_end(); ?>
								<?php do_action( 'woocommerce_after_shop_loop' ); ?>
								<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
								<?php //woocommerce_get_template( 'loop/no-products-found.php' ); ?>
							<?php endif; ?>				
					</div>
					<div class="col-sm-3 col-sm-pull-9 product-page">
						<?php if( get_theme_mod('cd_button_display','show' ) == 'show') :
					  		?>
					  		<div class='button'><?php get_sidebar( 'shop'); ?></div>
					  	<?php endif ?>
					</div>
					<div class="clearfix"></div>
				</article>
				<?php /*do_action('woocommerce_sidebar');*/ ?>
				<?php //get_sidebar(); ?>	
				<div class="clearfix"></div>
			</div>
				<div class="clearfix"></div>
			</div>	
	</main><!-- #main -->
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
