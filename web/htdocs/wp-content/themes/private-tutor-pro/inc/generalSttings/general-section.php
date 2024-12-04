<?php

$wp_customize->add_panel(
    'luzuk_general_panel',
    array(
        'priority' => 19,
        'title' => __('General Configuration', 'Luzuk Premium')
    )
);
//STATIC FRONT PAGE
$wp_customize->add_section( 'static_front_page', array(
    'title' => __( 'Static Front Page', 'Luzuk Premium' ),
    'panel' => 'luzuk_general_panel',
    'description' => __( 'Your theme supports a static front page.', 'Luzuk Premium'),
) );

//TITLE AND TAGLINE SETTINGS
$wp_customize->add_section( 'title_tagline', array(
    'title' => __( 'Site Logo/Title/Tagline', 'Luzuk Premium' ),
    'panel' => 'luzuk_general_panel',
) );

$wp_customize->add_setting(
    'pages_logoTopsetmaxwidth',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '100', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'pages_logoTopsetmaxwidth',
    array(
        'settings'      => 'pages_logoTopsetmaxwidth',
        'section'       => 'title_tagline',
        'type'          => 'text',
        'label'         => __( 'Set Logo Max Width', 'luzuk-premium' )
    )
);

addColorPalatOption($wp_customize, 'header_SiteTitleColor', 'title_tagline', 'Site Title Color', '#000');
addColorPalatOption($wp_customize, 'header_SiteTaglineColor', 'title_tagline', 'Tagline Color', '#000');



//BACKGROUND IMAGE
$wp_customize->add_section( 'background_image', array(
    'title' => __( 'Background Image Setting', 'Luzuk Premium' ),
    'panel' => 'luzuk_general_panel',
) );

//Header IMAGE
$wp_customize->add_section( 'header_image', array(
    'title' => __( 'Header Image', 'Luzuk Premium' ),
    'panel' => 'luzuk_general_panel',
) );


//HEADER SETTINGS
$wp_customize->add_section(
    'header_settings',
    array(
        'title' => __( 'Header Settings', 'Luzuk Premium' ),
        'panel' => 'luzuk_general_panel',
    )
);

lzCustomLable($wp_customize, 'stickyheader_view', 'header_settings', 'Sticky Header Settings');
    //ENABLE/DISABLE STICKY HEADER
$wp_customize->add_setting(
    'luzuk_sticky_header_enable',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default' => 'off'
    )
);

$wp_customize->add_control(
    new luzuk_Switch_Control(
        $wp_customize,
        'luzuk_sticky_header_enable',
        array(
            'settings'      => 'luzuk_sticky_header_enable',
            'section'       => 'header_settings',
            'label'         => __( 'Sticky Header', 'Unboxthemes Premium' ),
            'on_off_label'  => array(
                'on' => __( 'Enable', 'luzuk-premium' ),
                'off' => __( 'Disable', 'luzuk-premium' )
            )   
        )
    )
);

$wp_customize->add_setting(
    'inner_headertitleboxstickyTpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '10em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'inner_headertitleboxstickyTpadding',
    array(
        'settings'      => 'inner_headertitleboxstickyTpadding',
        'section'       => 'header_settings',
        'type'          => 'text',
        'label'         => __( 'Inner Sticky Page Title Box Top Padding', 'luzuk-premium' )
    )
);


$sectionHeader = 'header_settings';

lzCustomLable($wp_customize, 'header_bgColorssettings', $sectionHeader, 'Header Background Colors');

addColorPalatOption($wp_customize, 'header_bgColor', 'header_settings', 'Header Inner page & Sticky Background Color', '#fff');

lzCustomLable($wp_customize, 'header_MenuColorssettings', $sectionHeader, 'Navigation Colors');

addColorPalatOption($wp_customize, 'header_topmenusColor', 'header_settings', 'Menus color', '#000');
addColorPalatOption($wp_customize, 'header_topmenushoverColor', 'header_settings', 'Menus Hover color', '#431e88');

addColorPalatOption($wp_customize, 'header_topmenusactiveColor', 'header_settings', 'Active Menus color', '#431e88');

addColorPalatOption($wp_customize, 'header_topsubmenusColor', 'header_settings', 'Header Sub Menus color', '#ffffff');
addColorPalatOption($wp_customize, 'header_topsubmenushvrColor', 'header_settings', 'Sub Menus Hover & Sub Menu Active color', '#fff');
addColorPalatOption($wp_customize, 'header_submenusbgssc1Color', 'header_settings', 'Dropdown Background color One', '#441e87');
addColorPalatOption($wp_customize, 'header_submenusbgssc2Color', 'header_settings', 'Dropdown Background color Two', '#4b91f1');
addColorPalatOption($wp_customize, 'header_topsubmenushvranimatedbgColor', 'header_settings', 'Sub Menus Hover Icon color', '#fff');
addColorPalatOption($wp_customize, 'header_topsubmenushvrbgColor', 'header_settings', 'Sub Current Menus Background color', '#fff');

lzCustomLable($wp_customize, 'header_colorsfortabandmobview', $sectionHeader, 'Responsive Header Settings');

addColorPalatOption($wp_customize, 'header_topsubmenuiconColor', 'header_settings', 'Header Menus Dropdown Icon color', '#4a8cec');

addColorPalatOption($wp_customize, 'header_respnavtoggbarbgssColor', 'header_settings', 'Toggle Bar color', '#4a8cec');

addColorPalatOption($wp_customize, 'header_respnavbsbgssColor', 'header_settings', ' Navigation Box Background Color', '#ffffff');
addColorPalatOption($wp_customize, 'header_navigationrespnavbrssColor', 'header_settings', 'Menus Border Color', '#431e88');

// Adding the Label
lzCustomLable($wp_customize, 'reservation_lblImgTxt', 'header_settings' , 'Social media icons');

//for social to show & hide button

$wp_customize->add_setting( 'Headersocial_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'Headersocial_button_display', array( 'label' => 'Social Display', 'section' => 'header_settings', 'settings' => 'Headersocial_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Social', 'hide' => 'Hide Social', ), ) ); 


// FACEBOOK 
$wp_customize->add_setting('header_fb', array('default'=> 'https://facebook.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('header_fb',
    array(
        'settings'      => 'header_fb',
        'section'       => 'header_settings',
        'type'          => 'url',
        'label'         => __( 'Facebook Url', 'luzuk-premium' )
    )
);
// TWITTER
$wp_customize->add_setting('header_tw', array('default'=> 'https://twitter.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('header_tw',
    array(
        'settings'      => 'header_tw',
        'section'       => 'header_settings',
        'type'          => 'url',
        'label'         => __( 'Twitter Url', 'luzuk-premium' )
    )
);

// LINKED IN
$wp_customize->add_setting('header_in',array('default'=> 'https://linkedin.com','sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('header_in',
    array(
        'settings'      => 'header_in',
        'section'       => 'header_settings',
        'type'          => 'url',
        'label'         => __( 'Linkedin Url', 'luzuk-premium' )
    )
);

// Youtube IN
$wp_customize->add_setting('header_youtube',array('default'=> 'https://www.youtube.com/','sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('header_youtube',
    array(
        'settings'      => 'header_youtube',
        'section'       => 'header_settings',
        'type'          => 'url',
        'label'         => __( 'Youtube Url', 'luzuk-premium' )
    )
);


// Instagram IN
$wp_customize->add_setting('header_instagram',array('default'=> 'https://instagram.com','sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('header_instagram',
    array(
        'settings'      => 'header_instagram',
        'section'       => 'header_settings',
        'type'          => 'url',
        'label'         => __( 'Instagram Url', 'luzuk-premium' )
    )
);


// Whatsapp IN
$wp_customize->add_setting('header_whatsapp',array('default'=> 'https://www.whatsapp.com','sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('header_whatsapp',
    array(
        'settings'      => 'header_whatsapp',
        'section'       => 'header_settings',
        'type'          => 'url',
        'label'         => __( 'Whatsapp Url', 'luzuk-premium' )
    )
);


lzCustomLable($wp_customize, 'header_socialColorssettings', $sectionHeader, 'Socials Colors');

addColorPalatOption($wp_customize, 'header_socialColor', 'header_settings', 'Socials Icons Color', '#fff');
addColorPalatOption($wp_customize, 'header_socialhoverColor', 'header_settings', 'Socials Icons Hover Color', '#431e88');
addColorPalatOption($wp_customize, 'header_socialbgColor', 'header_settings', 'Socials Background Color', '#4a8cec');
addColorPalatOption($wp_customize, 'header_socialbghoverColor', 'header_settings', 'Socials Background Hover Color', '#fff');


//COLOR SETTINGS
$wp_customize->add_section( 'colors', array(
    'title' => __( 'Colors' , 'Luzuk Premium'),
    'panel' => 'luzuk_general_panel',
) );
//theme primary color
addColorPalatOption($wp_customize, 'luzuk_template_color', 'colors', 'Theme Primary Color', '#431e88');
//theme Secondary color
addColorPalatOption($wp_customize, 'theme_secondary_color', 'colors', 'Theme Secondary Color', '#4a8cec');

lzCustomLable($wp_customize, 'luzuk_allinnerpagesec_colordisplaysettdisplay', 'colors', 'Color Setting For Innerpage Colors:');


lzCustomLable($wp_customize, 'innheadr_Overlay', 'colors', 'Header Overlay Color:');

$wp_customize->add_setting(
    'innheadr_Opacity',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '0.3', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'innheadr_Opacity',
    array(
        'settings'      => 'innheadr_Opacity',
        'section'       => 'colors',
        'type'          => 'text',
        'label'         => __( 'Opacity', 'luzuk-premium' )
    )
);
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_headeolyclr', 'colors', 'Inner Page Header Ovaerlay Color', '#000');
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_titlecolor', 'colors', 'Inner page title color', '#fff');
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_bgcolor1', 'colors', 'Inner page title background color one', '#eceffc'); 
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_bgcolor2', 'colors', 'Inner page title background color two', '#fff'); 

addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionbox_color', 'colors', 'Inner Page Box Background color', '#ffffff');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionboxheading1_color', 'colors', 'Heading 1 color', '#2e2e2e');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionboxheading2_color', 'colors', 'Heading 2 color', '#2e2e2e');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionboxheading3_color', 'colors', 'Heading 3 color', '#2e2e2e');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionboxheading4_color', 'colors', 'Heading 4 color', '#2e2e2e');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionboxheading5_color', 'colors', 'Heading 5 color', '#2e2e2e');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionboxheading6_color', 'colors', 'Heading 6 color', '#2e2e2e');

addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionboxheadingborderc1_color', 'colors', 'Heading Border color', '#000');


addColorPalatOption($wp_customize, 'template_innerpage_contentboxsidebartitlecolor', 'colors', 'Inner Page Sidebar Heading', '#676767');
addColorPalatOption($wp_customize, 'template_innerpage_contentboxsidebartitlebordercolor', 'colors', 'Inner Page Sidebar Heading Border & Product Button Background Color', '#000');


addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionboxtext_color', 'colors', 'Inner Page Text color', '#666');

addColorPalatOption($wp_customize, 'template_innerpage_productpageboldtextcolor', 'colors', 'Inner Product Page Bold Text Color', '#000');

addColorPalatOption($wp_customize, 'template_innerpage_cartpageproducttitlecolor', 'colors', 'Inner  Cart Page Product Title Color', '#000');

addColorPalatOption($wp_customize, 'luzuk_template_innerpageproductprice_color', 'colors', 'Inner Page Product Selling Price color', '#868b9e');
addColorPalatOption($wp_customize, 'luzuk_template_innerpageproductpricedel_color', 'colors', 'Inner Page Product Price color', '#7c8491');

addColorPalatOption($wp_customize, 'luzuk_template_innerpageallothrtheadtextcolcolor_color', 'colors', 'Other Text Color', '#fff');
addColorPalatOption($wp_customize, 'luzuk_template_innerpageallothrtheadtextbgsscolcolor_color', 'colors', 'Other Fields Background Color', '#fff');



addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionboxtextlinks_color', 'colors', 'Inner Page Links color', '#4f4c4c');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionboxtextlinkshvrs_color', 'colors', 'Inner Page Links Hover color', '#4b91f1');

addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionboxtextlinksicon_color', 'colors', 'Inner Page Icons, list number color', '#4b91f1');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionboxtextlinksiconbgssclr_color', 'colors', 'Inner Page list number Background color', '#fff');

addColorPalatOption($wp_customize, 'luzuk_template_innerpagemainsectionsidebarborderrs_color', 'colors', 'Inner Page Sidebar & text field Border color', '#e9e7e7');


addColorPalatOption($wp_customize, 'luzuk_template_innerpagesidebardaytxt_color', 'colors', 'Inner Page Sidebar Calender Widgets Day Text color', '#ffffff');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagesidebardaybgsstxt_color', 'colors', 'Inner Page Sidebar Calender Widgets Day Text Background color', '#777777');

addColorPalatOption($wp_customize, 'luzuk_template_innerpagesblockquote_color', 'colors', 'Inner Page blockquote Background color', '#f2f2f2');


lzCustomLable($wp_customize, 'luzuk_allinnerpagesec_pagination', 'colors', 'Color Setting For Pagination:');

addColorPalatOption($wp_customize, 'luzuk_template_innerpagepagination_color', 'colors', 'Inner Page Pagination Color', '#000');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagepaginationbg_color', 'colors', 'Inner Page Pagination Background Color', '#fff');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagepaginationborder_color', 'colors', 'Inner Page Pagination Border Color', '#eaeaea');

addColorPalatOption($wp_customize, 'luzuk_template_innerpagepaginationactive_color', 'colors', 'Inner Page Pagination Hover & Active Color', '#fff');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagepaginationbgactive_color', 'colors', 'Inner Page Pagination Background Hover & Active Color', '#441e87');
addColorPalatOption($wp_customize, 'luzuk_template_innerpagepaginationborderactive_color', 'colors', 'Inner Page Pagination Border Hover & Active Color', '#441e87');




//addColorPalatOption($wp_customize, 'luzuk_template_staticfrontinnerpage_bgcolor', 'colors', 'Static Front Page Top Header background color', '#2e2e2e');
lzCustomLable($wp_customize, 'luzuk_allinnerpagesec_colordisplaysettnavbackttoarrdisplay', 'colors', 'Color Setting For Navigation Back to top arrow:');

addColorPalatOption($wp_customize, 'luzuk_template_innerpage_backttoparrcbgcolor', 'colors', 'Site Navigation Arrow color', '#441e87');
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_backttoparrcbghvrcolor', 'colors', 'Site Navigation Arrow Hover color', '#4b91f1');





//BREADCRUMB SETTINGS
$wp_customize->add_section(
    'luzuk_breadcrumb_settings',
    array(
        'title' => __( 'Breadcrumb Settings', 'Luzuk Premium' ),
        'panel' => 'luzuk_general_panel',
    )
);

//for breadcrumb to show & hide button

$wp_customize->add_setting( 'breadcrumb_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'breadcrumb_button_display', array( 'label' => 'Breadcrumb Display', 'section' => 'luzuk_breadcrumb_settings', 'settings' => 'breadcrumb_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Hide Breadcrumb', 'hide' => 'Show Breadcrumb', ), ) ); 

$wp_customize->add_setting(
        'luzuk_breadcrumbhometxt',
        array(
            'sanitize_callback' => 'luzuk_sanitize_text',
            'default'           => __( 'Home', 'luzuk' )
        )
    );
    $wp_customize->add_control(
        'luzuk_breadcrumbhometxt',
        array(
            'settings'      => 'luzuk_breadcrumbhometxt',
            'section'       => 'luzuk_breadcrumb_settings',
            'type'          => 'text',
            'label'         => __( 'Add Breadcrumb Text Here:', 'luzuk' )
        )
    );

//Inner page breadcrumbbox title color
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_breadcrumbtitlecolor', 'luzuk_breadcrumb_settings', 'Inner page breadcrumb box title color', '#fff');
//Inner page breadcrumbbox current title color
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_breadcrumbcurrenttitlecolor', 'luzuk_breadcrumb_settings', 'Inner page breadcrumb box current title color', '#fff');
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_breadcrumbcurrenttitlehovercolor', 'luzuk_breadcrumb_settings', 'Inner page breadcrumb box current title hover color', '#4a8cec');
// end to show & hide button

//POSTPAGEDATE SETTINGS
$wp_customize->add_section(
    'luzuk_blogpage_settings',
    array(
        'title' => __( 'Blog Page Settings', 'Luzuk Premium' ),
        'panel' => 'luzuk_general_panel',
    )
);

lzCustomLable($wp_customize, 'allblog_heading2label', 'luzuk_blogpage_settings', 'Post Heading Font Size Setting:');

$wp_customize->add_setting(
    'blogpages_innerpageheading2',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '23px', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'blogpages_innerpageheading2',
    array(
        'settings'      => 'blogpages_innerpageheading2',
        'section'       => 'luzuk_blogpage_settings',
        'type'          => 'text',
        'label'         => __( 'Post Heading Font Size', 'luzuk-premium' )
    )
);




lzCustomLable($wp_customize, 'allblog_lblbuttonabtdisplay', 'luzuk_blogpage_settings', 'Post Date & Admin Display Setting:');

//for POSTPAGEDATE to show & hide button

$wp_customize->add_setting( 'postdate_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'postdate_button_display', array( 'label' => 'Post Date Display', 'section' => 'luzuk_blogpage_settings', 'settings' => 'postdate_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Post Date & Admin', 'hide' => 'Hide Post Date & Admin', ), ) ); 

// end to show & hide button


lzCustomLable($wp_customize, 'singleblog_lblbuttonabtdisplay', 'luzuk_blogpage_settings', 'Post social Icons Display Setting:');


//for POSTPAGEsocialsshare to show & hide button

$wp_customize->add_setting( 'postsocialsshare_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'postsocialsshare_button_display', array( 'label' => 'Post social Icons Display', 'section' => 'luzuk_blogpage_settings', 'settings' => 'postsocialsshare_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Social Icons', 'hide' => 'Hide Social Icons', ), ) ); 

// end to show & hide button

addColorPalatOption($wp_customize, 'luzuk_template_innerpage_blogimgoverlaycolor1', 'luzuk_blogpage_settings', 'Blog page Image Hover Overlay Color One', '#441e87');

addColorPalatOption($wp_customize, 'luzuk_template_innerpage_blogimgoverlaycolor2', 'luzuk_blogpage_settings', 'Blog page Image Hover Overlay Color Two', '#4b91f1');

addColorPalatOption($wp_customize, 'luzuk_template_innerpage_blogbuttoniconcolor', 'luzuk_blogpage_settings', 'Blog page Image Hover Icon color', '#4b91f1');

addColorPalatOption($wp_customize, 'luzuk_template_innerpage_blogbuttoniconbgcolor', 'luzuk_blogpage_settings', 'Blog page Image Hover Icon Background color', '#fff');

//addColorPalatOption($wp_customize, 'luzuk_template_innerpage_blogbuttoniconhovercolor', 'luzuk_blogpage_settings', 'Blog page Image Hover Icon Hover color', '#fff');

//addColorPalatOption($wp_customize, 'luzuk_template_innerpage_blogbuttoniconbghovercolor', 'luzuk_blogpage_settings', 'Blog page Image Hover Icon Background Hover color', '#000');

//Blog page title color
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_blogtitlecolor', 'luzuk_blogpage_settings', 'Blog page title color', '#3d3d3d');
//Blog page title hover color
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_blogtitlehovercolor', 'luzuk_blogpage_settings', 'Blog page title hover color', '#441e87');

//Blog page social color
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_blogsocialcolor', 'luzuk_blogpage_settings', 'Blog page social color', '#fff');
//Blog page social color
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_blogsocialbgcolor', 'luzuk_blogpage_settings', 'Blog page social background color', '#516bec');
//Blog page social hover color
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_blogsocialhovercolor', 'luzuk_blogpage_settings', 'Blog page social hover color', '#fff');
//Blog page social color
addColorPalatOption($wp_customize, 'luzuk_template_innerpage_blogsocialbghovercolor', 'luzuk_blogpage_settings', 'Blog page social background hover color', '#4b91f1');


//FOOTER COPYRIGHT SETTINGS
$wp_customize->add_section(
    'footer_area',
    array(
        'title' => __( 'Footer Settings', 'Luzuk Premium' ),
        'panel' => 'luzuk_general_panel',
    )
);

backgroundManager($wp_customize, 'footer', 'footer_area', $color='#000', get_template_directory_uri().'/images/footerbg.jpg', 'color');

lzCustomLable($wp_customize, 'footer_areaPadding', 'footer_area', 'Set Top Footer Padding:');

$wp_customize->add_setting(
    'sec_footerseTmargin', 
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '5em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'sec_footerseTmargin',
    array(
        'settings'      => 'sec_footerseTmargin',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'sec_footersebottommargin',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '4em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'sec_footersebottommargin',
    array(
        'settings'      => 'sec_footersebottommargin',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'luzuk-premium' )
    )
);

lzCustomLable($wp_customize, 'footer_areabottomfPadding', 'footer_area', 'Set Bottom Footer Padding:');

$wp_customize->add_setting(
    'sec_bottomareaTmargin', 
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '20px', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'sec_bottomareaTmargin',
    array(
        'settings'      => 'sec_bottomareaTmargin',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'sec_bottomareabottommargin',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '20px', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'sec_bottomareabottommargin',
    array(
        'settings'      => 'sec_bottomareabottommargin',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'luzuk-premium' )
    )
);

lzCustomLable($wp_customize, 'footer_areaopacitysetting', 'footer_area', 'Set Section Opacity Setting:');

$wp_customize->add_setting(
'footerarea_overlay_color', array(
'default' => '#000',
'sanitize_callback' => 'sanitize_hex_color',
)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footerarea_overlay_color',array(
'settings' => 'footerarea_overlay_color',
'section' => 'footer_area',
'label' => __( 'Apply Overlay Color', 'Luzuk' ),
'description' => __( 'The color used for the overlay in the banner.', 'luzuk-premium' ),
)
)
);


$wp_customize->add_setting(
'cover_footer_template_overlay_opacity',
array(
'default' => 85,
'sanitize_callback' => 'absint',
'transport' => 'postMessage',
)
);

$wp_customize->add_control(
'cover_footer_template_overlay_opacity',
array(
'label' => __( 'Overlay Opacity', 'luzuk-premium' ),
'description' => __( 'Make sure that the contrast is high enough so that the text is readable.', 'luzuk-premium' ),
'section' => 'footer_area',
'type' => 'range',
'input_attrs' => luzuk_customize_opacity_range(),
)
);

$wp_customize->selective_refresh->add_partial(
'cover_footer_template_overlay_opacity',
array(
'selector' => '.cover-color-overlay',
'type' => 'cover_opacity',
)
);


lzCustomLable($wp_customize, 'footer_copytext', 'footer_area', 'Footer Copyright Text:');

$wp_customize->add_setting(
    'footer_area_copyrighttext',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '© 2021 All Rights Reserved', 'Luzuk Premium' )
    )
);
$wp_customize->add_control(
    'footer_area_copyrighttext',
    array(
        'settings'      => 'footer_area_copyrighttext',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Footer Copyright Text', 'Luzuk Premium' )
    )
);

$wp_customize->add_setting(
    'footer_termtitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Terms of Service' )
    )
);
$wp_customize->add_control(
    'footer_termtitle',
    array(
        'settings'      => 'footer_termtitle',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Tearm Text', 'luzuk-premium' )
    )
);
$wp_customize->add_setting('footer_termlink',   array('default'=> ' Add link here', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('footer_termlink',
    array(
        'settings'      => 'footer_termlink',
        'section'       => 'footer_area',
        'type'          => 'url',
        'label'         => __( 'Add tearm link here', 'luzuk-premium' )
    )
);


$wp_customize->add_setting(
    'footer_privacytitle',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( 'Privacy Policy' )
    )
);
$wp_customize->add_control(
    'footer_privacytitle',
    array(
        'settings'      => 'footer_privacytitle',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Privacy Text', 'luzuk-premium' )
    )
);
$wp_customize->add_setting('footer_privacylink',   array('default'=> ' Add link here', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('footer_privacylink',
    array(
        'settings'      => 'footer_privacylink',
        'section'       => 'footer_area',
        'type'          => 'url',
        'label'         => __( 'Add privacy link here', 'luzuk-premium' )
    )
);



//theme Footer title Color
addColorPalatOption($wp_customize, 'footerarea_title_color', 'footer_area', 'Footer Title Color', '#fff');
addColorPalatOption($wp_customize, 'footerarea_text_color', 'footer_area', 'Footer Text Color', '#8e8d89');
addColorPalatOption($wp_customize, 'footerarea_hglightsctext_color', 'footer_area', 'Footer Hightlight Text Color', '#4b91f1');
addColorPalatOption($wp_customize, 'footerarea_icon_color', 'footer_area', 'Footer Icon Color', '#4b91f1');
addColorPalatOption($wp_customize, 'footerarea_sicon_color', 'footer_area', 'Footer Social Icon Color', '#8e8d89');
addColorPalatOption($wp_customize, 'footerarea_siconhover_color', 'footer_area', 'Footer Social Icon Hover Color', '#4b91f1');

addColorPalatOption($wp_customize, 'footerarea_menu_color', 'footer_area', 'Footer Menu & Menu Bar Color', '#989795');
addColorPalatOption($wp_customize, 'footerarea_menuhover_color', 'footer_area', 'Footer Menu & Menu Bar Hover Color', '#4b91f1');
addColorPalatOption($wp_customize, 'footerarea_activemenu_color', 'footer_area', 'Active Menu & Menu Bar Color', '#4b91f1');

addColorPalatOption($wp_customize, 'footerarea_datext_color', 'footer_area', 'Date Text Color', '#989795');
addColorPalatOption($wp_customize, 'footerarea_tableborder_color', 'footer_area', 'Border Color', '#2d292a');

addColorPalatOption($wp_customize, 'footerarea_formtextlabel_color', 'footer_area', 'Label Color', '#989795');
addColorPalatOption($wp_customize, 'footerarea_formtext_color', 'footer_area', 'Form Text & Placeholder Text Color', '#b2b2b2');

addColorPalatOption($wp_customize, 'footerarea_formbuttontext_color', 'footer_area', 'Button Text Color', '#4b91f1');
addColorPalatOption($wp_customize, 'footerareabutton_border_color', 'footer_area', 'Button Border Color', '#4b91f1');

addColorPalatOption($wp_customize, 'footerarea_otherfbgs_color', 'footer_area', 'Other Fields Background Color', '#eeeeee');

//SHOP PAGE SIDEBAR SETTINGS
$wp_customize->add_section(
    'luzuk_shopsidebar_settings',
    array(
        'title' => __( 'Shop Page Sidebar Settings', 'Luzuk Premium' ),
        'panel' => 'luzuk_general_panel',
    )
);


// to show & hide button
$wp_customize->add_setting( 'cd_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'cd_button_display', array( 'label' => 'Shop Sidebar Display', 'section' => 'luzuk_shopsidebar_settings', 'settings' => 'cd_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Sidebar', 'hide' => 'Hide Sidebar', ), ) ); 
// end to show & hide button

$wp_customize->add_section(
    'luzuk_innerpageshortcode_page_settings',
    array(
        'title' => __( 'Color Setting For Shortcode Pages', 'luzuk-premium' ),
        'panel' => 'luzuk_general_panel',
    )
);
lzCustomLable($wp_customize, 'luzuk_subjectinnerpagepageclrdisplay', 'luzuk_innerpageshortcode_page_settings', 'Set Subject Shortcode Page Colors:');

   addColorPalatOption($wp_customize, 'innerSubjects_imghoveroverlayColor1', 'luzuk_innerpageshortcode_page_settings', 'Select Subject Image Hover Overlay Color One', '#441e87');
   addColorPalatOption($wp_customize, 'innerSubjects_imghoveroverlayColor2', 'luzuk_innerpageshortcode_page_settings', 'Select Subject Image Hover Overlay Color Two', '#4b91f1');

 addColorPalatOption($wp_customize, 'innersubj_title_color', 'luzuk_innerpageshortcode_page_settings', 'Select Subject Title Color', '#0c1736');

  addColorPalatOption($wp_customize, 'innersubj_text_color', 'luzuk_innerpageshortcode_page_settings', 'Select Subject Text Color', '#6b6b6b');
   addColorPalatOption($wp_customize, 'innerSubject_boxbg_color', 'luzuk_innerpageshortcode_page_settings', 'Select Subject Box Background Color', '#fff');
    addColorPalatOption($wp_customize, 'innerSubject_boxhoverborder_color', 'luzuk_innerpageshortcode_page_settings', 'Select Subject Box Hover Border Color', '#4640a7');
      addColorPalatOption($wp_customize, 'innerSubjects_btnColorbg1', 'luzuk_innerpageshortcode_page_settings', 'Select Subject Box Hover Icon Background Color One', '#441e87');
 addColorPalatOption($wp_customize, 'innerSubjects_btnColorbg2', 'luzuk_innerpageshortcode_page_settings', 'Select Subject Box Hover Icon Background Color Two', '#4b91f1');
  addColorPalatOption($wp_customize, 'innerSubjects_btnColor', 'luzuk_innerpageshortcode_page_settings', 'Select Subject Box Hover Icon Color', '#fff');


lzCustomLable($wp_customize, 'luzuk_testimonialinnerpagepageclrdisplay', 'luzuk_innerpageshortcode_page_settings', 'Set Testimonial Shortcode Page Colors:');
 
addColorPalatOption($wp_customize, 'luzuk_innertestimonials_textcolor', 'luzuk_innerpageshortcode_page_settings', 'Select Testimonial Content Color', '#ffffff');
  addColorPalatOption($wp_customize, 'luzuk_innertestimonials_imgborderinnercolor', 'luzuk_innerpageshortcode_page_settings', 'Select Image Inner Border Color', '#442089');
  addColorPalatOption($wp_customize, 'luzuk_innertestimonials_imgborderoutercolor', 'luzuk_innerpageshortcode_page_settings', 'Select Image Outer Border Color', '#fff');
addColorPalatOption($wp_customize, 'luzuk_innertestimonials_Namecolor', 'luzuk_innerpageshortcode_page_settings', 'Select Client Name Color', '#fff');
addColorPalatOption($wp_customize, 'luzuk_innertestimonials_Desgcolor', 'luzuk_innerpageshortcode_page_settings', 'Select Client Designation Color', '#fff');
 addColorPalatOption($wp_customize, 'luzuk_innertestimonials_boxbg1color', 'luzuk_innerpageshortcode_page_settings', 'Select Box Background Color One', '#441e87');
 addColorPalatOption($wp_customize, 'luzuk_innertestimonials_boxbg2color', 'luzuk_innerpageshortcode_page_settings', 'Select Box Background Color Two', '#4b91f1');

  addColorPalatOption($wp_customize, 'luzuk_innertestimonials_indicatorcolor1', 'luzuk_innerpageshortcode_page_settings', 'Select Box Indicator Background Color', '#4b91f1');
  addColorPalatOption($wp_customize, 'luzuk_innertestimonials_indicatorcolor2', 'luzuk_innerpageshortcode_page_settings', 'Select Box Indicator Border Color', '#fff');


lzCustomLable($wp_customize, 'luzuk_galleryinnerpagepageclrdisplay', 'luzuk_innerpageshortcode_page_settings', 'Set Gallery Shortcode Page Colors:');

addColorPalatOption($wp_customize, 'Innergalleryarea_ghovericonbgColor1', 'luzuk_innerpageshortcode_page_settings', 'Select Image Hover Icon Background color One', '#441e87');
addColorPalatOption($wp_customize, 'Innergalleryarea_ghovericonbgColor2', 'luzuk_innerpageshortcode_page_settings', 'Select Image Hover Icon Background color Two', '#4b91f1');
addColorPalatOption($wp_customize, 'Innergalleryarea_ghovericonColor', 'luzuk_innerpageshortcode_page_settings', 'Select Image Hover Icon color', '#ffffff');

 
lzCustomLable($wp_customize, 'luzuk_faqinnerpagepageclrdisplay', 'luzuk_innerpageshortcode_page_settings', 'Set Faq Shortcode Page Colors:');
 addColorPalatOption($wp_customize, 'luzuk_faqinnerpagetitleIconColor', 'luzuk_innerpageshortcode_page_settings', 'Select Faq Question Icon Color', '#4a8cec');
addColorPalatOption($wp_customize, 'luzuk_faqinnerpagetitleColor', 'luzuk_innerpageshortcode_page_settings', 'Select Faq Question Text Color', '#000');
addColorPalatOption($wp_customize, 'luzuk_faqinnerpagetitleboxborderColor', 'luzuk_innerpageshortcode_page_settings', 'Select Question Box Border Color', '#e9e7e7');
addColorPalatOption($wp_customize, 'luzuk_faqinnerpagetitlbgColor', 'luzuk_innerpageshortcode_page_settings', 'Select Question Box Background Color', '#fff');
addColorPalatOption($wp_customize, 'luzuk_faqinnerpagetextcColor', 'luzuk_innerpageshortcode_page_settings', 'Select Faq Answer Text Color', '#000');
addColorPalatOption($wp_customize, 'luzuk_faqinnerpageansbg1Color', 'luzuk_innerpageshortcode_page_settings', 'Select Faq Answer Box Background Color One', '#edf0fc');

$wp_customize->add_section(
    'luzuk_innerpagefont_settings',
    array(
        'title' => __( 'Inner Page Settings', 'luzuk-premium' ),
        'panel' => 'luzuk_general_panel',
    )
);

lzCustomLable($wp_customize, 'luzuk_innerpage_titlepaddset', 'luzuk_innerpagefont_settings', ' Set Header Title Box Padding:');


$wp_customize->add_setting(
    'inner_headertitleboxTpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '4em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'inner_headertitleboxTpadding',
    array(
        'settings'      => 'inner_headertitleboxTpadding',
        'section'       => 'luzuk_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'luzuk-premium' )
    )
);
$wp_customize->add_setting(
    'inner_headertitleboxBpadding',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '6em', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'inner_headertitleboxBpadding',
    array(
        'settings'      => 'inner_headertitleboxBpadding',
        'section'       => 'luzuk_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'luzuk-premium' )
    )
);



lzCustomLable($wp_customize, 'luzuk_innerpageh1_fontsizeset', 'luzuk_innerpagefont_settings', ' Heading 1:');


$wp_customize->add_setting(
    'pages_innerpageheading',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '35px', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'pages_innerpageheading',
    array(
        'settings'      => 'pages_innerpageheading',
        'section'       => 'luzuk_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Heading 1 Font Size', 'luzuk-premium' )
    )
);


lzCustomLable($wp_customize, 'luzuk_innerpageh2_fontsizeset', 'luzuk_innerpagefont_settings', ' Heading 2:');


$wp_customize->add_setting(
    'pages_innerpageheading2',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '24px', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'pages_innerpageheading2',
    array(
        'settings'      => 'pages_innerpageheading2',
        'section'       => 'luzuk_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Heading 2 Font Size', 'luzuk-premium' )
    )
);
 

lzCustomLable($wp_customize, 'luzuk_innerpageh3_fontsizeset', 'luzuk_innerpagefont_settings', ' Heading 3:');


$wp_customize->add_setting(
    'pages_innerpageheading3',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '20px', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'pages_innerpageheading3',
    array(
        'settings'      => 'pages_innerpageheading3',
        'section'       => 'luzuk_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Heading 3 Font Size', 'luzuk-premium' )
    )
);

lzCustomLable($wp_customize, 'luzuk_innerpageh4_fontsizeset', 'luzuk_innerpagefont_settings', ' Heading 4:');


$wp_customize->add_setting(
    'pages_innerpageheading4',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '18px', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'pages_innerpageheading4',
    array(
        'settings'      => 'pages_innerpageheading4',
        'section'       => 'luzuk_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Heading 4 Font Size', 'luzuk-premium' )
    )
);

lzCustomLable($wp_customize, 'luzuk_innerpageh5_fontsizeset', 'luzuk_innerpagefont_settings', ' Heading 5:');


$wp_customize->add_setting(
    'pages_innerpageheading5',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '17px', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'pages_innerpageheading5',
    array(
        'settings'      => 'pages_innerpageheading5',
        'section'       => 'luzuk_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Heading 5 Font Size', 'luzuk-premium' )
    )
);

lzCustomLable($wp_customize, 'luzuk_innerpageh6_fontsizeset', 'luzuk_innerpagefont_settings', ' Heading 6:');


$wp_customize->add_setting(
    'pages_innerpageheading6',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '16px', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'pages_innerpageheading6',
    array(
        'settings'      => 'pages_innerpageheading6',
        'section'       => 'luzuk_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Heading 6 Font Size', 'luzuk-premium' )
    )
);