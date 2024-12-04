<?php  

$luzukSliderSingleChoice = getFitnessPostsType('slider');
$wp_customize->add_section(
	'slider_section',
	array(
		'title' => __( 'Slider Section', 'Luzuk' ),
        'panel' => 'luzuk_premium_home_panel',
		'priority' =>18
	)
);
$wp_customize->add_setting(
	'slider_section_show_content',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
	)
);
$wp_customize->add_control(
	new luzuk_Switch_Control(
		$wp_customize,
		'slider_section_show_content',
		array(
			'settings'      => 'slider_section_show_content',
			'section'       => 'slider_section',
			'label'         => __( 'Hide Title and description on Slider', 'Luzuk' ),
			'on_off_label'  => array(
				'on' => __( 'No', 'Luzuk' ),
				'off' => __( 'Yes', 'Luzuk' )
			),
		)
	)
);
$wp_customize->add_setting('slider_section_lbl', array('sanitize_callback'=>'luzuk_sanitize_text'));
$wp_customize->add_control(
	new luzuk_Info_Text( 
		$wp_customize,
		'slider_section_lbl',
		array(
			'settings'		=> 'slider_section_lbl',
			'section'		=> 'slider_section',
			'label'			=> __( 'Note:', 'Luzuk' ),	
			'description'	=> __( 'The Page featured image works as a banner and the title & content work as a slider caption. You can add this from the Slider menu. <br/> Recommended Image Size: 1140X768', 'Luzuk' ),
		)
	)
);

lzCustomLable($wp_customize, 'luzuk_sliderotherclrs', 'slider_section', 'Slider Colors:');

addColorPalatOption($wp_customize, 'slider_titleColor', 'slider_section', 'Slider Title Color', '#000');
addColorPalatOption($wp_customize, 'slider_titlehighlightColor', 'slider_section', 'Slider Title Highlight Color', '#4641a8');
addColorPalatOption($wp_customize, 'slider_SubtitleColor', 'slider_section', 'Slider Sub Title Color', '#818181');
addColorPalatOption($wp_customize, 'slider_ButtonTextColor', 'slider_section', 'Slider Button Text Color', '#fff');
addColorPalatOption($wp_customize, 'slider_ButtonbgColor', 'slider_section', 'Slider Button Background Color One', '#441e87');
addColorPalatOption($wp_customize, 'slider_ButtonbghoverColor', 'slider_section', 'Slider Button Background Color Two', '#4b91f1');


 $wp_customize->add_setting(
        'slider_contentimg_heading',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'slider_contentimg_heading',
            array(
                'settings'      => 'slider_contentimg_heading',
                'section'       => 'slider_section',
                'label'         => __( 'Content Image', 'luzuk-premium' ),
            )
        )
    );

      $wp_customize->add_setting(
        'slider_contentimg',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'slider_contentimg',
            array(
                'section' => 'slider_section',
                'settings' => 'slider_contentimg',
                'description' => __('Recommended Image Size: 200X223px', 'luzuk-premium')
            )
        )
    );

    $wp_customize->add_setting( 'slider_contentimg_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'slider_contentimg_display', array( 'label' => 'Content Image Display', 'section' => 'slider_section', 'settings' => 'slider_contentimg_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Content Image', 'hide' => 'Hide Content Image', ), ) ); 


lzCustomLable($wp_customize, 'luzuk_sliderotherclrsresp', 'slider_section', 'Responsive Slider Colors:');

addColorPalatOption($wp_customize, 'slider_titlerespColor', 'slider_section', 'Slider Title Color', '#000');
addColorPalatOption($wp_customize, 'slider_titlehighlightrespColor', 'slider_section', 'Slider Title Highlight Color', '#4641a8');
addColorPalatOption($wp_customize, 'slider_textrespColor', 'slider_section', 'Slider Sub Title Color', '#818181');