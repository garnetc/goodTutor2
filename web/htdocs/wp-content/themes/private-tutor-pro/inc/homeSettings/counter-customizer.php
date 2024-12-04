<?php  

$wp_customize->add_section(
    'counter_area',
    array(
        'title' => __('Counter Section', 'luzuk-premium' ),
        'panel' => 'luzuk_premium_home_panel'
    )
);
  // ENABLE/DISABLE Counter SECTION
    $wp_customize->add_setting(
        'counter_area_disable',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text',
        )
    );
    $wp_customize->add_control(
        new luzuk_Switch_Control(
            $wp_customize,
            'counter_area_disable',
            array(
                'settings'      => 'counter_area_disable',
                'section'       => 'counter_area',
                'label'         => __( 'Counter Disable Section', 'luzuk-premium' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'luzuk-premium' ),
                    'off' => __( 'No', 'luzuk-premium' )
                ),
            )
        )
    );

backgroundManager($wp_customize, 'counter', 'counter_area', $color='#fff', get_template_directory_uri().'/images/default-gray.png', 'img');

addColorPalatOption($wp_customize, 'counter_boxbgColor', 'counter_area', 'Counter Box Background', '#fff');

lzCustomLable($wp_customize, 'countersection_padding', 'counter_area', ' Section Padding Setting:');

$wp_customize->add_setting(
    'countersection_toppadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '0em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'countersection_toppadding',
    array(
        'settings'      => 'countersection_toppadding',
        'section'       => 'counter_area',
        'type'          => 'text',
        'label'         => __( 'Section Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'countersection_bottompadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '0em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'countersection_bottompadding',
    array(
        'settings'      => 'countersection_bottompadding',
        'section'       => 'counter_area',
        'type'          => 'text',
        'label'         => __( 'Section Bottom Padding', 'luzuk-premium' )
    )
);

$wp_customize->add_setting('counter_npp_heading',array('sanitize_callback' => 'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'counter_npp_heading',
        array(
            'settings'      => 'counter_npp_heading',
            'section'       => 'counter_area',
            'label'         => __( 'Number Of Plans', 'Luzuk Premium' ),
        )
    )
);    
$wp_customize->add_setting('counter_npp_count',array('sanitize_callback' => 'luzuk_sanitize_text','default' => 3));
$wp_customize->add_control(
    'counter_npp_count',
    array(
        'settings'      => 'counter_npp_count',
        'section'       => 'counter_area',
        'type'          => 'select',
        'label'         => __( 'Number of counter to show', 'Luzuk Premium' ),
        'choices'=>array(1,2,3,4,5,6,7,8)
    )
);

//Counter PAGES
for( $i = 1; $i <= 8; $i++ ){
    $wp_customize->add_setting(
        'counter_header'.$i,
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'counter_header'.$i,
            array(
                'settings'      => 'counter_header'.$i,
                'section'       => 'counter_area',
                'label'         => __( 'Counter', 'Luzuk Premium' ).$i
            )
        )
    );
lzAddElement($wp_customize, 'counter_page_num'.$i, 'counter_area', $type = 'text', $label="Counter Number", $callback ='luzuk_sanitize_text', $default='100');

lzAddElement($wp_customize, 'counter_page_title'.$i, 'counter_area', $type = 'text', $label="Counter Title", $callback ='luzuk_sanitize_text', $default='Satisfaction Rate');
    
}

 // counter num color
addColorPalatOption($wp_customize, 'counter_titlenumColor', 'counter_area', 'Counter Number Color', '#041033');
addColorPalatOption($wp_customize, 'counter_titlenumColor1', 'counter_area', 'Counter Number Color Hover One', '#441f88');
addColorPalatOption($wp_customize, 'counter_titlenumColor2', 'counter_area', 'Counter Number Color Hover Two', '#4984e6');
 // title color
addColorPalatOption($wp_customize, 'counter_titleColor', 'counter_area', 'Counter Title color', '#0f2038');

addColorPalatOption($wp_customize, 'counter_boxborderColor1', 'counter_area', 'Counter Box Border Color One', '#441f88');
addColorPalatOption($wp_customize, 'counter_boxborderColor2', 'counter_area', 'Counter Box Border Color Two', '#4984e6');

addColorPalatOption($wp_customize, 'counter_boxdotColor', 'counter_area', 'Counter Dot color', '#4a63fe');
// End counter section 

?>