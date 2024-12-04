<?php   
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luzuk Premium
 */

?>
<?php 
if( get_theme_mod('sec_footerseTmargin',true) ) {
	$sec_footerseTmargin = 'padding-top:'.esc_attr(get_theme_mod('sec_footerseTmargin')).';';
}
if( get_theme_mod('sec_footersebottommargin',true) ) {
	$sec_footersebottommargin = 'padding-bottom:'.esc_attr(get_theme_mod('sec_footersebottommargin')).';';
}
      $color_overlay_classes = '';
      $color_overlay_opacity = get_theme_mod( 'cover_footer_template_overlay_opacity' );
      $color_overlay_opacity = ( false === $color_overlay_opacity ) ? 85 : $color_overlay_opacity;
      $color_overlay_classes .= ' opacity-' . $color_overlay_opacity;

?>		
<footer class="footer-area" id="footer">
	<div class="overlay <?php echo esc_attr( $color_overlay_classes ); ?>" style="<?php echo esc_attr($sec_footerseTmargin); ?>" "<?php echo esc_attr($sec_footersebottommargin); ?>">

	<?php if(is_active_sidebar('luzuk-footer1') || is_active_sidebar('luzuk-footer2') || is_active_sidebar('luzuk-footer3') || is_active_sidebar('luzuk-footer4') ){ ?>
		
			<div class="top-area">
				<div class="container"> 
				<div class="s-footer col-lg-3 col-md-3 col-sm-6 single-footer-1">
					<div class="single-footer wow zoomIn" data-wow-duration="1s" >
						<?php if(is_active_sidebar('luzuk-footer1')): 
							dynamic_sidebar('luzuk-footer1');
						endif;
						?>	
					</div>
				</div>

				<div class="s-footer col-lg-9 col-md-9 col-sm-6 single-footer-2">
					<div class="single-footer wow zoomIn" data-wow-duration="1.5s" >
						<?php if(is_active_sidebar('luzuk-footer2')): 
							dynamic_sidebar('luzuk-footer2');
						endif;
						?>	
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="s-footer col-lg-3 col-md-3 col-sm-6">
					<div class="single-footer wow zoomIn"  data-wow-duration="2s" >
						<?php if(is_active_sidebar('luzuk-footer3')): 
							dynamic_sidebar('luzuk-footer3');
						endif;
						?>	
					</div>
				</div>

				<div class="s-footer col-lg-3 col-md-3 col-sm-6 single-footer-4" >
					<div class="single-footer wow zoomIn" data-wow-duration="2.5s" >
						<?php if(is_active_sidebar('luzuk-footer4')): 
							dynamic_sidebar('luzuk-footer4');
						endif;
						?>	
					</div>
				</div>


				<div class="s-footer col-lg-3 col-md-3 col-sm-6 single-footer-5" >
					<div class="single-footer wow zoomIn" data-wow-duration="2.5s" >
						<?php if(is_active_sidebar('luzuk-footer5')): 
							dynamic_sidebar('luzuk-footer5');
						endif;
						?>	
					</div>
				</div>


				<div class="s-footer col-lg-3 col-md-3 col-sm-6 single-footer-6" >
					<div class="single-footer wow zoomIn" data-wow-duration="2.5s" >
						<?php if(is_active_sidebar('luzuk-footer6')): 
							dynamic_sidebar('luzuk-footer6');
						endif;
						?>	
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<?php } ?>

	<div class="clearfix"></div>
		<?php
		$footercopyright = get_theme_mod('footer_area_copyrighttext', '© 2021 All Rights Reserved');
		?>


		<?php 
		if( get_theme_mod('sec_bottomareaTmargin',true) ) {
			$sec_bottomareaTmargin = 'padding-top:'.esc_attr(get_theme_mod('sec_bottomareaTmargin')).';';
		}
		if( get_theme_mod('sec_bottomareabottommargin',true) ) {
			$sec_bottomareabottommargin = 'padding-bottom:'.esc_attr(get_theme_mod('sec_bottomareabottommargin')).';';
		}
		
		?>		
		<div class="bottom-area wow zoomIn" style="<?php echo esc_attr($sec_bottomareaTmargin); ?>" "<?php echo esc_attr($sec_bottomareabottommargin); ?>">
			<div class="container">

			<div class="col-md-6 col-sm-12 col-xs-12 pd-0">
				<div class="footer-text">
					<?php if($footercopyright){ ?>
						<?php echo $footercopyright;?>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 pd-0">
				<div class="footer-link">
					<?php
					$Fservicetitle = get_theme_mod('footer_termtitle', 'Tearms of Service'); 
					$Fservicelink = get_theme_mod('footer_termlink', 'Tearms link here');
					$Fprivacytitle = get_theme_mod('footer_privacytitle', 'Privacy Policy'); 
					$Fprivacylink = get_theme_mod('footer_privacylink', 'Privacy link here');
					?>
					<?php if($Fservicetitle || $Fprivacytitle){ ?>
					
							<div class='footer-text'>
								<?php if(!empty($Fservicelink)){ ?>
								<a href="<?php echo $Fservicelink ?>" title="<?php echo $Fservicetitle ?>"><?php echo ($Fservicetitle);  ?></a>
								<?php }?>  |
								<?php if(!empty($Fprivacylink)){ ?>
								<a href="<?php echo $Fprivacylink ?>" title="<?php echo $Fprivacytitle ?>"><?php echo ($Fprivacytitle);  ?></a>
								<?php }?>  
							</div>
						
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
</footer><!-- #colophon -->
<script type="text/javascript">
	if(jQuery(window).width() >= 1170){
		new WOW().init();
	}
</script>
<script>
	$(window).scroll(function() {
		var height = $(window).scrollTop();
		if (height > 100) {
			$('#back2Top').fadeIn();
		} else {
			$('#back2Top').fadeOut();
		}
	});
	$(document).ready(function() {
		$("#back2Top").click(function(event) {
			event.preventDefault();
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});

	});
</script>


<?php wp_footer(); ?>
<a id="back2Top" title="Back to top" href="#"> &#10148; </a>
</body>
</html>