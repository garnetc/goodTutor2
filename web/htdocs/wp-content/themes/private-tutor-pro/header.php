<?php    
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luzuk Premium
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="https://use.fontawesome.com/18a9c36ed1.js"></script>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Allerta&display=swap" rel="stylesheet">
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"  ></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js" ></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="main-container">
		<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'InsideTours' ); ?></a> -->
		<div id="loading-area"><div class="la-anim-10"></div></div>
		<!-- header -->
		<!-- #masthead -->
		<header class="site-header header-transparent header mo-left header-seo">
			
			<div class="container clearfix">
				<div class="top-bar-head">
					<div class="header-left col-md-3 col-sm-9 col-xs-9 logo">
				
				<?php 
				
					if( get_theme_mod('pages_logoTopsetmaxwidth',true) ) {
						$pages_logoTopsetmaxwidth = 'max-width:'.esc_attr(get_theme_mod('pages_logoTopsetmaxwidth')).';';
					}

					?>
					<!-- website logo -->
					<div class="logo-header mostion">
						<?php 
						if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) :
							the_custom_logo();
					else : 
						if ( is_front_page() ) : ?>
							<h1 class="ht-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p class="ht-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php endif; ?>
						<?php endif; ?>
					</div> 
					<p class="ht-site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>  
					<!-- nav toggle button -->
					<div class="resp_header_logo">
						<?php 
						if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) :
							the_custom_logo();
					else : 
						if ( is_front_page() ) : ?>
							<h1 class="ht-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p class="ht-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php endif; ?>
							<!-- <p class="ht-site-description"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'description' ); ?></a></p> -->
						<?php endif; ?>
					</div>
				</div>
					<div class="col-md-8 col-md-offset-1 col-sm-3 col-xs-3 head-menu">
					<div class="site-navigation ">
                        <div class="hamburger-menus">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <nav class="navigation">
                            <div class="overlaybg"></div><!--  /.overlaybg -->
                            <!-- Main Menu -->
                            <div class="menu-wrapper">
                                <div class="menu-content">
                                    <?php
                                        if( get_post_meta( get_the_ID(), 'intrinsic_header_page_menu', true) !=='0') {
                                            wp_nav_menu ( array(
                                                'menu_class' => 'mainmenu ht-clearfix',
                                                'container'=> 'ul',
                                                'menu' => get_post_meta( get_the_ID(), 'intrinsic_header_page_menu', true),
                                                'theme_location' => 'primary',  
                                            )); 
                                        } else {
                                            wp_nav_menu ( array(
                                                'menu_class' => 'mainmenu ht-clearfix',
                                                'container'=> 'ul',
                                                'theme_location' => 'primary',  
                                            )); 
                                        }
                                    ?>
                                </div> <!-- /.hours-content-->

                              

							<div class="clearfix"></div>

                            </div><!-- /.menu-wrapper --> 
                        </nav>
                        <div class="clearfix"></div>
                    </div><!--  /.site-navigation -->

				  </div>
			  	  <?php if( get_theme_mod('Headersocial_button_display','show' ) == 'show') :
    			?>
				<?php

					$facebook = get_theme_mod('header_fb', '//facebook.com/');
					$twitter = get_theme_mod('header_tw', '//twitter.com/');
					$linkedIn = get_theme_mod('header_in', '//linkedin.com/');
					$youtube = get_theme_mod('header_youtube', 'https://www.youtube.com/');
					$instagram = get_theme_mod('header_instagram', 'https://instagram.com');
					$whatsapp = get_theme_mod('header_whatsapp', 'https://www.whatsapp.com');
				?>

				<div class="header-share"> 
					
					<div class="share-btn">
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
								<li><a href="<?php echo $youtube ?>" title="Youtube" class="site-button sharp" target="_blank"><i class="fa fa-youtube"></i></a></li>
							<?php }?>
							<?php if(!empty($instagram)){ ?>
								<li><a href="<?php echo $instagram ?>" title="Instagram" class="site-button sharp" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<?php }?>
							<?php if(!empty($whatsapp)){ ?>
								<li><a href="<?php echo $whatsapp ?>" title="Whats App" class="site-button sharp" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
							<?php }?>

							<li class="share-button"><a href="#" class="site-button sharp"><i class="fa fa-share-alt"></i></a></li>
						</ul>
					</div>
				</div>
			<?php endif ?>  
			<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>			
			<div class="clearfix"></div>
		</header>
	</div>
