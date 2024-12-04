<?php
$wp_customize->add_section(
    'contact_area',
    array(
        'title' => __('Contact Section', 'luzuk-premium' ),
        'panel' => 'luzuk_premium_home_panel'
    )
);
$wp_customize->add_setting(
    'contact_area_disable',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
    )
);
$wp_customize->add_control(
    new luzuk_Switch_Control(
        $wp_customize,
        'contact_area_disable',
        array(
            'settings'      => 'contact_area_disable',
            'section'       => 'contact_area',
            'label'         => __( 'Disable Section', 'luzuk-premium' ),
            'on_off_label'  => array(
                'on' => __( 'Yes', 'luzuk-premium' ),
                'off' => __( 'No', 'luzuk-premium' )
            ),
        )
    )
);

lzCustomLable($wp_customize, 'contactarea_padding', 'contact_area', 'Set Section Padding:');

$wp_customize->add_setting(
    'contact_areaTpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '17em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'contact_areaTpadding',
    array(
        'settings'      => 'contact_areaTpadding',
        'section'       => 'contact_area',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'contact_areaBpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '6em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'contact_areaBpadding',
    array(
        'settings'      => 'contact_areaBpadding',
        'section'       => 'contact_area',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'luzuk-premium' )
    )
);

backgroundManager($wp_customize, 'contact', 'contact_area', $color='#fff', get_template_directory_uri().'/images/default-gray.png', 'img');

$wp_customize->add_setting(
    'contact_form_lbl',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
    )
);

$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'contact_form_lbl',
        array(
            'settings'      => 'contact_form_lbl',
            'section'       => 'contact_area',
            'label'         => __( 'Add contact Form shortcode', 'luzuk-premium' ),
        )
    )
);
$wp_customize->add_setting(
    'contact_form_shortcode',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Add your form shortcode on customiser', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'contact_form_shortcode',
    array(
        'settings'      => 'contact_form_shortcode',
        'section'       => 'contact_area',
        'type'          => 'textarea',
        'label'         => __( 'Shortcode', 'luzuk-premium' )
    )
);

//form input text / placeholder color
addColorPalatOption($wp_customize, 'contact_forminputtextColor', 'contact_area', 'Form Input text / placeholder & Label color', '#838383');
addColorPalatOption($wp_customize, 'contact_forminputborderColor', 'contact_area', 'Form Input Border color', '#f3f3f3');
addColorPalatOption($wp_customize, 'contact_forminputbgColor', 'contact_area', 'Form Input Background color', '#fbfbfb');

//form button text color
addColorPalatOption($wp_customize, 'contact_formbuttontextColor', 'contact_area', 'Form button text color', '#fff');
//form button background color
addColorPalatOption($wp_customize, 'contact_formbuttonbgColor1', 'contact_area', 'Form button background color one', '#441f88');
addColorPalatOption($wp_customize, 'contact_formbuttonbgColor2', 'contact_area', 'Form button background color two', '#4b91f1');
//form button text color
addColorPalatOption($wp_customize, 'contact_formbuttontexthoverColor', 'contact_area', 'Form button text hover color', '#fff');

addColorPalatOption($wp_customize, 'contact_formlabelColor', 'contact_area', 'Form label color', '#838383');
addColorPalatOption($wp_customize, 'contact_formtextColor', 'contact_area', 'Form text color', '#838383');

addColorPalatOption($wp_customize, 'contact_bgColor', 'contact_area', 'Form Box Background color', '#fff');
addColorPalatOption($wp_customize, 'contact_formbtopborderColor1', 'contact_area', 'Form Box Top Border Color One', '#441e87');
addColorPalatOption($wp_customize, 'contact_formbtopborderColor2', 'contact_area', 'Form Box Top Border Color Two', '#4b91f1');

 $wp_customize->add_setting(
        'contact_image_heading1',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'contact_image_heading1',
            array(
                'settings'      => 'contact_image_heading1',
                'section'       => 'contact_area',
                'label'         => __( 'Form Image', 'luzuk-premium' ),
            )
        )
    );

        $wp_customize->add_setting(
        'contact_formimage',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'contact_formimage',
            array(
                'section' => 'contact_area',
                'settings' => 'contact_formimage',
                'description' => __('Recommended Image Size: 500X600px', 'luzuk-premium')
            )
        )
    );


 


 $wp_customize->add_setting(
        'contact_image_heading',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'contact_image_heading',
            array(
                'settings'      => 'about_image_heading',
                'section'       => 'contact_area',
                'label'         => __( 'Outer Image', 'luzuk-premium' ),
            )
        )
    );

       $wp_customize->add_setting(
        'contact_image',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'contact_image',
            array(
                'section' => 'contact_area',
                'settings' => 'contact_image',
                'description' => __('Recommended Image Size: 500X600px', 'luzuk-premium')
            )
        )
    );


$wp_customize->add_setting(
    'contact_page_maintitle_heading',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text'
    )
);
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'contact_page_maintitle_heading',
        array(
            'settings'      => 'contact_page_maintitle_heading',
            'section'       => 'contact_area',
            'label'         => __( 'Section Heading, Sub Heading & Text', 'luzuk-premium' ),
        )
    )
);    
$wp_customize->add_setting(
    'contact_page_maintitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'GET IN TOUCH WITH US', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'contact_page_maintitle',
    array(
        'settings'      => 'contact_page_maintitle',
        'section'       => 'contact_area',
        'type'          => 'text',
        'label'         => __( 'Heading for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'contactarea_title_color', 'contact_area', 'Heading color', '#041033');
addColorPalatOption($wp_customize, 'contact_page_titleBorderColor', 'contact_area', 'Heading Border color', '#4640a7');

$wp_customize->add_setting(
    'contact_page_subtitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Reach Us Out & We will get <span>Back to you ASAP !</span>', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'contact_page_subtitle',
    array(
        'settings'      => 'contact_page_subtitle',
        'section'       => 'contact_area',
        'type'          => 'textarea',
        'label'         => __( 'Sub Heading for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'contactarea_subtitle_color', 'contact_area', 'Sub Heading color', '#051033');
addColorPalatOption($wp_customize, 'contactarea_subtitlehigh_color', 'contact_area', 'Sub Heading highlight color', '#4640a8');

$wp_customize->add_setting(
    'contact_page_text',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur  adipiscing sed  do eiusmod tempor  incididunt ut labore et dolore aliquasmod tempor.', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'contact_page_text',
    array(
        'settings'      => 'contact_page_text',
        'section'       => 'contact_area',
        'type'          => 'textarea',
        'label'         => __( 'Text for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'contactarea_text_color', 'contact_area', 'Text color', '#7e7f80');



$wp_customize->add_setting(
    'contact_page_textlist',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '<ul>
            <li>Quickly Aggregate B2B users.</li>
            <li>Appropriately empower dynamic leadership.</li>
            <li>Here’s what they have to say about us.</li>
            </ul>', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'contact_page_textlist',
    array(
        'settings'      => 'contact_page_textlist',
        'section'       => 'contact_area',
        'type'          => 'textarea',
        'label'         => __( 'List for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'contact_formlistColor', 'contact_area', 'Text List color', '#212121');
addColorPalatOption($wp_customize, 'contact_formlisticonColor1', 'contact_area', 'Text List Icon Color One', '#441f88');
addColorPalatOption($wp_customize, 'contact_formlisticonColor2', 'contact_area', 'Text List Icon Color Two', '#4b91f1');