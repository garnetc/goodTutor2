<?php    
/**
 * @package Luzuk Premium
 */

function total_dymanic_styles(){
    global $post;
    $primColor = get_theme_mod( 'luzuk_template_color', '#4641a8' );

    $navigationrespnavbsbgssColor = get_theme_mod( 'header_respnavbsbgssColor', '#ffffff' );
    $navigationrespnavbrssColor = get_theme_mod( 'header_navigationrespnavbrssColor', '#4641a8' );

    $slidertitlerespColor = get_theme_mod( 'slider_titlerespColor', '#000' );
    $slidertitlehighlightrespColor = get_theme_mod( 'slider_titlehighlightrespColor', '#4641a8' );
    $slidertextrespColor = get_theme_mod( 'slider_textrespColor', '#818181' );
    // $color_rgba = total_hex2rgba($color, 0.9);
    // echo 'light color: '.
    // $color_rgba = luzuk_hex2rgba($primColor, 0.9);
    $color_rgba = totalColourBrightness($primColor, 0.3);
    // echo '<br>Dark color: '.
    $darker_color = totalColourBrightness($primColor, -0.5);

    $header_image = get_header_image();
    // DYNAMIC FONTS
    // echo '<br> heading font '.
    $headeingFontRow = get_theme_mod('luzuk_general_headeing_font', '33');
    // echo '<br> text font '.
    $textFontRow = get_theme_mod('luzuk_general_text_font', '26');


    $header = get_theme_mod('header_textcolor', '#666666'); //header color




// fot bottom header padding

    $headerlogoTopsetmaxwidth = get_theme_mod('pages_logoTopsetmaxwidth', '100');

    $innheadrOpacity = get_theme_mod('innheadr_Opacity', '0.3');

//Subject section
    $subjectTpadding = get_theme_mod('subject_areaTpadding', '0em');
    $subjectBpadding = get_theme_mod('subject_areaBpadding', '0em');

//About section
    $aboutTpadding = get_theme_mod('about_areaTpadding', '3em');
    $aboutBpadding = get_theme_mod('about_areaBpadding', '1em');

//Feature section
    $featuresTpadding = get_theme_mod('features_areaTpadding', '13em');
    $featuresBpadding = get_theme_mod('features_areaBpadding', '4em');
    // $featuressecopacity = get_theme_mod('features_secopacity', '0.9');

//whychooseus section
    $whychooseusTpadding = get_theme_mod('whychooseus_areaTpadding', '5em');
    $whychooseusBpadding = get_theme_mod('whychooseus_areaBpadding', '1em');

//Procedure section
    $procedureTpadding = get_theme_mod('procedure_areaTpadding', '5em');
    $procedureBpadding = get_theme_mod('procedure_areaBpadding', '5em');

//Contact section
    $contactTpadding = get_theme_mod('contact_areaTpadding', '17em');
    $contactBpadding = get_theme_mod('contact_areaBpadding', '6em');

//testimonial section
    $testimonialTpadding = get_theme_mod('sec_testimonialsectionTpadding', '6em');
    $testimonialBpadding = get_theme_mod('sec_testimonialsectionBpadding', '7em');
   $testimonialsecopacity = get_theme_mod('testimonial_secopacity', '0.94');

//counter section
    $counterTpadding = get_theme_mod('countersection_toppadding', '0em');
    $counterBpadding = get_theme_mod('countersection_bottompadding', '0em');

//blog section
    $blogTpadding = get_theme_mod('blog_areaTpadding', '4em');
    $blogBpadding = get_theme_mod('blog_areaBpadding', '4em');

    //client logo section
    $ourclientTpadding = get_theme_mod('ourclient_areaTpadding', '0em');
    $ourclientBpadding = get_theme_mod('ourclient_areaBpadding', '9em');

//newsletter section
    $newsletterTpadding = get_theme_mod('newsletter_areaTpadding', '6em');
    $newsletterBpadding = get_theme_mod('newsletter_areaBpadding', '6em');

//footer
    $SectionfooterseTmargin = get_theme_mod('sec_footerseTmargin', '5em');
    $Sectionfootersebottommargin = get_theme_mod('sec_footersebottommargin', '4em');
    $Sectionfootersecopacity = get_theme_mod('sec_footersecopacity', '0.85');

    $bottomareaTmargin = get_theme_mod('sec_bottomareaTmargin', '20px');
    $bottomareabottommargin = get_theme_mod('sec_bottomareabottommargin', '20px');
//inner page
    $headerinnerpageheading = get_theme_mod('pages_innerpageheading', '35px');
    $headerinnerpageheading2 = get_theme_mod('pages_innerpageheading2', '37px');
    $headerinnerpageheading3 = get_theme_mod('pages_innerpageheading3', '20px');
    $headerinnerpageheading4 = get_theme_mod('pages_innerpageheading4', '18px');
    $headerinnerpageheading5 = get_theme_mod('pages_innerpageheading5', '17px');
    $headerinnerpageheading6 = get_theme_mod('pages_innerpageheading6', '16px');

    $immerpageheadertitleboxTpadding = get_theme_mod('inner_headertitleboxTpadding', '4em');
     $immerpageheadertitleboxstickyTpadding = get_theme_mod('inner_headertitleboxstickyTpadding', '10em');
    $immerpageheadertitleboxBpadding = get_theme_mod('inner_headertitleboxBpadding', '6em');

  


    $bloginnerpageheading2 = get_theme_mod('blogpages_innerpageheading2', '23px');
    $contactpagesheading4 = get_theme_mod('contactpages_innerpageheading2', '45px');
    


    $headingFont = getFonts(false, (int)$headeingFontRow);
    $textFont = getFonts(false, (int)$textFontRow);
  

    $custom_css = '';
    $custom_css = " body, * {font-family: $textFont;}

    h2.lz-about-heading, h2.lz-facility-heading, .ht-section-title, .luzuk-h2, .ht-title-wrap, .ht-slide-cap-title, #ht-princing-post-section .ht-princing-icon,h1, h2, h3, h4, h5, h6,
    .slider_section .sub-title,
    .slider_section .sub-title span,
    .slider_section .sub-title small,
    .slider_section .sub-title strong,
    .slider_section .sub-title b,
    .slider_section .sub-title big,
    .slider_section .sub-title sub,
    .slider_section .sub-title sup,
    .slider_section .title,
    .slider_section .title span,
    .slider_section .title small,
    .slider_section .title strong, 
    .slider_section .title b,
    .slider_section .title big,
    .slider_section .title sub,
    .slider_section .title sup,
    .slider-social-icon > span,
.section-title h2, .section-title h2 span, .section-title h2 small, .section-title h2 strong, .section-title h2 big, .section-title h2 b, .section-title h2 sub, .section-title h2 sup,
.section-title h3, .section-title h3 span, .section-title h3 small, .section-title h3 strong, .section-title h3 big, .section-title h3 b, .section-title h3 sub, .section-title h3 sup,
#procedure .section-subtitle h3, #procedure .section-subtitle h3 small,#procedure .section-subtitle h3 strong, #procedure .section-subtitle h3 big, #procedure .section-subtitle h3 b, #procedure .section-subtitle h3 sub, #procedure .section-subtitle h3 sup,  #procedure .section-subtitle h3 span,

#whychooseus .section-subtitle h3, #whychooseus .section-subtitle h3 small, #whychooseus .section-subtitle h3 strong, #whychooseus .section-subtitle h3 big, #whychooseus .section-subtitle h3 b, #whychooseus .section-subtitle h3 sub, #whychooseus .section-subtitle h3 sup, #whychooseus .section-subtitle h3 span,


#features .section-subtitle h3, #features .section-subtitle h3 small,#features .section-subtitle h3 span, #features .section-subtitle h3 strong, #features .section-subtitle h3 big, #features .section-subtitle h3 b, #features .section-subtitle h3 sub, #features .section-subtitle h3 sup,

#contact .section-subtitle h3,  #contact .section-subtitle h3 small,#contact .section-subtitle h3 span, #contact .section-subtitle h3 strong, #contact .section-subtitle h3 big, #contact .section-subtitle h3 b, #contact .section-subtitle h3 sub, #contact .section-subtitle h3 sup,

#blog .section-subtitle h3, #blog .section-subtitle h3 small, #blog .section-subtitle h3 span, #blog .section-subtitle h3 strong, #blog .section-subtitle h3 big, #blog .section-subtitle h3 b, #blog .section-subtitle h3 sub, #blog .section-subtitle h3 sup,

div#about .section-subtitle h3, div#about .section-subtitle h3 small, div#about .section-subtitle h3 span, div#about .section-subtitle h3 strong, div#about .section-subtitle h3 b, div#about .section-subtitle h3 big,div#about .section-subtitle h3 sub, div#about .section-subtitle h3 sup,
.inner-area-title, .inner-area-title small, .inner-area-title span, .inner-area-title strong, .inner-area-title sub, .inner-area-title sup, .inner-area-title big, .inner-area-title b,
    div#about .section-title h2 span,
    div#about .section-title h2 small,
    div#about .section-title h2 strong,
    div#about .section-title h2 b,
    div#about .section-title h2 big,
    div#about .section-title h2 sub,
    div#about .section-title h2 sup,
    .testimonials-area h6.ts-area-title,
    .testimonials-area h6.ts-area-title small,
    .testimonials-area h6.ts-area-title span,
    .testimonials-area h6.ts-area-title strong, 
    .testimonials-area h6.ts-area-title sub, 
    .testimonials-area h6.ts-area-title sup, 
    .testimonials-area h6.ts-area-title big, 
    .testimonials-area h6.ts-area-title b,
    .pricing-area .currency-price,
    .counter-area .cd-num,
    .counter-area .cd-num span,
    .counter-area .cd-num small, 
    .counter-area .cd-num strong,
    .counter-area .cd-num sub, 
    .counter-area .cd-num sup,
    .counter-area .cd-num big,
    .counter-area .cd-num b,
    .counter-area .cd-title,
    .counter-area .cd-title span,
    .counter-area .cd-title small, 
    .counter-area .cd-title strong,
    .counter-area .cd-title sub, 
    .counter-area .cd-title sup,
    .counter-area .cd-title big,
    .counter-area .cd-title b,
    .newsletter-area h2 span,
    .newsletter-area h2 small,
    .newsletter-area h2 strong,
    .newsletter-area h2 b,
    .newsletter-area h2 big,
    .newsletter-area h2 sub,
    .newsletter-area h2 sup,
    main#innerpage-box div#content-box h3.faq-title, 
    main#innerpage-box div#content-box h3.faq-title small,
    main#innerpage-box div#content-box h3.faq-title span, 
    main#innerpage-box div#content-box h3.faq-title strong,
    main#innerpage-box div#content-box h3.faq-title sub, 
    main#innerpage-box div#content-box h3.faq-title sup,
    main#innerpage-box div#content-box h3.faq-title big, 
    main#innerpage-box div#content-box h3.faq-title b,
    .inner-page-gallery .text,
    .inner-page-gallery .text small,
    .inner-page-gallery .text span, 
    .inner-page-gallery .text strong,
    .inner-page-gallery .text sub, 
    .inner-page-gallery .text sup,
    .inner-page-gallery .text big, 
    .inner-page-gallery .text b,

    #innerpage-box h6.ts-area-title, 
    #innerpage-box h6.ts-area-title small,
    #innerpage-box h6.ts-area-title span, 
    #innerpage-box h6.ts-area-title strong,
    #innerpage-box h6.ts-area-title sub, 
    #innerpage-box h6.ts-area-title sup,
    #innerpage-box h6.ts-area-title big, 
    #innerpage-box h6.ts-area-title b,
    .single-team .in-inner-area-title,
    .single-team .in-inner-area-title small,
  .single-team .in-inner-area-title span, 
  .single-team .in-inner-area-title strong,
  .single-team .in-inner-area-title sub, 
  .single-team .in-inner-area-title sup,
  .single-team .in-inner-area-title big, 
  .single-team .in-inner-area-title b,
  main#innerpage-box #blog-box h2,
    main#innerpage-box #blog-box h2 small,
  main#innerpage-box #blog-box h2 span, 
  main#innerpage-box #blog-box h2 strong,
  main#innerpage-box #blog-box h2 sub, 
  main#innerpage-box #blog-box h2 sup,
  main#innerpage-box #blog-box h2 big, 
  main#innerpage-box #blog-box h2 b,
    #ht-contactus-wrap .contact_l_area,
    #ht-contactus-wrap .contact_l_area small, 
     #ht-contactus-wrap .contact_l_area span,
      #ht-contactus-wrap .contact_l_area strong,
      #ht-contactus-wrap .contact_l_area sub,
      #ht-contactus-wrap .contact_l_area sup,
      #ht-contactus-wrap .contact_l_area big,
      #ht-contactus-wrap .contact_l_area b,
    #ht-contactus-wrap h1,
    #ht-contactus-wrap h1 small, 
     #ht-contactus-wrap h1 strong,
     #ht-contactus-wrap h1 span, 
     #ht-contactus-wrap h1 sub,
     #ht-contactus-wrap h1 sup,
     #ht-contactus-wrap h1 big,
      #ht-contactus-wrap h1 b,
    main#innerpage-box .Address_area h4, 
    main#innerpage-box .Address_area h4 small,
    main#innerpage-box .Address_area h4 strong,
    main#innerpage-box .Address_area h4 span,
    main#innerpage-box .Address_area h4 sub,
    main#innerpage-box .Address_area h4 sup,
    main#innerpage-box .Address_area h4 big,
    main#innerpage-box .Address_area h4 b,
    main#innerpage-box .social_area h4, 
    main#innerpage-box .social_area h4 small,
    main#innerpage-box .social_area h4 strong,
    main#innerpage-box .social_area h4 span,
    main#innerpage-box .social_area h4 sub,
    main#innerpage-box .social_area h4 sup,
    main#innerpage-box .social_area h4 big, 
    main#innerpage-box .social_area h4 b,
    .slider_section a.btn,
    .slider_section a.btn span,
    .slider_section a.btn small, 
    .slider_section a.btn strong,
    .slider_section a.btn big, 
    .slider_section a.btn b,
    .slider_section a.btn sup,
    .slider_section a.btn sub,
    .woocommerce div.product .product_title,
    .woocommerce div.product .product_title span,
   .woocommerce div.product .product_title small, 
   .woocommerce div.product .product_title strong,
   .woocommerce div.product .product_title big, 
   .woocommerce div.product .product_title b,
   .woocommerce div.product .product_title sup,
   .woocommerce div.product .product_title sub,
   main#innerpage-box h2.woocommerce-loop-product__title,
    main#innerpage-box h2.woocommerce-loop-product__title span,
   main#innerpage-box h2.woocommerce-loop-product__title small, 
   main#innerpage-box h2.woocommerce-loop-product__title strong,
   main#innerpage-box h2.woocommerce-loop-product__title big, 
   main#innerpage-box h2.woocommerce-loop-product__title b,
   main#innerpage-box h2.woocommerce-loop-product__title sup,
   main#innerpage-box h2.woocommerce-loop-product__title sub,
     body.page-template-default main#innerpage-box h4, div#commentsAdd h4, body.page-template-default main#innerpage-box h4 span, div#commentsAdd h4 span,
     body.page-template-default main#innerpage-box h4 small, div#commentsAdd h4 small,
     body.page-template-default main#innerpage-box h4 strong, div#commentsAdd h4 strong,
     body.page-template-default main#innerpage-box h4 sub, div#commentsAdd h4 sub,
     body.page-template-default main#innerpage-box h4 sup, div#commentsAdd h4 sup,
     body.page-template-default main#innerpage-box h4 big, div#commentsAdd h4 big,
     body.page-template-default main#innerpage-box h4 b, div#commentsAdd h4 b,

     main#innerpage-box #blog-box h2, 
     main#innerpage-box #blog-box h2 small,
      main#innerpage-box #blog-box h2 sub,
     main#innerpage-box #blog-box h2 sup,
     main#innerpage-box #blog-box h2 span,
     main#innerpage-box #blog-box h2 strong,
      main#innerpage-box #blog-box h2 big,
      main#innerpage-box #blog-box h2 b
     {font-family: $headingFont; }

  .site-header, .page-template-home-template.ht-sticky-header .site-header{ background: url('$header_image'); background-repeat: no-repeat; background-size: cover;}
        #ht-masthead, .ht-site-description a, .page-template-home-template .ht-main-navigation .menu-item > a, .ht-main-navigation a, .ht-main-navigation ul ul a {color: #{$header};}
    .page-template-home-template .ht-main-navigation .current_page_item > a {color: #fff;}

    .logo-header.mostion img{max-width: $headerlogoTopsetmaxwidth%;}

    
    div#subject{padding-top: $subjectTpadding;}
    div#subject{padding-bottom: $subjectBpadding;}


    div#about{padding-top: $aboutTpadding;}
   div#about{padding-bottom: $aboutBpadding;}

   div#newsletter{padding-top: $newsletterTpadding;}
   div#newsletter{padding-bottom: $newsletterBpadding;}

   div#features{padding-top: $featuresTpadding;}
   div#features{padding-bottom: $featuresBpadding;}

   div#whychooseus{padding-top: $whychooseusTpadding;}
   div#whychooseus{padding-bottom: $whychooseusBpadding;}

   div#procedure{padding-top: $procedureTpadding;}
   div#procedure{padding-bottom: $procedureBpadding;}

  div#contact{padding-top: $contactTpadding;}
   div#contact{padding-bottom: $contactBpadding;}

  div#testimonials {padding-top: $testimonialTpadding;}
  div#testimonials{padding-bottom: $testimonialBpadding;}
  div#testimonials .testimonials_gradiant{opacity: $testimonialsecopacity;}

  .page-main-header .overlay1{opacity: $innheadrOpacity;}


 div#counter{padding-top: $counterTpadding;}
  div#counter{padding-bottom: $counterBpadding;}

   div#blog .blog-r-area{padding-top: $blogTpadding;}
   div#blog{padding-bottom: $blogBpadding;}

div#ourclient{padding-top: $ourclientTpadding;}
  div#ourclient{padding-bottom: $ourclientBpadding;}


    .footer-area .overlay{padding-top: $SectionfooterseTmargin;}
    .footer-area .overlay{padding-bottom: $Sectionfootersebottommargin;}

    .footer-area .overlay{opacity: $Sectionfootersecopacity;}

    .footer-area .bottom-area{padding-top: $bottomareaTmargin;}
    .footer-area .bottom-area{padding-bottom: $bottomareabottommargin;}

.page-main-header{padding-top: $immerpageheadertitleboxTpadding;}
.page-main-header{padding-bottom: $immerpageheadertitleboxBpadding;}
.ht-sticky-header .page-main-header{padding-top: $immerpageheadertitleboxstickyTpadding;}

main#innerpage-box h1,
    body.page-template-default main#innerpage-box h1, .ht-main-title,
    #ht-contactus-wrap h1{font-size: $headerinnerpageheading;}
    body.page-template-default main#innerpage-box h2,
    main#innerpage-box h2,
    #blog-box h4,
    h1.product_title.entry-title{font-size: $headerinnerpageheading2;}
    main#innerpage-box h3,
    body.page-template-default main#innerpage-box h3,
    #innerpage-box div#content-box .teamdesbox h3,
    .widget .widget-title, .widget .post-title,
    div#sitemap-box h3{font-size: $headerinnerpageheading3;}
    main#innerpage-box h4,
    div#commentsAdd h4,
    main#innerpage-box .main-inner-ser-bx h4.panel-header a{font-size: $headerinnerpageheading4;}
    main#innerpage-box h5{font-size: $headerinnerpageheading5;}
    main#innerpage-box h6,
    body.page-template-default main#innerpage-box h6,
    div#blog-box.innerpage-whitebox h6{font-size: $headerinnerpageheading6;}

main#innerpage-box #blog-box h2{font-size: $bloginnerpageheading2;}
main#innerpage-box .Address_area h4, main#innerpage-box .social_area h4,.page-template-contact-template main#innerpage-box .Address_area h4, .page-template-contact-template main#innerpage-box .social_area h4{font-size: $contactpagesheading4;}
    
    ";

    $custom_css .= "
    button,
    input[type='button'],
    input[type='reset'],
    input[type='submit'],
    .widget-area .widget-title:after,
    h3#reply-title:after,
    h3.comments-title:after,
    .nav-previous a,
    .nav-next a,
    .pagination .page-numbers,    
    .ht-progress-bar-length,
    .ht-service-post-wrap:after,
    .ht-service-icon,
    .ht-counter:after,
    .ht-counter:before,
    .ht-testimonial-wrap .bx-wrapper .bx-controls-direction a,
    .ht-cta-buttons a.ht-cta-button1,
    .ht-cta-buttons a.ht-cta-button2:hover,
    #ht-back-top:hover,
    .entry-readmore a,
    .woocommerce #respond input#submit, 
    .woocommerce a.button, 
    .woocommerce button.button, 
    .woocommerce input.button,
    .woocommerce ul.products li.product:hover .button,
    .woocommerce #respond input#submit.alt, 
    .woocommerce a.button.alt, 
    .woocommerce button.button.alt, 
    .woocommerce input.button.alt,
    .woocommerce nav.woocommerce-pagination ul li a, 
    .woocommerce nav.woocommerce-pagination ul li span,
    .woocommerce span.onsale,
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
    .woocommerce #respond input#submit.disabled, 
    .woocommerce #respond input#submit:disabled, 
    .woocommerce #respond input#submit:disabled[disabled], 
    .woocommerce a.button.disabled, .woocommerce a.button:disabled, 
    .woocommerce a.button:disabled[disabled], 
    .woocommerce button.button.disabled, 
    .woocommerce button.button:disabled, 
    .woocommerce button.button:disabled[disabled], 
    .woocommerce input.button.disabled, 
    .woocommerce input.button:disabled, 
    .woocommerce input.button:disabled[disabled],
    .woocommerce #respond input#submit.alt.disabled, 
    .woocommerce #respond input#submit.alt.disabled:hover, 
    .woocommerce #respond input#submit.alt:disabled, 
    .woocommerce #respond input#submit.alt:disabled:hover, 
    .woocommerce #respond input#submit.alt:disabled[disabled], 
    .woocommerce #respond input#submit.alt:disabled[disabled]:hover, 
    .woocommerce a.button.alt.disabled, 
    .woocommerce a.button.alt.disabled:hover, 
    .woocommerce a.button.alt:disabled, 
    .woocommerce a.button.alt:disabled:hover, 
    .woocommerce a.button.alt:disabled[disabled], 
    .woocommerce a.button.alt:disabled[disabled]:hover, 
    .woocommerce button.button.alt.disabled, 
    .woocommerce button.button.alt.disabled:hover, 
    .woocommerce button.button.alt:disabled, 
    .woocommerce button.button.alt:disabled:hover, 
    .woocommerce button.button.alt:disabled[disabled], 
    .woocommerce button.button.alt:disabled[disabled]:hover, 
    .woocommerce input.button.alt.disabled, 
    .woocommerce input.button.alt.disabled:hover, 
    .woocommerce input.button.alt:disabled, 
    .woocommerce input.button.alt:disabled:hover, 
    .woocommerce input.button.alt:disabled[disabled], 
    .woocommerce input.button.alt:disabled[disabled]:hover,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
    .woocommerce-MyAccount-navigation-link a,
    #ht-princing-post-section .ht-princing-icon,
    .ht-princing-icon,      
    .readmore a,
    .page-main-header,
    #content-box ol li:before,
    .ht-slide-cap-descmore a,
    .days-time-day,
    .lz-facility-text ul li i,
    .facility-icon,
    .pagingation .current,
    .pagingation a:hover,
    .ht-appintment-member-wrap:after,
    #commentsAdd input[type='submit'],
    section#inner-blog-section .readMore:hover,
    .woocommerce ul.products li.product .button,
    .woocommerce #content div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce-page div.product .woocommerce-tabs ul.tabs li:hover,
    .ht-main-navigation ul ul,
    .pagination .page-numbers.current, .pagination a.page-numbers:hover,
    div#sitemap-box h3,
    .ht-blog-thumbnail .socialMedia a,
    .widget-area .widget-title,
    .widget_calendar tfoot tr td a
    {
        background:{$primColor};
    }
    .ht-post-info .entry-date span.ht-day,
    .entry-categories .fa,
    .widget-area a:hover,
    .comment-list a:hover,
    .no-comments,
    .woocommerce .woocommerce-breadcrumb a:hover,
    #total-breadcrumbs a:hover,
    .ht-featured-link a,
    .ht-portfolio-cat-name-list .fa,
    .ht-portfolio-cat-name:hover, 
    .ht-portfolio-cat-name.active,
    .ht-portfolio-caption a,
    .ht-team-detail,
    .ht-counter-icon,
    .woocommerce ul.products li.product .price,
    .woocommerce div.product p.price, 
    .woocommerce div.product span.price,
    .woocommerce .product_meta a:hover,
    .woocommerce-error:before, 
    .woocommerce-info:before, 
    .woocommerce-message:before,
    .featured-post:after,
    .featured-post:before,
    .featured-link a,
    .breadcrumbbox a,
    #ht-colophon .social-profile-icons a:hover,
    footer#ht-colophon ul li a:hover,
    .ht-footer .textwidget .fa,
    h6.secondry-text,
    #ht-about-us-section ul li:before,
    .pluses.text-right i.fa.fa-plus,
    .ht-section-tagline.lz-newslatter-text b,
    #content-box ul li:before,
    .offtimebox h4.offtime-text,
    #ht-masthead .header-social-links span:hover,
    #ht-masthead ul.header-menu-links li.mailto a:hover,
    .ht-slider-highlighttext,
    .edit-link a,
    .inner-blog-post .socialMedia a:hover,
    #comments a, 
    #commentsAdd a,
    #content-box a,
    #content-box a i:hover,
    #respond .stars span a,
    #content-box .socialMedia a:hover,
    .post-date-publishable i,
    .woocommerce .star-rating span,
    .woocommerce div.product .woocommerce-product-rating a,
    #content-box .socialbxsinglepost:hover a i,
    section#inner-blog-section h2.title small,
    section#inner-blog-section h2.title a,
    div#secondary li.current_page_item > a,
    div#secondary .social-profile-icons ul li i,
    .woocommerce .star-rating::before,
    .socialMedia a:hover,
    .luzuk-time div:nth-child(8) div.days-time-day,
    div#content-box header.woocommerce-Address-title.title a:hover,
   #blog-box .ht-blog-date, #blog-box .ht-blog-date .fa,
    .widget-area ul li:before,
    .woocommerce table.shop_attributes th,
      .widget-area span.woocommerce-Price-amount.amount,
      main#innerpage-box .blog-date span
    {
        color:{$primColor};
    }

    .ht-featured-link a,
    .ht-counter,
    .ht-testimonial-wrap .bx-wrapper img,
    .ht-blog-post,
    #ht-colophon,
    .woocommerce ul.products li.product:hover, 
    .woocommerce-page ul.products li.product:hover,
    .woocommerce #respond input#submit, 
    .woocommerce a.button, 
    .woocommerce button.button, 
    .woocommerce input.button,
    .woocommerce ul.products li.product:hover .button,
    .woocommerce #respond input#submit.alt, 
    .woocommerce a.button.alt, 
    .woocommerce button.button.alt, 
    .woocommerce input.button.alt,
    .woocommerce div.product .woocommerce-tabs ul.tabs,
    .woocommerce #respond input#submit.alt.disabled, 
    .woocommerce #respond input#submit.alt.disabled:hover, 
    .woocommerce #respond input#submit.alt:disabled, 
    .woocommerce #respond input#submit.alt:disabled:hover, 
    .woocommerce #respond input#submit.alt:disabled[disabled], 
    .woocommerce #respond input#submit.alt:disabled[disabled]:hover, 
    .woocommerce a.button.alt.disabled, 
    .woocommerce a.button.alt.disabled:hover, 
    .woocommerce a.button.alt:disabled, 
    .woocommerce a.button.alt:disabled:hover, 
    .woocommerce a.button.alt:disabled[disabled], 
    .woocommerce a.button.alt:disabled[disabled]:hover, 
    .woocommerce button.button.alt.disabled, 
    .woocommerce button.button.alt.disabled:hover, 
    .woocommerce button.button.alt:disabled, 
    .woocommerce button.button.alt:disabled:hover, 
    .woocommerce button.button.alt:disabled[disabled], 
    .woocommerce button.button.alt:disabled[disabled]:hover, 
    .woocommerce input.button.alt.disabled, 
    .woocommerce input.button.alt.disabled:hover, 
    .woocommerce input.button.alt:disabled, 
    .woocommerce input.button.alt:disabled:hover, 
    .woocommerce input.button.alt:disabled[disabled], 
    .woocommerce input.button.alt:disabled[disabled]:hover,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle
    .page-template-home-template .ht-main-navigation li:hover > a,
    .home.blog .ht-main-navigation li:hover > a,
    .page-template-home-template .ht-main-navigation .current > a,
    .home.blog .ht-main-navigation .current > a,
    .featured-post:before,
    #blog-box .blog-read-more a,
    main#innerpage-box .page-testimonial-box:hover,
    .woocommerce ul.products li.product:hover, .woocommerce-page ul.products li.product:hover, 
    main#innerpage-box .page-testimonial-box:hover .team-thumb img,
     #ht-masthead .header-social-links span:hover,
    .woocommerce ul.products li.product .button,
    .newsletter-form-box input[type='email'],
    div#sitemap-box h3:before,
    div#sitemap-box:before
    {
        border-color: {$primColor};
    }

    #ht-masthead,
    .woocommerce-error, 
    .woocommerce-info, 
    .woocommerce-message,
    div#sitemap-box{
        border-top-color: {$primColor};
    }

    .nav-next a:after{
        border-left-color: {$primColor};
    }
    blockquote{
        border-left-color: {$primColor} !important;
    }


    .nav-previous a:after{
        border-right-color: {$primColor};
    }

    .ht-active .ht-service-icon{
        box-shadow: 0px 0px 0px 2px #FFF, 0px 0px 0px 4px {$primColor};
    }

    .woocommerce ul.products li.product .onsale:after{
        border-color: transparent transparent {$darker_color} {$darker_color};
    }

    .woocommerce span.onsale:after{
        border-color: transparent {$darker_color} {$darker_color} transparent
    }


    @media screen and (max-width: 992px){
    .navigation.menuopen{
        background:{$navigationrespnavbsbgssColor};
    }
    .navigation.menuopen{
        border-right-color:{$navigationrespnavbrssColor} !important;
    }

}

@media screen and (max-width: 992px){
   .slider_section .title, .slider_section .title small, .slider_section .title b{
        color:{$slidertitlerespColor} !important;
    }
    .slider_section .title b span{
        color:{$slidertitlehighlightrespColor} !important;
    }
    .slider_section .sub-title, .slider_section .sub-title small{
        color:{$slidertextrespColor} !important;
    }
  
}
";


    // heading text colour 
$headingColor = get_theme_mod('luzuk_title_color', '#fe5722');
$custom_css .= '.title-color{color:'.$headingColor.';}';

    // START SECONDARY COLOR CSS
$secondary = get_theme_mod('theme_secondary_color', '#4a8cec');
$custom_css .='
.secondry-bg,
   #commentsAdd input[type="submit"]:hover,
input[type="button"]:hover, 
input[type="reset"]:hover, 
input[type="submit"]:hover,
div#secondary input[type="submit"]:hover,
.socialMedia a,
section#inner-blog-section .readMore,
.woocommerce ul.products li.product .button:hover,
.woocommerce #content div.product .woocommerce-tabs ul.tabs li, .woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li, .woocommerce-page div.product .woocommerce-tabs ul.tabs li, section#inner-blog-section h2.title,
.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover, 
.woocommerce button.button:hover, 
.woocommerce input.button:hover,
div#content-box .wc-proceed-to-checkout a:hover,
.woocommerce #payment #place_order:hover, 
.woocommerce-page #payment #place_order:hover,
.woocommerce div.product form.cart .button:hover,
.single-productpage #sidebars button:hover,
.entry-readmore a:hover,
.pagination .page-numbers,
main#innerpage-box .ht-blog-thumbnail a:after{
    background-color:'.$secondary.'
}    
    #blog-box .blog-read-more a:hover,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
.socialMedia a:hover,
.woocommerce ul.products li.product .button:hover,
.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover, 
.woocommerce button.button:hover, 
.woocommerce input.button:hover,
div#content-box .wc-proceed-to-checkout a:hover,
.woocommerce #payment #place_order:hover, 
.woocommerce-page #payment #place_order:hover 
{border-color: '.$secondary.';}

main#innerpage-box #blog-box h2, 
main#innerpage-box #blog-box h2 small,
div#secondary .social-profile-icons ul li i:hover, main#innerpage-box .inner-blogpost:hover .blog-date span {color:'.$secondary.';}  

.woocommerce-MyAccount-navigation-link.is-active a {color:'.$secondary.' !important;}    


.product_list_widget .amount,
.product_list_widget del .amount,
.woocommerce ul.products li.product .total-product-title-wrap small,
.total-product-title-wrap,
.woocommerce div.product .product_title small,
.woocommerce div.product .product_title,
div#content-box p a:hover,
div#content-box .woocommerce-info a:hover,
section#inner-blog-section h2.title:hover small,
.woocommerce .widget_rating_filter ul li a:hover span,
.woocommerce .star-rating:hover, 
.woocommerce-page .star-rating:hover span,
main#innerpage-box h2.woocommerce-loop-product__title small,
main#innerpage-box h2.woocommerce-loop-product__title,
.woocommerce ul.products li.product .price del,
 .ht-site-title a, .site-title a,
.widget-area del span.woocommerce-Price-amount.amount
{color: '.$secondary.';}

';

 // header menus 
    $HeadertopmenusColorColor = get_theme_mod('header_topmenusColor', '#000');
    $HeadertopmenushoverColorColor = get_theme_mod('header_topmenushoverColor', '#431e88');
    $HeadertopmenusactiveColorColor = get_theme_mod('header_topmenusactiveColor', '#431e88');

 $HeadertopsubmenuiconColorColor = get_theme_mod('header_topsubmenuiconColor', '#4a8cec');
    $HeadertopsubmenusColor = get_theme_mod('header_topsubmenusColor', '#ffffff');
    $HeadertopsubmenushvrColor = get_theme_mod('header_topsubmenushvrColor', '#fff');
    $navigationrestopsubmenusbgss1cColor = get_theme_mod( 'header_submenusbgssc1Color', '#441e87' );
    $navigationrestopsubmenusbgssc2Color = get_theme_mod( 'header_submenusbgssc2Color', '#4b91f1' );

    $HeadertopsubmenushvranimatedbgColor = get_theme_mod('header_topsubmenushvranimatedbgColor', '#fff');
    $HeadertopsubmenushvrbgColor = get_theme_mod('header_topsubmenushvrbgColor', '#431e88');
  
    $HeaderSiteTaglineColor = get_theme_mod( 'header_SiteTaglineColor', '#000' );
    $HeaderSiteTitleColor = get_theme_mod( 'header_SiteTitleColor', '#000' );
    

    $navigationrespnavtoggbarbgssColor = get_theme_mod( 'header_respnavtoggbarbgssColor', '#4a8cec' );

$HeadersocialColorColor = get_theme_mod('header_socialColor', '#fff');
$HeadersocialhoverColor = get_theme_mod('header_socialhoverColor', '#431e88');
$HeadersocialColorbgColor = get_theme_mod('header_socialbgColor', '#4a8cec');
$HeadersocialColorbghoverColor = get_theme_mod('header_socialbghoverColor', '#fff');
$HeaderbgColor = get_theme_mod('header_bgColor', '#fff');


    $custom_css .= '
.navigation .mainmenu li a{color: '.$HeadertopmenusColorColor.';}
   .navigation .mainmenu li a:hover,
    div#navbarNavDropdown li.current_page_item a:hover, .current_page_item > a:hover{color: '.$HeadertopmenushoverColorColor.';}
 .navigation .mainmenu li.current_page_item a, .current_page_item > a{color: '.$HeadertopmenusactiveColorColor.';}

 .menu-click i{color: '.$HeadertopsubmenuiconColorColor.';}

  header.site-header ul.sub-menu li a,  .navigation .mainmenu li.current_page_item ul.sub-menu li a, .header.site-header ul.sub-menu li a{color: '.$HeadertopsubmenusColor.';}

  header.site-header ul.sub-menu li a:hover,
  .navigation .mainmenu ul.sub-menu li.current_page_item a, ul.sub-menu .current_page_item > a,
   div#navbarNavDropdown ul.sub-menu li.current_page_item a:hover, ul.sub-menu .current_page_item > a:hover,
 div#navbarNavDropdown li.current_page_item ul.sub-menu li a:hover
 ,

 .header.site-header ul.sub-menu li:hover a
   {color: '.$HeadertopsubmenushvrColor.';}

.header.site-header ul.sub-menu li a:before{color: '.$HeadertopsubmenushvranimatedbgColor.';}
  header.site-header ul.sub-menu li a:hover, .navigation .mainmenu ul.sub-menu li.current_page_item a, ul.sub-menu .current_page_item > a, div#navbarNavDropdown ul.sub-menu li.current_page_item a:hover, ul.sub-menu .current_page_item > a:hover, div#navbarNavDropdown li.current_page_item ul.sub-menu li a:hover{background-color: '.$HeadertopsubmenushvrbgColor.';}

   ul.sub-menu, header.site-header ul.sub-menu, .navigation .mainmenu li ul.sub-menu:before, .navigation .mainmenu li ul.sub-menu:after{ background-image: radial-gradient( circle farthest-corner at 10% 20%,'.$navigationrestopsubmenusbgss1cColor.' 0%,'.$navigationrestopsubmenusbgssc2Color.' 100.3% );}

  .hamburger-menus span{background-color: '.$navigationrespnavtoggbarbgssColor.';}

     .ht-site-title a{color: '.$HeaderSiteTitleColor.';}
    .ht-site-description a{color: '.$HeaderSiteTaglineColor.';}
   

 .share-btn ul li a.site-button{color: '.$HeadersocialColorColor.';}
  .share-btn ul li a.site-button:hover, .share-btn ul:hover li.share-button a.site-button{color: '.$HeadersocialhoverColor.';}
.share-btn ul li a.site-button{background-color: '.$HeadersocialColorbgColor.';}
.share-btn ul:hover li.share-button a.site-button, .share-btn ul li a.site-button:hover{background-color: '.$HeadersocialColorbghoverColor.';}

.site-header,.ht-sticky-header .site-header{background-color: '.$HeaderbgColor.';}
  ';


      // slider color
$slidersubtitleColor = get_theme_mod('slider_SubtitleColor', '#818181');
$sliderTitleColor = get_theme_mod('slider_titleColor', '#000');
$sliderTitlehighlightColor = get_theme_mod('slider_titlehighlightColor', '#4641a8');
$slidersgradcolor = get_theme_mod('slider_bg_color', '#fff');

$sliderButtontextcolor = get_theme_mod('slider_ButtontextColor', '#fff');
$sliderButtongradcolor1 = get_theme_mod('slider_ButtonbgColor', '#441e87');
$sliderButtongradcolor2 = get_theme_mod('slider_ButtonbghoverColor', '#4b91f1');


$custom_css .= '.slider_section .title, .slider_section .title small, .slider_section .title b {color: '.$sliderTitleColor.';}
.slider_section .title b span {color: '.$sliderTitlehighlightColor.';}
.slider_section .sub-title, .slider_section .sub-title small{color: '.$slidersubtitleColor.';}

.slider_gradiant{background-color: '.$slidersgradcolor.';}

.slider_section a.btn{color: '.$sliderButtontextcolor.';}

.slider_section a.btn{background: -webkit-gradient(to right, '.$sliderButtongradcolor1.' 0%,'.$sliderButtongradcolor2.' 20%, '.$sliderButtongradcolor2.' 50%, '.$sliderButtongradcolor1.' 100%);
  background-size: 500%;
}

.slider_section a.btn{background: linear-gradient(to right, '.$sliderButtongradcolor1.' 0%,'.$sliderButtongradcolor2.' 20%, '.$sliderButtongradcolor2.' 50%, '.$sliderButtongradcolor1.' 100%);
  background-size: 500%;
}


 ';


// subject 

if(get_theme_mod('luzuk_premium_subject_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('luzuk_subject_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= 'div#subject{background-image: url("'.$img.'");background-position: top;background-size: cover;}';
}else{
    $color = get_theme_mod('luzuk_subject_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= 'div#subject {background-color: '.$color.';}';
    }
}

// colors
$subjectareasectitle = get_theme_mod('subjectarea_sectitle_color', '#041033');
$subjectareasecsubtitle = get_theme_mod('subjectarea_secsubtitle_color', '#524ead');

$subjectSubttlColor = get_theme_mod('subjects_SubttlColor', '#6b6b6b');
$subjectPageTitleColor = get_theme_mod('subjects_subjectPageTitleColor', '#0c1736');

$subjecticon1Color = get_theme_mod('subjects_icon1Color', '#4520ff');
$subjecticon2Color = get_theme_mod('subjects_icon2Color', '#4b91f0');
$subjecticon3Color = get_theme_mod('subjects_icon3Color', '#f8ad04');
$subjecticon4Color = get_theme_mod('subjects_icon4Color', '#e033ff');
$subjecticon5Color = get_theme_mod('subjects_icon5Color', '#3597db');
$subjecticon6Color = get_theme_mod('subjects_icon6Color', '#f448e4');

$subjecticonhoverColor = get_theme_mod('subjects_iconhoverColor', '#fff');

$subjecticon1Colorbg1 = get_theme_mod('subjects_icon1Colorbg1', '#fbfbfb');
$subjecticon1Colorbg2 = get_theme_mod('subjects_icon1Colorbg2', '#e9e6fc');

$subjecticon2Colorbg1 = get_theme_mod('subjects_icon2Colorbg1', '#f8fcf7');
$subjecticon2Colorbg2 = get_theme_mod('subjects_icon2Colorbg2', '#f0feed');

$subjecticon3Colorbg1 = get_theme_mod('subjects_icon3Colorbg1', '#fdf8fc');
$subjecticon3Colorbg2 = get_theme_mod('subjects_icon3Colorbg2', '#feedfd');

$subjecticonhoverColorbg1 = get_theme_mod('subjects_iconhoverColorbg1', '#441e87');
$subjecticonhoverColorbg2 = get_theme_mod('subjects_iconhoverColorbg2', '#4b91f1');

$subjectareaboxbg = get_theme_mod('subjectarea_boxbg_color', '#fff');
$subjectareaboxhoverborder = get_theme_mod('subjectarea_boxhoverborder_color', '#4640a7');

$subjectbtnColorbg1 = get_theme_mod('subjects_btnColorbg1', '#441e87');
$subjectbtnColorbg2 = get_theme_mod('subjects_btnColorbg2', '#4b91f1');

$subjectbtnColor = get_theme_mod('subjects_btnColor', '#fff');

$subjectmainbtnColorbg1 = get_theme_mod('subjects_mainbtnColorbg1', '#441e87');
$subjectmainbtnColorbg2 = get_theme_mod('subjects_mainbtnColorbg2', '#4b91f1');

$subjectmainbtnColor = get_theme_mod('subjects_mainbtnColor', '#fff');

$custom_css .= '



.subject-area h2, .subject-area h2 small{color: '.$subjectareasectitle.';}
.subject-area h3, .subject-area h3 small{color: '.$subjectareasecsubtitle.';}

.subject-area p{color: '.$subjectSubttlColor.';}
.subject-area h4, .subject-area h4 small{color: '.$subjectPageTitleColor.';}

  .subject-area .single-subject-bx:nth-child(1) .subject-icon a i,
   .subject-area .single-subject-bx:nth-child(7) .subject-icon a i,
    .subject-area .single-subject-bx:nth-child(13) .subject-icon a i,
    .subject-area .single-subject-bx:nth-child(19) .subject-icon a i{color: '.$subjecticon1Color.';}


  .subject-area .single-subject-bx:nth-child(1) .subject-icon,
   .subject-area .single-subject-bx:nth-child(7) .subject-icon,
    .subject-area .single-subject-bx:nth-child(13) .subject-icon,
    .subject-area .single-subject-bx:nth-child(19) .subject-icon,
        .subject-area .single-subject-bx:nth-child(4) .subject-icon,
   .subject-area .single-subject-bx:nth-child(10) .subject-icon,
    .subject-area .single-subject-bx:nth-child(16) .subject-icon,
    .subject-area .single-subject-bx:nth-child(22) .subject-icon{ background-image: radial-gradient( circle farthest-corner at 10% 20%,'.$subjecticon1Colorbg1.' 0%,'.$subjecticon1Colorbg2.' 100.3% );}

.subject-area .single-subject-bx:nth-child(2) .subject-icon a i,
   .subject-area .single-subject-bx:nth-child(8) .subject-icon a i,
    .subject-area .single-subject-bx:nth-child(14) .subject-icon a i,
    .subject-area .single-subject-bx:nth-child(20) .subject-icon a i{color: '.$subjecticon2Color.';}

.subject-area .single-subject-bx:nth-child(2) .subject-icon,
   .subject-area .single-subject-bx:nth-child(8) .subject-icon,
    .subject-area .single-subject-bx:nth-child(14) .subject-icon,
    .subject-area .single-subject-bx:nth-child(20) .subject-icon,
        .subject-area .single-subject-bx:nth-child(5) .subject-icon,
   .subject-area .single-subject-bx:nth-child(11) .subject-icon,
    .subject-area .single-subject-bx:nth-child(17) .subject-icon,
    .subject-area .single-subject-bx:nth-child(23) .subject-icon{ background-image: radial-gradient( circle farthest-corner at 10% 20%,'.$subjecticon2Colorbg1.' 0%,'.$subjecticon2Colorbg2.' 100.3% );}

  .subject-area .single-subject-bx:nth-child(3) .subject-icon a i,
   .subject-area .single-subject-bx:nth-child(9) .subject-icon a i,
    .subject-area .single-subject-bx:nth-child(15) .subject-icon a i,
    .subject-area .single-subject-bx:nth-child(21) .subject-icon a i{color: '.$subjecticon3Color.';}


  .subject-area .single-subject-bx:nth-child(3) .subject-icon,
   .subject-area .single-subject-bx:nth-child(9) .subject-icon,
    .subject-area .single-subject-bx:nth-child(15) .subject-icon,
    .subject-area .single-subject-bx:nth-child(21) .subject-icon,
     .subject-area .single-subject-bx:nth-child(6) .subject-icon,
   .subject-area .single-subject-bx:nth-child(12) .subject-icon,
    .subject-area .single-subject-bx:nth-child(18) .subject-icon ,
    .subject-area .single-subject-bx:nth-child(24) .subject-icon{ background-image: radial-gradient( circle farthest-corner at 10% 20%,'.$subjecticon3Colorbg1.' 0%,'.$subjecticon3Colorbg2.' 100.3% );}


.subject-area .single-subject-bx:nth-child(4) .subject-icon a i,
   .subject-area .single-subject-bx:nth-child(10) .subject-icon a i,
    .subject-area .single-subject-bx:nth-child(16) .subject-icon a i,
    .subject-area .single-subject-bx:nth-child(22) .subject-icon a i{color: '.$subjecticon4Color.';}

.subject-area .single-subject-bx:nth-child(5) .subject-icon a i,
   .subject-area .single-subject-bx:nth-child(11) .subject-icon a i,
    .subject-area .single-subject-bx:nth-child(17) .subject-icon a i,
    .subject-area .single-subject-bx:nth-child(23) .subject-icon a i{color: '.$subjecticon5Color.';}

.subject-area .single-subject-bx:nth-child(6) .subject-icon a i,
   .subject-area .single-subject-bx:nth-child(12) .subject-icon a i,
    .subject-area .single-subject-bx:nth-child(18) .subject-icon a i,
    .subject-area .single-subject-bx:nth-child(24) .subject-icon a i{color: '.$subjecticon6Color.';}

.subject-area .single-subject-bx:hover .subject-icon a i{color: '.$subjecticonhoverColor.';}

 .subject-area .single-subject-bx:nth-child(1):hover .subject-icon,
   .subject-area .single-subject-bx:nth-child(7):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(13):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(19):hover .subject-icon,
        .subject-area .single-subject-bx:nth-child(4):hover .subject-icon,
   .subject-area .single-subject-bx:nth-child(10):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(16):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(22):hover .subject-icon,
.subject-area .single-subject-bx:nth-child(2):hover .subject-icon,
   .subject-area .single-subject-bx:nth-child(8):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(14):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(20):hover .subject-icon,
        .subject-area .single-subject-bx:nth-child(5):hover .subject-icon,
   .subject-area .single-subject-bx:nth-child(11):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(17):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(23):hover .subject-icon,
     .subject-area .single-subject-bx:nth-child(3):hover .subject-icon,
   .subject-area .single-subject-bx:nth-child(9):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(15):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(21):hover .subject-icon,
     .subject-area .single-subject-bx:nth-child(6):hover .subject-icon,
   .subject-area .single-subject-bx:nth-child(12):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(18):hover .subject-icon ,
    .subject-area .single-subject-bx:nth-child(24):hover .subject-icon{ background: -webkit-gradient(to right, '.$subjecticonhoverColorbg1.' 0%,'.$subjecticonhoverColorbg2.' 20%, '.$subjecticonhoverColorbg2.' 50%, '.$subjecticonhoverColorbg1.' 100%);
   background-size: 500%;}


 .subject-area .single-subject-bx:nth-child(1):hover .subject-icon,
   .subject-area .single-subject-bx:nth-child(7):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(13):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(19):hover .subject-icon,
        .subject-area .single-subject-bx:nth-child(4):hover .subject-icon,
   .subject-area .single-subject-bx:nth-child(10):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(16):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(22):hover .subject-icon,
.subject-area .single-subject-bx:nth-child(2):hover .subject-icon,
   .subject-area .single-subject-bx:nth-child(8):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(14):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(20):hover .subject-icon,
        .subject-area .single-subject-bx:nth-child(5):hover .subject-icon,
   .subject-area .single-subject-bx:nth-child(11):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(17):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(23):hover .subject-icon,
     .subject-area .single-subject-bx:nth-child(3):hover .subject-icon,
   .subject-area .single-subject-bx:nth-child(9):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(15):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(21):hover .subject-icon,
     .subject-area .single-subject-bx:nth-child(6):hover .subject-icon,
   .subject-area .single-subject-bx:nth-child(12):hover .subject-icon,
    .subject-area .single-subject-bx:nth-child(18):hover .subject-icon ,
    .subject-area .single-subject-bx:nth-child(24):hover .subject-icon { background: linear-gradient(to right, '.$subjecticonhoverColorbg1.' 0%,'.$subjecticonhoverColorbg2.' 20%, '.$subjecticonhoverColorbg2.' 50%, '.$subjecticonhoverColorbg1.' 100%);
   background-size: 500%;}


.subject-area .single-subject{background-color: '.$subjectareaboxbg.';}

.single-subject-bx:hover .subject-content{background-color: '.$subjectareaboxhoverborder.';}

.single-subject-bx .sub-btn li a { background: -webkit-gradient(to right, '.$subjectbtnColorbg1.' 0%,'.$subjectbtnColorbg2.' 20%, '.$subjectbtnColorbg2.' 50%, '.$subjectbtnColorbg1.' 100%);
 background-size: 500%;}

 .single-subject-bx .sub-btn li a { background: linear-gradient(to right, '.$subjectbtnColorbg1.' 0%,'.$subjectbtnColorbg2.' 20%, '.$subjectbtnColorbg2.' 50%, '.$subjectbtnColorbg1.' 100%);
 background-size: 500%;}

.single-subject-bx .sub-btn li a i{color: '.$subjectbtnColor.';}

.allsub-btn a{ background: -webkit-gradient(to right, '.$subjectmainbtnColorbg1.' 0%,'.$subjectmainbtnColorbg2.' 20%, '.$subjectmainbtnColorbg2.' 50%, '.$subjectmainbtnColorbg1.' 100%);
 background-size: 500%;}

.allsub-btn a{ background: linear-gradient(to right, '.$subjectmainbtnColorbg1.' 0%,'.$subjectmainbtnColorbg2.' 20%, '.$subjectmainbtnColorbg2.' 50%, '.$subjectmainbtnColorbg1.' 100%);
 background-size: 500%;}

.allsub-btn a{color: '.$subjectmainbtnColor.';}

';


$innerSubjecttitlecolor = get_theme_mod('innersubj_title_color', '#0c1736');
$innerSubjectextcolor = get_theme_mod('innersubj_text_color', '#6b6b6b');

$innerSubjectboxbg = get_theme_mod('innerSubject_boxbg_color', '#fff');
$innerSubjectboxhoverborder = get_theme_mod('innerSubject_boxhoverborder_color', '#4640a7');

$innerSubjectbtnColorbg1 = get_theme_mod('innerSubjects_btnColorbg1', '#441e87');
$innerSubjectbtnColorbg2 = get_theme_mod('innerSubjects_btnColorbg2', '#4b91f1');

$innerSubjectbtnColor = get_theme_mod('innerSubjects_btnColor', '#fff');

$innerSubjectimghoveroverlayColor1 = get_theme_mod('innerSubjects_imghoveroverlayColor1', '#441e87');
$innerSubjectimghoveroverlayColor2 = get_theme_mod('innerSubjects_imghoveroverlayColor2', '#4b91f1');
$custom_css .= '

body.page-template-default main#innerpage-box .single-subject h4, body.page-template-default main#innerpage-box .single-subject h4 small {color: '.$innerSubjecttitlecolor.';}
body.page-template-default main#innerpage-box .single-subject p{color: '.$innerSubjectextcolor.';}

#innerpage-box .single-subject{background-color: '.$innerSubjectboxbg.';}

#innerpage-box .single-subject-bx:hover .subject-content{background-color: '.$innerSubjectboxhoverborder.';}

#innerpage-box .single-subject-bx .sub-btn li a{ background: -webkit-gradient(to right, '.$innerSubjectbtnColorbg1.' 0%,'.$innerSubjectbtnColorbg2.' 20%, '.$innerSubjectbtnColorbg2.' 50%, '.$innerSubjectbtnColorbg1.' 100%);
 background-size: 500%;}

#innerpage-box .single-subject-bx .sub-btn li a { background: linear-gradient(to right, '.$innerSubjectbtnColorbg1.' 0%,'.$innerSubjectbtnColorbg2.' 20%, '.$innerSubjectbtnColorbg2.' 50%, '.$innerSubjectbtnColorbg1.' 100%);
 background-size: 500%;}

#innerpage-box .single-subject-bx .sub-btn li a i{color: '.$innerSubjectbtnColor.';}

#innerpage-box .subject-icon a .subject-img-overlay:after {
    background: linear-gradient(0deg,'.$innerSubjectimghoveroverlayColor1.','.$innerSubjectimghoveroverlayColor2.' 80%) no-repeat;
}

';






//about 
if(get_theme_mod('luzuk_premium_about_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('luzuk_about_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= 'div#about{background-image: url("'.$img.'");background-position: top;background-size: cover;}';
}else{
    $color = get_theme_mod('luzuk_about_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= 'div#about {background-color: '.$color.';}';
    }
}

    // ENDS SECONDARY COLOR CSS
$aboutareasectitle = get_theme_mod('about_area_sectitle_color', '#041032');
$aboutareatitlebordercolor = get_theme_mod('about_area_sectitleborder_color', '#4641a8');
$aboutareasubsectitle = get_theme_mod('about_area_secsubtitle_color', '#041033');
$aboutareasubsectitleborder = get_theme_mod('about_area_secsubtitleborer_color', '#497edf');

$aboutarea_TextColor = get_theme_mod('about_area_text', '#979797');

$aboutarea_pageiconColor = get_theme_mod('about_area_pageicon', '#041033');
$aboutarea_pageiconhoverColor = get_theme_mod('about_area_pageiconhover', '#441e87');

$aboutarea_pagetitleColor = get_theme_mod('about_area_pagetitle', '#030f3c');

$aboutarea_pagetnameColor = get_theme_mod('about_area_pagetname', '#071a42');
$aboutarea_pagetdesgColor = get_theme_mod('about_area_pagetdesg', '#979797');

$aboutarea_pagebtnColor = get_theme_mod('about_area_btn', '#fff');
$aboutarea_pagebtnbg1Color = get_theme_mod('about_area_btnbg1', '#441e87');
$aboutarea_pagebtnbg2Color = get_theme_mod('about_area_btnbg2', '#4b91f1');

$aboutarea_socialColor = get_theme_mod('about_area_social', '#051033');
$aboutarea_socialhoverColor = get_theme_mod('about_area_socialhover', '#fff');
$aboutarea_socialhoverbg1Color = get_theme_mod('about_area_socialhoverbg1', '#441e87');
$aboutarea_socialhoverbg2Color = get_theme_mod('about_area_socialhoverbg2', '#4b91f1');

$aboutarea_expColor = get_theme_mod('about_area_exp', '#fff');
$aboutarea_expborderColor = get_theme_mod('about_area_expborder', '#fff');
$aboutarea_expbg1Color = get_theme_mod('about_area_expbg1', '#441e87');
$aboutarea_expbg2Color = get_theme_mod('about_area_expbg2', '#4b91f1');

$custom_css .= ' 
div#about .section-title h2, div#about .section-title h2 small{color: '.$aboutareasectitle.';}
div#about .section-title h2{border-right-color: '.$aboutareatitlebordercolor.';}
div#about .section-subtitle h3, div#about .section-subtitle h3 small{color: '.$aboutareasubsectitle.';}
.sec-ellipse {
    background: radial-gradient(ellipse, transparent, transparent 7px, '.$aboutareasubsectitleborder.' 7px, '.$aboutareasubsectitleborder.' 11px, transparent 13px);
      background-size: 36px 40px;
    width: 100%;
    height: 17px;
    right: 0;
  }

div#about .section-area-text p{color: '.$aboutarea_TextColor.';}
.about-area .inner-area-title, .about-area .inner-area-title small{color: '.$aboutarea_pagetitleColor.';}

.about-btn .hi-icon span{color: '.$aboutarea_pageiconColor.';}
.aboutus-single:hover .about-btn .hi-icon span {color: '.$aboutarea_pageiconhoverColor.';}

.about-teacher-area span{color: '.$aboutarea_pagetnameColor.';}
.about-teacher-area{color: '.$aboutarea_pagetdesgColor.';}

.about-btn a{color: '.$aboutarea_pagebtnColor.';}
.about-btn a {
    background: -webkit-gradient(to right, '.$aboutarea_pagebtnbg1Color.' 0%,'.$aboutarea_pagebtnbg2Color.' 20%, '.$aboutarea_pagebtnbg2Color.' 50%, '.$aboutarea_pagebtnbg1Color.' 100%);
    background: linear-gradient(to right, '.$aboutarea_pagebtnbg1Color.' 0%,'.$aboutarea_pagebtnbg2Color.' 20%, '.$aboutarea_pagebtnbg2Color.' 50%, '.$aboutarea_pagebtnbg1Color.' 100%);
    background-size: 500%;
}

.about-share ul li a i{color: '.$aboutarea_socialColor.';}
.about-share ul li:hover a i{color: '.$aboutarea_socialhoverColor.';}
.about-share ul li a:before {
    background: -webkit-gradient(to right, '.$aboutarea_socialhoverbg1Color.' 0%,'.$aboutarea_socialhoverbg2Color.' 20%, '.$aboutarea_socialhoverbg2Color.' 50%, '.$aboutarea_socialhoverbg1Color.' 100%);
    background: linear-gradient(to right, '.$aboutarea_socialhoverbg1Color.' 0%,'.$aboutarea_socialhoverbg2Color.' 20%, '.$aboutarea_socialhoverbg2Color.' 50%, '.$aboutarea_socialhoverbg1Color.' 100%);
    background-size: 500%;
}
.about-exp-area{color: '.$aboutarea_expColor.';}
.about-exp-area:after{border-color: '.$aboutarea_expborderColor.';}

.about-exp-area {
    background: -webkit-gradient(to right, '.$aboutarea_expbg1Color.' 0%,'.$aboutarea_expbg2Color.' 20%, '.$aboutarea_expbg2Color.' 50%, '.$aboutarea_expbg1Color.' 100%);
    background: linear-gradient(to right, '.$aboutarea_expbg1Color.' 0%,'.$aboutarea_expbg2Color.' 20%, '.$aboutarea_expbg2Color.' 50%, '.$aboutarea_expbg1Color.' 100%);
    background-size: 500%;
}
';

// features
if(get_theme_mod('luzuk_premium_features_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('luzuk_features_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= 'div#features{background-image: url("'.$img.'");background-position: top;background-size: cover;}';
}else{
    $color = get_theme_mod('luzuk_features_bg_color', '#e6eff8');
    if('#e6eff8' != $color){
        $custom_css .= 'div#features {background-color: '.$color.';}';
    }
}

$featuresAreatitleBorderColor = get_theme_mod('features_page_titleBorderColor', '#4640a7');
$featuresAreatitlecolor = get_theme_mod('featuresarea_title_color', '#041033');

$featuresAreasubtitlecolor = get_theme_mod('featuresarea_subtitle_color', '#051033');
$featuresAreasubtitlehighcolor = get_theme_mod('featuresarea_subtitlehigh_color', '#4640a8');

$featuresAreatextcolor = get_theme_mod('featuresarea_text_color', '#7e7f80');

$features_pagebtn1Color = get_theme_mod('features_area_btn1', '#fff');
$features_pagebtnbg11Color = get_theme_mod('features_area_btnbg11', '#441e87');
$features_pagebtnbg12Color = get_theme_mod('features_area_btnbg12', '#4b91f1');

$features_pagebtn2Color = get_theme_mod('features_area_btn2', '#000');
$features_pagebtnborder2Color = get_theme_mod('features_area2_btnborder2', '#000');

$features_pagebtnhover2Color = get_theme_mod('features_area_btnhover2', '#fff');
$features_pagebtnbghover21Color = get_theme_mod('features_area_btnbghover21', '#441e87');
$features_pagebtnbghover22Color = get_theme_mod('features_area_btnbghover22', '#4b91f1');

$featuresareaBoxttlcolor = get_theme_mod('featuresarea_BoxttlColor', '#0f2037');

$featuresareaBoxttlhovercolor = get_theme_mod('featuresarea_BoxttlhoverColor', '#fff');

$featuresareaBozicon1color = get_theme_mod('featuresarea_Boxicon1Color', '#441f88');
$featuresareaBozicon2color = get_theme_mod('featuresarea_Boxicon2Color', '#4b91f1');
$featuresareaBoziconhovercolor = get_theme_mod('featuresarea_BoxiconhopverColor', '#fff');

$featuresareaBoxbgcolor = get_theme_mod('featuresarea_BoxbgColor', '#fff');
$featuresareaBoxbghover1color = get_theme_mod('featuresarea_Boxbghover1Color', '#441f88');
$featuresareaBoxbghover2color = get_theme_mod('featuresarea_Boxbghover2Color', '#4b91f1');
$custom_css .= '

#features .section-title h2, #features .section-title h2 small {color: '.$featuresAreatitlecolor.';}
#features .section-title h2{border-left-color: '.$featuresAreatitleBorderColor.';}

#features .section-subtitle h3, #features .section-subtitle h3 small {color: '.$featuresAreasubtitlecolor.';}
#features .section-subtitle h3 span {color: '.$featuresAreasubtitlehighcolor.';}

.features-area .section-area-text p{color: '.$featuresAreatextcolor.';}

.features-btn a{color: '.$features_pagebtn1Color.';}
.features-btn a{
    background: -webkit-gradient(to right, '.$features_pagebtnbg11Color.' 0%,'.$features_pagebtnbg12Color.' 20%, '.$features_pagebtnbg12Color.' 50%, '.$features_pagebtnbg11Color.' 100%);
    background: linear-gradient(to right, '.$features_pagebtnbg11Color.' 0%,'.$features_pagebtnbg12Color.' 20%, '.$features_pagebtnbg12Color.' 50%, '.$features_pagebtnbg11Color.' 100%);
    background-size: 500%;
}

.f2-btn a{color: '.$features_pagebtn2Color.';}
.f2-btn a{border-color: '.$features_pagebtnborder2Color.';}

.f2-btn a:hover{color: '.$features_pagebtnhover2Color.';}
.f2-btn a:hover{
    background: -webkit-gradient(to right, '.$features_pagebtnbghover21Color.' 0%,'.$features_pagebtnbghover22Color.' 20%, '.$features_pagebtnbghover22Color.' 50%, '.$features_pagebtnbghover21Color.' 100%);
    background: linear-gradient(to right, '.$features_pagebtnbghover21Color.' 0%,'.$features_pagebtnbghover22Color.' 20%, '.$features_pagebtnbghover22Color.' 50%, '.$features_pagebtnbghover21Color.' 100%);
    background-size: 500%;
}


.features-area .inner-area-title, .features-area .inner-area-title small{color: '.$featuresareaBoxttlcolor.';}
.features-area .fs-single-bx:hover .inner-area-title, .features-area .fs-single-bx:hover .inner-area-title small{color: '.$featuresareaBoxttlhovercolor.';}

.fs-single-bx-inner a.icon span {
    background: -moz-linear-gradient(top, '.$featuresareaBozicon1color.' 0%, '.$featuresareaBozicon2color.' 100%);
    background: -webkit-linear-gradient(top, '.$featuresareaBozicon1color.' 0%,'.$featuresareaBozicon2color.' 100%);
    background: linear-gradient(to right, '.$featuresareaBozicon1color.' 0%,'.$featuresareaBozicon2color.' 100%);
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}
.fs-area .fs-single-bx:hover .fs-single-bx-inner a.icon span{
    background: -moz-linear-gradient(top, '.$featuresareaBoziconhovercolor.' 0%, '.$featuresareaBoziconhovercolor.' 100%);
    background: -webkit-linear-gradient(top, '.$featuresareaBoziconhovercolor.' 0%,'.$featuresareaBoziconhovercolor.' 100%);
    background: linear-gradient(to right, '.$featuresareaBoziconhovercolor.' 0%,'.$featuresareaBoziconhovercolor.' 100%);
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.fs-area .fs-single-bx{background-color: '.$featuresareaBoxbgcolor.';}
.fs-area .fs-single-bx:hover{
    background: -webkit-gradient(to right, '.$featuresareaBoxbghover1color.' 0%,'.$featuresareaBoxbghover2color.' 20%, '.$featuresareaBoxbghover2color.' 50%, '.$featuresareaBoxbghover1color.' 100%);
    background: linear-gradient(to right, '.$featuresareaBoxbghover1color.' 0%,'.$featuresareaBoxbghover2color.' 20%, '.$featuresareaBoxbghover2color.' 50%, '.$featuresareaBoxbghover1color.' 100%);
    background-size: 500%;
}
';



// whychooseus
if(get_theme_mod('luzuk_premium_whychooseus_section_background','on') == 'on' ){

    $bgimg = get_theme_mod('luzuk_whychooseus_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/whychooseus-bg.jpg';

    $custom_css .= 'div#whychooseus{background-image: url("'.$img.'");background-position: top;background-size: cover;}';
}else{
    $color = get_theme_mod('luzuk_whychooseus_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= 'div#whychooseus {background-color: '.$color.';}';
    }
}

$whychooseusAreatitleBorderColor = get_theme_mod('whychooseus_page_titleBorderColor', '#4640a7');
$whychooseusAreatitlecolor = get_theme_mod('whychooseusarea_title_color', '#041033');
$whychooseusAreasubtitlecolor = get_theme_mod('whychooseusarea_subtitle_color', '#051033');
$whychooseusAreasubtitlehighcolor = get_theme_mod('whychooseusarea_subtitlehigh_color', '#4640a8');
$whychooseus_pagebtn1Color = get_theme_mod('whychooseus_area_btn1', '#fff');
$whychooseus_pagebtnbg11Color = get_theme_mod('whychooseus_area_btnbg11', '#441e87');
$whychooseus_pagebtnbg12Color = get_theme_mod('whychooseus_area_btnbg12', '#4b91f1');
$whychooseusareaBoxttlcolor = get_theme_mod('whychooseusarea_BoxttlColor', '#1a2a44');
$whychooseusareaBozicon1color = get_theme_mod('whychooseusarea_Boxicon1Color', '#441f88');
$whychooseusareaBozicon2color = get_theme_mod('whychooseusarea_Boxicon2Color', '#4b91f1');
$whychooseusareaBoxbgcolor = get_theme_mod('whychooseusarea_BoxbgColor', '#fff');

$whychooseusareaghovericoncolor = get_theme_mod('whychooseusarea_ghovericonColor', '#fff');
$whychooseusareaghovericonbgcolor1 = get_theme_mod('whychooseusarea_ghovericonbgColor1', '#441e87');
$whychooseusareaghovericonbgcolor2 = get_theme_mod('whychooseusarea_ghovericonbgColor2', '#4b91f1');

$whychooseusareaSiconcolor = get_theme_mod('whychooseusarea_SiconColor', '#fff');
$whychooseusareaSiconbgcolor = get_theme_mod('whychooseusarea_SiconbgColor', '#616ffc');
$whychooseusareaSiconbghovercolor = get_theme_mod('whychooseusarea_SiconbghoverColor', '#041033');

$whychooseusareashapecolor = get_theme_mod('whychooseusarea_shapeColor', '#eaf2ff');

$custom_css .= '

#whychooseus .section-title h2, #whychooseus .section-title h2 small {color: '.$whychooseusAreatitlecolor.';}
#whychooseus .section-title h2{border-left-color: '.$whychooseusAreatitleBorderColor.';}

#whychooseus .section-subtitle h3, #whychooseus .section-subtitle h3 small {color: '.$whychooseusAreasubtitlecolor.';}
#whychooseus .section-subtitle h3 span {color: '.$whychooseusAreasubtitlehighcolor.';}

.whychooseus-btn a{color: '.$whychooseus_pagebtn1Color.';}
.whychooseus-btn a{
    background: -webkit-gradient(to right, '.$whychooseus_pagebtnbg11Color.' 0%,'.$whychooseus_pagebtnbg12Color.' 20%, '.$whychooseus_pagebtnbg12Color.' 50%, '.$whychooseus_pagebtnbg11Color.' 100%);
    background: linear-gradient(to right, '.$whychooseus_pagebtnbg11Color.' 0%,'.$whychooseus_pagebtnbg12Color.' 20%, '.$whychooseus_pagebtnbg12Color.' 50%, '.$whychooseus_pagebtnbg11Color.' 100%);
    background-size: 500%;
}

.whychooseus-area .inner-area-title, .whychooseus-area .inner-area-title small{color: '.$whychooseusareaBoxttlcolor.';}

.wcu-single-bx-inner span.fa {
    background: -moz-linear-gradient(top, '.$whychooseusareaBozicon1color.' 0%, '.$whychooseusareaBozicon2color.' 100%);
    background: -webkit-linear-gradient(top, '.$whychooseusareaBozicon1color.' 0%,'.$whychooseusareaBozicon2color.' 100%);
    background: linear-gradient(to right, '.$whychooseusareaBozicon1color.' 0%,'.$whychooseusareaBozicon2color.' 100%);
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.wcu-single-bx-inner{background-color: '.$whychooseusareaBoxbgcolor.';}

.gallery-main-box .whuchooseus-gall:hover i, .gallery-main-box .whuchooseus-gall.hover i{color: '.$whychooseusareaghovericoncolor.';}
.gallery-main-box .whuchooseus-gall:hover i, .gallery-main-box .whuchooseus-gall.hover i{
       background: -webkit-gradient(to right, '.$whychooseusareaghovericonbgcolor1.' 0%,'.$whychooseusareaghovericonbgcolor2.' 20%, '.$whychooseusareaghovericonbgcolor2.' 50%, '.$whychooseusareaghovericonbgcolor1.' 100%);
    background: linear-gradient(to right, '.$whychooseusareaghovericonbgcolor1.' 0%,'.$whychooseusareaghovericonbgcolor2.' 20%, '.$whychooseusareaghovericonbgcolor2.' 50%, '.$whychooseusareaghovericonbgcolor1.' 100%);
    background-size: 500%;
}

.gallery-main-box .owl-carousel .owl-nav button.owl-prev span, .gallery-main-box .owl-carousel .owl-nav button.owl-next span{color: '.$whychooseusareaSiconcolor.';}
.gallery-main-box .owl-carousel .owl-nav button.owl-prev span, .gallery-main-box .owl-carousel .owl-nav button.owl-next span{background-color: '.$whychooseusareaSiconbgcolor.';}
.gallery-main-box .owl-carousel .owl-nav button.owl-next span:after, .gallery-main-box .owl-carousel .owl-nav button.owl-prev span:after{background-color: '.$whychooseusareaSiconbghovercolor.';}

.triangle-bg-lg:before, .triangle-bg-lg:after{background-color: '.$whychooseusareashapecolor.';}

';



// procedure
if(get_theme_mod('luzuk_premium_procedure_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('luzuk_procedure_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= 'div#procedure{background-image: url("'.$img.'");background-position: top;background-size: cover;}';
}else{
    $color = get_theme_mod('luzuk_procedure_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= 'div#procedure {background-color: '.$color.';}';
    }
}

$procedureAreatitlecolor = get_theme_mod('procedurearea_title_color', '#031033');

$procedureAreasubtitlecolor = get_theme_mod('procedurearea_subtitle_color', '#000');
$procedureAreatextcolor = get_theme_mod('procedurearea_text_color', '#a0a0a0');

$procedure_pagebtnColor = get_theme_mod('procedure_area_btn', '#fff');
$procedure_pagebtnbg1Color = get_theme_mod('procedure_area_btnbg1', '#441e87');
$procedure_pagebtnbg2Color = get_theme_mod('procedure_area_btnbg2', '#4b91f1');

$procedureareaBoxttlcolor = get_theme_mod('procedurearea_BoxttlColor', '#102038');

$procedureareaBoziconcolor = get_theme_mod('procedurearea_BoxiconColor', '#fff');
$procedureareaBoziconbgcolor = get_theme_mod('procedurearea_BoxiconbgColor', '#4641a8');
$procedureareaBozbghover1color = get_theme_mod('procedurearea_Boxiconbghover1Color', '#441f88');
$procedureareaBozbghover2color = get_theme_mod('procedurearea_Boxiconbghover2Color', '#4b91f1');

$custom_css .= '

#procedure .section-title h2, #procedure .section-title h2 small {color: '.$procedureAreatitlecolor.';}

#procedure .section-subtitle h3, #procedure .section-subtitle h3 small {color: '.$procedureAreasubtitlecolor.';}

.procedure-area .section-area-text p{color: '.$procedureAreatextcolor.';}

.procedure-btn a{color: '.$procedure_pagebtnColor.';}
.procedure-btn a{
    background: -webkit-gradient(to right, '.$procedure_pagebtnbg1Color.' 0%,'.$procedure_pagebtnbg2Color.' 20%, '.$procedure_pagebtnbg2Color.' 50%, '.$procedure_pagebtnbg1Color.' 100%);
    background: linear-gradient(to right, '.$procedure_pagebtnbg1Color.' 0%,'.$procedure_pagebtnbg2Color.' 20%, '.$procedure_pagebtnbg2Color.' 50%, '.$procedure_pagebtnbg1Color.' 100%);
    background-size: 500%;
}

.procedure-area .inner-area-title, .procedure-area .inner-area-title small{color: '.$procedureareaBoxttlcolor.';}

.p-single-bx-inner span.fa{color: '.$procedureareaBoziconcolor.';}
.p-single-bx-inner span.fa{background-color: '.$procedureareaBoziconbgcolor.';}

.p-single-bx-inner span:after {
    background: -webkit-gradient(to right,'.$procedureareaBozbghover1color.' 0%,'.$procedureareaBozbghover2color.'20%,'.$procedureareaBozbghover2color.' 50%,'.$procedureareaBozbghover1color.' 100%);
    background: linear-gradient(to right,'.$procedureareaBozbghover1color.' 0%,'.$procedureareaBozbghover2color.' 20%,'.$procedureareaBozbghover2color.' 50%,'.$procedureareaBozbghover1color.' 100%);
    background-size: 500%;
}
';

 // Testimonials section 
if(get_theme_mod('luzuk_premium_testimonials_section_background','on') == 'on' ){

    $bgimg = get_theme_mod('luzuk_testimonials_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/testibg.jpg';

    $custom_css .= 'div#testimonials {background-image: url("'.$img.'");background-position: top;background-size: cover;}'; 
}else{
    $color = get_theme_mod('luzuk_testimonials_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= 'div#testimonials {background-color: '.$color.';}';
    }
} 


//colors
$testimonialsAreasecoverlayColor = get_theme_mod('testimonials_page_secoverlayColor', '#e7f0f9');

$testimonialsAreatitlecolor = get_theme_mod('testimonialsarea_title_color', '#041033');

$testimonialsAreasubtitlecolor = get_theme_mod('testimonialsarea_subtitle_color', '#051033');

$testimonialsAreatextcolor = get_theme_mod('testimonialsarea_text_color', '#7e7f80');

$TsquoteColor = get_theme_mod('luzuk_testimonials_quotecolor', '#041033');
$TsquotehoverColor1 = get_theme_mod('luzuk_testimonials_quotehovercolor1', '#441f88');
$TsquotehoverColor2 = get_theme_mod('luzuk_testimonials_quotehovercolor2', '#4b91f1');

$TstextColor = get_theme_mod('luzuk_testimonials_textcolor', '#919597');
$TstexthighlightColor = get_theme_mod('luzuk_testimonials_texthighlightcolor', '#5e74fc');

$TsNameColor = get_theme_mod('luzuk_testimonials_Namecolor', '#061032');
$TsNamehoverColor1 = get_theme_mod('luzuk_testimonials_Namehovercolor1', '#421b85');
$TsNamehoverColor2 = get_theme_mod('luzuk_testimonials_Namehovercolor2', '#57a3fc');
$TsDesgColor = get_theme_mod('luzuk_testimonials_Desgcolor', '#929697');

$TsBoxColor = get_theme_mod('luzuk_testimonials_boxcolor', '#fff');
$TsIndicatorColor = get_theme_mod('luzuk_testimonials_indicatorcolor', '#fff');
$TsIndicatoractive1Color = get_theme_mod('luzuk_testimonials_indicatorActivecolor1', '#441f88');
$TsIndicatoractive2Color = get_theme_mod('luzuk_testimonials_indicatorActivecolor2', '#4b91f1');

$custom_css .= '
.testimonials-area .testimonials_gradiant{background-color: '.$testimonialsAreasecoverlayColor.';}

#testimonials .section-title h2, #testimonials .section-title h2 small {color: '.$testimonialsAreatitlecolor.';}

#testimonials .section-subtitle h3, #testimonials .section-subtitle h3 small {color: '.$testimonialsAreasubtitlecolor.';}

.testimonials-area .section-area-text p{color: '.$testimonialsAreatextcolor.';}


.testimonials-area .quote-icon i{color: '.$TsquoteColor.';}
.testimonials-area .ts-area-single:hover .quote-icon i {
    background: -moz-linear-gradient(top, '.$TsquotehoverColor1.' 0%, '.$TsquotehoverColor2.' 100%);
    background: -webkit-linear-gradient(top, '.$TsquotehoverColor1.' 0%,'.$TsquotehoverColor2.' 100%);
    background: linear-gradient(to right, '.$TsquotehoverColor1.' 0%,'.$TsquotehoverColor2.' 100%);
        -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}
.testimonials-area .ts-area-c p{color: '.$TstextColor.';}
.testimonials-area .ts-area-c p span{color: '.$TstexthighlightColor.';}
.testimonials-area .ts-area-c p span{border-bottom-color: '.$TstexthighlightColor.';}

.testimonials-area h6.ts-area-title{color: '.$TsNameColor.';}

.testimonials-area .ts-area-single:hover h6.ts-area-title {
    background-image: linear-gradient(45deg, '.$TsNamehoverColor1.', '.$TsNamehoverColor2.');
    background-size: 100%;
}

.testimonials-area .ts-area-desg{color: '.$TsDesgColor.';}


.testimonials-area .owl-theme .owl-dots .owl-dot:before{color: '.$TsIndicatorColor.';}
.testimonials-area .owl-theme .owl-dots .owl-dot.active:before, 
.testimonials-area .owl-theme .owl-dots .owl-dot:hover:before {
    background: -moz-linear-gradient(top,'.$TsIndicatoractive1Color.' 0%,'.$TsIndicatoractive2Color.' 100%);
    background: -webkit-linear-gradient(top,'.$TsIndicatoractive1Color.' 0%,'.$TsIndicatoractive2Color.' 100%);
    background: linear-gradient(to right,'.$TsIndicatoractive1Color.' 0%,'.$TsIndicatoractive2Color.' 100%);
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}
.testimonials-area .ts-area-single{background-color: '.$TsBoxColor.';}

';

//colors

$innerTsNameColor = get_theme_mod('luzuk_innertestimonials_Namecolor', '#fff');
$innerTsDesgColor = get_theme_mod('luzuk_innertestimonials_Desgcolor', '#fff');
$innerTstextColor = get_theme_mod('luzuk_innertestimonials_textcolor', '#fff');
$innerTsBoxbg1Color = get_theme_mod('luzuk_innertestimonials_boxbg1color', '#441e87');
$innerTsBoxbg2Color = get_theme_mod('luzuk_innertestimonials_boxbg2color', '#4b91f1');

$innerTsimgborderinnerColor = get_theme_mod('luzuk_innertestimonials_imgborderinnercolor', '#442089');
$innerTsimgborderouterColor = get_theme_mod('luzuk_innertestimonials_imgborderoutercolor', '#fff');

$innerTsBoxindicatorColor1 = get_theme_mod('luzuk_innertestimonials_indicatorcolor1', '#4b91f1');
$innerTsBoxindicatorColor2 = get_theme_mod('luzuk_innertestimonials_indicatorcolor2', '#fff');
$custom_css .= '
#innerpage-box .ts-area-c p{color: '.$innerTstextColor.';}
#innerpage-box h6.ts-area-title, #innerpage-box h6.ts-area-title small{color: '.$innerTsNameColor.';}
#innerpage-box .ts-area-desg{color: '.$innerTsDesgColor.';}

#innerpage-box .ts-area-single {
    background: -webkit-gradient(to right, '.$innerTsBoxbg1Color.' 0%,'.$innerTsBoxbg2Color.' 20%, '.$innerTsBoxbg2Color.' 50%, '.$innerTsBoxbg1Color.' 100%);
    background: linear-gradient(to right, '.$innerTsBoxbg1Color.' 0%,'.$innerTsBoxbg2Color.' 20%, '.$innerTsBoxbg2Color.' 50%, '.$innerTsBoxbg1Color.' 100%);
    background-size: 500%;
}

#innerpage-box .ts-area-thumb img{background-color: '.$innerTsimgborderinnerColor.';}
#innerpage-box .ts-area-thumb img{border-color: '.$innerTsimgborderouterColor.';}

div#content-box .ts-area-single .timeline-icon{background-color: '.$innerTsBoxindicatorColor1.';}
div#content-box .ts-area-single .timeline-icon{border-color: '.$innerTsBoxindicatorColor2.';}

';


// contact section 
if(get_theme_mod('luzuk_premium_contact_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('luzuk_contact_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= 'div#contact {background-image: url("'.$img.'");background-position: top;background-size: cover;}'; 
}else{
    $color = get_theme_mod('luzuk_contact_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= 'div#contact {background-color: '.$color.';}';
    }
} 

   //contact heading & text color
$contactAreatitleBorderColor = get_theme_mod('contact_page_titleBorderColor', '#4640a7');
$contactAreatitlecolor = get_theme_mod('contactarea_title_color', '#041033');
$contactAreasubtitlecolor = get_theme_mod('contactarea_subtitle_color', '#051033');
$contactAreasubtitlehighcolor = get_theme_mod('contactarea_subtitlehigh_color', '#4640a8');
$contactAreatextcolor = get_theme_mod('contactarea_text_color', '#7e7f80');
$contactbgColor = get_theme_mod('contact_bgColor', '#fff');

$contactformbtopborderColor1 = get_theme_mod('contact_formbtopborderColor1', '#441e87');
$contactformbtopborderColor2 = get_theme_mod('contact_formbtopborderColor2', '#4b91f1');

$contactformTextColor = get_theme_mod('contact_forminputtextColor', '#838383');
$contactformbgColor = get_theme_mod('contact_forminputbgColor', '#fbfbfb');
$contactformborderColor = get_theme_mod('contact_forminputborderColor', '#f3f3f3');
$contactbtnTextColor = get_theme_mod('contact_formbuttontextColor', '#fff');
$contactbtnbgColor1 = get_theme_mod('contact_formbuttonbgColor1', '#441f88');
$contactbtnbgColor2 = get_theme_mod('contact_formbuttonbgColor2', '#4b91f1');
$contactbtnTexthoverColor = get_theme_mod('contact_formbuttontexthoverColor', '#fff');

$contactlabelColor = get_theme_mod('contact_formlabelColor', '#838383');
$contacttextColor = get_theme_mod('contact_formtextColor', '#838383');

$contactlistColor = get_theme_mod('contact_formlistColor', '#212121');
$contactlisticonColor1 = get_theme_mod('contact_formlisticonColor1', '#441f88');
$contactlisticonColor2 = get_theme_mod('contact_formlisticonColor2', '#4b91f1');
  
    $custom_css .= '#contact .section-title h2, #contact .section-title h2 small {color: '.$contactAreatitlecolor.';}
#contact .section-title h2{border-left-color: '.$contactAreatitleBorderColor.';}

#contact .section-subtitle h3, #contact .section-subtitle h3 small {color: '.$contactAreasubtitlecolor.';}
#contact .section-subtitle h3 span {color: '.$contactAreasubtitlehighcolor.';}

.contact-area .section-area-text p{color: '.$contactAreatextcolor.';}
 
div#contact .ht-contact-member-wrap{background-color: '.$contactbgColor.';}

div#contact .appont-mg {
    background: -webkit-gradient(to right, '.$contactformbtopborderColor1.' 0%,'.$contactformbtopborderColor2.' 20%, '.$contactformbtopborderColor2.' 50%, '.$contactformbtopborderColor1.' 100%);
    background: linear-gradient(to right, '.$contactformbtopborderColor1.' 0%,'.$contactformbtopborderColor2.' 20%, '.$contactformbtopborderColor2.' 50%, '.$contactformbtopborderColor1.' 100%);
    background-size: 500%;
}

    .ht-contact-member-wrap input[type="text"], 
    .ht-contact-member-wrap input[type="email"], 
    .ht-contact-member-wrap input[type="url"], 
    .ht-contact-member-wrap input[type="password"], 
    .ht-contact-member-wrap input[type="search"], 
    .ht-contact-member-wrap input[type="number"], 
    .ht-contact-member-wrap input[type="tel"], 
    .ht-contact-member-wrap input[type="range"], 
    .ht-contact-member-wrap input[type="date"], 
    .ht-contact-member-wrap input[type="month"], 
    .ht-contact-member-wrap input[type="week"], 
    .ht-contact-member-wrap input[type="time"], 
    .ht-contact-member-wrap input[type="datetime"],
    .ht-contact-member-wrap input[type="datetime-local"], 
    .ht-contact-member-wrap input[type="color"],
    .ht-contact-member-wrap input[type="file"],
    div#contact .ht-contact-member-wrap textarea,
    div#contact .ht-contact-member-wrap select,
    div#contact  .ht-contact-member-wrap input::placeholder,
   div#contact  .ht-contact-member-wrap textarea::placeholder {color: '. $contactformTextColor.';}
      .ht-contact-member-wrap input[type="text"], 
    .ht-contact-member-wrap input[type="email"], 
    .ht-contact-member-wrap input[type="url"], 
    .ht-contact-member-wrap input[type="password"], 
    .ht-contact-member-wrap input[type="search"], 
    .ht-contact-member-wrap input[type="number"], 
    .ht-contact-member-wrap input[type="tel"], 
    .ht-contact-member-wrap input[type="range"], 
    .ht-contact-member-wrap input[type="date"], 
    .ht-contact-member-wrap input[type="month"], 
    .ht-contact-member-wrap input[type="week"], 
    .ht-contact-member-wrap input[type="time"], 
    .ht-contact-member-wrap input[type="datetime"],
    .ht-contact-member-wrap input[type="datetime-local"], 
    .ht-contact-member-wrap input[type="color"],
    .ht-contact-member-wrap input[type="file"],
     div#contact .ht-contact-member-wrap select,
   div#contact .ht-contact-member-wrap textarea
    {background-color: '. $contactformbgColor.'!important; }
 .ht-contact-member-wrap input[type="text"], .ht-contact-member-wrap input[type="email"], .ht-contact-member-wrap input[type="url"], .ht-contact-member-wrap input[type="password"], .ht-contact-member-wrap input[type="search"], .ht-contact-member-wrap input[type="number"], .ht-contact-member-wrap input[type="tel"], .ht-contact-member-wrap input[type="range"], .ht-contact-member-wrap input[type="date"], .ht-contact-member-wrap input[type="month"], .ht-contact-member-wrap input[type="week"], .ht-contact-member-wrap input[type="time"], .ht-contact-member-wrap input[type="datetime"], .ht-contact-member-wrap input[type="datetime-local"], .ht-contact-member-wrap input[type="color"], .ht-contact-member-wrap input[type="file"],  div#contact .ht-contact-member-wrap textarea, div#contact .ht-contact-member-wrap select
    {border-color: '. $contactformborderColor.' !important;}
  div#contact .ht-contact-member-wrap input[type="submit"] {color: '. $contactbtnTextColor.';}
  div#contact .ht-contact-member-wrap input[type="submit"] {
    background: -webkit-gradient(to right, '. $contactbtnbgColor1.' 0%,'. $contactbtnbgColor2.' 20%, '. $contactbtnbgColor2.' 50%, '. $contactbtnbgColor1.' 100%);
    background: linear-gradient(to right, '. $contactbtnbgColor1.' 0%,'. $contactbtnbgColor2.' 20%, '. $contactbtnbgColor2.' 50%, '. $contactbtnbgColor1.' 100%);
    background-size: 500%;;
}
    #contact .ht-contact-member-wrap input[type="submit"]:hover {color: '. $contactbtnTexthoverColor.';}
     #contact .ht-contact-member-wrap h3, 
     #contact .ht-contact-member-wrap h2, 
     #contact .ht-contact-member-wrap{color: '. $contacttextColor.';}
  div#contact .ht-contact-member-wrap label{color: '. $contactlabelColor.';} 

  .section-area-textlist ul li, .section-area-textlist ol li{color: '. $contactlistColor.';} 
   .section-area-textlist ul li:before, .section-area-textlist ol li:before {
    background: -moz-linear-gradient(top, '. $contactlisticonColor1.' 0%, '. $contactlisticonColor2.' 100%);
    background: -webkit-linear-gradient(top, '. $contactlisticonColor1.' 0%,'. $contactlisticonColor2.' 100%);
    background: linear-gradient(to right, '. $contactlisticonColor1.' 0%,'. $contactlisticonColor2.' 100%);
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}
    ';

// counter
if(get_theme_mod('luzuk_premium_counter_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('luzuk_counter_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= 'div#counter{background-image: url("'.$img.'");background-position: top;background-size: cover;background-attachment: fixed;}';
}else{
    $color = get_theme_mod('luzuk_counter_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= 'div#counter {background-color: '.$color.';}';
    }
}
$counterAreanumColor = get_theme_mod('counter_titlenumColor', '#041033');

$counterAreanumColor1 = get_theme_mod('counter_titlenumColor1', '#441f88');
$counterAreanumColor2 = get_theme_mod('counter_titlenumColor2', '#4984e6');
$counterAreatitleColor = get_theme_mod('counter_titleColor', '#0f2038');

$counterAreaboxborderColor1 = get_theme_mod('counter_boxborderColor1', '#441f88');
$counterAreaboxborderColor2 = get_theme_mod('counter_boxborderColor2', '#4984e6');
$counterAreaboxdotColor = get_theme_mod('counter_boxdotColor', '#4a63fe');

$counterAreaboxbgColor = get_theme_mod('counter_boxbgColor', '#fff');
$custom_css .= '
.counter-area .cd-num {
    background-image: linear-gradient(45deg, '.$counterAreanumColor.', '.$counterAreanumColor.');
    background-size: 100%;
}
.counter-area .cd-single:hover .cd-num {
    background-image: linear-gradient(45deg, '.$counterAreanumColor1.', '.$counterAreanumColor2.');
    background-size: 100%;
}


.counter-area .cd-title{color: '.$counterAreatitleColor.';}

.counter-area .cd-single:before, 
.counter-area .cd-single:after{
      background: -webkit-gradient(to right, '.$counterAreaboxborderColor1.' 0%,'.$counterAreaboxborderColor2.' 20%, '.$counterAreaboxborderColor2.' 50%, '.$counterAreaboxborderColor1.' 100%);
    background: linear-gradient(to right, '.$counterAreaboxborderColor1.' 0%,'.$counterAreaboxborderColor2.' 20%, '.$counterAreaboxborderColor2.' 50%, '.$counterAreaboxborderColor1.' 100%);
    background-size: 500%;
}
.counter-area .counter-top .cd-single .cd-title:before{background-color: '.$counterAreaboxdotColor.';}
.counter-single-area{background-color: '.$counterAreaboxbgColor.';}
';

 
    // Blog section 
if(get_theme_mod('luzuk_premium_blog_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('luzuk_blog_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= 'div#blog {background-image: url("'.$img.'");background-position: top;background-size: cover;}'; 
}else{
    $color = get_theme_mod('luzuk_blog_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= 'div#blog {background-color: '.$color.';}';
    }
} 
//colors

$blogAreatitleBorderColor = get_theme_mod('blog_page_titleBorderColor', '#4640a7');
$blogAreatitlecolor = get_theme_mod('blogarea_title_color', '#041033');
$blogAreasubtitlecolor = get_theme_mod('blogarea_subtitle_color', '#051033');
$blogAreasubtitlehighcolor = get_theme_mod('blogarea_subtitlehigh_color', '#4640a8');

$blogareasecbgC1 = get_theme_mod('blogarea_secbg_color_one', '#fff');
$blogareasecbgC2 = get_theme_mod('blogarea_secbg_color_two', '#e6eff8');

$blogarealbgC1 = get_theme_mod('blogarea_leftbg_color_one', '#441e87');
$blogarealbgC2 = get_theme_mod('blogarea_leftbg_color_two', '#4b63b6');
$blogarealbgcurveC1 = get_theme_mod('blogarea_leftbgcurve_color1', '#4a5eb3');
$blogarealbgcurveC2 = get_theme_mod('blogarea_leftbgcurve_color2', '#f3f7fb');

$blogareaimg1 = get_theme_mod('blogarea_image_color_one', '#441f88');
$blogareaimg2 = get_theme_mod('blogarea_image_color_two', '#4b91f1');

$blogareaimagelink = get_theme_mod('blogarea_imagelink_color', '#441f88');
$blogareaimagelinkbg = get_theme_mod('blogarea_imagelinkbg_color', '#fff');

$blogareaimagelinkhover = get_theme_mod('blogarea_imagelinkhover_color', '#fff');
$blogareaimagelinkbghover = get_theme_mod('blogarea_imagelinkbghover_color', '#000');

$blogareaTitle = get_theme_mod('blogarea_Title_color', '#000');
$blogareaTitlehover = get_theme_mod('blogarea_Titlehover_color', '#441f88');

$blogareatext = get_theme_mod('blogarea_text_color', '#b1b6c0');
$blogareaadmintext = get_theme_mod('blogarea_admintext_color', '#514cac');
$blogareaadmintexthover = get_theme_mod('blogarea_admintexthover_color', '#4a93f2');

$blog_pagebtnColor = get_theme_mod('blog_area_btn', '#fff');
$blog_pagebtnbg1Color = get_theme_mod('blog_area_btnbg1', '#441e87');
$blog_pagebtnbg2Color = get_theme_mod('blog_area_btnbg2', '#4b91f1');

$custom_css .= '

#blog .section-title h2, #blog .section-title h2 small {color: '.$blogAreatitlecolor.';}
#blog .section-title h2{border-left-color: '.$blogAreatitleBorderColor.';}

#blog .section-subtitle h3, #blog .section-subtitle h3 small {color: '.$blogAreasubtitlecolor.';}
#blog .section-subtitle h3 span {color: '.$blogAreasubtitlehighcolor.';}

.blog-img-area:before {
    background: -webkit-gradient(to right, '.$blogarealbgC1.' 0%,'.$blogarealbgC2.' 20%, '.$blogarealbgC2.' 50%, '.$blogarealbgC1.' 100%);
    background: linear-gradient(to right, '.$blogarealbgC1.' 0%,'.$blogarealbgC2.' 20%, '.$blogarealbgC2.' 50%, '.$blogarealbgC1.' 100%);
    background-size: 500%;
}
.blog-img-area:after {background-color: '.$blogarealbgcurveC1.';}
.blog-img-in:after {background-color: '.$blogarealbgcurveC2.';}

.blog-area {
    background-image: radial-gradient( circle farthest-corner at 10% 20%,'.$blogareasecbgC1.' 0%,'.$blogareasecbgC2.' 100.3% );
}


.blog-area .blog-thumbnail .overlay{background: linear-gradient(0deg,'.$blogareaimg1.','.$blogareaimg2.' 80%) no-repeat;}

.blog-area .blog-thumbnail .overlay .box .content > a{color: '.$blogareaimagelink.';}
.blog-area .blog-thumbnail .overlay .box .content > a{background-color: '.$blogareaimagelinkbg.';}

.blog-area .blog-thumbnail .overlay .box .content > a:hover{color: '.$blogareaimagelinkhover.';}
.blog-area .blog-thumbnail .overlay .box .content > a:hover{background-color: '.$blogareaimagelinkbghover.';}

.blog-area .blog-single a .inner-area-title, .blog-area .blog-single a .inner-area-title small{color: '.$blogareaTitle.';}
.blog-area .box-area-S:hover .blog-single a .inner-area-title, .blog-area .box-area-S:hover .blog-single a .inner-area-title small{color: '.$blogareaTitlehover.';}

.blog-area .blog-date{color: '.$blogareatext.';}
.blog-area .blog-date span{color: '.$blogareaadmintext.';}
.blog-area .box-area-S:hover .blog-date span{color: '.$blogareaadmintexthover.';}

.blog-btn a{color: '.$blog_pagebtnColor.';}
.blog-btn a{
    background: -webkit-gradient(to right, '.$blog_pagebtnbg1Color.' 0%,'.$blog_pagebtnbg2Color.' 20%, '.$blog_pagebtnbg2Color.' 50%, '.$blog_pagebtnbg1Color.' 100%);
    background: linear-gradient(to right, '.$blog_pagebtnbg1Color.' 0%,'.$blog_pagebtnbg2Color.' 20%, '.$blog_pagebtnbg2Color.' 50%, '.$blog_pagebtnbg1Color.' 100%);
    background-size: 500%;
}


';


 
    // Client logo section 
if(get_theme_mod('luzuk_premium_ourclients_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('luzuk_ourclients_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= 'div#ourclient {background-image: url("'.$img.'");background-position: top;background-size: cover;}'; 
}else{
    $color = get_theme_mod('luzuk_ourclients_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= 'div#ourclient {background-color: '.$color.';}';
    }
} 

$ourclientareaimghvrborderOne = get_theme_mod('luzuk_ourclients_imghvrborderColorone', '#441f88');
$ourclientareaimghvrborderTwO = get_theme_mod('luzuk_ourclients_imghvrborderColortwo', '#4b91f1');

$custom_css .= '
.clientlogobx:hover:before{border-bottom-color: '.$ourclientareaimghvrborderOne.';}
.clientlogobx:hover:before{border-left-color: '.$ourclientareaimghvrborderTwO.';}
.clientlogobx:hover:after{border-top-color: '.$ourclientareaimghvrborderTwO.';}
.clientlogobx:hover:after{border-right-color: '.$ourclientareaimghvrborderOne.';}

';


// For newsletter

if(get_theme_mod('luzuk_premium_newsletter_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('luzuk_newsletter_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= 'div#newsletter {background-image: url("'.$img.'");background-position: top;background-size: cover;}';
}else{
    $color = get_theme_mod('luzuk_newsletter_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= 'div#newsletter {background-color: '.$color.';}';
    }
}

   //newsletter heading & text color

    $newsletterareasectitle = get_theme_mod('newsletterarea_sectitle_color', '#262626');
    $newsletterareasecltext = get_theme_mod('newsletterarea_secltext_color', '#6d6d6d');
    $newsletterareasecrtext = get_theme_mod('newsletterarea_secrtext_color', '#5f5e60');
    $newsletterareasecrtexthighlight = get_theme_mod('newsletterarea_secrtexthighlight_color', '#2536fe');

    $newsletterareasocialC = get_theme_mod('newsletterarea_social_color', '#fff');
    $newsletterareasocialbgC1 = get_theme_mod('newsletterarea_socialbg_color1', '#3fb6ea');
    $newsletterareasocialbgC2 = get_theme_mod('newsletterarea_socialbg_color2', '#3b5999');
    $newsletterareasocialbgC3 = get_theme_mod('newsletterarea_socialbg_color3', '#54abee');
    $newsletterareasocialbgC4 = get_theme_mod('newsletterarea_socialbg_color4', '#de4a39');
     $newsletterareasocialtextC = get_theme_mod('newsletterarea_socialtext_color', '#555555');

    $newsletterareasocialhoverbgC1 = get_theme_mod('newsletterarea_socialhoverbg_color1', '#441e87');
    $newsletterareasocialhoverbgC2 = get_theme_mod('newsletterarea_socialhoverbg_color2', '#4b91f1');

    $newsletterformTextColor = get_theme_mod('newsletter_forminputtextColor', '#4f4f4f');
    $newsletterformbgColor = get_theme_mod('newsletter_forminputbgColor', '#f2f2f3');

    $newsletterbtnTextColor = get_theme_mod('newsletter_formbuttontextColor', '#fff');
    $newsletterbtnTexthoverColor = get_theme_mod('newsletter_formbuttontexthoverColor', '#fff');
    $newsletterbtnbgColor1 = get_theme_mod('newsletter_formbuttonbgColor1', '#441e87');
    $newsletterbtnbgColor2 = get_theme_mod('newsletter_formbuttonbgColor2', '#4b91f1');

    $newsletterlabelColor = get_theme_mod('newsletter_formlabelColor', '#585858');
    $newslettertextColor = get_theme_mod('newsletter_formtextColor', '#585858');

    $custom_css .= '

 #newsletter .section-title h2, #newsletter .section-title h2 small{color: '.$newsletterareasectitle.';}
#newsletter .section-textl p{color: '.$newsletterareasecltext.';}
#newsletter .section-text p{color: '.$newsletterareasecrtext.';}
#newsletter .section-text p span{color: '.$newsletterareasecrtexthighlight.';}
    #newsletter .section-text p span{border-bottom-color: '.$newsletterareasecrtexthighlight.';}

.news-share ul li a{color: '.$newsletterareasocialC.';}
.news-share ul li:nth-child(1) a{background-color: '.$newsletterareasocialbgC1.';}
.news-share ul li:nth-child(2) a{background-color: '.$newsletterareasocialbgC2.';}
.news-share ul li:nth-child(3) a{background-color: '.$newsletterareasocialbgC3.';}
.news-share ul li:nth-child(4) a{background-color: '.$newsletterareasocialbgC4.';}
.news-share ul li p{color: '.$newsletterareasocialtextC.';}

.news-share ul li a:before {
    background: -webkit-gradient(to right, '.$newsletterareasocialhoverbgC1.' 0%,'.$newsletterareasocialhoverbgC2.' 20%, '.$newsletterareasocialhoverbgC2.' 50%, '.$newsletterareasocialhoverbgC1.' 100%);
    background: linear-gradient(to right, '.$newsletterareasocialhoverbgC1.' 0%,'.$newsletterareasocialhoverbgC2.' 20%, '.$newsletterareasocialhoverbgC2.' 50%, '.$newsletterareasocialhoverbgC1.' 100%);
    background-size: 500%;
}

    .ht-newsletter-member-wrap input[type="text"], 
    .ht-newsletter-member-wrap input[type="email"], 
    .ht-newsletter-member-wrap input[type="url"], 
    .ht-newsletter-member-wrap input[type="password"], 
    .ht-newsletter-member-wrap input[type="search"], 
    .ht-newsletter-member-wrap input[type="number"], 
    .ht-newsletter-member-wrap input[type="tel"], 
    .ht-newsletter-member-wrap input[type="range"], 
    .ht-newsletter-member-wrap input[type="date"], 
    .ht-newsletter-member-wrap input[type="month"], 
    .ht-newsletter-member-wrap input[type="week"], 
    .ht-newsletter-member-wrap input[type="time"], 
    .ht-newsletter-member-wrap input[type="datetime"],
    .ht-newsletter-member-wrap input[type="datetime-local"], 
    .ht-newsletter-member-wrap input[type="color"],
    .ht-newsletter-member-wrap input[type="file"],
    .ht-newsletter-member-wrap select,
    .ht-newsletter-member-wrap textarea,
    div#newsletter  .ht-newsletter-member-wrap input::placeholder,
   div#newsletter  .ht-newsletter-member-wrap textarea::placeholder {color: '. $newsletterformTextColor.';}
      .ht-newsletter-member-wrap input[type="text"], 
    .ht-newsletter-member-wrap input[type="email"], 
    .ht-newsletter-member-wrap input[type="url"], 
    .ht-newsletter-member-wrap input[type="password"], 
    .ht-newsletter-member-wrap input[type="search"], 
    .ht-newsletter-member-wrap input[type="number"], 
    .ht-newsletter-member-wrap input[type="tel"], 
    .ht-newsletter-member-wrap input[type="range"], 
    .ht-newsletter-member-wrap input[type="date"], 
    .ht-newsletter-member-wrap input[type="month"], 
    .ht-newsletter-member-wrap input[type="week"], 
    .ht-newsletter-member-wrap input[type="time"], 
    .ht-newsletter-member-wrap input[type="datetime"],
    .ht-newsletter-member-wrap input[type="datetime-local"], 
    .ht-newsletter-member-wrap input[type="color"],
    .ht-newsletter-member-wrap input[type="file"],
    .ht-newsletter-member-wrap select,
    .ht-newsletter-member-wrap textarea
    {background-color: '. $newsletterformbgColor.'!important; }
    #newsletter .ht-newsletter-member-wrap input[type="submit"] {color: '. $newsletterbtnTextColor.';}


    #newsletter .ht-newsletter-member-wrap input[type="submit"]:hover {color: '. $newsletterbtnTexthoverColor.';}

#newsletter .ht-newsletter-member-wrap input[type="submit"] {
    background: -webkit-gradient(to right,'. $newsletterbtnbgColor1.' 0%,'. $newsletterbtnbgColor2.' 20%,'. $newsletterbtnbgColor2.' 50%,'. $newsletterbtnbgColor1.' 100%);
    background: linear-gradient(to right,'. $newsletterbtnbgColor1.' 0%,'. $newsletterbtnbgColor2.' 20%,'. $newsletterbtnbgColor2.' 50%,'. $newsletterbtnbgColor1.' 100%);
    background-size: 500%;
}

    .apointment-box .ht-newsletter-member-wrap h3, 
    .apointment-box .ht-newsletter-member-wrap h2, 
     #newsletter .ht-newsletter-member-wrap{color: '. $newslettertextColor.';}
 #newsletter .ht-newsletter-member-wrap label{color: '. $newsletterlabelColor.';} 

    ';



    // For Footer

if(get_theme_mod('luzuk_premium_footer_section_background','on') == 'on' ){

    $bgimg = get_theme_mod('luzuk_footer_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/footerbg.jpg';

    $custom_css .= '.footer-area{background-image: url("'.$img.'");background-position: top;background-size: cover;}';
}else{
    $color = get_theme_mod('luzuk_footer_bg_color', '#000');
    if('#000' != $color){
        $custom_css .= '.footer-area{background-color: '.$color.';}';
    }
}
// colors

$FooterAreaTitleColor = get_theme_mod('footerarea_title_color', '#fff');
$FooterAreaTextColor = get_theme_mod('footerarea_text_color', '#8e8d89');
$FooterAreaiconColor = get_theme_mod('footerarea_icon_color', '#4b91f1');
$FooterAreasiconColor = get_theme_mod('footerarea_sicon_color', '#8e8d89');
$FooterAreasiconhoverColor = get_theme_mod('footerarea_siconhover_color', '#4b91f1');

$FooterAreahglightsctextColor = get_theme_mod('footerarea_hglightsctext_color', '#4b91f1');
$FooterAreamenuColor = get_theme_mod('footerarea_menu_color', '#989795');
$FooterAreadatextColor = get_theme_mod('footerarea_datext_color', '#989795');

$FooterAreatableborderColor = get_theme_mod('footerarea_tableborder_color', '#2d292a');

$FooterAreaformtextColor = get_theme_mod('footerarea_formtext_color', '#b2b2b2');
$FootermenuhoverColor = get_theme_mod('footerarea_menuhover_color', '#4b91f1');
$FooteractivemenuColor = get_theme_mod('footerarea_activemenu_color', '#4b91f1');
$FooterformtextlabelColor = get_theme_mod('footerarea_formtextlabel_color', '#989795');
$footerareabuttontextColor = get_theme_mod('footerarea_formbuttontext_color', '#4b91f1');

$footerareabuttonButtonborderColor = get_theme_mod('footerareabutton_border_color', '#4b91f1');

$footerareaotherfbgsColor = get_theme_mod('footerarea_otherfbgs_color', '#eeeeee');

$footerareaoverlayColor = get_theme_mod('footerarea_overlay_color', '#000');

$custom_css .= 'footer#footer.footer-area .widget-title {color: '.$FooterAreaTitleColor.';}
.footer-area p, .footer-area caption, .footer-area li, .footer-area table td,.footer-text, .footer-text a, .footer-area input[type="submit"], .footer_facility-text, .footer-area .textwidget{color: '.$FooterAreaTextColor.';}
.footer-area i.fa{color: '.$FooterAreaiconColor.';}
 .footer-area .social-profile-icons ul li a i{color: '.$FooterAreasiconColor.';}
.footer-area .social-profile-icons ul li a i.fa:hover{color: '.$FooterAreasiconhoverColor.';}

.footer-area p span{color: '.$FooterAreahglightsctextColor.';}
.footer-area li a,
.footer-area .tagcloud a,
.footer-area li:before{color: '.$FooterAreamenuColor.';}


.footer-area span.post-date, .footer-area .widget_calendar table tbody td, .footer-area .widget_calendar table tbody td a, .footer-area .widget_calendar table tbody td#today a{color: '.$FooterAreadatextColor.';}
.footer-area input[type="text"], .footer-area input[type="email"], .footer-area input[type="url"], .footer-area input[type="password"], .footer-area input[type="search"], .footer-area input[type="number"], .footer-area input[type="tel"], .footer-area input[type="range"], .footer-area input[type="date"], .footer-area input[type="month"], .footer-area input[type="week"], .footer-area input[type="time"], .footer-area input[type="datetime"], .footer-area input[type="datetime-local"], .footer-area input[type="color"], .footer-area textarea, footer#footer.footer-area select, .footer-area table tr, .footer-area figure.gallery-item img{border-color: '.$FooterAreatableborderColor.';}
  footer#footer.footer-area .widget-title, .footer-area .widget_recent_entries ul li{border-bottom-color: '.$FooterAreatableborderColor.';}
  .single-footer-2{border-left-color: '.$FooterAreatableborderColor.';}

.footer-area input[type="text"]::placeholder, .footer-area input[type="email"]::placeholder, .footer-area input[type="url"]::placeholder, .footer-area input[type="password"]::placeholder, .footer-area input[type="search"]::placeholder, .footer-area input[type="number"]::placeholder, .footer-area input[type="tel"]::placeholder, .footer-area input[type="range"]::placeholder, .footer-area input[type="date"]::placeholder, .footer-area input[type="month"]::placeholder, .footer-area input[type="week"]::placeholder, .footer-area input[type="time"]::placeholder, .footer-area input[type="datetime"]::placeholder, .footer-area input[type="datetime-local"]::placeholder, .footer-area input[type="color"]::placeholder, .footer-area textarea::placeholder,
.footer-area input[type="text"], .footer-area input[type="email"], .footer-area input[type="url"], .footer-area input[type="password"], .footer-area input[type="search"], .footer-area input[type="number"], .footer-area input[type="tel"], .footer-area input[type="range"], .footer-area input[type="date"], .footer-area input[type="month"], .footer-area input[type="week"], .footer-area input[type="time"], .footer-area input[type="datetime"], .footer-area input[type="datetime-local"], .footer-area input[type="color"], .footer-area textarea, .footer-area select, .footer-area .widget.widget_categories select{color: '.$FooterAreaformtextColor.';}
.footer-area li a:hover, .footer-area .tagcloud a:hover, .footer-area li.current_page_item a:hover, .footer-area li:hover:before, .footer-text a:hover, .footer-area li.current_page_item:hover:before{color: '.$FootermenuhoverColor.';}
.footer-area li.current_page_item a, .footer-area li.current_page_item:before{color: '.$FooteractivemenuColor.';}
footer#footer label span, .footer-area div.wpcf7 input[type="file"], .footer-area .widget_calendar table thead tr th,
footer#footer div.wpcf7 p{color: '.$FooterformtextlabelColor.';}

 .footer-area .widget_calendar tfoot tr td a, .footer-area .widget_calendar tfoot tr td a, .footer-area .widget_calendar tfoot tr td a:hover{color: '.$footerareabuttontextColor.';}

.footer-area input[type="submit"], .footer-area .widget_calendar tfoot tr td a,
.footer-area .s-footer .textwidget p a{color: '.$footerareabuttontextColor.';}
.footer-area input[type="submit"], .footer-area .widget_calendar tfoot tr td a, .footer-area .s-footer .textwidget p a{border-bottom-color: '.$footerareabuttonButtonborderColor.';}


.footer-area .widget.widget_categories select option,
.footer-area .widget.widget_archive select option{background-color: '.$footerareaotherfbgsColor.';}

.footer-area .overlay{background-color: '.$footerareaoverlayColor.';}

';

//colors

$Innergalleryareaghovericoncolor = get_theme_mod('Innergalleryarea_ghovericonColor', '#fff');
$Innergalleryareaghovericonbgcolor1 = get_theme_mod('Innergalleryarea_ghovericonbgColor1', '#441e87');
$Innergalleryareaghovericonbgcolor2 = get_theme_mod('Innergalleryarea_ghovericonbgColor2', '#4b91f1');

$custom_css .= '
#innerpage-box .whuchooseus-gall:hover i, #innerpage-box .whuchooseus-gall.hover i{color: '.$Innergalleryareaghovericoncolor.';}
#innerpage-box .whuchooseus-gall:hover i, #innerpage-box .whuchooseus-gall.hover i{
       background: -webkit-gradient(to right, '.$Innergalleryareaghovericonbgcolor1.' 0%,'.$Innergalleryareaghovericonbgcolor2.' 20%, '.$Innergalleryareaghovericonbgcolor2.' 50%, '.$Innergalleryareaghovericonbgcolor1.' 100%);
    background: linear-gradient(to right, '.$Innergalleryareaghovericonbgcolor1.' 0%,'.$Innergalleryareaghovericonbgcolor2.' 20%, '.$Innergalleryareaghovericonbgcolor2.' 50%, '.$Innergalleryareaghovericonbgcolor1.' 100%);
    background-size: 500%;
}


';

// faq inner page colors
$faqinnerpagetitleColor = get_theme_mod('luzuk_faqinnerpagetitleColor', '#000');
$faqinnerpagetitlebgColor = get_theme_mod('luzuk_faqinnerpagetitlbgColor', '#fff');

$faqinnerpagetitleboxborderColor = get_theme_mod('luzuk_faqinnerpagetitleboxborderColor', '#e9e7e7');
$faqinnerpagetitleIconColor = get_theme_mod('luzuk_faqinnerpagetitleIconColor', '#4a8cec');

$faqinnerpagetextcColor = get_theme_mod('luzuk_faqinnerpagetextcColor', '#000');
$faqinnerpageansbg1Color = get_theme_mod('luzuk_faqinnerpageansbg1Color', '#edf0fc');


$custom_css .= 'main#innerpage-box div#content-box h3.faq-title,
main#innerpage-box div#content-box h3.faq-title small{color: '.$faqinnerpagetitleColor.';}
div#content-box .faq{background-color: '.$faqinnerpagetitlebgColor.';}

div#content-box .faq{border-color: '.$faqinnerpagetitleboxborderColor.';}
div#content-box .faq .faq-content{border-bottom-color: '.$faqinnerpagetitleboxborderColor.';}

div#content-box .faq-content button.accordion:before{color: '.$faqinnerpagetitleIconColor.';}

div#content-box .faq-content p{color: '.$faqinnerpagetextcColor.';}

div#content-box .faq-content div.panel{background-color: '.$faqinnerpageansbg1Color.';}

';
       //Inner page title color

    $innerpageheadeolyclr = get_theme_mod('luzuk_template_innerpage_headeolyclr', '#000');
    $innertitleColor = get_theme_mod('luzuk_template_innerpage_titlecolor', '#fff');
    $innertitlebgColor1 = get_theme_mod('luzuk_template_innerpage_bgcolor1', '#eceffc');
    $innertitlebgColor2 = get_theme_mod('luzuk_template_innerpage_bgcolor2', '#fff');
    $innerbreadcrumbtitleColor = get_theme_mod('luzuk_template_innerpage_breadcrumbtitlecolor', '#fff');
    $innerbreadcrumbcurrenttitleColor = get_theme_mod('luzuk_template_innerpage_breadcrumbcurrenttitlecolor', '#fff');
    $innerbreadcrumbcurrenttitlehovercolor = get_theme_mod('luzuk_template_innerpage_breadcrumbcurrenttitlehovercolor', '#4a8cec');
    $innerbreadcrumbbgbackttoparrcbgcolorcolor = get_theme_mod('luzuk_template_innerpage_backttoparrcbgcolor', '#441e87');
    $innerbreadcrumbbgbackttoparrbackcolbgcolor = get_theme_mod('luzuk_template_innerpage_backttoparrbackcolbgcolor', '#fd3e1c');
    $innerbreadcrumbbgbackttoparrcbghvrcolor = get_theme_mod('luzuk_template_innerpage_backttoparrcbghvrcolor', '#4b91f1');
    $innerbreadcrumbbgbackttoparrbackcolbghvrscolor = get_theme_mod('luzuk_template_innerpage_backttoparrbackcolbghvrscolor', '#ffffff');

    $custom_css .= '.ht-main-title, .single-productpage .ht-main-title,
    .ht-main-title small {color: '.$innertitleColor.';}

    .page-main-header .overlay1{background-color: '.$innerpageheadeolyclr.';}

    .page-main-header {
        background: linear-gradient(0deg,'.$innertitlebgColor1.','.$innertitlebgColor2.' 80%) no-repeat;
    }
        .breadcrumbbox span, .woocommerce .woocommerce-breadcrumb{color: '.$innerbreadcrumbtitleColor.';}
    .breadcrumbbox span a , .woocommerce .woocommerce-breadcrumb a{color: '.$innerbreadcrumbcurrenttitleColor.';}
    .breadcrumbbox span a:hover, #content-box .breadcrumbbox span a:hover, .woocommerce .woocommerce-breadcrumb a:hover{color: '.$innerbreadcrumbcurrenttitlehovercolor.';}
    #back2Top{color: '.$innerbreadcrumbbgbackttoparrcbgcolorcolor.';}
    #back2Top:hover{color: '.$innerbreadcrumbbgbackttoparrcbghvrcolor.';}';

    
    $headerinnerpagemaininnerpagemainsectionboxsectionboxColor = get_theme_mod('luzuk_template_innerpagemainsectionbox_color', '#ffffff');
    $innerpagemainsectioninnerpagemainsectionboxheading1 = get_theme_mod('luzuk_template_innerpagemainsectionboxheading1_color', '#000');
    $innerpagemainsectioninnerpagemainsectionboxheading2 = get_theme_mod('luzuk_template_innerpagemainsectionboxheading2_color', '#000');
    $innerpagemainsectioninnerpagemainsectionboxheading3 = get_theme_mod('luzuk_template_innerpagemainsectionboxheading3_color', '#000');
    $innerpagemainsectioninnerpagemainsectionboxheading4 = get_theme_mod('luzuk_template_innerpagemainsectionboxheading4_color', '#000');
    $innerpagemainsectioninnerpagemainsectionboxheading5 = get_theme_mod('luzuk_template_innerpagemainsectionboxheading5_color', '#000');
    $innerpagemainsectioninnerpagemainsectionboxheading6 = get_theme_mod('luzuk_template_innerpagemainsectionboxheading6_color', '#000');

    $innerpagemainsectioninnerpagemainsectionboxheadingborderc1 = get_theme_mod('luzuk_template_innerpagemainsectionboxheadingborderc1_color', '#000');

$innerpagesidebartitleColor = get_theme_mod('template_innerpage_contentboxsidebartitlecolor', '#676767');
  $innerpagesidebartitleborderColor = get_theme_mod('template_innerpage_contentboxsidebartitlebordercolor', '#000');

  $innerproductpageboldtextColor = get_theme_mod('template_innerpage_productpageboldtextcolor', '#000');

    $innercartpageproducttitleColor = get_theme_mod('template_innerpage_cartpageproducttitlecolor', '#000');


    $headerinnerpagemainsectionboxtextColor = get_theme_mod('luzuk_template_innerpagemainsectionboxtext_color', '#666');
    $innerpagemainsectionboxtextlinksColor = get_theme_mod('luzuk_template_innerpagemainsectionboxtextlinks_color', '#666');
    $innerpagemainsectionboxtextlinkshoverColor = get_theme_mod('luzuk_template_innerpagemainsectionboxtextlinkshvrs_color', '#4b91f1');
    $innerpagemainsectionboxtextlinksiconColor = get_theme_mod('luzuk_template_innerpagemainsectionboxtextlinksicon_color', '#4b91f1');
    $innerpagemainsectionboxtextlinksiconbgssclrlinksiconColor = get_theme_mod('luzuk_template_innerpagemainsectionboxtextlinksiconbgssclr_color', '#ffffff');

  $headerinnerpageproductpriceColor = get_theme_mod('luzuk_template_innerpageproductprice_color', '#868b9e');
    $headerinnerpageproductpricedelColor = get_theme_mod('luzuk_template_innerpageproductpricedel_color', '#7c8491');
     $headerinnerpageproductimghovericonColor = get_theme_mod('luzuk_template_innerpageproductimghovericon_color', '#cfd0d5');
     $headerinnerpageproductimghovericonbgColor = get_theme_mod('luzuk_template_innerpageproductimghovericonbg_color', '#fff');
 $headerinnerpagepaginationColor = get_theme_mod('luzuk_template_innerpagepagination_color', '#000');
  $headerinnerpagepaginationbgColor = get_theme_mod('luzuk_template_innerpagepaginationbg_color', '#fff');
  $headerinnerpagepaginationborderColor = get_theme_mod('luzuk_template_innerpagepaginationborder_color', '#eaeaea');

 $headerinnerpagepaginationactiveColor = get_theme_mod('luzuk_template_innerpagepaginationactive_color', '#fff');
  $headerinnerpagepaginationbgactiveColor = get_theme_mod('luzuk_template_innerpagepaginationbgactive_color', '#441e87');
  $headerinnerpagepaginationborderactiveColor = get_theme_mod('luzuk_template_innerpagepaginationborderactive_color', '#441e87');



   $innerpageblogtitlecolor = get_theme_mod('luzuk_template_innerpage_blogtitlecolor', '#3d3d3d');
    $innerpageblogtitlehovercolor = get_theme_mod('luzuk_template_innerpage_blogtitlehovercolor', '#441e87');
    $innerpageblogsocialColors = get_theme_mod('luzuk_template_innerpage_blogsocialcolor', '#fff');
    $innerpageblogsocialbgColors = get_theme_mod('luzuk_template_innerpage_blogsocialbgcolor', '#516bec');
    $innerpageblogsocialhoverColors = get_theme_mod('luzuk_template_innerpage_blogsocialhovercolor', '#fff');
    $innerpageblogsocialbghoverColors = get_theme_mod('luzuk_template_innerpage_blogsocialbghovercolor', '#4b91f1');
     $innerpageblogbuttonColors = get_theme_mod('luzuk_template_innerpage_blogbuttoniconcolor', '#4b91f1');
  //  $innerpageblogbuttonhoverColors = get_theme_mod('luzuk_template_innerpage_blogbuttoniconhovercolor', '#fff');
    $innerpageblogbuttonbgColors = get_theme_mod('luzuk_template_innerpage_blogbuttoniconbgcolor', '#fff');
   // $innerpageblogbuttonbghoverColors = get_theme_mod('luzuk_template_innerpage_blogbuttoniconbghovercolor', '#000');
        $innerpageblogimgoverlaycolor1 = get_theme_mod('luzuk_template_innerpage_blogimgoverlaycolor1', '#441e87');
    $innerpageblogimgoverlaycolor2 = get_theme_mod('luzuk_template_innerpage_blogimgoverlaycolor2', '#4b91f1');



    $innerpagemainsectionsidebarborderrs = get_theme_mod('luzuk_template_innerpagemainsectionsidebarborderrs_color', '#e9e7e7');

    $innerpagesidebardaytxtColors = get_theme_mod('luzuk_template_innerpagesidebardaytxt_color', '#ffffff');
    $innerpagesidebardaybgsstxtColors = get_theme_mod('luzuk_template_innerpagesidebardaybgsstxt_color', '#4b91f1');

       $innerpageblockquoteColors = get_theme_mod('luzuk_template_innerpagesblockquote_color', '#f2f2f2');

    $custom_css .= '#innerpage-box, .inner_contentbox {background-color: '.$headerinnerpagemaininnerpagemainsectionboxsectionboxColor.';}body.page-template-default main#innerpage-box h1{color: '.$innerpagemainsectioninnerpagemainsectionboxheading1.';}
    body.page-template-default main#innerpage-box h2,
    main#innerpage-box h2,
    main#innerpage-box h2 a, 
    main#innerpage-box h2 a small,
    .woocommerce #reviews h2 small{color: '.$innerpagemainsectioninnerpagemainsectionboxheading2.';}
    main#innerpage-box h3{color: '.$innerpagemainsectioninnerpagemainsectionboxheading3.';}
    body.page-template-default main#innerpage-box h4,
    div#commentsAdd h4,
    main#innerpage-box h4
   {color: '.$innerpagemainsectioninnerpagemainsectionboxheading4.';}
   main#innerpage-box h5,
    body.page-template-default main#innerpage-box h5{color: '.$innerpagemainsectioninnerpagemainsectionboxheading5.';}
    main#innerpage-box h6,
    div#blog-box.innerpage-whitebox h6{color: '.$innerpagemainsectioninnerpagemainsectionboxheading6.';}

    

body.page-template-default main#innerpage-box h1:after, body.page-template-default main#innerpage-box h2:after, body.page-template-default main#innerpage-box h3:after, body.page-template-default main#innerpage-box h4:after, body.page-template-default main#innerpage-box h5:after, body.page-template-default main#innerpage-box h6:after, .page-template-templates main#innerpage-box h1:after, .page-template-templates main#innerpage-box h2:after, .page-template-templates main#innerpage-box h3:after, .page-template-templates main#innerpage-box h4:after, .page-template-templates main#innerpage-box h5:after, .page-template-templates main#innerpage-box h6:after{border-left-color: '.$innerpagemainsectioninnerpagemainsectionboxheadingborderc1.';}

.woocommerce ul.products li.product .price .amount{color: '.$headerinnerpageproductpriceColor.' !important;}
.woocommerce ul.products li.product .price del .amount{color: '.$headerinnerpageproductpricedelColor.' !important;}

main#innerpage-box h2.woocommerce-loop-product__title:before, .woocommerce ul.products li.product .button:before{color: '.$headerinnerpageproductimghovericonColor.';}
main#innerpage-box h2.woocommerce-loop-product__title:before, .woocommerce ul.products li.product .button:before{background-color: '.$headerinnerpageproductimghovericonbgColor.';}

.woocommerce div.product .product_meta .posted_in, .woocommerce div.product .product_meta .tagged_as,
.woocommerce div.product .product_meta span.sku_wrapper {color: '.$innerproductpageboldtextColor.';}

div#content-box table.shop_table.shop_table_responsive.cart.woocommerce-cart-form__contents tr td a, .woocommerce div.product form.cart table.variations tr td label {color: '.$innercartpageproducttitleColor.';}

.woocommerce nav.woocommerce-pagination ul li a, .pagingation a{color: '.$headerinnerpagepaginationColor.';}
.woocommerce nav.woocommerce-pagination ul li a, .pagingation a{background-color: '.$headerinnerpagepaginationbgColor.';}
.woocommerce nav.woocommerce-pagination ul li a, .pagingation a{border-color: '.$headerinnerpagepaginationborderColor.';}

body.page-template-default main#innerpage-box h2, body.page-template-default main#innerpage-box h1, body.page-template-default main#innerpage-box h3, body.page-template-default main#innerpage-box h4, body.page-template-default main#innerpage-box h5, body.page-template-default main#innerpage-box h6, main#innerpage-box h2, #blog-box h4, h1.product_title.entry-title,
body.page-template-default main#innerpage-box h1,
body.page-template-default main#innerpage-box h2,
body.page-template-default main#innerpage-box h3,
body.page-template-default main#innerpage-box h4,
body.page-template-default main#innerpage-box h5,
body.page-template-default main#innerpage-box h6,

.page-template-templates main#innerpage-box h1,
.page-template-templates main#innerpage-box h2,
.page-template-templates main#innerpage-box h3,
.page-template-templates main#innerpage-box h4,
.page-template-templates main#innerpage-box h5,
.page-template-templates main#innerpage-box h6,

.single main#innerpage-box h1,
.single main#innerpage-box h2,
.single main#innerpage-box h3,
.single main#innerpage-box h4,
.single main#innerpage-box h5,
.single main#innerpage-box h6
{border-left-color: '.$innerpagemainsectioninnerpagemainsectionboxheadingborderc1.';}

.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .pagingation .current, .pagingation a:hover,
.woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-page nav.woocommerce-pagination ul li span.current, .woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li span.current,
.woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover
{color: '.$headerinnerpagepaginationactiveColor.';}
.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .pagingation .current, .pagingation a:hover{background-color: '.$headerinnerpagepaginationbgactiveColor.';}
.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .pagingation .current, .pagingation a:hover,
.woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-page nav.woocommerce-pagination ul li span.current, .woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li span.current,
.woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover
{border-color: '.$headerinnerpagepaginationborderactiveColor.';}

   .widget-area h3.widget-title, 
    #blog-box .widget-area .widget-title,
   .widget-area .widget-title,
    main#innerpage-box h4.widget-title,
    main#innerpage-box h3.widget-title,
    #innerpage-box .widget-area .widget-title,
    .widget-area .widget h4
     {color: '.$innerpagesidebartitleColor.';}
      .widget-area .widget-title{border-color: '.$innerpagesidebartitleColor.';}

  .widget-area .widget-title,
    main#innerpage-box h4.widget-title,
    main#innerpage-box h3.widget-title{background-color: '.$innerpagesidebartitleborderColor.';}
body.page-template-default #innerpage-box .widget-area .widget-title:after, .page-template-templates #innerpage-box .widget-area .widget-title:after{background-color: '.$innerpagesidebartitleborderColor.';}
    
        .widget-area .widget h4:after, .woocommerce div.product form.cart .button, .woocommerce-page div.product form.cart .button, .woocommerce #content div.product form.cart .button, .woocommerce-page #content div.product form.cart .button{background-color: '.$innerpagesidebartitleborderColor.' ;}


.woocommerce div.product .product_meta .posted_in, .woocommerce div.product .product_meta .tagged_as,
.woocommerce div.product .product_meta span.sku_wrapper {color: '.$innerproductpageboldtextColor.';}


#innerpage-box p, #content-box ul li, #content-box ol li, main#innerpage-box ul#recentcomments li, #blog-box .inner-blog-excerpt,
#secondary input[type="text"],
#secondary input[type="email"],
#secondary input[type="url"],
#secondary input[type="password"],
#secondary input[type="search"],
#secondary input[type="number"],
#secondary input[type="tel"],
#secondary input[type="range"],
#secondary input[type="date"], 
#secondary input[type="month"], 
#secondary input[type="week"], 
#secondary input[type="time"], 
#secondary input[type="datetime"], 
#secondary input[type="datetime-local"], 
#secondary input[type="color"], 
#secondary textarea, 
#secondary select,
#secondary label,
div#secondary select option,
#secondary input::placeholder,
#secondary textarea::placeholder,
#secondary select::placeholder,
#secondary input[type="file"],
    main#innerpage-box .widget_calendar table tbody td,
    main#innerpage-box li,
    div#secondary caption,
    .single_post .post-date-publishable,
    main#innerpage-box textarea#comment,
    .total-comments,
    .woocommerce .woocommerce-ordering select,
    .woocommerce-product-search .search-field::placeholder,
    table.shop_table.woocommerce-checkout-review-order-table,
    .woocommerce form .form-row .input-text::placeholder, 
    .woocommerce-page form .form-row .input-text::placeholder,
    .woocommerce form .form-row input.input-text::placeholder, 
    .woocommerce form .form-row textarea::placeholder,
    main#innerpage-box input#billing_email,
    .select2-container--default .select2-selection--single .select2-selection__rendered,
    div#content-box input#account_email,
    main#innerpage-box input#account_display_name,
    .widget.widget_categories select,
    main#innerpage-box .select2-container--default .select2-selection--single .select2-selection__placeholder,
    div#secondary select,
    main#innerpage-box .woocommerce-product-search .search-field,
    main#innerpage-box .woocommerce-product-search .search-field::placeholder,
    .woocommerce .woocommerce-result-count,
    .woocommerce .widget_price_filter .price_slider_amount,
    .select2-container--default .select2-results>.select2-results__options,
    .select2-results__option[aria-selected], 
    .select2-results__option[data-selected],
    .woocommerce #reviews #comments ol.commentlist li .comment-text p.meta, 
    .woocommerce-page #reviews #comments ol.commentlist li .comment-text p.meta,
    .comment-form-rating,
    .comment-respond .comment-reply-title,
    .woocommerce .product_meta,
    .woocommerce-error, 
    .woocommerce-info, 
    .woocommerce-message,
    .woocommerce-MyAccount-content address,
    .woocommerce-MyAccount-content legend,
    .woocommerce-MyAccount-content input[type="text"],
    .woocommerce table thead th,
    .woocommerce form .form-row input.input-text, 
    .woocommerce form .form-row textarea,
    .woocommerce table.shop_table td,
    .woocommerce .quantity .qty,
    input#coupon_code::placeholder,
    input#coupon_code,
    .woocommerce table.shop_table tbody th, 
    .error404 .oops-text{color: '.$headerinnerpagemainsectionboxtextColor.';}


    .price .amount{color: '.$headerinnerpagemainsectionboxtextColor.' !important;}

    .widget-area a, .woocommerce-MyAccount-navigation-link a, .entry-content p a, div#content-box a, div#sidebars span.product-title, div#sitemap-box ul li a, main#innerpage-box .woocommerce-info a.showcoupon,
    .woocommerce .product_meta a,
    .widget-area ul ul li a{color: '.$innerpagemainsectionboxtextlinksColor.';}
#content-box ul li:before, #content-box ol li:before,
    main#innerpage-box div#sitemap-box ul li a:before{color: '.$innerpagemainsectionboxtextlinksiconColor.';}
#content-box ol li:before{background-color: '.$innerpagemainsectionboxtextlinksiconbgssclrlinksiconColor.';}
    .widget-area a:hover, .woocommerce-MyAccount-navigation-link a:hover, .entry-content p a:hover, div#content-box a:hover, div#content-box a:hover small, div#sidebars span.product-title:hover, .widget-area li a:hover, div#content-box p a:hover, div#sitemap-box ul li a:hover, div#content-box a.shipping-calculator-button:hover, main#innerpage-box .woocommerce-info a.showcoupon:hover, div#content-box div#payment a.woocommerce-privacy-policy-link:hover, div#content-box .woocommerce-MyAccount-navigation-link a:hover,
    div#content-box a.post-edit-link:hover,
    div#content-box .woocommerce-MyAccount-content p a:hover,
    div#content-box a.shipping-calculator-button:hover,
    div#content-box div#payment a:hover,
    .woocommerce .product_meta a:hover{color: '.$innerpagemainsectionboxtextlinkshoverColor.';}


    .widget-area .widget,
#secondary input[type="text"],
    main#innerpage-box .woocommerce-product-search .search-field,
    .woocommerce form .form-row input.input-text, 
    .woocommerce form .form-row textarea,
    .select2-container--default .select2-selection--single,
#innerpage-box .comment-respond,
    main#innerpage-box div#commentsAdd textarea#comment,
    .widget.widget_categories select,
    div#secondary .select2-container--default .select2-selection--single,
    .single_post .post-date-publishable,
    div#secondary select,
    .single-productpage #sidebars button,
    .woocommerce .widget_shopping_cart .buttons a, 
    .woocommerce.widget_shopping_cart .buttons a,
    .woocommerce ul.cart_list li img, 
    .woocommerce-page ul.cart_list li img, 
    .woocommerce ul.product_list_widget li img, 
    .woocommerce-page ul.product_list_widget li img,
    .woocommerce .widget_shopping_cart .total, 
    .woocommerce.widget_shopping_cart .total,
    .woocommerce .products ul, 
    .woocommerce-page .products ul, 
    .woocommerce ul.products, 
    .woocommerce-page ul.products,
    .woocommerce-page .woocommerce-ordering select,
    .woocommerce div.product form.cart .button, 
    .woocommerce-page div.product form.cart .button, 
    .woocommerce #content div.product form.cart .button, 
    .woocommerce-page #content div.product form.cart .button,
    .woocommerce #review_form #respond textarea,
    .woocommerce #review_form #respond .form-submit input,
    .woocommerce table.shop_table,
    .woocommerce table.shop_table td,
    .woocommerce table.shop_table tbody th, 
    .woocommerce table.shop_table tfoot td, 
    .woocommerce table.shop_table tfoot th,
    .woocommerce-checkout #payment ul.payment_methods,
    .woocommerce .cart .button, 
    .woocommerce .cart input.button,
    .woocommerce-cart .cart-collaterals .cart_totals tr th,
    .woocommerce-cart .cart-collaterals .cart_totals tr td,
    .woocommerce-cart table.cart td.actions .coupon .input-text,
    input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="color"], textarea,

    .widget-area .widget, .woocommerce ul.products li.product a img, .widget-area ul, .widget-area .textwidget, .widget-area .woocommerce-product-search , .widget-area form#searchform, .widget-area .widget_rating_filter ul, .widget-area .woocommerce .widget_shopping_cart_content p, .widget-area div#calendar_wrap, .widget-area .widget_media_image img, .widget-area .tagcloud, 
    input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="color"], textarea,
    .woocommerce .woocommerce-widget-layered-nav-list,
    .widget-area .social-profile-icons u,
    #secondary .gallery-columns-3
    {border-color: '.$innerpagemainsectionsidebarborderrs.'!important;;}
    .woocommerce table.shop_attributes th, .woocommerce table.shop_attributes td{border-bottom-color: '.$innerpagemainsectionsidebarborderrs.';}
    .woocommerce table.shop_attributes{border-top-color: '.$innerpagemainsectionsidebarborderrs.';}
       .woocommerce table.shop_attributes th, .woocommerce table.shop_attributes td,.woocommerce div.product .product_title, .woocommerce div.product form.cart, .woocommerce div.product .woocommerce-tabs ul.tabs, .widget-area li, main#innerpage-box .widget-area .tagcloud a, .widget-area .widget h4, #innerpage-box .widget-area .widget-title{border-bottom-color: '.$innerpagemainsectionsidebarborderrs.';}
    .woocommerce table.shop_attributes, .woocommerce div.product form.cart, .woocommerce #content div.product .woocommerce-tabs, .woocommerce div.product .woocommerce-tabs, .woocommerce-page #content div.product .woocommerce-tabs, .woocommerce-page div.product .woocommerce-tabs{border-top-color: '.$innerpagemainsectionsidebarborderrs.';}


    .woocommerce ul.products li.product, 
    .woocommerce-page ul.products li.product,
    .woocommerce ul.products li.product a img,
    .woocommerce div.product div.images img,
    .quantity input[type="number"],
    .woocommerce .products ul, 
    .woocommerce-page .products ul, 
    .woocommerce ul.products, 
    .woocommerce-page ul.products{border-color: '.$innerpagemainsectionsidebarborderrs.' !important;}
    div#secondary .widget_calendar table thead tr th, .pagination .page-numbers, .pagination .page-numbers:hover{color: '.$innerpagesidebardaytxtColors.';}
    div#secondary .widget_calendar table thead tr th{background-color: '.$innerpagesidebardaybgsstxtColors.';}

blockquote{background-color: '.$innerpageblockquoteColors.';}

  
main#innerpage-box #blog-box h2, main#innerpage-box #blog-box h2 small{color: '.$innerpageblogtitlecolor.';}   
main#innerpage-box #blog-box .inner-blogpost:hover h2, main#innerpage-box #blog-box .inner-blogpost:hover h2 small{color: '.$innerpageblogtitlehovercolor.';}   

.socialMedia ul li a.site-button, main#innerpage-box #blog-box .socialMedia ul li a.site-button{color: '.$innerpageblogsocialColors.';}
.socialMedia ul li a.site-button, main#innerpage-box #blog-box .socialMedia ul li a.site-button{background-color: '.$innerpageblogsocialbgColors.';}

.socialMedia ul:hover li.share-button a.site-button,
.socialMedia ul li a.site-button:hover, main#innerpage-box #blog-box .socialMedia ul li a.site-button:hover
{color: '.$innerpageblogsocialhoverColors.';}
.socialMedia ul:hover li.share-button a.site-button, main#innerpage-box #blog-box .socialMedia ul:hover li.share-button a.site-button, main#innerpage-box #blog-box .socialMedia ul li a.site-button:hover
{background-color: '.$innerpageblogsocialbghoverColors.';}


main#innerpage-box .inner-blogpost:hover .ht-blog-thumbnail .overlay .box .content > a:before{color: '.$innerpageblogbuttonColors.';}
main#innerpage-box .inner-blogpost:hover .ht-blog-thumbnail .overlay .box .content > a:before{
    background-color: '.$innerpageblogbuttonbgColors.';
}
.ht-blog-thumbnail .overlay .box .content > a:before{background-color: '.$innerpageblogbuttonbgColors.';}
main#innerpage-box .ht-blog-thumbnail .overlay{ background: linear-gradient(0deg,'.$innerpageblogimgoverlaycolor1.','.$innerpageblogimgoverlaycolor2.' 80%) no-repeat;}

    ';


    $innerpageallothrtheadtextcolcolor = get_theme_mod('luzuk_template_innerpageallothrtheadtextcolcolor_color', '#ffffff');
    $innerpageallothrtheadtextbgsscolcolorcolor = get_theme_mod('luzuk_template_innerpageallothrtheadtextbgsscolcolor_color', '#ffffff');

    $custom_css .= 'div#sitemap-box h3,
#blog-box .blog-read-more a,
    .socialMedia a,
    div#secondary input[type="submit"],
#commentsAdd input[type="submit"],
    .single-productpage #sidebars button,
    .widget_calendar tfoot tr td a, .widget_calendar tfoot tr td a:hover,
    button, input[type="button"], input[type="reset"], input[type="submit"],.woocommerce span.onsale
   {color: '.$innerpageallothrtheadtextcolcolor.';}
    .single-productpage #sidebars button{color: '.$innerpageallothrtheadtextcolcolor.' !important;}
    .woocommerce a.button, .woocommerce-page a.button,
    .woocommerce div.product form.cart .button,
    .woocommerce div.product .woocommerce-tabs ul.tabs li a,
    .woocommerce #review_form #respond .form-submit input,
    .woocommerce button.button,
    .select2-container--default .select2-results__option--highlighted[aria-selected], .select2-container--default .select2-results__option--highlighted[data-selected]{color: '.$innerpageallothrtheadtextcolcolor.' !important;}

    div#secondary select option,
    .select2-container--default .select2-results>.select2-results__options,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
    .woocommerce-page .woocommerce-ordering option,
    .woocommerce-MyAccount-content input[type="text"],
    .woocommerce-MyAccount-content input[type="email"],
    .woocommerce-MyAccount-content input[type="url"], 
    .woocommerce-MyAccount-content input[type="password"],
    .woocommerce form .form-row input.input-text,
    .woocommerce form .form-row textarea,
    .woocommerce-error, 
    .woocommerce-info, 
    .woocommerce-message{background-color: '.$innerpageallothrtheadtextbgsscolcolorcolor.' !important;}

   ';

    // Inner contact us page background color
 
    $ContactusdetailtitleColor = get_theme_mod('luzuk_contactus_titleColor', '#fff');
 
   $ContactusdetailiconColor = get_theme_mod('luzuk_contactus_detailiconColor', '#fff');
    $ContactusdetailinfoColor = get_theme_mod('luzuk_contactus_detailinfoColor', '#fff');
    $ContactusdetailemailColor = get_theme_mod('luzuk_contactus_detailemailColor', '#fff');
    $ContactusdetailemailhoverColor = get_theme_mod('luzuk_contactus_detailemailhoverColor', '#000');

     $ContactusboxColor = get_theme_mod('luzuk_contactus_boxColor', '#4b91f1');
      $Contactusbox1Color = get_theme_mod('luzuk_contactus_box1Color', '#441e87');

    $ContactusformlabelColor = get_theme_mod('luzuk_contactus_formlabelColor', '#fff');
    $ContactusformtextplaceColor = get_theme_mod('luzuk_contactus_formtextplaceColor', '#fff');
    $ContactusformborderbottomColor = get_theme_mod('luzuk_contactus_formborderbottomColor', '#f4f4f4');
    
    $ContactusformbtnColor = get_theme_mod('luzuk_contactus_formbtnColor', '#fff');
    $ContactusformbtnbgColor = get_theme_mod('luzuk_contactus_formbtnbgColor', '#4b91f1');
   
    $ContactusformbtnhoverColor = get_theme_mod('luzuk_contactus_formbtnhoverColor', '#4b91f1');
    $ContactusformbtnbghoverColor = get_theme_mod('luzuk_contactus_formbtnbghoverColor', '#fff');

     $ContactusformboxColor = get_theme_mod('luzuk_contactus_formboxColor', '#4b91f1');
    

    $ContactussocialtitleColor = get_theme_mod('luzuk_contactus_SocialtitleColor', '#fff');
     $ContactussocialtextColor = get_theme_mod('luzuk_contactus_SocialtextColor', '#fff');
    
    $ContactussocialColor = get_theme_mod('luzuk_contactus_SocialColor', '#fff');
    $ContactussocialhoverColor = get_theme_mod('luzuk_contactus_SocialhoverColor', '#441e87');
    $ContactussocialbghoverColor = get_theme_mod('luzuk_contactus_SocialbghoverColor', '#fff');

    $ContactussocialiconColor = get_theme_mod('luzuk_contactus_SocialiconColor', '#fff');

    $custom_css .= '#ht-contactus-wrap .contact_l_area, #ht-contactus-wrap .contact_l_area small, 
     #ht-contactus-wrap h1, #ht-contactus-wrap h1 small, main#innerpage-box .Address_area h4, main#innerpage-box .Address_area h4 small, 
    .page-template-contact-template  main#innerpage-box .Address_area h4, .page-template-contact-template  main#innerpage-box .Address_area h4 small,
.page-template-contact-template  main#innerpage-box .social_area h4 , .page-template-contact-template  main#innerpage-box .social_area h4 small{color: '.$ContactusdetailtitleColor.';}

    #ht-contactus-wrap .address-c-box{background-image: radial-gradient( circle farthest-corner at 10% 20%,'.$Contactusbox1Color.' 0%,'.$ContactusboxColor.' 100.3% );}

   #ht-contactus-wrap .Address_area{background-color: '.$ContactusformboxColor.';}
    

   #ht-contactus-wrap .contact_l_area i {color: '.$ContactusdetailiconColor.';}
    #ht-contactus-wrap .contact-info , #ht-contactus-wrap .contact-info p{color: '.$ContactusdetailinfoColor.';}
   #ht-contactus-wrap .contact-info a {color: '.$ContactusdetailemailColor.';}
  main#innerpage-box div#ht-contactus-wrap a:hover{color: '.$ContactusdetailemailhoverColor.';}

    #ht-contactus-wrap label, div#ht-contactus-wrap div.wpcf7 input[type="file"], div#ht-contactus-wrap div.wpcf7 p {color: '.$ContactusformlabelColor.';}
     #ht-contactus-wrap input[type="text"], 
     #ht-contactus-wrap input[type="email"], 
     #ht-contactus-wrap input[type="url"], 
     #ht-contactus-wrap input[type="password"], 
     #ht-contactus-wrap input[type="search"], 
     #ht-contactus-wrap input[type="number"], 
     #ht-contactus-wrap input[type="tel"], 
     #ht-contactus-wrap input[type="range"], 
     #ht-contactus-wrap input[type="date"], 
     #ht-contactus-wrap input[type="month"], 
     #ht-contactus-wrap input[type="week"], 
     #ht-contactus-wrap input[type="time"], 
     #ht-contactus-wrap input[type="datetime"],
     #ht-contactus-wrap input[type="datetime-local"], 
     #ht-contactus-wrap input[type="color"],
     #ht-contactus-wrap select,
     #ht-contactus-wrap textarea,
     #ht-contactus-wrap input::placeholder,
     #ht-contactus-wrap textarea::placeholder,
    #ht-contactus-wrap select::placeholder {color: '.$ContactusformtextplaceColor.';}
  #ht-contactus-wrap input[type="text"], #ht-contactus-wrap input[type="email"], #ht-contactus-wrap input[type="url"], #ht-contactus-wrap input[type="password"], #ht-contactus-wrap input[type="search"], #ht-contactus-wrap input[type="number"], #ht-contactus-wrap input[type="tel"], #ht-contactus-wrap input[type="range"], #ht-contactus-wrap input[type="date"], #ht-contactus-wrap input[type="month"], #ht-contactus-wrap input[type="week"], #ht-contactus-wrap input[type="time"], #ht-contactus-wrap input[type="datetime"], #ht-contactus-wrap input[type="datetime-local"], #ht-contactus-wrap input[type="color"], #ht-contactus-wrap select, #ht-contactus-wrap textarea {border-bottom-color: '.$ContactusformborderbottomColor.' !important;}


    #ht-contactus-wrap input[type="submit"] {color: '.$ContactusformbtnColor.';}
     #ht-contactus-wrap input[type="submit"] {background-color: '.$ContactusformbtnbgColor.';}

     #ht-contactus-wrap input[type="submit"]:hover{color: '.$ContactusformbtnhoverColor.';}
    #ht-contactus-wrap input[type="submit"]:hover{background-color: '.$ContactusformbtnbghoverColor.';}
   main#innerpage-box .social_area h4, main#innerpage-box .social_area h4 small{color: '.$ContactussocialtitleColor.';}
    main#innerpage-box .social_area .Contact_area_text{color: '.$ContactussocialtextColor.';}
    #ht-contactus-wrap .contact-sm-links li a {color: '.$ContactussocialColor.';}
  #ht-contactus-wrap .contact-sm-links li:hover a span.fa{color: '.$ContactussocialhoverColor.';}
#ht-contactus-wrap .contact-sm-links li a:hover span{background-color: '.$ContactussocialbghoverColor.';}

 .social_area i.fa{color: '.$ContactussocialiconColor.';}
    

    ';

    $custom = get_post_custom( $post->ID );

    $image_id = get_post_meta( $post->ID, '_listing_image_id', true );
    $thumbnail_html = wp_get_attachment_image_src( $image_id, 'larger');

    // echo '<pre />'; print_r($custom);
    if(!empty($custom['useColor']) && $custom['useColor'][0]==1){
        if( isset( $custom['page_bg_color'][0] ) ){
            $custom_css .= '#innerpage-box{background-color:'.$custom['page_bg_color'][0].';}';
        }
    }else{
        if( isset( $custom['_listing_image_id'][0]) ){
            $custom_css .= '#innerpage-box{background-image: url(\''.$thumbnail_html[0].'\');background-position: center;background-attachment: fixed;background-origin: content-box;background-size: cover;}';
        }
    }


    $custom_css .='.border{border:1px solid #fff;}';

    return punte_css_strip_whitespace($custom_css);
}