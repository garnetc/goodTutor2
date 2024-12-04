<?php
if(get_theme_mod('about_area_disable') != 'on' ){
	?>
	<!-- About Area Start -->
	<?php 
				if( get_theme_mod('about_areaTpadding',true) ) {
					$about_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('about_areaTpadding')).';';
				}
				if( get_theme_mod('about_areaBpadding',true) ) {
					$about_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('about_areaBpadding')).';';
				}
				?>			
	<div class="about-area bg-img-1" id="about">
		<div class="container">
			<?php
			$about_page_id = get_theme_mod('about_page');
			$abouttitle = get_theme_mod('about_title', 'ABOUT TUTORPRO');
			$aboutsubtitle = get_theme_mod('about_subtitle', '"We Help You Ace your Acedamics Score & More!"');
			$abouttext = get_theme_mod('about_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .');
			$abouttname = get_theme_mod('about_teacher_name', 'Kevin Malone');
			$abouttdesg = get_theme_mod('about_teacher_desg', 'Phd in Business Finance/Tutor');
			$aboutexyear = get_theme_mod('about_exyear', '08+');
			$aboutexyeartext = get_theme_mod('about_exyeartext', 'Years Experience');
			?>
		
			<div class="col-md-6 col-sm-12 col-xs-12 wow bounceInLeft">
				<?php if(!empty($aboutexyear || $aboutexyeartext)){ ?>
				<div class="about-exp-area tada midix infinite">
					<b><?php echo ($aboutexyear); ?></b><br>
					<?php echo ($aboutexyeartext); ?>
				</div>
				<?php }?>
				<div class="aboutarea-img">
					<?php 
					$about_image = get_theme_mod('about_image');
					if(!empty($about_image)){
						echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($about_image).'" class="img-responsive secondry-bg-img" />';
					}else{
						echo '<img alt="About us" src="'.get_template_directory_uri().'/images/about.jpg" class="img-responsive" />';
					}

					?>
					
				</div>
				<div class="aboutarea-dotimg">
						<?php 
						$about1_image = get_theme_mod('about1_image');
						if(!empty($about1_image)){
							echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($about1_image).'" class="img-responsive secondry-bg-img" />';
						}else{
							echo '<img alt="About us" src="'.get_template_directory_uri().'/images/abtimgdots.png" class="img-responsive" />';
						}

						?>
					</div>
				
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 about-right wow fadeInRight" data-wow-duration="1s">
				<?php if($abouttitle){ ?>	
				<div class="section-title col-md-11 col-md-offset-1 pd-0">
					<h2><?php echo ($abouttitle);  ?></h2>
				</div>
				<?php }?>
					<?php if($aboutsubtitle){ ?>	
				<div class="section-subtitle">
					<h3><?php echo ($aboutsubtitle);  ?></h3>
						<div class="sec-holder">
					 		 <div class="sec-ellipse"></div>
					 	 <div class="sec-ellipse sec-ellipse2"></div>
					</div>	
				</div>
				<?php }?>
				
				<div class="clearfix"></div>

			<?php
				$showStatic = true;
				for( $i = 1; $i < 11; $i++ ){
					$aboutus_page_id = get_theme_mod('aboutus_page_icon'.$i); 
					if(!empty($aboutus_page_id)){
						$showStatic = false;
						break;
					}
				}
				?>

				<div class="aboutus-post-wrap">
					<?php
					$cols = get_theme_mod('aboutus_npp_count', 2);
					$cols++;
					// echo '$cold: '.$cols;
					switch($cols){
						case 1:
						$colCls = 'col-md-12 col-sm-12 col-xs-12';
						break;
						case 2:
						$colCls = 'col-md-6 col-sm-6 col-xs-12';
						break;
						case 4:
						case 8:
						case 7:
						case 10:
						case 11:
						case 12:
						$colCls = 'col-md-4 col-sm-4 col-xs-12';
						break;
						default: 
						$colCls = 'col-md-4 col-sm-4 col-xs-12';
						break;
					}
					$icons = array(1=>'heart', 2=>'star', 3=>'flash', 4=>'bell',5=>'heart', 6=>'star', 7=>'flash', 8=>'bell');
					?>
					<div class="row aboutus-post-boxes">
						<?php
						for( $i = 1; $i <= $cols; $i++ ){
								if($showStatic === false){
									
									$aboutus_page_title = get_theme_mod('aboutus_page_title'.$i, 'Rated as Best Tutor (2019)');
									$aboutus_page_id = get_theme_mod('aboutus_page'.$i); 
									$aboutus_page_icon = get_theme_mod('aboutus_page_icon'.$i);
									if($aboutus_page_icon){
										
									?>
									<div class="<?php echo $colCls;?> pd-0">
										<div class="aboutus-single wow fadeInDown" data-wow-duration="3s">
											<div class="about-btn">
												<div class="hi-icon">
													<span class="<?php echo $aboutus_page_icon; ?>"></span>
												</div>
											</div>
												<div class="about-area-data">
													<h4 class="inner-area-title"><?php echo $aboutus_page_title; ?></h4>
												</div>

											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									</div>
									<?php
											
									}
								}else{?>
									<div class="<?php echo $colCls;?> pd-0">
										<div class="aboutus-single wow fadeInDown" data-wow-duration="3s">
											<div class="about-btn">
												<div class="hi-icon">
													<span class="fa fa-trophy"></span>
												</div>
											</div>
													<div class="about-area-data">
													<h4 class="inner-area-title">Rated as Best Tutor (2019)</h4>
												</div>


											<div class="clearfix"></div>						
										</div>
										<div class="clearfix"></div>
									</div>
								<?php }

						}?>
						<div class="clearfix"></div>
					</div>
				</div>

				<div class="clearfix"></div>
				<div class="section-area-text">
					<p><?php echo ($abouttext);  ?></p>
				</div>
					<?php if(!empty($abouttname || $abouttdesg)){ ?>
				<div class="about-teacher-area">
					<span><?php echo ($abouttname);  ?></span> - <?php echo ($abouttdesg);  ?>
				</div>
				<?php }?>
 				<?php if( get_theme_mod('aboutsocial_button_display','show' ) == 'show') :
    				?>
    				<div class="about-socialbtn-area">
    				<ul class="about-socialbtn">
					<li>
						 	 
					<?php

						$facebook = get_theme_mod('about_fb', '//facebook.com/');
						$twitter = get_theme_mod('about_tw', '//twitter.com/');
						$linkedIn = get_theme_mod('about_in', '//linkedin.com/');
						$youtube = get_theme_mod('about_youtube', 'https://www.youtube.com/');
						// $instagram = get_theme_mod('about_instagram', 'https://instagram.com');
						// $whatsapp = get_theme_mod('about_whatsapp', 'https://www.whatsapp.com');
					?>
						
						<div class="about-share">
							<ul class="clearfix">
								<?php if(!empty($facebook)){ ?>
									<li><a href="<?php echo $facebook ?>" title="Facebook" class="site-button sharp" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<?php }?>

								<?php if(!empty($twitter)){ ?>
									<li><a href="<?php echo $twitter ?>" title="Twitter" class="site-button sharp" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<?php }?>

								<?php if(!empty($linkedIn)){ ?>
									<li><a href="<?php echo $linkedIn ?>" title="LinkedIn" class="site-button sharp" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<?php }?>
								<?php if(!empty($youtube)){ ?>
									<li><a href="<?php echo $youtube ?>" title="Youtube" class="site-button sharp" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
								<?php }?>
								<!-- <?php if(!empty($instagram)){ ?>
									<li><a href="<?php echo $instagram ?>" title="Instagram" class="site-button sharp" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<?php }?>
								<?php if(!empty($whatsapp)){ ?>
									<li><a href="<?php echo $whatsapp ?>" title="Whats App" class="site-button sharp" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
								<?php }?> -->
							</ul>
						</div>
			
					</li>
					<?php endif ?>  
				<li>
					<?php
				      $aboutbutton = get_theme_mod('about_btn_txt', 'Connect With Us'); 
				      $aboutbtnlink = get_theme_mod('about_btnlink', '#');
				    ?>

				      <?php if( get_theme_mod('about_button_display','show' ) == 'show') :
				        ?>  
				        <div class="about-btn">
				          <a href="<?php echo $aboutbtnlink ?>" target="_blank">      
				            <?php echo ($aboutbutton );  ?>
				          </a></div>
				        <?php endif ?>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>

			</div>
			<div class="clearfix"></div>
	</div>
			<div class="clearfix"></div>
	</div>
	<!-- About Area End -->
<?php }  