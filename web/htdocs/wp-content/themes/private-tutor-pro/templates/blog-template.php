<?php
/**
 * Template Name: Blog full width
 *
 * @package Luzuk Premium
 */
get_header(); 
?>
  <?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
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

		<div id="blog-box" class="ht-blog-wrap innerpage-whitebox">
			<?php
            $current_page = max(1, get_query_var('paged'));
            $luzuk_blog_cat_exclude = get_theme_mod('luzuk_blog_categories');
            $luzuk_blog_cat_exclude = explode(',', $luzuk_blog_cat_exclude);
            $excerpt = get_theme_mod('luzuk_blog_categories_settings');
            $args = array(
                'category__not_in' => $luzuk_blog_cat_exclude,
                // 'page'=,
                'paged'=> $current_page,

            );
            $query = new WP_Query($args);
            if($query -> have_posts()):
                while($query -> have_posts()) : $query -> the_post();
                 $luzuk_image = wp_get_attachment_image_src(get_post_thumbnail_id() , 'total-blog-thumb');
                 $img = (has_post_thumbnail())?esc_url($luzuk_image[0]):get_template_directory_uri().'/images/default.png';
                 ?>
                 <div class="inner-blog-post col-md-4 col-sm-6 col-xs-12 wow zoomIn">
                   <div class="inner-blogpost">
                     <div class="ht-blog-thumbnail">
                       <a href="<?php the_permalink(); ?>">
                          <img class="inner-blog-img" src="<?php echo $img; ?>" alt="<?php the_title(); ?>">
                      </a>
                      <div class="overlay">
                          <div class="box">
                              <div class="content">
                                  <a href="<?php the_permalink(); ?>" class="fa fa-link"></a>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="inner-blogpost-info">
                       <?php if( get_theme_mod('postdate_button_display','show' ) == 'show') :
                               ?>
                      <div class="blog-date">
                          by <?php echo get_the_author(); ?> / on <span> <?php echo get_the_date( 'j F, Y' ); ?></span>
                      </div>
                      <?php endif ?> 

                         <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                          <div class="inner-blog-excerpt">
                               <?php 
                               if (has_excerpt()) {
                                          echo get_the_excerpt();
                                      } else {
                                          echo luzuk_excerpt(get_the_content(),150);
                                      
                                   }
                                   ?>
                          </div>
                       <?php if( get_theme_mod('postsocialsshare_button_display','show' ) == 'show') :
                        ?>
                 

                        <div class="socialMedia">
                          <ul>
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="site-button sharp"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title();?>&source=<?php the_title();?>" target="_blank" class="site-button sharp"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            
                            <li><a href="https://twitter.com/share?url=<?php the_permalink();?>&amp;text=<?php the_title();?>" class="site-button sharp" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="http://www.digg.com/submit?url=<?php the_permalink();?>" target="_blank" class="site-button sharp"><i class="fa fa-digg" aria-hidden="true"></i></a></li>
                            <li class="share-button"><a href="#" class="site-button sharp"><i class="fa fa-share-alt"></i></a></li>
                          </ul>
                            <div class="clearfix"></div>
                        </div>
                    <?php endif ?>  

                   <div class="clearfix"></div>
                 </div>
                   
               
                   <div class="clearfix"></div> 
                   
           </div>
              <script>
            jQuery.noConflict();
            $(function(){
              function innerblogpostHeight(){
                var ht = 0;
                $('.page-template-blog-template .inner-blogpost-info').each(function(i){
                  var tHt = $(this).height();
                  if(ht<tHt){
                    ht=tHt;
                  }
                });
                $('.page-template-blog-template .inner-blogpost-info').height(ht+'px');
              }
              innerblogpostHeight();
            });
            $( window ).resize(function(){
              innerblogpostHeight();
            });
          </script>
       </div> 

     

       <?php
   endwhile;
endif;
wp_reset_postdata();
?>
<div class="clearfix"></div>

</div>
<div class="pagingation">
    <?php lzGetPagination($query);?>
</div>
<div class="clearfix"></div>
</div>
</div>
</main>
<?php get_footer(); ?>