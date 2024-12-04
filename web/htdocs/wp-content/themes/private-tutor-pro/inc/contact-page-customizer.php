<?php  
$wp_customize->add_section(
	'luzuk_premium_contactus_section',
	array(
		'title' => __( 'Contact Us Page', 'Luzuk' ),
		'priority' =>20
	)
);
lzCustomLable($wp_customize, 'allcontact_heading2label', 'luzuk_premium_contactus_section', 'Contact Heading Font Size Setting:');

$wp_customize->add_setting(
    'contactpages_innerpageheading2',
    array(
        'sanitize_callback' => 'luzuk_sanitize_text',
        'default'           => __( '45px', 'luzuk-premium' )
    )
);
$wp_customize->add_control(
    'contactpages_innerpageheading2',
    array(
        'settings'      => 'contactpages_innerpageheading2',
        'section'       => 'luzuk_premium_contactus_section',
        'type'          => 'text',
        'label'         => __( 'Contact Heading Font Size', 'luzuk-premium' )
    )
);

lzCustomLable($wp_customize, 'contactus_Form_label', 'luzuk_premium_contactus_section', 'Form Block Setting');

$wp_customize->add_setting(
	'luzuk_contactus_formtitle',
	array(
		'sanitize_callback' => 'luzuk_sanitize_text',
		'default'           => __( 'Enquiry Now', 'Luzuk Premium' )
	)
);
$wp_customize->add_control(
	'luzuk_contactus_formtitle',
	array(
		'settings'      => 'luzuk_contactus_formtitle',
		'section'       => 'luzuk_premium_contactus_section',
		'type'          => 'text',
		'label'         => __( 'Form Title', 'Luzuk Premium' )
	)
);

lzAddElement($wp_customize, 'luzuk_contactus_shortcode', 'luzuk_premium_contactus_section', 'textarea', $label="Form Shortcode", 'luzuk_sanitize_text', '[your shortcode]');



lzCustomLable($wp_customize, 'contactus_contact_label', 'luzuk_premium_contactus_section', 'Contact Form Block Setting');
lzAddElement($wp_customize, 'luzuk_contactus_mailatitle', 'luzuk_premium_contactus_section', 'text', $label="Contact Us Email Label", 'luzuk_sanitize_text', 'EMAIL US');

lzAddElement($wp_customize, 'luzuk_contactus_email', 'luzuk_premium_contactus_section', 'text', $label="Contact Us Email", 'luzuk_sanitize_text', 'contact@example.com');

lzAddElement($wp_customize, 'luzuk_contactus_phonetitle', 'luzuk_premium_contactus_section', 'text', $label="Contact Us Phone Label", 'luzuk_sanitize_text', 'CALL US');

lzAddElement($wp_customize, 'luzuk_contactus_phone', 'luzuk_premium_contactus_section', 'text', $label="Contact Us Phone", 'luzuk_sanitize_text', '+1 999 999 9999');

lzAddElement($wp_customize, 'luzuk_contactus_addtitle', 'luzuk_premium_contactus_section', 'text', $label="Contact Us Address Label", 'luzuk_sanitize_text', 'LOCATION');

lzAddElement($wp_customize, 'luzuk_contactus_address', 'luzuk_premium_contactus_section', 'textarea', $label="Address Line One", 'luzuk_sanitize_text', 'Add Contact Address here..');

lzAddElement($wp_customize, 'luzuk_contactus_addressdata1', 'luzuk_premium_contactus_section', 'textarea', $label="Address Line Two", 'luzuk_sanitize_text', '');

lzAddElement($wp_customize, 'luzuk_contactus_addressdata2', 'luzuk_premium_contactus_section', 'textarea', $label="Address Line Three", 'luzuk_sanitize_text', '');



lzCustomLable($wp_customize, 'contactus_Social_label', 'luzuk_premium_contactus_section', 'Social Block Setting');

// SOCIAL MEDIA URLS / LINKS
$wp_customize->add_setting('luzuk_contactus_sm_lbl', array('sanitize_callback' => 'luzuk_sanitize_text'));
$wp_customize->add_control(
	new luzuk_Customize_Heading($wp_customize, 'luzuk_contactus_sm_lbl',
		array(
			'settings'      => 'luzuk_contactus_sm_lbl',
			'section'       => 'luzuk_premium_contactus_section',
			'label'         => __( 'Social Media Links', 'Luzuk' ),
		)
	)
);

// FACEBOOK 
$wp_customize->add_setting('luzuk_contactus_facebook',	array('default'=> 'https://facebook.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('luzuk_contactus_facebook',
	array(
		'settings'      => 'luzuk_contactus_facebook',
		'section'       => 'luzuk_premium_contactus_section',
		'type'          => 'url',
		'label'         => __( 'Facebook Url', 'Luzuk' )
	)
);
// TWITTER
$wp_customize->add_setting('luzuk_contactus_twitter', array('default'=> 'https://twitter.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('luzuk_contactus_twitter',
	array(
		'settings'      => 'luzuk_contactus_twitter',
		'section'       => 'luzuk_premium_contactus_section',
		'type'          => 'url',
		'label'         => __( 'Twitter Url', 'Luzuk' )
	)
);
// Instagram
$wp_customize->add_setting('luzuk_contactus_instagram', array('default' => 'https://www.instagram.com/', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('luzuk_contactus_instagram',
	array(
		'settings'      => 'luzuk_contactus_instagram',
		'section'       => 'luzuk_premium_contactus_section',
		'type'          => 'url',
		'label'         => __( 'Instagram', 'Luzuk' )
	)
);
// LINKED IN
$wp_customize->add_setting('luzuk_contactus_linkedin',array('default'=> 'https://linkedin.com','sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('luzuk_contactus_linkedin',
	array(
		'settings'      => 'luzuk_contactus_linkedin',
		'section'       => 'luzuk_premium_contactus_section',
		'type'          => 'url',
		'label'         => __( 'Linkedin Url', 'Luzuk' )
	)
);

lzCustomLable($wp_customize, 'contactus_Address_label', 'luzuk_premium_contactus_section', 'Address Map Setting');

// ADDRESS GOOGLE/MSN/OTHER MAP IFRAME OR EMBADE CODE
$wp_customize->add_setting('luzuk_contactus_iframe_lbl', array('sanitize_callback' => 'luzuk_sanitize_text'));
$wp_customize->add_control(
	new luzuk_Customize_Heading($wp_customize, 'luzuk_contactus_iframe_lbl',
		array(
			'settings'      => 'luzuk_contactus_iframe_lbl',
			'section'       => 'luzuk_premium_contactus_section',
			'label'         => __( 'Location Map', 'Luzuk' ),
		)
	)
);
// field for addeding the map code
$wp_customize->add_setting('luzuk_contactus_embade', array(/*'sanitize_callback' => 'esc_url_raw',*/ 'default'=>'Add your map embade code'));
$wp_customize->add_control('luzuk_contactus_embade', array('settings'=>'luzuk_contactus_embade', 'section'=>'luzuk_premium_contactus_section','type'=>'textarea', 'label'=> __('Code for map', 'Luzuk')));


lzCustomLable($wp_customize, 'contactus_Add_color', 'luzuk_premium_contactus_section', 'Set Contact Colors:');
//Contact box color
addColorPalatOption($wp_customize, 'luzuk_contactus_formboxColor', 'luzuk_premium_contactus_section', 'Contact Form Box Color', '#4b91f1');


//Contact heading color
addColorPalatOption($wp_customize, 'luzuk_contactus_titleColor', 'luzuk_premium_contactus_section', 'Heading Color', '#fff');

//Form Label color
addColorPalatOption($wp_customize, 'luzuk_contactus_formlabelColor', 'luzuk_premium_contactus_section', 'Form Label Color', '#fff');

//Form text and placeholder color
addColorPalatOption($wp_customize, 'luzuk_contactus_formtextplaceColor', 'luzuk_premium_contactus_section', 'Form Text and Placeholder Color', '#fff');

//Form border bottom color
addColorPalatOption($wp_customize, 'luzuk_contactus_formborderbottomColor', 'luzuk_premium_contactus_section', 'Form Border Color', '#f4f4f4');

//Button color
addColorPalatOption($wp_customize, 'luzuk_contactus_formbtnColor', 'luzuk_premium_contactus_section', 'Form Button Text Color', '#fff');
addColorPalatOption($wp_customize, 'luzuk_contactus_formbtnhoverColor', 'luzuk_premium_contactus_section', 'Form Button Text Hover Color', '#4b91f1');

//Button bg color
addColorPalatOption($wp_customize, 'luzuk_contactus_formbtnbgColor', 'luzuk_premium_contactus_section', 'Form Button Background Color', '#4b91f1');
addColorPalatOption($wp_customize, 'luzuk_contactus_formbtnbghoverColor', 'luzuk_premium_contactus_section', 'Form Button Background Hover Color', '#fff');


//Contact box color
addColorPalatOption($wp_customize, 'luzuk_contactus_boxColor', 'luzuk_premium_contactus_section', 'Contact Box Color One', '#441e87');

//Contact box color
addColorPalatOption($wp_customize, 'luzuk_contactus_box1Color', 'luzuk_premium_contactus_section', 'Contact Box Color Two', '#4b91f1');

//Contact Details icon color
addColorPalatOption($wp_customize, 'luzuk_contactus_detailiconColor', 'luzuk_premium_contactus_section', 'Contact Phone, Email, Address Icon Color', '#fff');

//Contact Details Email color
addColorPalatOption($wp_customize, 'luzuk_contactus_detailemailColor', 'luzuk_premium_contactus_section', 'Contact Email Color', '#fff');

//Contact Details Email hover color
addColorPalatOption($wp_customize, 'luzuk_contactus_detailemailhoverColor', 'luzuk_premium_contactus_section', 'Contact Details Email Hover Color', '#000');


//Contact Details Information color
addColorPalatOption($wp_customize, 'luzuk_contactus_detailinfoColor', 'luzuk_premium_contactus_section', 'Contact Details Color', '#fff');


//Social Icon color
addColorPalatOption($wp_customize, 'luzuk_contactus_SocialColor', 'luzuk_premium_contactus_section', 'Social Color', '#fff');

//Social Icon hover color
addColorPalatOption($wp_customize, 'luzuk_contactus_SocialhoverColor', 'luzuk_premium_contactus_section', 'Social Hover Color', '#4b91f1');

//Social Icon hover bg color
addColorPalatOption($wp_customize, 'luzuk_contactus_SocialbghoverColor', 'luzuk_premium_contactus_section', 'Social Hover Background Color', '#fff');



