<?php

if(get_theme_mod('whychooseus_area_disable') != 'on' ){
	?>
	<!-- whychooseus Area Start -->
	<?php 
	if( get_theme_mod('whychooseus_areaTpadding',true) ) {
		$whychooseus_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('whychooseus_areaTpadding')).';';
	}
	if( get_theme_mod('whychooseus_areaBpadding',true) ) {
		$whychooseus_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('whychooseus_areaBpadding')).';';
	}
	?>		
	<div class="whychooseus-area" id="whychooseus" style="<?php echo esc_attr($whychooseus_areaTpadding); ?>" "<?php echo esc_attr($whychooseus_areaBpadding); ?>">
		<div class="whychooseus_gradiant"></div>


<div class="col-md-12 whychoousw">
	<?php if( get_theme_mod('whychoous_shape_display','show' ) == 'show') :
        ?>
		<div class="whychoous-shape">
			<div class="whychoous-container">
			    <div class="triangle-bg-lg"></div>
			</div>
		</div>
	<?php endif ?>  
	<div class="row">
		<div class="col-md-8 col-sm-12 col-xs-12">
			<div class="gallery-main-box">
				<div class="owl-carousel owl-theme"> 
					<!-- <div class="ht-team-member-wrap ht-clearfix"> -->
						<?php 
						$showStatic = true;
						$cols = get_theme_mod('gallery_npp_count', 29);
						$cols++;
						switch($cols){
							case 1:
							$colCls = 'col-md-12 col-sm-12';
							break;
							case 2:
							$colCls = 'col-md-6 col-sm-6';
							break;
							case 3:
							case 5:
							case 6:
							case 9:
							$colCls = 'col-md-4 col-sm-6';
							break;
							case 4:
							case 7:
							case 8:
							case 10:
							case 11:
							case 12:
							$colCls = 'col-md-3 col-sm-6';
							break;
							default: 
							$colCls = 'col-md-4 col-sm-6';
							break;
						}
						for( $i = 1; $i <= $cols; $i++ ){
							$gallery_page_id = get_theme_mod('gallery_page'.$i); 
							$gallery_page_icon = get_theme_mod('gallery_page_icon'.$i);
							if($gallery_page_id){
								$showStatic = false;
								echo galleryShortCode($gallery_page_id, $isCustomizer=true, $i);
							}
						}


						$args = array(
							'post_type' => 'our-gallery',
							'post_status' => 'publish'
						);
						$new = new WP_Query($args); 
						$i=1;
						if($showStatic == true){
							while ( $new->have_posts() ){
								$new->the_post(); 
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium_large' );
								if(has_post_thumbnail()) { $thumb_url = $thumb['0']; }
								$url = $thumb['0'];?>
								<div class="item lz-gallery-images wow zoomIn"><!-- <a class="group1" href="<?php echo esc_url($thumb_url); ?>" title="<?php the_title(); ?>">	
								</a> -->
								<figure class="whuchooseus-gall"><img class="secondry-bg img-responsive" src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title(); ?>" /><i class="fa fa-camera"></i><a class="group1" href="<?php echo esc_url($thumb_url); ?>" title="<?php the_title(); ?>"></a></figure>
							</div> 



							<?php 
							$i++; } wp_reset_query();
						} ?>
						</div>
					<script>
					$(document).ready(function() {
					  $('.gallery-main-box .owl-carousel').owlCarousel({
					  	slideSpeed : 1500,
						autoplay: true,
					    loop: true,
					    margin: 30,
					    responsiveClass: true,
					    responsive: {
					      0: {
					        items: 1,
					        nav: true
					      },
					      600: {
					        items:2,
					        nav: true
					      },
					      1000: {
					        items:3,
					        nav: true,
					        loop: true,
					        margin: 12
					      }
					    }
					  })
					})
				</script>
				</div>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
		<?php
		$showStatic = true;
		for( $i = 1; $i < 3; $i++ ){
			$url = get_theme_mod('whychooseus_page_url_'.$i, '#');
			$link = get_theme_mod('whychooseus_page_link'.$i);
			$whychooseus_page_id = get_theme_mod('whychooseus_page_icon'.$i); 
			if(!empty($whychooseus_page_id)){
				$showStatic = false;
				break;
			}
		}
		$whychooseus_page_maintitle = get_theme_mod('whychooseus_page_maintitle', 'WHY CHOOSE US');
		$whychooseus_pagesubtitle = get_theme_mod('whychooseus_page_subtitle', 'We Have Worlds Top <span>Teachers!</span> ');
		?>
			<div class="row">
				<?php if($whychooseus_page_maintitle){ ?>
				<div class="section-title">
					<h2><?php echo ($whychooseus_page_maintitle);  ?></h2>
				</div>
				<?php }?>
					<?php if($whychooseus_pagesubtitle){ ?>	
				<div class="section-subtitle">
					<h3><?php echo ($whychooseus_pagesubtitle);  ?></h3>
				</div>
				<?php }?>
			</div>

			<div class="whychooseus-single-area">  
				<?php
				$cols = get_theme_mod('whychooseus_npp_count', 5);
				$cols++;
							// echo '$cold: '.$cols;
				switch($cols){
					case 1:
					$colCls = 'col-md-12 col-sm-12 col-xs-12';
					break;
					case 2:	
					$colCls = 'col-md-6 col-sm-6 col-xs-12';
					break;
					case 3:
					case 5:
					case 6:
					case 9:
					case 11:
					case 13:
					case 15:
					$colCls = 'col-md-6 col-sm-6 col-xs-12';
					break;
					default: 
					$colCls = 'col-md-6 col-sm-6 col-xs-12';
					break;
				}
				$icons = array(1=>'heart', 2=>'star', 3=>'flash', 4=>'bell',5=>'heart', 6=>'star', 7=>'flash', 8=>'bell');
				?>

				<?php
				for( $i = 1; $i <= $cols; $i++ ){

							if($showStatic === false){
						$url = get_theme_mod('whychooseus_page_url_'.$i, '#');

						$whychooseus_page_title = get_theme_mod('whychooseus_page_title_'.$i, 'Free Books');
						$whychooseus_page_id = get_theme_mod('whychooseus_page'.$i); 
						$whychooseus_page_icon = get_theme_mod('whychooseus_page_icon'.$i);
						if($whychooseus_page_icon){
							?>
							<div class="<?php echo $colCls;?> wcu-area">
								<div class="wcu-single-bx wow zoomIn" style="<?php echo esc_attr($whychooseus_page_BoxBorderColor); ?>">
									<div class="wcu-single-bx-inner">
										<div class="col-md-3">
											<span class="<?php echo $whychooseus_page_icon; ?>"></span>
										</div>
										<div class="col-md-9 pd-0">
											<div class="wcu-single-top">
												<h4 class="title inner-area-title" style="<?php echo esc_attr($whychooseus_page_TitleColor); ?>">
													<?php echo $whychooseus_page_title; ?>
												</h4>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<?php
						}
					}else{?>
						<div class="<?php echo $colCls;?> wcu-area">
							<div class="wcu-single-bx wow zoomIn">
								<div class="wcu-single-bx-inner">
									<div class="col-md-3 col-sm-2 col-xs-2">
										<span class="fa fa-book"></span>
									</div>
									<div class="col-md-9 col-sm-10 col-xs-10 pd-0">
										<div class="wcu-single-top">
											<h4 class="title inner-area-title">Free Books
											</h4>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>				
						</div>
					<?php }

				}?>
			</div>
			<div class="clearfix"></div>
				<?php
				      $whychooseusbutton = get_theme_mod('whychooseus_btn_txt1', 'Enroll Now'); 
				      $whychooseusbtnlink = get_theme_mod('whychooseus_btnlink1', '#');
				    ?>

				      <?php if( get_theme_mod('whychooseus_button_display1','show' ) == 'show') :
				        ?>  
				        <div class="whychooseus-btn textcenter">
				          <a href="<?php echo $whychooseusbtnlink ?>" target="_blank">      
				            <?php echo ($whychooseusbutton );  ?><i class="fa fa-arrow-right" aria-hidden="true"></i>
				          </a></div>
				        <?php endif ?>
	
	</div> 
	<!-- whychooseus Area Start -->
	<script>
		jQuery.noConflict();
		$(function(){
			function bxinnerHeight(){
				var ht = 0;
				$('#whychooseus .wcu-single-bx-inner').each(function(i){
					var tHt = $(this).height();
					if(ht<tHt){
						ht=tHt;
					}
				});
				$('#whychooseus .wcu-single-bx-inner').height(ht+'px');
			}
			bxinnerHeight();
		});
		$( window ).resize(function(){
			bxinnerHeight();
		});
	</script>
	</div>
	</div>
	<div class="clearfix"></div>
</div>
	
<?php } 
