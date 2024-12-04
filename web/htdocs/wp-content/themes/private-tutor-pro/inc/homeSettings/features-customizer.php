<?php
$wp_customize->add_section(
    'features_area',
    array(
        'title' => __('Features Section', 'luzuk-premium' ),
        'panel' => 'luzuk_premium_home_panel'
    )
);
$wp_customize->add_setting(
    'features_area_disable',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
    )
);
$wp_customize->add_control(
    new luzuk_Switch_Control(
        $wp_customize,
        'features_area_disable',
        array(
            'settings'      => 'features_area_disable',
            'section'       => 'features_area',
            'label'         => __( 'Disable Section', 'luzuk-premium' ),
            'on_off_label'  => array(
                'on' => __( 'Yes', 'luzuk-premium' ),
                'off' => __( 'No', 'luzuk-premium' )
            ),
        )
    )
);

lzCustomLable($wp_customize, 'featuresarea_padding', 'features_area', 'Set Section Padding:');

$wp_customize->add_setting(
    'features_areaTpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '13em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'features_areaTpadding',
    array(
        'settings'      => 'features_areaTpadding',
        'section'       => 'features_area',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'features_areaBpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '4em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'features_areaBpadding',
    array(
        'settings'      => 'features_areaBpadding',
        'section'       => 'features_area',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'luzuk-premium' )
    )
);

backgroundManager($wp_customize, 'features', 'features_area', $color='#e6eff8', get_template_directory_uri().'/images/default-gray.png', 'img');

$wp_customize->add_setting(
    'features_page_maintitle_heading',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text'
    )
);
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'features_page_maintitle_heading',
        array(
            'settings'      => 'features_page_maintitle_heading',
            'section'       => 'features_area',
            'label'         => __( 'Section Heading, Sub Heading & Text', 'luzuk-premium' ),
        )
    )
);    
$wp_customize->add_setting(
    'features_page_maintitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'OUR FEATURES', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'features_page_maintitle',
    array(
        'settings'      => 'features_page_maintitle',
        'section'       => 'features_area',
        'type'          => 'text',
        'label'         => __( 'Heading for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'featuresarea_title_color', 'features_area', 'Heading color', '#041033');
addColorPalatOption($wp_customize, 'features_page_titleBorderColor', 'features_area', 'Heading Border color', '#4640a7');

$wp_customize->add_setting(
    'features_page_subtitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'World best Virtual Learning <span>Network education eLearning!</span>', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'features_page_subtitle',
    array(
        'settings'      => 'features_page_subtitle',
        'section'       => 'features_area',
        'type'          => 'textarea',
        'label'         => __( 'Sub Heading for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'featuresarea_subtitle_color', 'features_area', 'Sub Heading color', '#051033');
addColorPalatOption($wp_customize, 'featuresarea_subtitlehigh_color', 'features_area', 'Sub Heading highlight color', '#4640a8');

$wp_customize->add_setting(
    'features_page_text',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do eiusmod tempor  incididunt ut labore et dolore. magna aliquasmod tempor  incididunt ut labore et dolore.', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'features_page_text',
    array(
        'settings'      => 'features_page_text',
        'section'       => 'features_area',
        'type'          => 'textarea',
        'label'         => __( 'Text for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'featuresarea_text_color', 'features_area', 'Text color', '#7e7f80');

lzCustomLable($wp_customize, 'features_lblbuttonabtdisplay', 'features_area', 'Button Display & Text Setting:');

// to show & hide another button
$wp_customize->add_setting( 'features_button_display1' , array( 'default' => true, 'transport' => 'refresh', ) ); $wp_customize->add_control( 'features_button_display1', array( 'label' => 'Button 1 Display', 'section' => 'features_area', 'settings' => 'features_button_display1', 'type' => 'radio', 'choices' => array( 'show' => 'Show Button 1', 'hide' => 'Hide Button 1', ), ) ); 
// end to show & hide button
// appointment 
$wp_customize->add_setting(
    'features_btn_txt1',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Enroll Now' )
    )
);
$wp_customize->add_control(
    'features_btn_txt1',
    array(
        'settings'      => 'features_btn_txt1',
        'section'       => 'features_area',
        'type'          => 'text',
        'label'         => __( 'Button Text', 'luzuk-premium' )
    )
);
$wp_customize->add_setting('features_btnlink1',   array('default'=> 'add link here', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('features_btnlink1',
    array(
        'settings'      => 'features_btnlink1',
        'section'       => 'features_area',
        'type'          => 'url',
        'label'         => __( 'Add Button link here', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'features_area_btn1', 'features_area', 'Button Text color ', '#fff');
addColorPalatOption($wp_customize, 'features_area_btnbg11', 'features_area', 'Button Background Color One ', '#441e87');
addColorPalatOption($wp_customize, 'features_area_btnbg12', 'features_area', 'Button Background Color Two ', '#4b91f1');

// to show & hide another button
$wp_customize->add_setting( 'features_button_display2' , array( 'default' => true, 'transport' => 'refresh', ) ); $wp_customize->add_control( 'features_button_display2', array( 'label' => 'Button 2 Display', 'section' => 'features_area', 'settings' => 'features_button_display2', 'type' => 'radio', 'choices' => array( 'show' => 'Show Button 2', 'hide' => 'Hide Button 2', ), ) ); 
// end to show & hide button
// appointment 
$wp_customize->add_setting(
    'features_btn_txt2',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Know More' )
    )
);
$wp_customize->add_control(
    'features_btn_txt2',
    array(
        'settings'      => 'features_btn_txt2',
        'section'       => 'features_area',
        'type'          => 'text',
        'label'         => __( 'Button Text', 'luzuk-premium' )
    )
);
$wp_customize->add_setting('features_btnlink2',   array('default'=> 'add link here', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('features_btnlink2',
    array(
        'settings'      => 'features_btnlink2',
        'section'       => 'features_area',
        'type'          => 'url',
        'label'         => __( 'Add Button link here', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'features_area_btn2', 'features_area', 'Button Text color ', '#000');
addColorPalatOption($wp_customize, 'features_area2_btnborder2', 'features_area', 'Button Border Color ', '#000');
addColorPalatOption($wp_customize, 'features_area_btnhover2', 'features_area', 'Button Text Hover Color ', '#fff');
addColorPalatOption($wp_customize, 'features_area_btnbghover21', 'features_area', 'Button Background Hover Color One ', '#441e87');
addColorPalatOption($wp_customize, 'features_area_btnbghover22', 'features_area', 'Button Background Hover Color Two ', '#4b91f1');


$wp_customize->add_setting('features_area_lbl', array('sanitize_callback'=>'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Info_Text( 
        $wp_customize,
        'features_area_lbl',
        array(
            'settings'      => 'features_area_lbl',
            'section'       => 'features_area',
            'label'         => __( 'Note1:', 'Luzuk' ),  
            'description'   => __( 'Changes will not reflect unless you select an icon for page', 'Luzuk' ),
        )
    )
);

$wp_customize->add_setting('features_npp_heading',array('sanitize_callback' => 'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'features_npp_heading',
        array(
            'settings'      => 'features_npp_heading',
            'section'       => 'features_area',
            'label'         => __( 'Number Of Plans', 'luzuk-premium' ),
        )
    )
);    
$wp_customize->add_setting('features_npp_count',array('sanitize_callback' => 'luzuk_sanitize_text','default' => 3));
$wp_customize->add_control(
    'features_npp_count',
    array(
        'settings'      => 'features_npp_count',
        'section'       => 'features_area',
        'type'          => 'select',
        'label'         => __( 'Number of plan to show', 'luzuk-premium' ),
        'choices'=>array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16)
    )
);
for( $i = 1; $i <= 16; $i++ ){
    $wp_customize->add_setting(
        'features_header'.$i,
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'features_header'.$i,
            array(
                'settings'      => 'features_header'.$i,
                'section'       => 'features_area',
                'label'         => __( 'Page ', 'luzuk-premium' ).$i
            )
        )
    );

        $wp_customize->add_setting(
        'features_page_icon'.$i,
        array(
            'default'           => 'fa fa-list-alt',
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );        
    $wp_customize->add_control(
        new luzuk_Fontawesome_Icon_Chooser(
            $wp_customize,
            'features_page_icon'.$i,
            array(
                'settings'      => 'features_page_icon'.$i,
                'section'       => 'features_area',
                'type'          => 'icon',
                'label'         => __( 'FontAwesome Icon', 'luzuk-premium' ),
            )
        )
    );


    lzAddElement($wp_customize, 'features_page_title_'.$i, 'features_area', $type = 'text', $label="Title", $callback ='luzuk_sanitize_text', $default='Demo Classes');

    lzAddElement($wp_customize, 'features_page_url_'.$i, 'features_area', $type = 'text', $label="Link", $callback ='esc_url', $default='Add link here');
}

   addColorPalatOption($wp_customize, 'featuresarea_Boxicon1Color', 'features_area', 'Page Icon Color One', '#441f88');
      addColorPalatOption($wp_customize, 'featuresarea_Boxicon2Color', 'features_area', 'Page Icon Color Two', '#4b91f1');
     addColorPalatOption($wp_customize, 'featuresarea_BoxiconhopverColor', 'features_area', 'Page Icon Hover Color', '#fff');

    addColorPalatOption($wp_customize, 'featuresarea_BoxttlColor', 'features_area', 'Page Title Color', '#0f2037');
    
    addColorPalatOption($wp_customize, 'featuresarea_BoxttlhoverColor', 'features_area', 'Page Title Hover Color', '#fff');

  addColorPalatOption($wp_customize, 'featuresarea_BoxbgColor', 'features_area', 'Box Background Color ', '#fff');

    addColorPalatOption($wp_customize, 'featuresarea_Boxbghover1Color', 'features_area', 'Box Background Hover Color One ', '#441f88');
addColorPalatOption($wp_customize, 'featuresarea_Boxbghover2Color', 'features_area', 'Box Background Hover Color Two ', '#4b91f1');