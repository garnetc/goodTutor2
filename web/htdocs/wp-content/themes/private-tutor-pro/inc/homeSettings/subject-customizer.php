<?php 
$wp_customize->add_section(
    'subject_area',
    array(
        'title'         => __( 'Subjects Section', 'Luzuk' ),
        'panel'   => 'luzuk_premium_home_panel',
    )
);
$wp_customize->add_setting(
    'subject_area_disable',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default' => 'off'
    )
);
$wp_customize->add_control(
    new luzuk_Switch_Control(
        $wp_customize,
        'subject_area_disable',
        array(
            'settings'      => 'subject_area_disable',
            'section'       => 'subject_area',
            'label'         => __( 'Disable Section', 'Luzuk' ),
            'on_off_label'  => array(
                'on' => __( 'Yes', 'Luzuk' ),
                'off' => __( 'No', 'Luzuk' )
            )   
        )
    )
);

lzCustomLable($wp_customize, 'luzuk_sec_subjectssectionpadding', 'subject_area', 'Set Section Padding:');

$wp_customize->add_setting(
    'subject_areaTpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '0em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'subject_areaTpadding',
    array(
        'settings'      => 'subject_areaTpadding',
        'section'       => 'subject_area',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'subject_areaBpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '0em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'subject_areaBpadding',
    array(
        'settings'      => 'subject_areaBpadding',
        'section'       => 'subject_area',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'luzuk-premium' )
    )
);

backgroundManager($wp_customize, 'subject', 'subject_area', $color='#fff', get_template_directory_uri().'/images/default-gray.png', 'img');

$wp_customize->add_setting(
    'subjects_maintitle_subtitle_heading',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
    )
);
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'subjects_maintitle_subtitle_heading',
        array(
            'settings'      => 'subjects_maintitle_subtitle_heading',
            'section'       => 'subject_area',
            'label'         => __( 'Section Heading & Sub Heading', 'Luzuk' ),
        )
    )
);
$wp_customize->add_setting(
    'subjects_subtitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'CHOOSE AND EXPLORE', 'Luzuk' )
    )
);
$wp_customize->add_control(
    'subjects_subtitle',
    array(
        'settings'      => 'subjects_subtitle',
        'section'       => 'subject_area', 
        'type'          => 'text',
        'label'         => __( 'Section Sub Heading', 'Luzuk' )
    )
);
addColorPalatOption($wp_customize, 'subjectarea_secsubtitle_color', 'subject_area', 'Sub Heading color ', '#524ead');

$wp_customize->add_setting(
    'subjects_maintitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'My Subjects', 'Luzuk' )
    )
);
$wp_customize->add_control(
    'subjects_maintitle',
    array(
        'settings'      => 'subjects_maintitle',
        'section'       => 'subject_area', 
        'type'          => 'text',
        'label'         => __( 'Section Heading', 'Luzuk' )
    )
);

addColorPalatOption($wp_customize, 'subjectarea_sectitle_color', 'subject_area', 'Heading color ', '#041033');

$wp_customize->add_setting('subject_area_lbl2', array('sanitize_callback'=>'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Info_Text( 
        $wp_customize,
        'subject_area_lbl2',
        array(
            'settings'      => 'subject_area_lbl2',
            'section'       => 'subject_area',
            'label'         => __( 'Note1:', 'Luzuk' ),  
            'description'   => __( 'Use Shortcode [SUBJECTS] to show all subjects in a page', 'Luzuk' ),
        )
    )
);


$wp_customize->add_setting('subject_npp_heading',array('sanitize_callback' => 'luzuk_sanitize_text'));
$wp_customize->add_control(
    new luzuk_Customize_Heading(
        $wp_customize,
        'subject_npp_heading',
        array(
            'settings'      => 'subject_npp_heading',
            'section'       => 'subject_area',
            'label'         => __( 'Number of subjects to show', 'Luzuk' ),
        )
    )
);    
$wp_customize->add_setting('subject_npp_count',array('sanitize_callback' => 'luzuk_sanitize_text','default' => 5));
$wp_customize->add_control(
    'subject_npp_count',
    array(
        'settings'      => 'subject_npp_count',
        'section'       => 'subject_area',
        'type'          => 'select',
        'label'         => __( 'Number of subjects to show', 'Luzuk' ),
        'choices'=>array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24)
    )
);

$SubjectSingleChoice[] = 'Select';

for( $i = 1; $i <= 24; $i++ ){
    $wp_customize->add_setting(
        'subjects_heading'.$i,
        array(
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new luzuk_Customize_Heading(
            $wp_customize,
            'subjects_heading'.$i,
            array(
                'settings'      => 'subjects_heading'.$i,
                'section'       => 'subject_area',
                'label'         => __( 'Subject Page', 'Luzuk' ).$i,
            )
        )
    );
    if(is_array($SubjectSingleChoice)){
        $wp_customize->add_setting(
            'subjects_page'.$i,
            array(
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'subjects_page'.$i,
            array(
                'settings'      => 'subjects_page'.$i,
                'section'       => 'subject_area',
                'type'=> 'select',
                'label'         => __( 'Select a subject', 'Luzuk' ),
                'choices' => $SubjectSingleChoice,
            )
        );

$wp_customize->add_setting(
        'subjects_page_icon1'.$i,
        array(
            'default'           => 'fa fa-cogs',
            'sanitize_callback' => 'luzuk_sanitize_text'
        )
    );        
    $wp_customize->add_control(
        new luzuk_Fontawesome_Icon_Chooser(
            $wp_customize,
            'subjects_page_icon1'.$i,
            array(
                'settings'      => 'subjects_page_icon1'.$i,
                'section'       => 'subject_area',
                'type'          => 'icon',
                'label'         => __( 'FontAwesome Icon', 'Luzuk' ),
            )
        )
    );



    }else{
        $wp_customize->add_setting('subject_area_lbl'.$i, array('sanitize_callback'=>'luzuk_sanitize_text'));
        $wp_customize->add_control(
            new luzuk_Info_Text( 
                $wp_customize,
                'subject_area_lbl'.$i,
                array(
                    'settings'      => 'subject_area_lbl'.$i,
                    'section'       => 'subject_area',
                    'label'         => __( 'Note:', 'Luzuk' ),    
                    'description'   => __( '<strong>Changes will not reflect unless you select the subject Page.</strong> <br/>Please add the subjects from "Subjects menu" and then select subjects to show information.', 'Luzuk' ),
                )
            )
        );
    }
 
}
lzCustomLable($wp_customize, 'luzuk_alliconcolor', 'subject_area', 'Set all subject icon colors:');

addColorPalatOption($wp_customize, 'subjects_icon1Color', 'subject_area', 'Subjects Icon First color ', '#4520ff');
addColorPalatOption($wp_customize, 'subjects_icon2Color', 'subject_area', 'Subjects Icon Second color ', '#4b91f0');
addColorPalatOption($wp_customize, 'subjects_icon3Color', 'subject_area', 'Subjects Icon Third color ', '#f8ad04');
addColorPalatOption($wp_customize, 'subjects_icon4Color', 'subject_area', 'Subjects Icon Fourth color ', '#e033ff');
addColorPalatOption($wp_customize, 'subjects_icon5Color', 'subject_area', 'Subjects Icon Fifth color ', '#3597db');
addColorPalatOption($wp_customize, 'subjects_icon6Color', 'subject_area', 'Subjects Icon Sixth color ', '#f448e4');

lzCustomLable($wp_customize, 'luzuk_alliconbgcolor', 'subject_area', 'Set all subject icon background colors:');

addColorPalatOption($wp_customize, 'subjects_icon1Colorbg1', 'subject_area', 'Subjects Icon First color One ', '#fbfbfb');
addColorPalatOption($wp_customize, 'subjects_icon1Colorbg2', 'subject_area', 'Subjects Icon First color Two', '#e9e6fc');
addColorPalatOption($wp_customize, 'subjects_icon2Colorbg1', 'subject_area', 'Subjects Icon Second color One', '#f8fcf7');
addColorPalatOption($wp_customize, 'subjects_icon2Colorbg2', 'subject_area', 'Subjects Icon Second color Two', '#f0feed');
addColorPalatOption($wp_customize, 'subjects_icon3Colorbg1', 'subject_area', 'Subjects Icon Third color One', '#fdf8fc');
addColorPalatOption($wp_customize, 'subjects_icon3Colorbg2', 'subject_area', 'Subjects Icon Third color Two', '#feedfd');

lzCustomLable($wp_customize, 'luzuk_allsubiconcolor', 'subject_area', 'Set all subject icon & background hover colors:');

addColorPalatOption($wp_customize, 'subjects_iconhoverColor', 'subject_area', 'Subjects Icon Hover color ', '#fff');

addColorPalatOption($wp_customize, 'subjects_iconhoverColorbg1', 'subject_area', 'Subjects Icon Background Hover color One ', '#441e87');
addColorPalatOption($wp_customize, 'subjects_iconhoverColorbg2', 'subject_area', 'Subjects Icon Background Hover color Two', '#4b91f1');


addColorPalatOption($wp_customize, 'subjects_subjectPageTitleColor', 'subject_area', 'Subjects Title color ', '#0c1736');
addColorPalatOption($wp_customize, 'subjects_SubttlColor', 'subject_area', 'Subjects Text color ', '#6b6b6b');

addColorPalatOption($wp_customize, 'subjectarea_boxbg_color', 'subject_area', 'Subjects Box Color ', '#fff');

addColorPalatOption($wp_customize, 'subjectarea_boxhoverborder_color', 'subject_area', 'Subjects Box Hover Border Color ', '#4640a7');

addColorPalatOption($wp_customize, 'subjects_btnColorbg1', 'subject_area', 'Subjects Box Hover Link Icon Background Color One ', '#441e87');
addColorPalatOption($wp_customize, 'subjects_btnColorbg2', 'subject_area', 'Subjects Box Hover Link Icon Background Color Two ', '#4b91f1');

addColorPalatOption($wp_customize, 'subjects_btnColor', 'subject_area', 'Subjects Box Hover Link Icon Color ', '#fff');




lzCustomLable($wp_customize, 'allsubbtn_display', 'subject_area', 'Button Setting:');
// to show & hide another button
$wp_customize->add_setting( 'allsub_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); $wp_customize->add_control( 'allsub_button_display', array( 'label' => 'Subject Section Button Display', 'section' => 'subject_area', 'settings' => 'allsub_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Button', 'hide' => 'Hide Button', ), ) ); 
// end to show & hide button

$wp_customize->add_setting(
    'Subject_allbtn_txt',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'EXPLORE MORE' )
    )
);
$wp_customize->add_control(
    'Subject_allbtn_txt',
    array(
        'settings'      => 'Subject_allbtn_txt',
        'section'       => 'subject_area',
        'type'          => 'text',
        'label'         => __( 'Add Button Text Here:', 'luzuk' )
    )
);
$wp_customize->add_setting('Subject_allbtnlink',   array('default'=> 'add Button link here', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('Subject_allbtnlink',
    array(
        'settings'      => 'Subject_allbtnlink',
        'section'       => 'subject_area',
        'type'          => 'url',
        'label'         => __( 'Add Button Url Here:', 'Luzuk' )
    )
);




addColorPalatOption($wp_customize, 'subjects_mainbtnColor', 'subject_area', 'Section button text color', '#fff');
addColorPalatOption($wp_customize, 'subjects_mainbtnColorbg1', 'subject_area', 'Section button background color one', '#441e87');
addColorPalatOption($wp_customize, 'subjects_mainbtnColorbg2', 'subject_area', 'Section button background color two', '#4b91f1');

// end to show & hide button


