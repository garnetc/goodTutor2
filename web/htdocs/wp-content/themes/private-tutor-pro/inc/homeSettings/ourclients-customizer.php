<?php 
/**
 * Customiser section for ourclients
 **/
// Start ourclients section 
$wp_customize->add_section(
    'luzuk_ourclients_area',
    array(
        'title' => __( 'Clients Logo Section', 'luzuk-premium' ),
        'panel' => 'luzuk_premium_home_panel'
    )
);
// ENABLE/DISABLE ourclients SECTION
$wp_customize->add_setting(
    'ourclient_area_disable',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
    )
);
$wp_customize->add_control(
    new luzuk_Switch_Control(
        $wp_customize,
        'ourclient_area_disable',
        array(
            'settings'      => 'ourclient_area_disable',
            'section'       => 'luzuk_ourclients_area',
            'label'         => __( 'Disable Section', 'luzuk-premium' ),
            'on_off_label'  => array(
                'on' => __( 'Yes', 'luzuk-premium' ),
                'off' => __( 'No', 'luzuk-premium' )
            ),
        )
    )
);

lzCustomLable($wp_customize, 'ourclientarea_padding', 'luzuk_ourclients_area', 'Set Section Padding:');

$wp_customize->add_setting(
    'ourclient_areaTpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '0em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'ourclient_areaTpadding',
    array(
        'settings'      => 'ourclient_areaTpadding',
        'section'       => 'luzuk_ourclients_area',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'ourclient_areaBpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '9em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'ourclient_areaBpadding',
    array(
        'settings'      => 'ourclient_areaBpadding',
        'section'       => 'luzuk_ourclients_area',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'luzuk-premium' )
    )
);


backgroundManager($wp_customize, 'ourclients', 'luzuk_ourclients_area', $color='#fff', get_template_directory_uri().'/images/default-gray.png', 'img');
/*for note text*/
$wp_customize->add_setting('luzuk_ourclients_area_lbl', array('sanitize_callback'=>'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Info_Text( 
        $wp_customize,
        'luzuk_ourclients_area_lbl',
        array(
            'settings'      => 'luzuk_ourclients_area_lbl',
            'section'       => 'luzuk_ourclients_area',
            'label'         => __( 'Note:', 'luzuk-premium' ),   
            'description'   => __( 'Add Clients logo images of equal height, recommend image height of size 58px', 'luzuk-premium' ),
        )
    )
);
/*for note text*/



$wp_customize->add_setting('luzuk_ourclients_npp_heading',array('sanitize_callback' => 'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'luzuk_ourclients_npp_heading',
        array(
            'settings'      => 'luzuk_ourclients_npp_heading',
            'section'       => 'luzuk_ourclients_area',
            'label'         => __( 'Set Number Of Clients Logo to show', 'luzuk-premium' ),
        )
    )
);    
$wp_customize->add_setting('ourclient_npp_count',array('sanitize_callback' => 'luzuk_sanitize_text','default' => 5));
$wp_customize->add_control(
    'ourclient_npp_count',
    array(
        'settings'      => 'ourclient_npp_count',
        'section'       => 'luzuk_ourclients_area',
        'type'          => 'select',
        'label'         => __( 'Number of Clients logo to show', 'luzuk-premium' ),
        'choices'=>array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20)
    )
);

//ourclients PAGES
for( $i = 1; $i <= 20; $i++ ){
    $wp_customize->add_setting(
        'luzuk_ourclients_header'.$i,
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'luzuk_ourclients_header'.$i,
            array(
                'settings'      => 'luzuk_ourclients_header'.$i,
                'section'       => 'luzuk_ourclients_area',
                'label'         => __( 'Client Logo Image', 'luzuk-premium' ).$i
            )
        )
    );

    lzAddImageElement($wp_customize, 'ourclient_page_icon'.$i, 'luzuk_ourclients_area', $label="Recommended Image Size: 170X110px");
    lzAddElement($wp_customize, 'ourclient_page_url_'.$i, 'luzuk_ourclients_area', $type = 'text', $label="Link", $callback ='esc_url', $default='Add link here');
}
// End Our Clients section 

addColorPalatOption($wp_customize, 'luzuk_ourclients_imghvrborderColorone', 'luzuk_ourclients_area', 'Clients Logo Hover Border Color One', '#441f88');
addColorPalatOption($wp_customize, 'luzuk_ourclients_imghvrborderColortwo', 'luzuk_ourclients_area', 'Clients Logo Hover Border Color Two', '#4b91f1');