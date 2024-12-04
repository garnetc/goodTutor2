<?php
/**
 *
 * @package Slider Premium
 */
?>
<?php $showContent = get_theme_mod('slider_section_show_content', 'on'); ?>
<div class="slider_section" id="slider">

	<div id="ht-bx-slider">
		<?php
		$args = array( 'post_type' => 'slider', 'orderby'   => 'id', 'order' => 'DESC',);
		if(!empty($pageId)){
			$args['page_id'] = absint($pageId);

		}
		$text = '';
		$query = new WP_Query($args);
		if($query->have_posts()){
			while($query->have_posts()) : $query->the_post(); 
				$pageLink = '';
				$slider_btn_link = get_post_meta($post->ID,'slider_btn_link',false);
				$sliderBtnTxt = get_post_meta($post->ID,'sliderBtnTxt',false);
				if(!empty($slider_btn_link) && is_array($slider_btn_link)){
					$pageLink = esc_url(get_permalink($slider_btn_link[0]));
				}
				if(!empty($sliderBtnTxt) && is_array($sliderBtnTxt)){
					$pageLinkTxt = $sliderBtnTxt[0];
				}else{
					$pageLinkTxt = 'Start Free Trial';
				}
				?>
				<div class="ht-slide">
					<div class="slider_gradiant"></div> 
						<div class="sliderimg">

						<div class="img-slide-responsive" style="position: absolute; display: block; visibility: visible; z-index: 5; transform: matrix(1, 0, 0, 1, 0, 0);">
							<div class="tp-loop-wrap rs-wave" style="position: absolute; display: block; min-height: 486px; min-width: 1192px; transform: matrix(1, 0, 0, 1, 0, 0);">
								<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">							<?php 
									if(has_post_thumbnail()){
										$total_slider_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');	
										echo '<img alt="'. esc_html(get_the_title()) .'" class="slide-img-curve wow zoomIn" width="988" height="731" style="width: 1192px; height: 650px; transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 11px;" src="'.esc_url($total_slider_image[0]).'">';
									}?>		
								
								</div>
							</div>
						</div> 
							<?php 
						if(has_post_thumbnail()){
							$total_slider_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');	
							echo '<img class="slide-mainimg" alt="'. esc_html(get_the_title()) .'" src="'.esc_url($total_slider_image[0]).'">';
						}?>
					</div>



					<?php
					if($showContent == 'on'){
						?>
						<div class="slider_content">
							<div class="title animated fadeInDownBig">
								<?php echo (get_the_title()); ?>
							</div>
							<div class="sub-title animated fadeInLeftBig">
								<?php echo (get_the_content()); ?>
							</div>		
							
											
							<?php 
							if(!empty($pageLink)){ ?>
								<div class="slider-btn wow fadeInDown">	
									<a class="btn btn-lg" href="<?php echo $pageLink; ?>"><?php echo($pageLinkTxt); ?></a>
								</div>
							<?php }?>
							<?php if( get_theme_mod('slider_contentimg_display','show' ) == 'show') :
			    						?>
							<div class="slider-contentimg wow zoom">
								<?php 
									$slider_contentimg = get_theme_mod('slider_contentimg');
									if(!empty($slider_contentimg)){
										echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($slider_contentimg).'" class="img-responsive secondry-bg-img" />';
									}else{
										echo '<img alt="About side img" src="'.get_template_directory_uri().'/images/sliderbottomdots.png" class="img-responsive" />';
									}

									?>
									
							</div>
							<?php endif ?> 
						</div>
						<?php }?>
					</div>
					<?php
				endwhile;
			}else{ 
				for($i=0;$i<2;$i++){?>
				<div class="ht-slide">
					

				<div class="slider_gradiant"></div>
					<div class="sliderimg">


						<div class="img-slide-responsive" style="position: absolute; display: block; visibility: visible; z-index: 5; transform: matrix(1, 0, 0, 1, 0, 0);">
						<div class="tp-loop-wrap rs-wave" style="position: absolute; display: block; min-height: 486px; min-width: 1192px; transform: matrix(1, 0, 0, 1, 0, 0);">
							<div class="tp-mask-wrap" style="position: absolute; display: block; overflow: visible;">										
									<img src="<?php echo esc_html(get_template_directory_uri()); ?>/images/slider-banner.jpg" class="slide-img-curve wow zoomIn" alt="" data-ww="['988px','700px','700px','600px']" data-hh="['731px','510px','510px','444px']" width="988" height="731" data-no-retina="" style="transition: none 0s ease 0s; text-align: inherit; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 11px;"> 
							</div>
						</div>
					</div>
						<?php echo '<img class="slide-mainimg" alt="Slider" src="'. esc_html(get_template_directory_uri()) .'/images/slider-banner.jpg">';?>
					</div>



					<?php if($showContent == 'on'){?>
					<div class="slider_content">
					<div class="title animated fadeInDownBig">GET READY TO <b>LEARN <span>WITH US</span></b> </div>
					<div class="sub-title animated fadeInLeftBig">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen</div>	
						<div class="slider-btn wow fadeInDown">	
							<a class="btn btn-lg" href="#"><?php _e( 'READ MORE', 'lz-fintess-premium' ); ?></a>
						</div>
						<?php if( get_theme_mod('slider_contentimg_display','show' ) == 'show') :
			    						?>
							<div class="slider-contentimg wow zoom">
								<?php 
									$slider_contentimg = get_theme_mod('slider_contentimg');
									if(!empty($slider_contentimg)){
										echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($slider_contentimg).'" class="img-responsive secondry-bg-img" />';
									}else{
										echo '<img alt="About side img" src="'.get_template_directory_uri().'/images/sliderbottomdots.png" class="img-responsive" />';
									}

									?>
									
							</div>
							<?php endif ?> 
					</div>
					<?php }?>
				</div>
				<?php }
			}?>
		</div>
	</div>
