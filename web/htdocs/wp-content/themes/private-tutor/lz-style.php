<?php 

	$private_tutor_custom_style = '';

	// Logo Size
	$private_tutor_logo_top_padding = get_theme_mod('private_tutor_logo_top_padding');
	$private_tutor_logo_bottom_padding = get_theme_mod('private_tutor_logo_bottom_padding');
	$private_tutor_logo_left_padding = get_theme_mod('private_tutor_logo_left_padding');
	$private_tutor_logo_right_padding = get_theme_mod('private_tutor_logo_right_padding');

	if( $private_tutor_logo_top_padding != '' || $private_tutor_logo_bottom_padding != '' || $private_tutor_logo_left_padding != '' || $private_tutor_logo_right_padding != ''){
		$private_tutor_custom_style .=' .logo {';
			$private_tutor_custom_style .=' padding-top: '.esc_attr($private_tutor_logo_top_padding).'px ;
			padding-bottom: '.esc_attr($private_tutor_logo_bottom_padding).'px ;
			padding-left: '.esc_attr($private_tutor_logo_left_padding).'px ;
			padding-right: '.esc_attr($private_tutor_logo_right_padding).'px ;';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_logo_size = get_theme_mod('private_tutor_logo_size');
	if( $private_tutor_logo_size != '') {
		if($private_tutor_logo_size == 100) {
			$private_tutor_custom_style .=' .custom-logo-link img {';
				$private_tutor_custom_style .=' width: 350px;';
			$private_tutor_custom_style .=' }';
		} else if($private_tutor_logo_size >= 10 && $private_tutor_logo_size < 100) {
			$private_tutor_custom_style .=' .custom-logo-link img {';
				$private_tutor_custom_style .=' width: '.esc_attr($private_tutor_logo_size).'%;';
			$private_tutor_custom_style .=' }';
		}
	}

	// Service Section padding
	$private_tutor_subject_section_padding = get_theme_mod('private_tutor_subject_section_padding');

	if( $private_tutor_subject_section_padding != ''){
		$private_tutor_custom_style .=' #subjects-section {';
			$private_tutor_custom_style .=' padding-top: '.esc_attr($private_tutor_subject_section_padding).'px;
			padding-bottom: '.esc_attr($private_tutor_subject_section_padding).'px;';
		$private_tutor_custom_style .=' }';
	}

	// Slider
	if( get_theme_mod('private_tutor_slider_hide_show',false) == false){
		$private_tutor_custom_style .=' .page-template-custom-home-page .bottom-header {';
			$private_tutor_custom_style .=' position: static; border-bottom: 1px solid #4b95f4;';
		$private_tutor_custom_style .=' }';
	}

	// Site Title Font Size
	$private_tutor_site_title_font_size = get_theme_mod('private_tutor_site_title_font_size');
	if( $private_tutor_site_title_font_size != ''){
		$private_tutor_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$private_tutor_custom_style .=' font-size: '.esc_attr($private_tutor_site_title_font_size).'px;';
		$private_tutor_custom_style .=' }';
	}

	// Site Tagline Font Size
	$private_tutor_site_tagline_font_size = get_theme_mod('private_tutor_site_tagline_font_size');
	if( $private_tutor_site_tagline_font_size != ''){
		$private_tutor_custom_style .=' .logo p.site-description {';
			$private_tutor_custom_style .=' font-size: '.esc_attr($private_tutor_site_tagline_font_size).'px;';
		$private_tutor_custom_style .=' }';
	}

	//layout width
	$private_tutor_boxfull_width = get_theme_mod('private_tutor_boxfull_width');
	if ($private_tutor_boxfull_width !== '') {
		switch ($private_tutor_boxfull_width) {
			case 'container':
				$private_tutor_custom_style .= ' body, #header .bottom-header {
					max-width: 1140px;
					width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;
					}';
				break;
			case 'container-fluid':
				$private_tutor_custom_style .= ' body, #header .bottom-header { 
					width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;
				 }';
				break;
			case 'none':
				// No specific width specified, so no additional style needed.
				break;
			default:
				// Handle unexpected values.
				break;
		}
	}

	//Menu animation
	$private_tutor_dropdown_anim = get_theme_mod('private_tutor_dropdown_anim');

	if ( $private_tutor_dropdown_anim != '') {
		$private_tutor_custom_style .=' .nav-menu ul ul {';
			$private_tutor_custom_style .=' animation:'.esc_attr($private_tutor_dropdown_anim).' 1s ease;';
		$private_tutor_custom_style .=' }';
	}

	// Copyright padding
	$private_tutor_footer_copy_font_size = get_theme_mod('private_tutor_footer_copy_font_size');
	if( $private_tutor_footer_copy_font_size != ''){
		$private_tutor_custom_style .=' .site-info p, .site-info a {';
			$private_tutor_custom_style .=' font-size: '.esc_attr($private_tutor_footer_copy_font_size).'px;';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_copyright_padding = get_theme_mod('private_tutor_copyright_padding');

	if( $private_tutor_copyright_padding != ''){
		$private_tutor_custom_style .=' .site-info {';
			$private_tutor_custom_style .=' padding-top: '.esc_attr($private_tutor_copyright_padding).'px; padding-bottom: '.esc_attr($private_tutor_copyright_padding).'px;';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_copyright_color = get_theme_mod('private_tutor_copyright_color');
	if ( $private_tutor_copyright_color != '') {
		$private_tutor_custom_style .=' .site-info p a {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_copyright_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_copyrightbg_color = get_theme_mod('private_tutor_copyrightbg_color');
	if ( $private_tutor_copyrightbg_color != '') {
		$private_tutor_custom_style .=' .copyright {';
			$private_tutor_custom_style .=' background-color:'.esc_attr($private_tutor_copyrightbg_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_tbtext_color = get_theme_mod('private_tutor_tbtext_color');
	$private_tutor_tbbg_color = get_theme_mod('private_tutor_tbbg_color');
	if ( $private_tutor_tbtext_color != '') {
		$private_tutor_custom_style .=' .back-to-top {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_tbtext_color).'; background-color:'.esc_attr($private_tutor_tbbg_color).';';
		$private_tutor_custom_style .=' }';
	}

	// Header Image
	$header_image_url = private_tutor_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$private_tutor_custom_style .=' #inner-pages-header {';
			$private_tutor_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$private_tutor_custom_style .=' }';
		$private_tutor_custom_style .=' .header-overlay {';
			$private_tutor_custom_style .=' position: absolute; 	width: 100%; height: 100%; 	top: 0; left: 0; background: #000; opacity: 0.3;';
		$private_tutor_custom_style .=' }';
	} else {
		$private_tutor_custom_style .=' #inner-pages-header {';
			$private_tutor_custom_style .=' background: linear-gradient(0deg,#eceffc,#fff 80%) no-repeat; ';
		$private_tutor_custom_style .=' }';
		$private_tutor_custom_style .=' #inner-pages-header h1, #inner-pages-header .theme-breadcrumb, #inner-pages-header .theme-breadcrumb a, #inner-pages-header .theme-breadcrumb span {';
			$private_tutor_custom_style .=' color: #000; ';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_slider_hide_show = get_theme_mod('private_tutor_slider_hide_show',false);
	if( $private_tutor_slider_hide_show == true){
		$private_tutor_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$private_tutor_custom_style .=' display:none;';
		$private_tutor_custom_style .=' }';
	}

	//Slider css

	$private_tutor_slider_title_font_size = get_theme_mod('private_tutor_slider_title_font_size');
	if( $private_tutor_slider_title_font_size != ''){
		$private_tutor_custom_style .=' #slider .inner_carousel h2 {';
			$private_tutor_custom_style .=' font-size: '.esc_attr($private_tutor_slider_title_font_size).'px;';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_slider_text_font_size = get_theme_mod('private_tutor_slider_text_font_size');
	if( $private_tutor_slider_text_font_size != ''){
		$private_tutor_custom_style .=' #slider .inner_carousel p {';
			$private_tutor_custom_style .=' font-size: '.esc_attr($private_tutor_slider_text_font_size).'px;';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_slider_title_color = get_theme_mod('private_tutor_slider_title_color');
	if ( $private_tutor_slider_title_color != '') {
		$private_tutor_custom_style .=' #slider .inner_carousel h2 {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_slider_title_color).';';
		$private_tutor_custom_style .=' }';
	}
	$private_tutor_slider_text_color = get_theme_mod('private_tutor_slider_text_color');
	if ( $private_tutor_slider_text_color != '') {
		$private_tutor_custom_style .=' #slider .inner_carousel p {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_slider_text_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_sliderbtn_color = get_theme_mod('private_tutor_sliderbtn_color');
	$private_tutor_sliderbtnbg_color = get_theme_mod('private_tutor_sliderbtnbg_color');

	if ( $private_tutor_sliderbtn_color != '') {
		$private_tutor_custom_style .=' #slider a.read-btn {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_sliderbtn_color).'; background:'.esc_attr($private_tutor_sliderbtnbg_color).';';
		$private_tutor_custom_style .=' }';
	}

	//Subject color
	$private_tutor_subject_section_small_heading_font_size = get_theme_mod('private_tutor_subject_section_small_heading_font_size');
	if( $private_tutor_subject_section_small_heading_font_size != ''){
		$private_tutor_custom_style .=' .subjects-title small {';
			$private_tutor_custom_style .=' font-size: '.esc_attr($private_tutor_subject_section_small_heading_font_size).'px;';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_section_heading_font_size = get_theme_mod('private_tutor_subject_section_heading_font_size');
	if( $private_tutor_subject_section_heading_font_size != ''){
		$private_tutor_custom_style .=' .subjects-title h2 {';
			$private_tutor_custom_style .=' font-size: '.esc_attr($private_tutor_subject_section_heading_font_size).'px;';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_img_size = get_theme_mod('private_tutor_subject_img_size');

	if( $private_tutor_subject_img_size != ''){
		$private_tutor_custom_style .=' .subjects-img, .subjects-img img{';
			$private_tutor_custom_style .=' width: '.esc_attr($private_tutor_subject_img_size).'px; height: '.esc_attr($private_tutor_subject_img_size).'px;';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_section_small_heading_color = get_theme_mod('private_tutor_subject_section_small_heading_color');
	if ( $private_tutor_subject_section_small_heading_color != '') {
		$private_tutor_custom_style .=' .subjects-title small {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_subject_section_small_heading_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_section_heading_color = get_theme_mod('private_tutor_subject_section_heading_color');
	if ( $private_tutor_subject_section_heading_color != '') {
		$private_tutor_custom_style .=' .subjects-title h2 {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_subject_section_heading_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_imgbdr_color = get_theme_mod('private_tutor_subject_imgbdr_color');
	if ( $private_tutor_subject_imgbdr_color != '') {
		$private_tutor_custom_style .=' .subjects-img {';
			$private_tutor_custom_style .=' background-color:'.esc_attr($private_tutor_subject_imgbdr_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_boxtitle_color = get_theme_mod('private_tutor_subject_boxtitle_color');
	if ( $private_tutor_subject_boxtitle_color != '') {
		$private_tutor_custom_style .=' .subjects-content h3 {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_subject_boxtitle_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_boxtext_color = get_theme_mod('private_tutor_subject_boxtext_color');
	if ( $private_tutor_subject_boxtext_color != '') {
		$private_tutor_custom_style .=' .subjects-content p {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_subject_boxtext_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_boxbg_color = get_theme_mod('private_tutor_subject_boxbg_color');
	if ( $private_tutor_subject_boxbg_color != '') {
		$private_tutor_custom_style .=' #subjects-section .subjects-content {';
			$private_tutor_custom_style .=' background-color:'.esc_attr($private_tutor_subject_boxbg_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_boxbdrhvr_color = get_theme_mod('private_tutor_subject_boxbdrhvr_color');
	if ( $private_tutor_subject_boxbdrhvr_color != '') {
		$private_tutor_custom_style .=' #subjects-section .subjects-box:hover .subject-box-border {';
			$private_tutor_custom_style .=' background:'.esc_attr($private_tutor_subject_boxbdrhvr_color).';';
		$private_tutor_custom_style .=' }';
	}

	$private_tutor_subject_boxicon_color = get_theme_mod('private_tutor_subject_boxicon_color');
	if ( $private_tutor_subject_boxicon_color != '') {
		$private_tutor_custom_style .=' #subjects-section .read-btn a {';
			$private_tutor_custom_style .=' color:'.esc_attr($private_tutor_subject_boxicon_color).';';
		$private_tutor_custom_style .=' }';
	}