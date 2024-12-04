<?php 

// /HOME PAGE SECTION CHANGE SEQUENCE SETTINGS IN CUSTOMIZER
$wp_customize->add_section(
	'homepage_section_sequence_change_settings',
	array(
		'title' => __( 'Section Sequence', 'luzuk-premium' ),
        // 'panel' => 'luzuk_premium_home_panel'
		'priority' =>21
	)
);
$wp_customize->add_setting(
	'homesection_section1',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default'           => __( 'subject', 'luzuk-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section1',
	array(
		'settings'      => 'homesection_section1',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 1', 'luzuk-premium' )
	)
);

 
$wp_customize->add_setting(
	'homesection_section2',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default'           => __( 'about', 'luzuk-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section2',
	array(
		'settings'      => 'homesection_section2',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 2', 'luzuk-premium' )
	)
);


$wp_customize->add_setting(
	'homesection_section3',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default'           => __( 'counter', 'luzuk-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section3',
	array(
		'settings'      => 'homesection_section3',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 3', 'luzuk-premium' )
	)
);


$wp_customize->add_setting(
	'homesection_section4',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default'           => __( 'features', 'luzuk-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section4',
	array(
		'settings'      => 'homesection_section4',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 4', 'luzuk-premium' )
	)
);


$wp_customize->add_setting(
	'homesection_section5',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default'           => __( 'whychooseus', 'luzuk-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section5',
	array(
		'settings'      => 'homesection_section5',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 5', 'luzuk-premium' )
	)
);


$wp_customize->add_setting(
	'homesection_section6',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default'           => __( 'procedure', 'luzuk-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section6',
	array(
		'settings'      => 'homesection_section6',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 6', 'luzuk-premium' )
	)
);

$wp_customize->add_setting(
	'homesection_section7',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default'           => __( 'testimonial', 'luzuk-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section7',
	array(
		'settings'      => 'homesection_section7',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 7', 'luzuk-premium' )
	)
);

$wp_customize->add_setting(
	'homesection_section8',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default'           => __( 'contact', 'luzuk-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section8',
	array(
		'settings'      => 'homesection_section8',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 8', 'luzuk-premium' )
	)
);

$wp_customize->add_setting(
	'homesection_section9',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default'           => __( 'ourclients', 'luzuk-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section9',
	array(
		'settings'      => 'homesection_section9',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 9', 'luzuk-premium' )
	)
);
$wp_customize->add_setting(
	'homesection_section10',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default'           => __( 'blog', 'luzuk-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section10',
	array(
		'settings'      => 'homesection_section10',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 10', 'luzuk-premium' )
	)
);
$wp_customize->add_setting(
	'homesection_section11',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default'           => __( 'newsletter', 'luzuk-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section11',
	array(
		'settings'      => 'homesection_section11',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 11', 'luzuk-premium' )
	)
);