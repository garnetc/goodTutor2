<?php
/**
 * Template Name: Contact Page
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
		
	<div class="ht-contactus-wrap innerpage-whitebox">
		<?php 
	
		$address = get_theme_mod('luzuk_contactus_address', 'Add Contact Address here..');
		$addressdata1 = get_theme_mod('luzuk_contactus_addressdata1', '');
		$addressdata2 = get_theme_mod('luzuk_contactus_addressdata2', '');

		$email = get_theme_mod('luzuk_contactus_email', 'contact@example.com');
		$phone = get_theme_mod('luzuk_contactus_phone', '+1 999 999 9999');
		$shortcode = get_theme_mod('luzuk_contactus_shortcode', 'Add your shortcode through customizer');
		
		$iframe = get_theme_mod('luzuk_contactus_embade', 'Add your Embed code in customizer');

		$facebook = get_theme_mod('luzuk_contactus_facebook', '//facebook.com/');
		$twitter = get_theme_mod('luzuk_contactus_twitter', '//twitter.com/');
		$instagram = get_theme_mod('luzuk_contactus_instagram', 'https://www.instagram.com/');
		$linkedIn = get_theme_mod('luzuk_contactus_linkedin', '//linkedin.com/');

		$luzuk_contactus_maptitle = get_theme_mod('luzuk_contactus_maptitle', 'LOOKING FOR SUPPORT? WE WILL LOVE TO HELP YOU OUT WITH YOUR QUERIES.');

		

			$luzuk_contactus_formtitle = get_theme_mod('luzuk_contactus_formtitle', 'Enquiry Now');
		
		$luzuk_contactus_mailatitle = get_theme_mod('luzuk_contactus_mailatitle', 'EMAIL US');
		$luzuk_contactus_addtitle = get_theme_mod('luzuk_contactus_addtitle', 'LOCATION');
		$luzuk_contactus_phonetitle = get_theme_mod('luzuk_contactus_phonetitle', 'CALL US');
		?>
		<div id="ht-contactus-wrap">
			<div class="row">

				<div class="col-md-7 col-sm-7 col-xs-12 pd-0">
						<?php if($luzuk_contactus_formtitle || $luzuk_contactus_formtext ){ ?>
						<div class="Address_area wow zoomIn">
							
							<h4 class="wow bounceInLeft" data-wow-duration="2s"><?php if($luzuk_contactus_formtitle){ ?>
								<?php echo ($luzuk_contactus_formtitle);  ?>
							</h4>
							<?php } ?>
							<div class="clearfix"></div>
							<div class="contact-page-form wow zoomIn" data-wow-duration="3s">
							<p><?php echo do_shortcode($shortcode);?></p>
							<div class="clearfix"></div>
							</div>
							</div>
						<?php } ?>
				
					</div>
				<div class="col-md-5 col-sm-5 col-xs-12 pd-0">
						<?php if($phone || $luzuk_contactus_phonetitle || $email || $luzuk_contactus_mailatitle || $luzuk_contactus_addtitle || $address || $addressdata1 || $addressdata2 || $facebook || $twitter || $instagram || $linkedIn){ ?>

					<div class="address-c-box mg-3 wow zoomIn">

				
					<div class="address-box wow bounceInRight">
							<?php if($email || $luzuk_contactus_mailatitle){ ?>
						<div class="contact_area">
						
								<div class="contact_l_area col-md-2 col-sm-2  wow bounceInRight" data-wow-duration="1s">
									<i class="fa fa-envelope tada midix infinite" aria-hidden="true"></i>
								</div>
						
							<div class="contact-info col-md-10 col-sm-10 pd-0 wow bounceInRight" data-wow-duration="1s"> 
								<?php if($luzuk_contactus_mailatitle){ ?>
								<div class="contact-label">
									<?php echo ($luzuk_contactus_mailatitle);  ?>
								</div>
								<?php } ?>
								<a href="mailto:<?php echo $email;?>"><?php echo $email;?></a> </div>

								
								<div class="clearfix"></div>
						</div>
							<?php } ?>
						<div class="clearfix"></div>
						<?php if($phone || $luzuk_contactus_phonetitle){ ?>
						<div class="contact_area wow bounceInRight">
						
								<div class="contact_l_area col-md-2 col-sm-2 wow bounceInRight" data-wow-duration="2s">
									<i class="fa fa-phone tada midix infinite" aria-hidden="true"></i>
								</div>
							
						
							<div class="contact-info col-md-10 col-sm-10 pd-0  wow bounceInRight" data-wow-duration="2s"> 
							<?php if($luzuk_contactus_phonetitle){ ?>
								<div class="contact-label">
									<?php echo ($luzuk_contactus_phonetitle);  ?>
								</div>
								<?php } ?> 
								<?php echo $phone;?>
							 </div>

								

							<div class="clearfix"></div>	
						</div>
						<?php } ?>

						<div class="contact_area wow bounceInRight">
							<?php if($luzuk_contactus_addtitle || $address || $addressdata1 || $addressdata2){ ?>
								<div class="contact_l_area col-md-2 col-sm-2 wow bounceInRight" data-wow-duration="3s">
									<i class="fa fa-map-marker tada midix infinite" aria-hidden="true"></i>
								</div>
							<div class="contact-info col-md-10 col-sm-10 pd-0  wow bounceInRight" data-wow-duration="3s">
								<?php if($luzuk_contactus_addtitle){ ?>
								<div class="contact-label">
									<?php echo ($luzuk_contactus_addtitle);  ?>
								</div>
								<?php } ?>
							 <?php echo nl2br($address); ?>
							<?php echo nl2br($addressdata1); ?>
							<?php echo nl2br($addressdata2); ?> </div>

								<?php } ?>


							<div class="clearfix"></div>	
						</div>


					</div>

						<?php if( $facebook || $twitter || $instagram || $linkedIn){ ?>
						<div class="social_area wow pulse">
						<ul class="contact-sm-links wow zoomIn wow fadeInDown">
							<?php if(!empty($facebook)){ ?>
								<li class="wow fadeInDown" data-wow-duration="1s"><a href="<?php echo $facebook ?>" title="Facebook" target="_blank"><span class="fa fa-facebook"></span></a></li>
							<?php }?>
							<?php if(!empty($twitter)){ ?>
								<li class="wow fadeInDown" data-wow-duration="2s"><a href="<?php echo $twitter ?>" title="Twitter" target="_blank"><span class="fa fa-twitter"></span></a></li>
							<?php }?>
							<?php if(!empty($instagram)){ ?>
								<li class="wow fadeInDown" data-wow-duration="3s"><a href="<?php echo $instagram ?>" title="Instagram"target="_blank"><span class="fa fa-instagram"></span></a></li>
							<?php }?>
							<?php if(!empty($linkedIn)){ ?>
								<li class="wow fadeInDown" data-wow-duration="4s"><a href="<?php echo $linkedIn ?>" title="Linked In" target="_blank"><span class="fa fa-linkedin"></span></a></li>
							<?php }?>
						</ul>
					
					</div>
						<?php } ?>
						
					</div>

					<?php } ?>

					<div class="contact-mapbox wow zoomIn" data-wow-duration="3s">
					<?php echo $iframe; ?>
						
					</div>

				</div>

		
			</div>
		</div>

		

	</div>	
	<div class="clearfix"></div>
    </div>

</div>
</main>
<?php get_footer(); ?>