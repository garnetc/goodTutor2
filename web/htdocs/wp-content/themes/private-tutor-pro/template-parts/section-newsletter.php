<?php

if(get_theme_mod('newsletter_area_disable') != 'on' ){
	?>
	<!-- newsletter Area Start -->
	<?php 
	if( get_theme_mod('newsletter_areaTpadding',true) ) {
		$newsletter_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('newsletter_areaTpadding')).';';
	}
	if( get_theme_mod('newsletter_areaBpadding',true) ) {
		$newsletter_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('newsletter_areaBpadding')).';';
	}

	?>
<div class="newsletter-area" id="newsletter">	
	<div class="newslettersign-box ">
		<div class="inside-full-height">
			<div class="container">
					<div class=" wow fadeInUp" data-wow-duration="1s">
						<div class="col-md-6">
						<?php
						$newsletter_page_id = get_theme_mod('newsletter_page');
						$newsletter_page_titlel = get_theme_mod('newsletter_page_titlel', 'Subscribe to get notified!');
						$newsletter_page_textl = get_theme_mod('newsletter_page_textl', 'We are not spammers!');
						?>
			 					<?php if($newsletter_page_titlel){ ?>
			 					<div class="section-title">
			 						<h2><?php echo ($newsletter_page_titlel);  ?></h2>
			 					</div>
			 					<?php }?>

								<?php
									$luzuk_newsletter_shortcode = get_theme_mod('luzuk_newsletter_shortcode', '[Add Form shortcode]');
								?>				
								<div class="ht-newsletter-member-wrap">
									<div class="box-form">										
										<?php echo do_shortcode($luzuk_newsletter_shortcode);?>
									</div>
								</div>
								<div class="section-textl">
			 						<p><?php echo ($newsletter_page_textl);  ?></p>
			 					</div>

			 					  <?php if( get_theme_mod('newslettersocial_button_display','show' ) == 'show') :
			    			?>
							<?php

								$facebook = get_theme_mod('newsletter_fb', '//facebook.com/');
								$twitter = get_theme_mod('newsletter_tw', '//twitter.com/');
								$linkedIn = get_theme_mod('newsletter_in', '//linkedin.com/');
								$whatsapp = get_theme_mod('newsletter_whatsapp', 'https://www.whatsapp.com');
								$newsletter_socialtext = get_theme_mod('newsletter_social_text', '- Lets get social!');
							?>

							<div class="news-share"> 
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
									<?php if(!empty($whatsapp)){ ?>
										<li><a href="<?php echo $whatsapp ?>" title="Whats App" class="site-button sharp" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
									<?php }?>
			 						<li><p><?php echo ($newsletter_socialtext);  ?></p></li>
								</ul>
							</div>
							<?php endif ?>  



						</div>
						<div class="col-md-6">
							
							<?php
								$newsletter_page_id = get_theme_mod('newsletter_page');
								$newsletter_page_titler = get_theme_mod('newsletter_page_titler', 'Be the first to get the app!');
								$newsletter_page_textr = get_theme_mod('newsletter_page_textr', 'Etiam sem nibh, aliquet sit amet nunc nec. Nullam tincidunt consectetur odio vitae auctor. Phasellus nec nunc eu orci scelerisque fringilla. <span>Integer convallis pellentesque.</span> Mauris sit amet malesuada purus, a euismod neque.');
							?>
			 					<?php if($newsletter_page_titler){ ?>
			 					<div class="section-title">
			 						<h2><?php echo ($newsletter_page_titler);  ?></h2>
			 					</div>
			 					<?php }?>
								<div class="section-text">
			 						<p><?php echo ($newsletter_page_textr);  ?></p>
			 					</div>

			 						<ul class="news-app-logo">
			 							 <?php if( get_theme_mod('applogo1_img_display','show' ) == 'show') :
			    						?>
			 							<li>
											<?php 
												$applogo1_image = get_theme_mod('applogo1_image');
												if(!empty($applogo1_image)){
													echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($applogo1_image).'" class="img-responsive secondry-bg-img" />';
												}else{
													echo '<img alt="blog" src="'.get_template_directory_uri().'/images/applogo1.png" class="img-responsive" />';
												}
											?>
										</li>
										<?php endif ?>  
										<?php if( get_theme_mod('applogo2_img_display','show' ) == 'show') :
			    						?>
										<li>
											<?php 
												$applogo2_image = get_theme_mod('applogo2_image');
												if(!empty($applogo2_image)){
													echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($applogo2_image).'" class="img-responsive secondry-bg-img" />';
												}else{
													echo '<img alt="blog" src="'.get_template_directory_uri().'/images/applogo2.png" class="img-responsive" />';
												}
											?>
										</li>
											<?php endif ?> 
			 						</ul>
			 						<div class="clearfix"></div>

						</div>

						

						</div>			
					</div>
			</div>
	</div> 
<div class="clearfix"></div>
</div>
	<!-- newsletter Area Start -->
		<script>
		jQuery.noConflict();
		$(function(){
			function h4innerareatitleHeight(){
				var ht = 0;
				$('#newsletter h4.inner-area-title').each(function(i){
					var tHt = $(this).height();
					if(ht<tHt){
						ht=tHt;
					}
				});
				$('#newsletter h4.inner-area-title').height(ht+'px');
			}
			h4innerareatitleHeight();
		});
		$( window ).resize(function(){
			h4innerareatitleHeight();
		});
	</script>
	
<?php } 