<?php
$wp_customize->add_section(
    'newsletter_area',
    array(
        'title' => __('Newsletter Section', 'luzuk-premium' ),
        'panel' => 'luzuk_premium_home_panel'
    )
);
$wp_customize->add_setting(
    'newsletter_area_disable',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
    )
);
$wp_customize->add_control(
    new luzuk_Switch_Control(
        $wp_customize,
        'newsletter_area_disable',
        array(
            'settings'      => 'newsletter_area_disable',
            'section'       => 'newsletter_area',
            'label'         => __( 'Disable Section', 'luzuk-premium' ),
            'on_off_label'  => array(
                'on' => __( 'Yes', 'luzuk-premium' ),
                'off' => __( 'No', 'luzuk-premium' )
            ),
        )
    )
);

lzCustomLable($wp_customize, 'newsletterarea_padding', 'newsletter_area', 'Set Section Padding:');

$wp_customize->add_setting(
    'newsletter_areaTpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '6em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'newsletter_areaTpadding',
    array(
        'settings'      => 'newsletter_areaTpadding',
        'section'       => 'newsletter_area',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'newsletter_areaBpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '6em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'newsletter_areaBpadding',
    array(
        'settings'      => 'newsletter_areaBpadding',
        'section'       => 'newsletter_area',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'luzuk-premium' )
    )
);

backgroundManager($wp_customize, 'newsletter', 'newsletter_area', $color='#fff', get_template_directory_uri().'/images/default-gray.png', 'img');


$wp_customize->add_setting(
    'newsletter_page_maintitle_heading',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text'
    )
);
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'newsletter_page_maintitle_heading',
        array(
            'settings'      => 'newsletter_page_maintitle_heading',
            'section'       => 'newsletter_area',
            'label'         => __( 'Section Heading', 'luzuk-premium' ),
        )
    )
);    
 

$wp_customize->add_setting(
    'newsletter_page_titlel',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Subscribe to get notified!', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'newsletter_page_titlel',
    array(
        'settings'      => 'newsletter_page_titlel',
        'section'       => 'newsletter_area',
        'type'          => 'text',
        'label'         => __( 'Section Left Heading', 'luzuk-premium' )
    )
);


$wp_customize->add_setting(
    'newsletter_page_titler',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Be the first to get the app!', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'newsletter_page_titler',
    array(
        'settings'      => 'newsletter_page_titler',
        'section'       => 'newsletter_area',
        'type'          => 'text',
        'label'         => __( 'Section Right Heading', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'newsletterarea_sectitle_color', 'newsletter_area', 'Heading Color', '#262626');


lzCustomLable($wp_customize, 'newsletter_Form_label', 'newsletter_area', 'Newsletter Form Shortcode');

lzAddElement($wp_customize, 'luzuk_newsletter_shortcode', 'newsletter_area', 'textarea', $label="Form Shortcode", 'luzuk_sanitize_text', '[your shortcode]');

//form input text / placeholder color
addColorPalatOption($wp_customize, 'newsletter_forminputtextColor', 'newsletter_area', 'Form Input text / placeholder color', '#4f4f4f');

//form input bg color
addColorPalatOption($wp_customize, 'newsletter_forminputbgColor', 'newsletter_area', 'Form Input Background color', '#f2f2f3');

//form label color
addColorPalatOption($wp_customize, 'newsletter_formlabelColor', 'newsletter_area', 'Form label color', '#585858');

//form text color
addColorPalatOption($wp_customize, 'newsletter_formtextColor', 'newsletter_area', 'Form text color', '#585858');

//form button text color
addColorPalatOption($wp_customize, 'newsletter_formbuttontextColor', 'newsletter_area', 'Form button text color', '#fff');

//form button text color
addColorPalatOption($wp_customize, 'newsletter_formbuttontexthoverColor', 'newsletter_area', 'Form button text hover color', '#fff');

//form button background color
addColorPalatOption($wp_customize, 'newsletter_formbuttonbgColor1', 'newsletter_area', 'Form button background color one', '#441e87');
//form button background color
addColorPalatOption($wp_customize, 'newsletter_formbuttonbgColor2', 'newsletter_area', 'Form button background color Two', '#4b91f1');


$wp_customize->add_setting(
    'newsletter_page_textl',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'We are not spammers!', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'newsletter_page_textl',
    array(
        'settings'      => 'newsletter_page_textl',
        'section'       => 'newsletter_area',
        'type'          => 'text',
        'label'         => __( 'Section Left Text', 'luzuk-premium' )
    )
);
addColorPalatOption($wp_customize, 'newsletterarea_secltext_color', 'newsletter_area', 'Section left text color', '#6d6d6d');

// Adding the Label
lzCustomLable($wp_customize, 'reservation_lblImgTxt', 'newsletter_area' , 'Social media icons');

//for social to show & hide button

$wp_customize->add_setting( 'newslettersocial_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'newslettersocial_button_display', array( 'label' => 'Social Display', 'section' => 'newsletter_area', 'settings' => 'newslettersocial_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Social', 'hide' => 'Hide Social', ), ) ); 


// FACEBOOK 
$wp_customize->add_setting('newsletter_fb', array('default'=> 'https://facebook.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('newsletter_fb',
    array(
        'settings'      => 'newsletter_fb',
        'section'       => 'newsletter_area',
        'type'          => 'url',
        'label'         => __( 'Facebook Url', 'luzuk-premium' )
    )
);


// TWITTER
$wp_customize->add_setting('newsletter_tw', array('default'=> 'https://twitter.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('newsletter_tw',
    array(
        'settings'      => 'newsletter_tw',
        'section'       => 'newsletter_area',
        'type'          => 'url',
        'label'         => __( 'Twitter Url', 'luzuk-premium' )
    )
);


// LINKED IN
$wp_customize->add_setting('newsletter_in',array('default'=> 'https://linkedin.com','sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('newsletter_in',
    array(
        'settings'      => 'newsletter_in',
        'section'       => 'newsletter_area',
        'type'          => 'url',
        'label'         => __( 'Linkedin Url', 'luzuk-premium' )
    )
);


// Whatsapp IN
$wp_customize->add_setting('newsletter_whatsapp',array('default'=> 'https://www.whatsapp.com','sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('newsletter_whatsapp',
    array(
        'settings'      => 'newsletter_whatsapp',
        'section'       => 'newsletter_area',
        'type'          => 'url',
        'label'         => __( 'Whatsapp Url', 'luzuk-premium' )
    )
);


addColorPalatOption($wp_customize, 'newsletterarea_social_color', 'newsletter_area', 'Socials Icons Color', '#fff');
addColorPalatOption($wp_customize, 'newsletterarea_socialbg_color1', 'newsletter_area', 'First Socials Child Background Color', '#3fb6ea');
addColorPalatOption($wp_customize, 'newsletterarea_socialbg_color2', 'newsletter_area', 'Second Socials Child Background Color', '#3b5999');
addColorPalatOption($wp_customize, 'newsletterarea_socialbg_color3', 'newsletter_area', 'Third Socials Child Background Color', '#54abee');
addColorPalatOption($wp_customize, 'newsletterarea_socialbg_color4', 'newsletter_area', 'Fourth Socials Child Background Color', '#de4a39');
addColorPalatOption($wp_customize, 'newsletterarea_socialhoverbg_color1', 'newsletter_area', 'Socials Background Hover Color One', '#441e87');
addColorPalatOption($wp_customize, 'newsletterarea_socialhoverbg_color2', 'newsletter_area', 'Socials Background Hover Color Two', '#4b91f1');


$wp_customize->add_setting(
    'newsletter_social_text',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '- Lets get social!', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'newsletter_social_text',
    array(
        'settings'      => 'newsletter_social_text',
        'section'       => 'newsletter_area',
        'type'          => 'text',
        'label'         => __( 'Socials Text', 'luzuk-premium' )
    )
);
addColorPalatOption($wp_customize, 'newsletterarea_socialtext_color', 'newsletter_area', 'Socials text color', '#555555');

$wp_customize->add_setting(
    'newsletter_page_textr',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Etiam sem nibh, aliquet sit amet nunc nec. Nullam tincidunt consectetur odio vitae auctor. Phasellus nec nunc eu orci scelerisque fringilla. <span>Integer convallis pellentesque.</span> Mauris sit amet malesuada purus, a euismod neque.', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'newsletter_page_textr',
    array(
        'settings'      => 'newsletter_page_textr',
        'section'       => 'newsletter_area',
        'type'          => 'textarea',
        'label'         => __( 'Section Right Text', 'luzuk-premium' )
    )
);
addColorPalatOption($wp_customize, 'newsletterarea_secrtext_color', 'newsletter_area', 'Section right text color', '#5f5e60');
addColorPalatOption($wp_customize, 'newsletterarea_secrtexthighlight_color', 'newsletter_area', 'Section right highlight text color', '#2536fe');

  $wp_customize->add_setting(
        'applogo1_image_heading',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'applogo1_image_heading',
            array(
                'settings'      => 'applogo1_image_heading',
                'section'       => 'newsletter_area',
                'label'         => __( 'App Logo 1', 'luzuk-premium' ),
            )
        )
    );

      $wp_customize->add_setting(
        'applogo1_image',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'applogo1_image',
            array(
                'section' => 'newsletter_area',
                'settings' => 'applogo1_image',
                'description' => __('Recommended Image Size: 500X600px', 'luzuk-premium')
            )
        )
    );

$wp_customize->add_setting( 'applogo1_img_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'applogo1_img_display', array( 'label' => 'App Logo Image 1 Display', 'section' => 'newsletter_area', 'settings' => 'applogo1_img_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show App Logo Image 1', 'hide' => 'Hide App Logo Image 1', ), ) ); 



      $wp_customize->add_setting(
        'applogo2_image_heading',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'applogo2_image_heading',
            array(
                'settings'      => 'applogo2_image_heading',
                'section'       => 'newsletter_area',
                'label'         => __( 'App Logo 2', 'luzuk-premium' ),
            )
        )
    );

      $wp_customize->add_setting(
        'applogo2_image',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'applogo2_image',
            array(
                'section' => 'newsletter_area',
                'settings' => 'applogo2_image',
                'description' => __('Recommended Image Size: 500X600px', 'luzuk-premium')
            )
        )
    );

    $wp_customize->add_setting( 'applogo2_img_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'applogo2_img_display', array( 'label' => 'App Logo Image 2 Display', 'section' => 'newsletter_area', 'settings' => 'applogo2_img_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show App Logo Image 2', 'hide' => 'Hide App Logo Image 2', ), ) ); 