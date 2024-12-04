<?php 
/**
 * The template for displaying archive pages.
 *
 * Used for displaying archive-type pages. These views can be further customized by
 * creating a separate template for each one.
 *
 * - author.php (Author archive)
 * - category.php (Category archive)
 * - date.php (Date archive)
 * - tag.php (Tag archive)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
<?php get_header(); ?>


 <!--  <?php $image //= wp_get_attachment_url( get_post_thumbnail_id($post->ID));?> -->
<header class="page-main-header"  >

   <div class="container">
		 <?php the_archive_title( '<h1 class="ht-main-title wow zoomIn">', '</h1>' ); ?>
<!-- 		<div class="ht-main-title wow zoomIn"><?php //single_cat_title(''); ?></div> -->
		<div class="clearfix"></div>
	</div>
	  <?php if( get_theme_mod('breadcrumb_button_display','show' ) == 'hide') :
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
		<div id="blog-box" class="col-md-9 innerpage-whitebox">
					<div class="innerblogpost">
				<?php if ( have_posts() ) :
					$luzuk_lite_full_posts = get_theme_mod('luzuk_lite_full_posts');
					while ( have_posts() ) : the_post();
						luzuk_lite_archive_post();
					endwhile;
					luzuk_lite_post_navigation();
				endif; ?>
					</div>
					
		</div> 
		<div class="col-md-3">
			<div id="secondary" class="widget-area">
				<?php dynamic_sidebar('luzuk-blog-sidebar'); ?>
			</div>
		</div>
		<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12">
				<div class="pagingation">
				    <?php lzGetPagination($query);?>
				</div>
			</div>
		</div>
	</div>
</main>

 <script>
            jQuery.noConflict();
            $(function(){
              function innerblogpostHeight(){
                var ht = 0;
                $('.inner-blogpost-info').each(function(i){
                  var tHt = $(this).height();
                  if(ht<tHt){
                    ht=tHt;
                  }
                });
                $('.inner-blogpost-info').height(ht+'px');
              }
              innerblogpostHeight();
            });
            $( window ).resize(function(){
              innerblogpostHeight();
            });
          </script>

<?php get_footer(); ?>
<!--<div id="page" class="home-page">
	<div id="content" class="article">
		<h1 class="postsby">
			<span><?php //the_archive_title(); ?></span>
		</h1>	
		<?php ///if ( have_posts() ) :
			//$luzuk_lite_full_posts = get_theme_mod('luzuk_lite_full_posts');
			//while ( have_posts() ) : the_post();
				//luzuk_lite_archive_post();
			//endwhile;
			//luzuk_lite_post_navigation();
		//endif; ?>
	</div>
	<?php //get_sidebar(); ?>
</div>
<?php //get_footer(); ?>