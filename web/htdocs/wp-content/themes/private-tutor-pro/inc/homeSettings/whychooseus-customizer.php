<?php
$wp_customize->add_section(
    'whychooseus_area',
    array(
        'title' => __('Why Choose Us Section', 'luzuk-premium' ),
        'panel' => 'luzuk_premium_home_panel'
    )
);
$wp_customize->add_setting(
    'whychooseus_area_disable',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
    )
);
$wp_customize->add_control(
    new luzuk_Switch_Control(
        $wp_customize,
        'whychooseus_area_disable',
        array(
            'settings'      => 'whychooseus_area_disable',
            'section'       => 'whychooseus_area',
            'label'         => __( 'Disable Section', 'luzuk-premium' ),
            'on_off_label'  => array(
                'on' => __( 'Yes', 'luzuk-premium' ),
                'off' => __( 'No', 'luzuk-premium' )
            ),
        )
    )
);

lzCustomLable($wp_customize, 'whychooseusarea_padding', 'whychooseus_area', 'Set Section Padding:');

$wp_customize->add_setting(
    'whychooseus_areaTpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '5em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'whychooseus_areaTpadding',
    array(
        'settings'      => 'whychooseus_areaTpadding',
        'section'       => 'whychooseus_area',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'whychooseus_areaBpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '1em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'whychooseus_areaBpadding',
    array(
        'settings'      => 'whychooseus_areaBpadding',
        'section'       => 'whychooseus_area',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'luzuk-premium' )
    )
);

backgroundManager($wp_customize, 'whychooseus', 'whychooseus_area', $color='#fff', get_template_directory_uri().'/images/default-gray.png', 'img');


lzCustomLable($wp_customize, 'whychooseusarea_shape', 'whychooseus_area', 'Section Shape Setting:');

$wp_customize->add_setting( 'whychoous_shape_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'whychoous_shape_display', array( 'label' => 'Section Shape Display', 'section' => 'whychooseus_area', 'settings' => 'whychoous_shape_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Section Shape', 'hide' => 'Hide Section Shape', ), ) ); 

addColorPalatOption($wp_customize, 'whychooseusarea_shapeColor', 'whychooseus_area', 'Select Section shape Color', '#eaf2ff');


lzCustomLable($wp_customize, 'whychooseusarea_gallery', 'whychooseus_area', 'Set Section Gallery');

 $luzukGallerySingleChoice[] = 'Select';
for( $i = 1; $i <= 12; $i++ ){
    $wp_customize->add_setting(
        'rg_gallery_heading'.$i,
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'rg_gallery_heading'.$i,
            array(
                'settings'      => 'rg_gallery_heading'.$i,
                'section'       => 'whychooseus_area',
                'label'         => __( 'Gallery Image ', 'Luzuk' ).$i, 
            )
        )
    );

    if(is_array($luzukGallerySingleChoice)){
        $wp_customize->add_setting(
            'gallery_page'.$i,
            array(
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'gallery_page'.$i,
            array(
                'settings'      => 'gallery_page'.$i,
                'section'       => 'whychooseus_area',
                'type'=> 'select',
                'label'         => __( 'Select a Gallery Image', 'Luzuk' ),
                'choices' => $luzukGallerySingleChoice,
            )
        );
    }else{
        $wp_customize->add_setting('whychooseus_area_lbl'.$i, array('sanitize_callback'=>'luzuk_sanitize_text'));
        $wp_customize->add_control(
            new luzuk_Info_Text( 
                $wp_customize,
                'whychooseus_area_lbl'.$i,
                array(
                    'settings'      => 'whychooseus_area_lbl'.$i,
                    'section'       => 'whychooseus_area',
                    'label'         => __( 'Note:', 'Luzuk' ),  
                    'description'   => __( '<strong>Changes will not reflect unless you select the gallery Image.</strong> <br/>Please add the gallery images from "Gallery menu" and then select gallery Image to show.', 'Luzuk' ),
                )
            )
        );
    }
}
addColorPalatOption($wp_customize, 'whychooseusarea_ghovericonColor', 'whychooseus_area', 'Select Gallery Image Overlay Icon color', '#fff');
addColorPalatOption($wp_customize, 'whychooseusarea_ghovericonbgColor1', 'whychooseus_area', 'Select Gallery Image Overlay Icon Background Color One', '#441e87');
addColorPalatOption($wp_customize, 'whychooseusarea_ghovericonbgColor2', 'whychooseus_area', 'Select Gallery Image Overlay Icon Background Color Two', '#4b91f1');
addColorPalatOption($wp_customize, 'whychooseusarea_SiconColor', 'whychooseus_area', 'Select Slider Icon color', '#fff');
addColorPalatOption($wp_customize, 'whychooseusarea_SiconbgColor', 'whychooseus_area', 'Select Slider Icon Background Color', '#616ffc');
addColorPalatOption($wp_customize, 'whychooseusarea_SiconbghoverColor', 'whychooseus_area', 'Select Slider Icon Background Hover Color', '#041033');

$wp_customize->add_setting(
    'whychooseus_page_maintitle_heading',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text'
    )
);
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'whychooseus_page_maintitle_heading',
        array(
            'settings'      => 'whychooseus_page_maintitle_heading',
            'section'       => 'whychooseus_area',
            'label'         => __( 'Section Heading, Sub Heading', 'luzuk-premium' ),
        )
    )
);    
$wp_customize->add_setting(
    'whychooseus_page_maintitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'WHY CHOOSE US', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'whychooseus_page_maintitle',
    array(
        'settings'      => 'whychooseus_page_maintitle',
        'section'       => 'whychooseus_area',
        'type'          => 'text',
        'label'         => __( 'Heading for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'whychooseusarea_title_color', 'whychooseus_area', 'Heading color', '#041033');
addColorPalatOption($wp_customize, 'whychooseus_page_titleBorderColor', 'whychooseus_area', 'Heading Border color', '#4640a7');

$wp_customize->add_setting(
    'whychooseus_page_subtitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'We Have Worlds Top <span>Teachers!</span>', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'whychooseus_page_subtitle',
    array(
        'settings'      => 'whychooseus_page_subtitle',
        'section'       => 'whychooseus_area',
        'type'          => 'textarea',
        'label'         => __( 'Sub Heading for section', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'whychooseusarea_subtitle_color', 'whychooseus_area', 'Sub Heading color', '#051033');
addColorPalatOption($wp_customize, 'whychooseusarea_subtitlehigh_color', 'whychooseus_area', 'Sub Heading highlight color', '#4640a8');


$wp_customize->add_setting('whychooseus_area_lbl', array('sanitize_callback'=>'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Info_Text( 
        $wp_customize,
        'whychooseus_area_lbl',
        array(
            'settings'      => 'whychooseus_area_lbl',
            'section'       => 'whychooseus_area',
            'label'         => __( 'Note1:', 'Luzuk' ),  
            'description'   => __( 'Changes will not reflect unless you select an icon for page', 'Luzuk' ),
        )
    )
);

$wp_customize->add_setting('whychooseus_npp_heading',array('sanitize_callback' => 'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'whychooseus_npp_heading',
        array(
            'settings'      => 'whychooseus_npp_heading',
            'section'       => 'whychooseus_area',
            'label'         => __( 'Number Of Plans', 'luzuk-premium' ),
        )
    )
);    
$wp_customize->add_setting('whychooseus_npp_count',array('sanitize_callback' => 'luzuk_sanitize_text','default' => 5));
$wp_customize->add_control(
    'whychooseus_npp_count',
    array(
        'settings'      => 'whychooseus_npp_count',
        'section'       => 'whychooseus_area',
        'type'          => 'select',
        'label'         => __( 'Number of plan to show', 'luzuk-premium' ),
        'choices'=>array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16)
    )
);
for( $i = 1; $i <= 16; $i++ ){
    $wp_customize->add_setting(
        'whychooseus_header'.$i,
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'whychooseus_header'.$i,
            array(
                'settings'      => 'whychooseus_header'.$i,
                'section'       => 'whychooseus_area',
                'label'         => __( 'Page ', 'luzuk-premium' ).$i
            )
        )
    );

     $wp_customize->add_setting(
        'whychooseus_page_icon'.$i,
        array(
            'default'           => 'fa fa-book',
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );        
    $wp_customize->add_control(
        new luzuk_Fontawesome_Icon_Chooser(
            $wp_customize,
            'whychooseus_page_icon'.$i,
            array(
                'settings'      => 'whychooseus_page_icon'.$i,
                'section'       => 'whychooseus_area',
                'type'          => 'icon',
                'label'         => __( 'FontAwesome Icon', 'luzuk-premium' ),
            )
        )
    );

    lzAddElement($wp_customize, 'whychooseus_page_title_'.$i, 'whychooseus_area', $type = 'text', $label="Title", $callback ='luzuk_sanitize_text', $default='Free Books');
}

   addColorPalatOption($wp_customize, 'whychooseusarea_Boxicon1Color', 'whychooseus_area', 'Page Icon Color One', '#441f88');
    addColorPalatOption($wp_customize, 'whychooseusarea_Boxicon2Color', 'whychooseus_area', 'Page Icon Color Two', '#4b91f1');

    addColorPalatOption($wp_customize, 'whychooseusarea_BoxttlColor', 'whychooseus_area', 'Page Title Color', '#1a2a44');

  addColorPalatOption($wp_customize, 'whychooseusarea_BoxbgColor', 'whychooseus_area', 'Box Background Color ', '#fff');

lzCustomLable($wp_customize, 'aboutus_lblbuttonabtdisplay', 'whychooseus_area', 'Button Display & Text Setting:');

// to show & hide another button
$wp_customize->add_setting( 'whychooseus_button_display1' , array( 'default' => true, 'transport' => 'refresh', ) ); $wp_customize->add_control( 'whychooseus_button_display1', array( 'label' => 'Button Display', 'section' => 'whychooseus_area', 'settings' => 'whychooseus_button_display1', 'type' => 'radio', 'choices' => array( 'show' => 'Show Button', 'hide' => 'Hide Button', ), ) ); 
// end to show & hide button
// appointment 
$wp_customize->add_setting(
    'whychooseus_btn_txt1',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Enroll Now' )
    )
);
$wp_customize->add_control(
    'whychooseus_btn_txt1',
    array(
        'settings'      => 'whychooseus_btn_txt1',
        'section'       => 'whychooseus_area',
        'type'          => 'text',
        'label'         => __( 'Button Text', 'luzuk-premium' )
    )
);
$wp_customize->add_setting('whychooseus_btnlink1',   array('default'=> 'add link here', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('whychooseus_btnlink1',
    array(
        'settings'      => 'whychooseus_btnlink1',
        'section'       => 'whychooseus_area',
        'type'          => 'url',
        'label'         => __( 'Add Button link here', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'whychooseus_area_btn1', 'whychooseus_area', 'Button Text color ', '#fff');
addColorPalatOption($wp_customize, 'whychooseus_area_btnbg11', 'whychooseus_area', 'Button Background Color One ', '#441e87');
addColorPalatOption($wp_customize, 'whychooseus_area_btnbg12', 'whychooseus_area', 'Button Background Color Two ', '#4b91f1');