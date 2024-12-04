<?php
/**
 * Createing a bog pannel for customizer
 *
 *
 */
$categories = get_categories(array('hide_empty' => 0));
foreach ($categories as $category) {
	$cat[$category->term_id] = $category->cat_name;
}
/****************************/
// START BLOG SECTION FOR HOME PAGE
/*============BLOG PANEL============*/
$wp_customize->add_section(
	'blog_area',
	array(
		'title' => __( 'Blog Section', 'luzuk-premium' ),
		'panel' => 'luzuk_premium_home_panel',
     	//'priority' => '50',
	)
);
//ENABLE/DISABLE BLOG SECTION
$wp_customize->add_setting(
	'blog_section_disable',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default' => 'off'
	)
);
$wp_customize->add_control(
	new luzuk_Switch_Control(
		$wp_customize,
		'blog_section_disable',
		array(
			'settings'      => 'blog_section_disable',
			'section'       => 'blog_area',
			'label'         => __( 'Disable Section', 'luzuk-premium' ),
			'on_off_label'  => array(
				'on' => __( 'Yes', 'luzuk-premium' ),
				'off' => __( 'No', 'luzuk-premium' )
			)   
		)
	)
);

lzCustomLable($wp_customize, 'blog_area_blogsec', 'blog_area', 'Set Blog Complete Area:');

addColorPalatOption($wp_customize, 'blogarea_secbg_color_one', 'blog_area', 'Section Background Color One', '#fff');
addColorPalatOption($wp_customize, 'blogarea_secbg_color_two', 'blog_area', 'Section Background Color Two', '#e6eff8');

addColorPalatOption($wp_customize, 'blogarea_leftbgcurve_color2', 'blog_area', 'Area Curve Background Color', '#f3f7fb');

lzCustomLable($wp_customize, 'blog_area_blogsectionpadding', 'blog_area', 'Set Padding For Section:');

$wp_customize->add_setting(
    'blog_areaTpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '4em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'blog_areaTpadding',
    array(
        'settings'      => 'blog_areaTpadding',
        'section'       => 'blog_area',
        'type'          => 'text',
        'label'         => __( 'Section Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'blog_areaBpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '4em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'blog_areaBpadding',
    array(
        'settings'      => 'blog_areaBpadding',
        'section'       => 'blog_area',
        'type'          => 'text',
        'label'         => __( 'Section Bottom Padding', 'luzuk-premium' )
    )
);

lzCustomLable($wp_customize, 'blog_area_blogsecleft', 'blog_area', 'Set Blog Left Area:');

 $wp_customize->add_setting(
        'blog_image_heading',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'blog_image_heading',
            array(
                'settings'      => 'blog_image_heading',
                'section'       => 'blog_area',
                'label'         => __( 'Left Image', 'luzuk-premium' ),
            )
        )
    );

      $wp_customize->add_setting(
        'blog_image',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'blog_image',
            array(
                'section' => 'blog_area',
                'settings' => 'blog_image',
                'description' => __('Recommended Image Size: 500X600px', 'luzuk-premium')
            )
        )
    );

addColorPalatOption($wp_customize, 'blogarea_leftbg_color_one', 'blog_area', 'Left Area Background Color One', '#441e87');
addColorPalatOption($wp_customize, 'blogarea_leftbg_color_two', 'blog_area', 'Left Area Background Color Two', '#4b63b6');
addColorPalatOption($wp_customize, 'blogarea_leftbgcurve_color1', 'blog_area', 'Left Area Curve Background Color', '#4a5eb3');


lzCustomLable($wp_customize, 'blog_area_blogsecright', 'blog_area', 'Set Blog Right Area:');

$wp_customize->add_setting(
	'blog_title_subtitle_heading',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text'
	)
);
$wp_customize->add_control(
	new luzuk_Customize_Heading(
		$wp_customize,
		'blog_title_subtitle_heading',
		array(
			'settings'      => 'blog_title_subtitle_heading',
			'section'       => 'blog_area',
			'label'         => __( 'Section Heading & Sub Heading', 'luzuk-premium' ),
		)
	)
);

$wp_customize->add_setting(
    'blog_title_title',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'RECENT NEWS', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'blog_title_title',
    array(
        'settings'      => 'blog_title_title',
        'section'       => 'blog_area',
        'type'          => 'text',
        'label'         => __( 'Heading for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'blogarea_title_color', 'blog_area', 'Heading color', '#041033');
addColorPalatOption($wp_customize, 'blog_page_titleBorderColor', 'blog_area', 'Heading Border color', '#4640a7');

$wp_customize->add_setting(
    'blog_page_subtitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Recent Posts <br>& <span>Articles!</span>', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'blog_page_subtitle',
    array(
        'settings'      => 'blog_page_subtitle',
        'section'       => 'blog_area',
        'type'          => 'textarea',
        'label'         => __( 'Sub Heading for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'blogarea_subtitle_color', 'blog_area', 'Sub Heading color', '#051033');
addColorPalatOption($wp_customize, 'blogarea_subtitlehigh_color', 'blog_area', 'Sub Heading highlight color', '#4640a8');


//BLOG SETTINGS
$wp_customize->add_setting(
	'blog_post_count',
	array(
		'default'           => '2',
		'sanitize_callback' => 'luzuk_sanitize_choices'
	)
);
$wp_customize->add_control(
	new luzuk_Dropdown_Chooser(
		$wp_customize,
		'blog_post_count',
		array(
			'settings'      => 'blog_post_count',
			'section'       => 'blog_area',
			'label'         => __( 'Number of Posts to show', 'luzuk-premium' ),
			'choices'       => $luzuk_post_count_choice
		)
	)
);
$wp_customize->add_setting(
	'blog_cat_exclude',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text'
	)
);
$wp_customize->add_control(
	new luzuk_Customize_Checkbox_Multiple(
		$wp_customize,
		'blog_cat_exclude',
		array(
			'label' => __('Exclude Category from Blog Posts', 'luzuk-premium'),
			'section' => 'blog_area',
			'settings' => 'blog_cat_exclude',
			'choices' => $luzuk_cat
		)
	)
);
// END BLOG SECTION FOR HOME PAGE
/****************************/


// CREATING A BLOG SECTION IN CUSTOMIZER FOR BLOG PAGES
$wp_customize->add_section(
	'premium_blog_area',
	array(
		'title' => __( 'Blog Page Settings', 'luzuk-premium' ),
        // 'panel' => 'luzuk_premium_home_panel'
		'priority' =>19
	)
);

$wp_customize->add_setting('blog_categories_settings', array('sanitize_callback' => 'luzuk_sanitize_text'));
$wp_customize->add_control('blog_categories_settings', array(
    'settings' => 'blog_categories_settings',
    'label'    => __('Posts on Blog Page', 'luzuk-premium'),
    'section'  => 'lpremium_blog_area',
    'type'     => 'radio',
    'choices'  => array(
        '0' => __('Excerpts','luzuk-premium'),
        '1' => __('Full Posts','luzuk-premium'),
    ),
));
// ADDING THE CATEGORY TO SELECT
$wp_customize->add_setting('blog_categories', array('sanitize_callback' => 'luzuk_sanitize_text'));
$wp_customize->add_control(
	new luzuk_Customize_Checkbox_Multiple(
		$wp_customize,
		'blog_categories',
		array(
			'label' => __('Exclude Category from Blog Posts', 'luzuk-premium'),
			'section' => 'premium_blog_area',
			'settings' => 'blog_categories',
			'choices' => $cat
		)
	)
);

addColorPalatOption($wp_customize, 'blogarea_image_color_one', 'blog_area', 'Blog Image Overlay Color One', '#441e87');
addColorPalatOption($wp_customize, 'blogarea_image_color_two', 'blog_area', 'Blog Image Overlay Color Two', '#4b91f1');

addColorPalatOption($wp_customize, 'blogarea_imagelink_color', 'blog_area', 'Blog Image Overlay Link Color', '#4b91f1');
addColorPalatOption($wp_customize, 'blogarea_imagelinkbg_color', 'blog_area', 'Blog Image Overlay Link Background Color', '#fff');
addColorPalatOption($wp_customize, 'blogarea_imagelinkhover_color', 'blog_area', 'Blog Image Overlay Link Hover Color', '#fff');
addColorPalatOption($wp_customize, 'blogarea_imagelinkbghover_color', 'blog_area', 'Blog Image Overlay Link Background Hover Color', '#4b91f1');

addColorPalatOption($wp_customize, 'blogarea_text_color', 'blog_area', 'Blog Date & Text Color', '#b1b6c0');
addColorPalatOption($wp_customize, 'blogarea_admintext_color', 'blog_area', 'Blog Admin Text Color', '#514cac');
addColorPalatOption($wp_customize, 'blogarea_admintexthover_color', 'blog_area', 'Blog Admin Text Hover Color', '#4a93f2');
addColorPalatOption($wp_customize, 'blogarea_Title_color', 'blog_area', 'Blog Title Color', '#3d3d3d');
addColorPalatOption($wp_customize, 'blogarea_Titlehover_color', 'blog_area', 'Blog Title Hover Color', '#441f88');

lzCustomLable($wp_customize, 'blog_lblbuttonabtdisplay', 'blog_area', 'Button Display & Text Setting:');

// to show & hide another button
$wp_customize->add_setting( 'blog_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); $wp_customize->add_control( 'blog_button_display', array( 'label' => 'Button Display', 'section' => 'blog_area', 'settings' => 'blog_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Button', 'hide' => 'Hide Button', ), ) ); 
// end to show & hide button
// appointment 
$wp_customize->add_setting(
    'blog_btn_txt',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Older Posts' )
    )
);
$wp_customize->add_control(
    'blog_btn_txt',
    array(
        'settings'      => 'blog_btn_txt',
        'section'       => 'blog_area',
        'type'          => 'text',
        'label'         => __( 'Button Text', 'luzuk-premium' )
    )
);
$wp_customize->add_setting('blog_btnlink',   array('default'=> 'add link here', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('blog_btnlink',
    array(
        'settings'      => 'blog_btnlink',
        'section'       => 'blog_area',
        'type'          => 'url',
        'label'         => __( 'Add Button link here', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'blog_area_btn', 'blog_area', 'Button Text color ', '#fff');
addColorPalatOption($wp_customize, 'blog_area_btnbg1', 'blog_area', 'Button Background Color One ', '#441e87');
addColorPalatOption($wp_customize, 'blog_area_btnbg2', 'blog_area', 'Button Background Color Two ', '#4b91f1');
