<?php 
    $wp_customize->add_section(
        'about_area',
        array(
            'title' => __( 'About Us Section', 'luzuk-premium' ),
            'panel' => 'luzuk_premium_home_panel'
        )
    );
    $wp_customize->add_setting(
        'about_area_disable',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text',
        )
    );
    $wp_customize->add_control(
        new luzuk_Switch_Control(
            $wp_customize,
            'about_area_disable',
            array(
                'settings'      => 'about_area_disable',
                'section'       => 'about_area',
                'label'         => __( 'Disable Section', 'luzuk-premium' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'luzuk-premium' ),
                    'off' => __( 'No', 'luzuk-premium' )
                ),
            )
        )
    ); 

backgroundManager($wp_customize, 'about', 'about_area', $color='#fff', get_template_directory_uri().'/images/default-gray.png', 'img');

lzCustomLable($wp_customize, 'aboutarea_padding', 'about_area', 'Set Section Padding:');

$wp_customize->add_setting(
    'about_areaTpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '3em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'about_areaTpadding',
    array(
        'settings'      => 'about_areaTpadding',
        'section'       => 'about_area',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'about_areaBpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '1em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'about_areaBpadding',
    array(
        'settings'      => 'about_areaBpadding',
        'section'       => 'about_area',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'luzuk-premium' )
    )
);

lzCustomLable($wp_customize, 'aboutarea_expblock', 'about_area', 'Set Experience Block:');
    $wp_customize->add_setting(
        'about_exyear',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text',
            'default'           => __( '08+', 'luzuk-premium' )
        )
    );
    $wp_customize->add_control(
        'about_exyear',
        array(
            'settings'      => 'about_exyear',
            'section'       => 'about_area',
            'type'          => 'text',
            'label'         => __( 'Experience Year', 'luzuk-premium' )
        )
    );

    $wp_customize->add_setting(
        'about_exyeartext',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text',
            'default'           => __( 'Years Experience', 'luzuk-premium' )
        )
    );
    $wp_customize->add_control(
        'about_exyeartext',
        array(
            'settings'      => 'about_exyeartext',
            'section'       => 'about_area',
            'type'          => 'text',
            'label'         => __( 'Experience Year Text', 'luzuk-premium' )
        )
    );

addColorPalatOption($wp_customize, 'about_area_exp', 'about_area', 'Experience Year & Text color ', '#fff');
addColorPalatOption($wp_customize, 'about_area_expborder', 'about_area', 'Border color ', '#fff');
addColorPalatOption($wp_customize, 'about_area_expbg1', 'about_area', 'Experience Box Color One ', '#441e87');
addColorPalatOption($wp_customize, 'about_area_expbg2', 'about_area', 'Experience Box Color Two ', '#4b91f1');

  $wp_customize->add_setting(
        'about_image_heading',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'about_image_heading',
            array(
                'settings'      => 'about_image_heading',
                'section'       => 'about_area',
                'label'         => __( 'Left Image', 'luzuk-premium' ),
            )
        )
    );

      $wp_customize->add_setting(
        'about_image',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'about_image',
            array(
                'section' => 'about_area',
                'settings' => 'about_image',
                'description' => __('Recommended Image Size: 500X600px', 'luzuk-premium')
            )
        )
    );


    $wp_customize->add_setting(
        'about_title_heading',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'about_title_heading',
            array(
                'settings'      => 'about_title_heading',
                'section'       => 'about_area',
                'label'         => __( 'Section Heading, Sub Heading', 'luzuk-premium' ),
            )
        )
    );    


    $wp_customize->add_setting(
        'about_title',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text',
            'default'           => __( 'ABOUT TUTORPRO', 'luzuk-premium' )
        )
    );
    $wp_customize->add_control(
        'about_title',
        array(
            'settings'      => 'about_title',
            'section'       => 'about_area',
            'type'          => 'text',
            'label'         => __( 'Section Heading', 'luzuk-premium' )
        )
    );

addColorPalatOption($wp_customize, 'about_area_sectitle_color', 'about_area', 'Heading color ', '#041032');
addColorPalatOption($wp_customize, 'about_area_sectitleborder_color', 'about_area', 'Heading Border Color ', '#4641a8');

  $wp_customize->add_setting(
        'about_subtitle',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text',
            'default'           => __( '"We Help You Ace your Acedamics Score & More!"', 'luzuk-premium' )
        )
    );
    $wp_customize->add_control(
        'about_subtitle',
        array(
            'settings'      => 'about_subtitle',
            'section'       => 'about_area',
            'type'          => 'textarea',
            'label'         => __( 'Section Sub Heading', 'luzuk-premium' )
        )
    );

addColorPalatOption($wp_customize, 'about_area_secsubtitle_color', 'about_area', 'Sub Heading color ', '#041033');
addColorPalatOption($wp_customize, 'about_area_secsubtitleborer_color', 'about_area', 'Sub Heading Border color ', '#497edf');
$wp_customize->add_setting('aboutus_npp_heading',array('sanitize_callback' => 'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'aboutus_npp_heading',
        array(
            'settings'      => 'aboutus_npp_heading',
            'section'       => 'about_area',
            'label'         => __( 'Number Of About Plans', 'luzuk-premium' ),
        )
    )
);    
$wp_customize->add_setting('aboutus_npp_count',array('sanitize_callback' => 'luzuk_sanitize_text','default' => 2));
$wp_customize->add_control(
    'aboutus_npp_count',
    array(
        'settings'      => 'aboutus_npp_count',
        'section'       => 'about_area',
        'type'          => 'select',
        'label'         => __( 'Number of About plan to show', 'luzuk-premium' ),
        'choices'=>array(1,2,3,4,5,6,7,8,9,10,11,12)
    )
);

//ABOUT PAGES
for( $i = 1; $i <= 12; $i++ ){
    $wp_customize->add_setting(
        'aboutus_header'.$i,
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'aboutus_header'.$i,
            array(
                'settings'      => 'aboutus_header'.$i,
                'section'       => 'about_area',
                'label'         => __( 'About Page ', 'luzuk-premium' ).$i
            )
        )
    );

     $wp_customize->add_setting(
        'aboutus_page_icon'.$i,
        array(
            'default'           => 'fa fa-trophy',
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );        
    $wp_customize->add_control(
        new luzuk_Fontawesome_Icon_Chooser(
            $wp_customize,
            'aboutus_page_icon'.$i,
            array(
                'settings'      => 'aboutus_page_icon'.$i,
                'section'       => 'about_area',
                'type'          => 'icon',
                'label'         => __( 'FontAwesome Icon', 'luzuk-premium' ),
            )
        )
    );

lzAddElement($wp_customize, 'aboutus_page_title'.$i, 'about_area', $type = 'text', $label="Title", $callback ='luzuk_sanitize_text', $default='Rated as Best Tutor (2019)');
    
}
addColorPalatOption($wp_customize, 'about_area_pageicon', 'about_area', 'About page icon color', '#041033');
addColorPalatOption($wp_customize, 'about_area_pageiconhover', 'about_area', 'About page icon hover color', '#441e87');
addColorPalatOption($wp_customize, 'about_area_pagetitle', 'about_area', 'About page title color', '#030f3c');



$wp_customize->add_setting(
        'about_text',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text',
            'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .', 'luzuk-premium' )
        )
    );
    $wp_customize->add_control(
        'about_text',
        array(
            'settings'      => 'about_text',
            'section'       => 'about_area',
            'type'          => 'textarea',
            'label'         => __( 'Section Text', 'luzuk-premium' )
        )
    );
addColorPalatOption($wp_customize, 'about_area_text', 'about_area', 'Section Text color', '#979797');

$wp_customize->add_setting(
        'about_teacher_name',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text',
            'default'           => __( 'Kevin Malone', 'luzuk-premium' )
        )
    );
    $wp_customize->add_control(
        'about_teacher_name',
        array(
            'settings'      => 'about_teacher_name',
            'section'       => 'about_area',
            'type'          => 'text',
            'label'         => __( 'Teacher Name', 'luzuk-premium' )
        )
    );
addColorPalatOption($wp_customize, 'about_area_pagetname', 'about_area', 'Section Text color', '#071a42');


$wp_customize->add_setting(
        'about_teacher_desg',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text',
            'default'           => __( 'Phd in Business Finance/Tutor', 'luzuk-premium' )
        )
    );
    $wp_customize->add_control(
        'about_teacher_desg',
        array(
            'settings'      => 'about_teacher_desg',
            'section'       => 'about_area',
            'type'          => 'text',
            'label'         => __( 'Teacher Designation', 'luzuk-premium' )
        )
    );
addColorPalatOption($wp_customize, 'about_area_pagetdesg', 'about_area', 'Section Text color', '#979797');

// Adding the Label
lzCustomLable($wp_customize, 'about_lblImgTxt', 'about_area' , 'Social media icons');

//for social to show & hide button

$wp_customize->add_setting( 'aboutsocial_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'aboutsocial_button_display', array( 'label' => 'Social Display', 'section' => 'about_area', 'settings' => 'aboutsocial_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Social', 'hide' => 'Hide Social', ), ) ); 


// FACEBOOK 
$wp_customize->add_setting('about_fb', array('default'=> 'https://facebook.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('about_fb',
    array(
        'settings'      => 'about_fb',
        'section'       => 'about_area',
        'type'          => 'url',
        'label'         => __( 'Facebook Url', 'luzuk-premium' )
    )
);
// TWITTER
$wp_customize->add_setting('about_tw', array('default'=> 'https://twitter.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('about_tw',
    array(
        'settings'      => 'about_tw',
        'section'       => 'about_area',
        'type'          => 'url',
        'label'         => __( 'Twitter Url', 'luzuk-premium' )
    )
);

// LINKED IN
$wp_customize->add_setting('about_in',array('default'=> 'https://linkedin.com','sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('about_in',
    array(
        'settings'      => 'about_in',
        'section'       => 'about_area',
        'type'          => 'url',
        'label'         => __( 'Linkedin Url', 'luzuk-premium' )
    )
);

// LINKED IN
$wp_customize->add_setting('about_youtube',array('default'=> 'https://www.youtube.com/','sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('about_youtube',
    array(
        'settings'      => 'about_youtube',
        'section'       => 'about_area',
        'type'          => 'url',
        'label'         => __( 'Youtube Url', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'about_area_social', 'about_area', 'Socials color ', '#051033');
addColorPalatOption($wp_customize, 'about_area_socialhover', 'about_area', 'Socials Hover color ', '#fff');
addColorPalatOption($wp_customize, 'about_area_socialhoverbg1', 'about_area', 'Socials Background Hover Color One ', '#441e87');
addColorPalatOption($wp_customize, 'about_area_socialhoverbg2', 'about_area', 'Socials Background Hover Color Two ', '#4b91f1');

lzCustomLable($wp_customize, 'aboutusbtn_lblbuttonabtdisplay', 'about_area', 'Button Display & Text Setting:');

// to show & hide another button
$wp_customize->add_setting( 'about_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); $wp_customize->add_control( 'about_button_display', array( 'label' => 'Button Display', 'section' => 'about_area', 'settings' => 'about_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Button', 'hide' => 'Hide Button', ), ) ); 
// end to show & hide button
// appointment 
$wp_customize->add_setting(
    'about_btn_txt',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Connect With Us' )
    )
);
$wp_customize->add_control(
    'about_btn_txt',
    array(
        'settings'      => 'about_btn_txt',
        'section'       => 'about_area',
        'type'          => 'text',
        'label'         => __( 'Button Text', 'luzuk-premium' )
    )
);
$wp_customize->add_setting('about_btnlink',   array('default'=> 'add link here', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('about_btnlink',
    array(
        'settings'      => 'about_btnlink',
        'section'       => 'about_area',
        'type'          => 'url',
        'label'         => __( 'Add Button link here', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'about_area_btn', 'about_area', 'Button Text color ', '#fff');
addColorPalatOption($wp_customize, 'about_area_btnbg1', 'about_area', 'Button Background Color One ', '#441e87');
addColorPalatOption($wp_customize, 'about_area_btnbg2', 'about_area', 'Button Background Color Two ', '#4b91f1');


$wp_customize->add_setting(
        'about_highlightimg_heading',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'about_highlightimg_heading',
            array(
                'settings'      => 'about_highlightimg_heading',
                'section'       => 'about_area',
                'label'         => __( 'Section Side Image', 'luzuk-premium' ),
            )
        )
    );

      $wp_customize->add_setting(
        'about_highlightimg',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'about_highlightimg',
            array(
                'section' => 'about_area',
                'settings' => 'about_highlightimg',
                'description' => __('Recommended Image Size: 210X630px', 'luzuk-premium')
            )
        )
    );