<?php
$wp_customize->add_section(
    'procedure_area',
    array(
        'title' => __('Procedure Section', 'luzuk-premium' ),
        'panel' => 'luzuk_premium_home_panel'
    )
);
$wp_customize->add_setting(
    'procedure_area_disable',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
    )
);
$wp_customize->add_control(
    new luzuk_Switch_Control(
        $wp_customize,
        'procedure_area_disable',
        array(
            'settings'      => 'procedure_area_disable',
            'section'       => 'procedure_area',
            'label'         => __( 'Disable Section', 'luzuk-premium' ),
            'on_off_label'  => array(
                'on' => __( 'Yes', 'luzuk-premium' ),
                'off' => __( 'No', 'luzuk-premium' )
            ),
        )
    )
);

lzCustomLable($wp_customize, 'procedurearea_padding', 'procedure_area', 'Set Section Padding:');

$wp_customize->add_setting(
    'procedure_areaTpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '5em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'procedure_areaTpadding',
    array(
        'settings'      => 'procedure_areaTpadding',
        'section'       => 'procedure_area',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'procedure_areaBpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '5em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'procedure_areaBpadding',
    array(
        'settings'      => 'procedure_areaBpadding',
        'section'       => 'procedure_area',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'luzuk-premium' )
    )
);

backgroundManager($wp_customize, 'procedure', 'procedure_area', $color='#fff', get_template_directory_uri().'/images/default-gray.png', 'img');

$wp_customize->add_setting(
    'procedure_page_maintitle_heading',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text'
    )
);
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'procedure_page_maintitle_heading',
        array(
            'settings'      => 'procedure_page_maintitle_heading',
            'section'       => 'procedure_area',
            'label'         => __( 'Section Heading , Sub Heading & Text', 'luzuk-premium' ),
        )
    )
);    
$wp_customize->add_setting(
    'procedure_page_maintitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'HOW IT WORKS', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'procedure_page_maintitle',
    array(
        'settings'      => 'procedure_page_maintitle',
        'section'       => 'procedure_area',
        'type'          => 'text',
        'label'         => __( 'Heading for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'procedurearea_title_color', 'procedure_area', 'Heading color', '#031033');

$wp_customize->add_setting(
    'procedure_page_subtitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Our Procedure', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'procedure_page_subtitle',
    array(
        'settings'      => 'procedure_page_subtitle',
        'section'       => 'procedure_area',
        'type'          => 'text',
        'label'         => __( 'Sub Heading for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'procedurearea_subtitle_color', 'procedure_area', 'Sub Heading color', '#000');

$wp_customize->add_setting(
    'procedure_page_text',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'procedure_page_text',
    array(
        'settings'      => 'procedure_page_text',
        'section'       => 'procedure_area',
        'type'          => 'textarea',
        'label'         => __( 'Text for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'procedurearea_text_color', 'procedure_area', 'Text color', '#a0a0a0');

$wp_customize->add_setting('procedure_area_lbl', array('sanitize_callback'=>'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Info_Text( 
        $wp_customize,
        'procedure_area_lbl',
        array(
            'settings'      => 'procedure_area_lbl',
            'section'       => 'procedure_area',
            'label'         => __( 'Note1:', 'Luzuk' ),  
            'description'   => __( 'Changes will not reflect unless you select an icon for page', 'Luzuk' ),
        )
    )
);

$wp_customize->add_setting('procedure_npp_heading',array('sanitize_callback' => 'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'procedure_npp_heading',
        array(
            'settings'      => 'procedure_npp_heading',
            'section'       => 'procedure_area',
            'label'         => __( 'Number Of Plans', 'luzuk-premium' ),
        )
    )
);    
$wp_customize->add_setting('procedure_npp_count',array('sanitize_callback' => 'luzuk_sanitize_text','default' => 2));
$wp_customize->add_control(
    'procedure_npp_count',
    array(
        'settings'      => 'procedure_npp_count',
        'section'       => 'procedure_area',
        'type'          => 'select',
        'label'         => __( 'Number of plan to show', 'luzuk-premium' ),
        'choices'=>array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16)
    )
);
for( $i = 1; $i <= 16; $i++ ){
    $wp_customize->add_setting(
        'procedure_header'.$i,
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'procedure_header'.$i,
            array(
                'settings'      => 'procedure_header'.$i,
                'section'       => 'procedure_area',
                'label'         => __( 'Page ', 'luzuk-premium' ).$i
            )
        )
    );

     $wp_customize->add_setting(
        'procedure_page_icon'.$i,
        array(
            'default'           => 'fa fa-users',
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );        
    $wp_customize->add_control(
        new luzuk_Fontawesome_Icon_Chooser(
            $wp_customize,
            'procedure_page_icon'.$i,
            array(
                'settings'      => 'procedure_page_icon'.$i,
                'section'       => 'procedure_area',
                'type'          => 'icon',
                'label'         => __( 'FontAwesome Icon', 'luzuk-premium' ),
            )
        )
    );

    lzAddElement($wp_customize, 'procedure_page_title_'.$i, 'procedure_area', $type = 'text', $label="Title", $callback ='luzuk_sanitize_text', $default='Join Our Regular Test Series!');
}

    addColorPalatOption($wp_customize, 'procedurearea_BoxiconColor', 'procedure_area', 'Page Icon Color', '#fff');
    addColorPalatOption($wp_customize, 'procedurearea_BoxiconbgColor', 'procedure_area', 'Page Icon Background Color', '#4641a8');

    addColorPalatOption($wp_customize, 'procedurearea_Boxiconbghover1Color', 'procedure_area', 'Box Icon Background Hover Color One ', '#441f88');
    addColorPalatOption($wp_customize, 'procedurearea_Boxiconbghover2Color', 'procedure_area', 'Box Icon Background Hover Color Two ', '#4b91f1');
    addColorPalatOption($wp_customize, 'procedurearea_BoxttlColor', 'procedure_area', 'Page Title Color', '#102038');

lzCustomLable($wp_customize, 'procedure_lblbuttonabtdisplay', 'procedure_area', 'Button Display & Text Setting:');

// to show & hide another button
$wp_customize->add_setting( 'procedure_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); $wp_customize->add_control( 'procedure_button_display', array( 'label' => 'Button Display', 'section' => 'procedure_area', 'settings' => 'procedure_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Button', 'hide' => 'Hide Button', ), ) ); 
// end to show & hide button
// appointment 
$wp_customize->add_setting(
    'procedure_btn_txt',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Enroll Now' )
    )
);
$wp_customize->add_control(
    'procedure_btn_txt',
    array(
        'settings'      => 'procedure_btn_txt',
        'section'       => 'procedure_area',
        'type'          => 'text',
        'label'         => __( 'Button Text', 'luzuk-premium' )
    )
);
$wp_customize->add_setting('procedure_btnlink',   array('default'=> 'add link here', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('procedure_btnlink',
    array(
        'settings'      => 'procedure_btnlink',
        'section'       => 'procedure_area',
        'type'          => 'url',
        'label'         => __( 'Add Button link here', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'procedure_area_btn', 'procedure_area', 'Button Text color ', '#fff');
addColorPalatOption($wp_customize, 'procedure_area_btnbg1', 'procedure_area', 'Button Background Color One ', '#441e87');
addColorPalatOption($wp_customize, 'procedure_area_btnbg2', 'procedure_area', 'Button Background Color Two ', '#4b91f1');
