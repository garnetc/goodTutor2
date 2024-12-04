<?php
/**
 *
 * @package Luzuk Premium
 */

if(get_theme_mod('blog_section_disable') != 'on' ){ ?>
	<?php 
 	if( get_theme_mod('blog_areaTpadding',true) ) {
 		$blog_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('blog_areaTpadding')).';';
 	}
 	if( get_theme_mod('blog_areaBpadding',true) ) {
 		$blog_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('blog_areaBpadding')).';';
 	}
 	?>
<div  class="blog-area" id="blog" >
 		
			<?php			
 		$blog_title = get_theme_mod('blog_title_title', 'RECENT NEWS');
		$blog_pagesubtitle = get_theme_mod('blog_page_subtitle', 'Recent Posts <br>& <span>Articles!</span>');
 		?>

			<div class=" wow fadeInUp" data-wow-duration="1s">

			<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12 pd-0 blog-l-area">
				<div class="blog-img-area">
					<div class="blog-img-in">
					<?php 
						$blog_image = get_theme_mod('blog_image');
						if(!empty($blog_image)){
							echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($blog_image).'" class="img-responsive secondry-bg-img" />';
						}else{
							echo '<img alt="blog" src="'.get_template_directory_uri().'/images/blog.png" class="img-responsive" />';
						}
					?>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 blog-r-area">
				<?php if($blog_title){ ?>
				<div class="section-title">
					<h2><?php echo ($blog_title);  ?></h2>
				</div>
				<?php }?>
					<?php if($blog_pagesubtitle){ ?>	
				<div class="section-subtitle">
					<h3><?php echo ($blog_pagesubtitle);  ?></h3>
				</div>
				<?php }?>

				<div class="blog-area-wrap">
						<div class="blog-posts">

						<?php 
						$blog_post_count = get_theme_mod('blog_post_count', 2 );
						$blog_cat_exclude = get_theme_mod('blog_cat_exclude');
						$blog_cat_exclude = explode(',', $blog_cat_exclude);
						$args = array(
							'posts_per_page' => absint($blog_post_count),
							'category__not_in' => $blog_cat_exclude
						);
						$query = new WP_Query($args);
						if($query -> have_posts()):
							while($query -> have_posts()) : $query -> the_post();
								$luzuk_image = wp_get_attachment_image_src(get_post_thumbnail_id() , 'total-blog-thumb');
								?>
								<?php 
								if(has_post_thumbnail()){
									$img = esc_url($luzuk_image[0]);
								}
								if(empty($luzuk_image)){
									$img = get_template_directory_uri().'/images/blog.jpg';
								}
								?>
								<div class="blog-post col-md-12 col-sm-12 col-xs-12 pd-0">
									<div class="box-area-S">
										<div class="col-md-4 col-sm-4 col-xs-4 pd-0">
										<div class="blog-thumbnail">
											<a href="<?php the_permalink(); ?>"><img class="blog-img" src="<?php echo $img; ?>" alt="<?php the_title(); ?>"></a>
											<div class="overlay">
					                            <div class="box">
					                                <div class="content">
					                                    <a href="<?php the_permalink(); ?>" class="fa fa-link"></a>
					                                </div>
					                            </div>
					                        </div>
										</div>
										</div>
										<div class="col-md-8 col-sm-8 col-xs-8">
										<div class="blog-single">
											<div class="blog-date section-area-text">
					                            <?php echo get_the_date( 'F j, Y' ); ?> | BY <span> <?php echo get_the_author(); ?></span>
					                        </div>
											<a href="<?php the_permalink(); ?>"><h4 class="inner-area-title"><?php the_title(); ?></h4></a>

											
											<div class="clearfix"></div>
										</div>
									</div>
										<div class="clearfix"></div>

									</div>
								</div>
								<?php
							endwhile;
						endif;
						wp_reset_postdata();
						?>
					</div>
						<div class="clearfix"></div>
					</div>	

				<?php
				      $blogbutton = get_theme_mod('blog_btn_txt', 'Older Posts'); 
				      $blogbtnlink = get_theme_mod('blog_btnlink', '#');
				    ?>

				      <?php if( get_theme_mod('blog_button_display','show' ) == 'show') :
				        ?>  
				        <div class="blog-btn">
				          <a href="<?php echo $blogbtnlink ?>" target="_blank">      
				            <?php echo ($blogbutton );  ?><i class="fa fa-arrow-right" aria-hidden="true"></i>
				          </a></div>
				        <?php endif ?>
				   

					
				</div>
					<div class="clearfix"></div>
				</div>

			</div>
		<div class="clearfix"></div>
</div>
<script>
  jQuery.noConflict();
  $(function(){
    function blogsingleHeight(){
      var ht = 0;
      $('.blog-area .blog-single').each(function(i){
        var tHt = $(this).height();
        if(ht<tHt){
          ht=tHt;
        }
      });
      $('.blog-area .blog-single').height(ht+'px');
    }
    blogsingleHeight();
  });
  $( window ).resize(function(){
    blogsingleHeight();
  });
</script>
<?php }