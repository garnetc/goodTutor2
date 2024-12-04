<?php  
// TESTIMONIALS SECTION START HERE 

$wp_customize->add_section(
    'testimonials_area',
    array(
        'title'         => __( 'Testimonials Section', 'Luzuk Premium' ),
        'panel'   => 'luzuk_premium_home_panel',
    )
);
    //ENABLE/DISABLE TESTIMONIALS SECTION
$wp_customize->add_setting(
    'testimonials_area_disable',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default' => 'off'
    )
);
$wp_customize->add_control(
    new luzuk_Switch_Control(
        $wp_customize,
        'testimonials_area_disable',
        array(
            'settings'      => 'testimonials_area_disable',
            'section'       => 'testimonials_area',
            'label'         => __( 'Disable Section', 'Luzuk Premium' ),
            'on_off_label'  => array(
                'on' => __( 'Yes', 'Luzuk Premium' ),
                'off' => __( 'No', 'Luzuk Premium' )
            )   
        ) 
    )
);
 
backgroundManager($wp_customize, 'testimonials', 'testimonials_area', $color='#fff', get_template_directory_uri().'/images/testibg.jpg', 'color');


lzCustomLable($wp_customize, 'testimonials_area_overlayop', 'testimonials_area', 'Section Banner Overlay & Opacity settings:');

$wp_customize->add_setting(
'testimonials_page_secoverlayColor', array(
'default' => '#e7f0f9',
'sanitize_callback' => 'sanitize_hex_color',
)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'testimonials_page_secoverlayColor',array(
'settings' => 'testimonials_page_secoverlayColor',
'section' => 'testimonials_area',
'label' => __( 'Apply Overlay Color', 'Luzuk' ),
'description' => __( 'The color used for the overlay in the banner.', 'luzuk-premium' ),
)
)
);


$wp_customize->add_setting(
'cover_testimonials_template_overlay_opacity',
array(
'default' => 95,
'sanitize_callback' => 'absint',
'transport' => 'postMessage',
)
);

$wp_customize->add_control(
'cover_testimonials_template_overlay_opacity',
array(
'label' => __( 'Overlay Opacity', 'luzuk-premium' ),
'description' => __( 'Make sure that the contrast is high enough so that the text is readable.', 'luzuk-premium' ),
'section' => 'testimonials_area',
'type' => 'range',
'input_attrs' => luzuk_customize_opacity_range(),
)
);

$wp_customize->selective_refresh->add_partial(
'cover_testimonials_template_overlay_opacity',
array(
'selector' => '.cover-color-overlay',
'type' => 'cover_opacity',
)
);


lzCustomLable($wp_customize, 'luzuk_sec_blogsectionpadding', 'testimonials_area', 'Set Padding For Testimonial Section:');

$wp_customize->add_setting(
    'sec_testimonialsectionTpadding', 
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '6em', 'Luzuk Premium' )
    )
);
$wp_customize->add_control(
    'sec_testimonialsectionTpadding',
    array(
        'settings'      => 'sec_testimonialsectionTpadding',
        'section'       => 'testimonials_area',
        'type'          => 'text',
        'label'         => __( 'Testimonial Section Top Padding', 'Luzuk Premium' )
    )
);
$wp_customize->add_setting(
    'sec_testimonialsectionBpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '7em', 'Luzuk Premium' )
    )
);
$wp_customize->add_control(
    'sec_testimonialsectionBpadding',
    array(
        'settings'      => 'sec_testimonialsectionBpadding',
        'section'       => 'testimonials_area',
        'type'          => 'text',
        'label'         => __( 'Testimonial Section Bottom Padding', 'Luzuk Premium' )
    )
);
$wp_customize->add_setting(
    'luzuk_testimonials_title_subtitle_heading',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
    )
);
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
       'luzuk_testimonials_title_subtitle_heading',
       array(
           'settings'      => 'luzuk_testimonials_title_subtitle_heading',
           'section'       => 'testimonials_area',
           'label'         => __( 'Section Title , Sub Title & Text', 'Luzuk Premium' ),
       )
   )
);
$wp_customize->add_setting(
    'testimonials_title',
    array(
       'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'WHAT STUDENTS SAY', 'Luzuk Premium' )
    )
);
$wp_customize->add_control(
    'testimonials_title',
    array(
       'settings'      => 'testimonials_title',
       'section'       => 'testimonials_area',
       'type'          => 'text',
       'label'         => __( 'Section Title', 'Luzuk Premium' )
    )
);


// Heading color
addColorPalatOption($wp_customize, 'testimonialsarea_title_color', 'testimonials_area', 'Section Title color', '#041033');

$wp_customize->add_setting(
    'testimonials_sub_title',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Our Testimonials', 'Luzuk Premium', 'Luzuk Premium' )
    )
);
$wp_customize->add_control(
    'testimonials_sub_title',
    array(
        'settings'      => 'testimonials_sub_title',
        'section'       => 'testimonials_area',
        'type'          => 'text',
        'label'         => __( 'Section Sub Title', 'Luzuk Premium' )
    )
);
addColorPalatOption($wp_customize, 'testimonialsarea_subtitle_color', 'testimonials_area', 'Section Sub Title color', '#051033');



$wp_customize->add_setting(
    'testimonials_sub_text',
    array(
       'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .', 'Luzuk Premium' )
    )
);
$wp_customize->add_control(
    'testimonials_sub_text',
    array(
       'settings'      => 'testimonials_sub_text',
       'section'       => 'testimonials_area',
       'type'          => 'textarea',
       'label'         => __( 'Section Text', 'Luzuk Premium' )
    )
);

// text color
addColorPalatOption($wp_customize, 'testimonialsarea_text_color', 'testimonials_area', 'Section Text color', '#7e7f80');

$TesimonialsSingleChoice[] = 'select';
if(!is_array($TesimonialsSingleChoice)){
    $wp_customize->add_setting('testimonials_area_lbl', array('sanitize_callback'=>'luzuk_sanitize_text'));
    $wp_customize->add_control(
        new luzuk_Info_Text( 
            $wp_customize,
            'testimonials_area_lbl',
            array(
                'settings'      => 'testimonials_area_lbl',
                'section'       => 'testimonials_area',
                'label'         => __( 'Note:', 'Luzuk Premium' ), 
                'description'   => __( '<strong>Changes will not reflect unless you select the Testimonials.</strong> <br/>Please add the Testimonials from "Testimonials menu" and then select Testimonial to show information.', 'Luzuk Premium' ),
            )
        )
    );
}
$wp_customize->add_setting('luzuk_premium_testimonials_area_lbl', array('sanitize_callback'=>'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Info_Text( 
        $wp_customize,
        'luzuk_premium_testimonials_area_lbl',
        array(
            'settings'      => 'luzuk_premium_testimonials_area_lbl',
            'section'       => 'testimonials_area',
            'label'         => __( 'Note:', 'Luzuk Premium' ), 
            'description'   => __( 'Just place the shortcode "[TESTIMONIALS]" in your page to list the Testimonials in a page ', 'Luzuk Premium' ),
        )
    )
);
//TESTIMONIALS PAGES
for( $i = 1; $i < 10; $i++ ){
    $wp_customize->add_setting(
        'luzuk_testimonials_heading'.$i,
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'luzuk_testimonials_heading'.$i,
            array(
                'settings'      => 'luzuk_testimonials_heading'.$i,
                'section'       => 'testimonials_area',
                'label'         => __( 'Testimonial', 'Luzuk Premium' ).$i,
            )
        )
    );
    $wp_customize->add_setting(
        'testimonials_page'.$i,
        array(
            'sanitize_callback' => 'absint'
        )
    );
    $wp_customize->add_control(
        'testimonials_page'.$i,
        array(
            'settings'      => 'testimonials_page'.$i,
            'section'       => 'testimonials_area',
            'type'=> 'select',
            'label'         => __( 'Select a Client Testimonials', 'Luzuk Premium' ),
            'choices' => $TesimonialsSingleChoice,
        )
    );
}

addColorPalatOption($wp_customize, 'luzuk_testimonials_quotecolor', 'testimonials_area', ' Quote Color', '#041033');

addColorPalatOption($wp_customize, 'luzuk_testimonials_quotehovercolor1', 'testimonials_area', ' Quote Hover Color One', '#441f88');
addColorPalatOption($wp_customize, 'luzuk_testimonials_quotehovercolor2', 'testimonials_area', ' Quote Hover Color Two', '#4b91f1');

addColorPalatOption($wp_customize, 'luzuk_testimonials_textcolor', 'testimonials_area', ' Testimonial Color', '#919597');
addColorPalatOption($wp_customize, 'luzuk_testimonials_texthighlightcolor', 'testimonials_area', ' Testimonial Highlight Color', '#5e74fc');

addColorPalatOption($wp_customize, 'luzuk_testimonials_Namecolor', 'testimonials_area', ' Client Name Color', '#061032');
addColorPalatOption($wp_customize, 'luzuk_testimonials_Namehovercolor1', 'testimonials_area', ' Client Name Hover Color One ', '#421b85');
addColorPalatOption($wp_customize, 'luzuk_testimonials_Namehovercolor2', 'testimonials_area', ' Client Name Hover Color Two', '#57a3fc');
addColorPalatOption($wp_customize, 'luzuk_testimonials_Desgcolor', 'testimonials_area', ' Client Designation Color', '#929697');

addColorPalatOption($wp_customize, 'luzuk_testimonials_boxcolor', 'testimonials_area', ' Box Color', '#fff');
addColorPalatOption($wp_customize, 'luzuk_testimonials_indicatorcolor', 'testimonials_area', ' Indicator Color', '#fff');
addColorPalatOption($wp_customize, 'luzuk_testimonials_indicatorActivecolor1', 'testimonials_area', ' Active & Hover Indicator Color One', '#441f88');
addColorPalatOption($wp_customize, 'luzuk_testimonials_indicatorActivecolor2', 'testimonials_area', ' Active & Hover Indicator Color Two', '#4b91f1');

 $wp_customize->add_setting(
        'testimonials_img_heading',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'testimonials_img_heading',
            array(
                'settings'      => 'testimonials_img_heading',
                'section'       => 'testimonials_area',
                'label'         => __( 'Section Image', 'luzuk-premium' ),
            )
        )
    );

      $wp_customize->add_setting(
        'testimonials_img',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'testimonials_img',
            array(
                'section' => 'testimonials_area',
                'settings' => 'testimonials_img',
                'description' => __('Recommended Image Size: 500X600px', 'luzuk-premium')
            )
        )
    );


    $wp_customize->add_setting( 'testimonials_img_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'testimonials_img_display', array( 'label' => 'Image Display', 'section' => 'testimonials_area', 'settings' => 'testimonials_img_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Image', 'hide' => 'Hide Image', ), ) ); 