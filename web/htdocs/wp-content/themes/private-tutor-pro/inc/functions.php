<?php
       
//faq
           function faqShortcode($isHome = 0) {
            global $query;

            $args = array('post_type' => 'our-faq');

            if (!empty($pageId)) {
                $args['page_id'] = absint($pageId);
            } else {
                $args['paged'] = max(1, get_query_var('paged'));
            }

            if(!empty($isHome) && $isHome == 1){
                $cols = get_theme_mod('faq_section_npp_count', 5);
                $cols++;
                $args['posts_per_page'] = $cols;
            }else{
                $args['posts_per_page'] = (!empty($args['posts_per_page'])) ? $args['posts_per_page'] : -1;
         // $cols = 5;
            }
            $faqPageId = get_theme_mod('faq_section_page_link');
            $query = new WP_Query($args);
            ob_start();
    // print_r($query);
            echo '<div class="faq">';
            if ($query->have_posts()){
                while ($query->have_posts()) : $query->the_post();
                    $post = get_post();
                    ?>
                     <div class="col-md-12 faq-content pd-0" data-wow-duration="3s">
                         <button class="accordion"> <h3 class="faq-title"><?php the_title(); ?></h3></button>
                         <div class="panel wow zoomIn">
                           <div class="faq-description"> <p><?php
                           if(!empty($isHome) && $isHome==1){
                            if (has_excerpt()) {
                                echo get_the_excerpt();
                            } else {
                                    //echo luzuk_excerpt(get_the_content(),300);
                               echo get_the_content();
                           }
                                // if(!empty($faqPageId)){
                                //     echo '<a href="'.get_permalink($faqPageId).'">Read More..</a>';
                                // }else{
                                //     echo '<a href="'.get_permalink($faqPageId).'">Read More..</a>';
                                // }
                       }else{
                        echo get_the_content();
                    }?></p>
                </div>
            </div>
        </div>
    <?php
endwhile;
}else{
    for($i=0; $i<$cols; $i++){
        ?>
            <div class="col-md-12 faq-content">
                <h6 class="faq-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry?</h6>
                <div class="faq-description">
                    <p><?php
                    if(!empty($isHome) && $isHome==1){
                        ?>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing  typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        <br>
                        <?php
                                // if(!empty($faqPageId)){
                                //     echo '<a href="'.get_permalink($faqPageId).'">Read More..</a>';
                                // }else{
                                //     echo '<a href="'.get_permalink($faqPageId).'">Read More..</a>';
                                // }
                    }else{
                        ?>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing  typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.

                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing  typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        <?php
                    }?>
                </p>
            </div>  
    </div>
    <?php
}
}
echo '<div class="clearfix"></div>
</div>';
?>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
</script>
<?php
$text = ob_get_contents();
ob_clean();
ob_end_flush();
wp_reset_postdata();
    // echo $text;
return $text;
}
//team
function teamShortCode($pageId = null, $isCustomizer = false, $i = null) { 

    ob_start();

    $args = array('post_type' => 'our-team');
    if (!empty($pageId)) {
        $args['page_id'] = absint($pageId);
    }
    $args['posts_per_page'] = -1;
    $colCls = '';
    // if($isCustomizer == true){
    $cols = get_theme_mod('team_area_npp_count', 15);
    $cols++;
    switch($cols){
         case 1:
        $colCls = 'col-md-12 col-sm-12 col-xs-12';
        break;
        case 2: 
        $colCls = 'col-md-6 col-sm-6 col-xs-12';
        break;
        case 3:
        case 5:
        case 6:
        case 9:
        case 11:
        case 13:
        case 15:
        $colCls = 'col-md-4 col-sm-6 col-xs-12';
        break;
        default: 
        $colCls = 'col-md-3 col-sm-6 col-xs-12';
        break;
    } 

    // } 
 $text = '';
 $query = new WP_Query($args);
 if ($query->have_posts()):
    $postN = 0;

    while ($query->have_posts()) : $query->the_post();
        $team_area_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'total-team-thumb');
        if ($isCustomizer === true) {
            $team_area_designation = get_theme_mod('team_area_designation' . $i);
            $team_area_facebook = get_theme_mod('team_area_facebook' . $i);
            $team_area_twitter = get_theme_mod('team_area_twitter' . $i);
            $team_area_linkedin = get_theme_mod('team_area_linkedin' . $i);
            $team_area_instagram = get_theme_mod('team_area_instagram' . $i);
            $team_area_pinterest = get_theme_mod('team_area_pinterest' . $i);
        } else {
            $team_area_facebook = '';
            $team_area_twitter = '';
            $team_area_linkedin = '';
            $team_area_instagram = '';
            $team_area_pinterest = '';
            $team_area_designation = '';
        }

        $post = get_post();
            //Social media urls
        $teamFacebook = get_post_meta($post->ID, 'teamFacebook', false);
        $team_area_facebook = !empty($teamFacebook[0]) ? $teamFacebook[0] : '';

        $teamTwitter = get_post_meta($post->ID, 'teamTwitter', false);
        $team_area_twitter = !empty($teamTwitter[0]) ? $teamTwitter[0] : '';

        $teamInstagram = get_post_meta($post->ID, 'teamInstagram', false);
        $team_area_instagram = !empty($teamInstagram[0]) ? $teamInstagram[0] : '';

        $teamlinkedIn = get_post_meta($post->ID, 'teamlinkedIn', false);
        $team_area_linkedin = !empty($teamlinkedIn[0]) ? $teamlinkedIn[0] : '';

         $teamPinterest = get_post_meta($post->ID, 'teamPinterest', false);
        $team_area_pinterest = !empty($teamPinterest[0]) ? $teamPinterest[0] : '';

            //designation
        $designation = get_post_meta($post->ID, 'designation', false);
        $team_area_designation = !empty($designation[0]) ? $designation[0] : '';

        ?>

        <div class="<?php echo $colCls;?> single-team">
            <div class="our-team">
         <div class="single-team-img">
                <?php
                if (has_post_thumbnail()) {
                    $image_url = $team_area_image[0];
                } else {
                    $image_url = get_template_directory_uri() . '/images/team-thumb.png';
                }
                ?>                  
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" />

            </div>

                <div class="team-text">
                   <a href="<?php the_permalink(); ?>"><h4 class="inner-area-title wow fadeInLeft" data-wow-duration="1s"><?php the_title(); ?></h4></a>

                    <div class="section-area-text team-designation wow fadeInLeft" data-wow-duration="2s">
                        <?php echo ($team_area_designation); ?>
                    </div>
                     <div class="clearfix"></div>
                </div>
                   <?php if ($team_area_facebook || $team_area_twitter || $team_area_instagram || $team_area_linkedin || $team_area_pinterest) { ?>
                    <div class="team-social-icon">
                        <p>
                            <?php
                                if(has_excerpt()){
                                  echo get_the_excerpt();
                                 }else{
                                  echo luzuk_excerpt( get_the_content() , 50 );
                                 } 
                             ?>
                         </p>
                        <?php if ($team_area_facebook) { ?>
                            <a target="_blank" href="<?php echo esc_url($team_area_facebook) ?>">
                                <i class="fa fa-facebook"></i></a>
                            <?php } ?>
                            <?php if ($team_area_twitter) { ?>
                                <a target="_blank" href="<?php echo esc_url($team_area_twitter) ?>" ><i class="fa fa-twitter"></i></a>
                            <?php } ?>
                            <?php if ($team_area_instagram) { ?>
                                <a target="_blank" href="<?php echo esc_url($team_area_instagram) ?>" ><i class="fa fa-instagram"></i></a> 
                            <?php } ?>
                               <?php if ($team_area_pinterest) { ?>
                                <a target="_blank" href="<?php echo esc_url($team_area_pinterest) ?>"><i class="fa fa-pinterest"></i></a>
                                <?php } ?>
                              <?php if ($team_area_linkedin) { ?>
                                <a target="_blank" href="<?php echo esc_url($team_area_linkedin) ?>" ><i class="fa fa-linkedin"></i></a> 
                            <?php } ?>
                        </div>
                    <?php } ?>   

                    <div class="clearfix"></div>
                </div>
                        <script>
        jQuery.noConflict();
        $(function(){
            function teamtextHeight(){
                var ht = 0;
                $('#innerpage-box .team-text').each(function(i){
                    var tHt = $(this).height();
                    if(ht<tHt){
                        ht=tHt;
                    }
                });
                $('#innerpage-box .team-text').height(ht+'px');
            }
            teamtextHeight();
        });
        $( window ).resize(function(){
            teamtextHeight();
        });
    </script>
        

            </div>

            <?php
        endwhile;
        $text = ob_get_contents();
        ob_clean();
    endif;
    wp_reset_postdata();
    return $text;
}
/**
 * Use for the show the testimonials at home page and in testimonial page with shortcode
 * @param int $pageId default is null the id of a post
 * @param boolean $isCustomizer default is false if set to true it mean the output is set for the home page
 * @param int $i default null
 * @param boolean $showStaticVals default is false
 * @return string
 * @author Luzuk <support@luzuk.com>
 * */
function testimonialShortCode($pageId = null, $isCustomizer = false, $i = null) {

    ob_start();

    $args = array('post_type' => 'our-testimonial');
    if (!empty($pageId)) {
        $args['page_id'] = absint($pageId);
    }
    $colCls = '';
    // if($isCustomizer == true){
    $cols = get_theme_mod('test_npp_count', 5);
    $cols++;
    switch($cols){
        
            }
           $icons = array(1=>'heart', 2=>'star', 3=>'flash', 4=>'bell',5=>'heart', 6=>'star', 7=>'flash', 8=>'bell');     
    // }
    $text = '';
    $query = new WP_Query($args);
    if ($query->have_posts()):
        $postN = 0;

        while ($query->have_posts()) : $query->the_post();
            $luzuk_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'total-team-thumb');

               if ($isCustomizer === true) {
            $testimonial_area_designation = get_theme_mod('testimonial_area_designation' . $i);
        } else {
            $testimonial_area_designation = '';
        }

        $post = get_post();

                   //designation
        $designation = get_post_meta($post->ID, 'designation', false);
        $testimonial_area_designation = !empty($designation[0]) ? $designation[0] : '';

            if (($postN % 3) == 0 && $isCustomizer == false) {
                ?>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <?php
            }
            ++$postN;
            ?>
            <div class="<?php echo $colCls; ?> item inner-t-area">
              <div class="ts-area-single col-md-12 col-sm-12 col-xs-12">
                <div class="timeline-icon"></div>
               <div class="quote-icon">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                 <div class="ts-area-content">
                  <div class="ts-area-c section-area-text ">   
                     <p><?php
                        if (has_excerpt()) {
                            echo get_the_excerpt();
                        } else {
                            echo get_the_content();
                        }
                        ?> 
                    </p> 
                  </div> 
                  <div class="pd-0 ts-area-bx">
                    <div class="col-md-2 col-sm-3 col-xs-4 pd-0">
                       <div class="ts-area-thumb">
                        <img src="<?php echo (!empty($luzuk_image[0])) ? $luzuk_image[0] : get_template_directory_uri() . '/images/team-thumb.png' ?>" class="img-responsive" alt="<?php the_title(); ?>" />
                      </div>
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-8">
                        <h6 class="ts-area-title"><?php the_title(); ?></h6>
                        <div class="ts-area-desg"><?php echo ($testimonial_area_designation); ?></div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
            </div>
            </div>
        <?php
    endwhile;
    $text = ob_get_contents();
    ob_clean();
endif;
wp_reset_postdata();
return $text;
}


/*subject*/
function subjectShortCode($pageId = null, $isCustomizer = false, $i = null) {

    ob_start();

    $args = array('post_type' => 'our-subjects');
    if (!empty($pageId)) {
        $args['page_id'] = absint($pageId);
    }
    $args['posts_per_page'] = -1;
    $colCls = '';
    // if($isCustomizer == true){
    $cols = get_theme_mod('subject_npp_count',2);  
    $subjects_page_icon1 = get_theme_mod('subjects_page_icon1'.$i);
    ++$cols;
    switch ($cols) {
        case 1:
        $colCls = 'col-md-12 col-sm-12';
        break;
        case 2: 
        $colCls = 'col-md-6 col-sm-6';
        break;
        case 3:
        case 5:
        case 6:
        case 9:
        case 11:
        case 13:
        case 15:
        case 17:
        case 19:
        case 21:
        case 23:
        $colCls = 'col-md-4 col-sm-6';
        break;
        default: 
        $colCls = 'col-md-3 col-sm-6';
        break;
        }
    // }
        $text = '';
        $query = new WP_Query($args);
        if ($query->have_posts()):
            $postN = 0;

            while ($query->have_posts()) : $query->the_post();
                $luzuk_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'total-subject-thumb');
                $post = get_post();

                ?>

                <div class="<?php echo $colCls; ?> single-subject-bx wow zoomIn">
                   
                    <div subjectinn-match-height="groupName" class="single-subject">

                         <div class="subject-icon">
                             <a href="<?php the_permalink(); ?>">
                           <i class="<?php echo $subjects_page_icon1; ?>"></i>
                            </a>
                             <a href="<?php the_permalink(); ?>">
                                <div class="subject-img-overlay">
                           <?php
                            if (has_post_thumbnail()) {
                                $image_url = $luzuk_image[0];
                            } else {
                                $image_url = get_template_directory_uri() . '/images/subjects.jpg';
                            }
                            ?>                                                        
                                <img class="img-responsive" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" />
                            </div>
                                 </a>
                            </div>
                        <h4 class="post-title inner-area-title wow fadeInDown"><?php the_title(); ?></h4>
                        <p class="section-area-text">
                            <?php

                            if(has_excerpt()){
                              echo get_the_excerpt();
                             }else{
                              echo luzuk_excerpt( get_the_content() , 100 );
                             } 
                            ?>
                        </p>
                        <div class="subject-content">
                            <ul class="sub-btn">
                                <li> <a href="<?php the_permalink(); ?>"><i class="fa fa-chevron-right"></i></a></li>
                           </ul>
                       </div>
                    </div>
      <script>
    var matchHeight = function () {
    
    function init() {
        eventListeners();
        matchHeight();
    }
    
    function eventListeners(){
        $(window).on('resize', function() {
            matchHeight();
        });
    }
    
    function matchHeight(){
        var groupName = $('[subjectinn-match-height]');
        var groupHeights = [];
        
        groupName.css('min-height', 'auto');
        
        groupName.each(function() {
            groupHeights.push($(this).outerHeight());
        });
        
        var maxHeight = Math.max.apply(null, groupHeights);
        groupName.css('min-height', maxHeight);
    };
    
    return {
        init: init
    };
    
} ();

$(document).ready(function() {
    matchHeight.init();
});
</script>

                </div>


                <?php
            endwhile;
            $text = ob_get_contents();
            ob_clean();
        endif;
        wp_reset_postdata();
        return $text;
    }


/**
 * Use for the show the testimonials at home page and in testimonial page with shortcode
 * @param int $pageId default is null the id of a post
 * @param boolean $isCustomizer default is false if set to true it mean the output is set for the home page
 * @param int $i default null
 * @param boolean $showStaticVals default is false
 * @return string
 * @author Luzuk <support@luzuk.com>
 * */


/*gallery*/ 

function galleryShortCode($pageId = null, $isCustomizer = false, $i = null) {

    ob_start();

    $args = array('post_type' => 'our-gallery');
    if (!empty($pageId)) {
        $args['page_id'] = absint($pageId);
    }
    $args['posts_per_page'] = -1;
    $colCls = '';
    // if($isCustomizer == true){
    $cols = get_theme_mod('luzuk_gallery_npp_count', 5);  
    ++$cols;
    switch ($cols) {
        case 1:
        $colCls = 'col-md-12 col-sm-12 col-xs-12'; 
        break;
        case 2:
        $colCls = 'col-md-6 col-sm-6 col-xs-12';
        break;
        case 3:
        case 5:
        case 6:
        case 9:
        $colCls = 'col-md-4 col-sm-6 col-xs-12';
        break;
        case 4:
        case 7:
        case 8:
        case 10:
        case 11:
        case 12:
        $colCls = 'col-md-3 col-sm-6 col-xs-12';
        break;
        default:
        $colCls = 'col-md-4 col-sm-6 col-xs-12';
        break;
    }
    // }
    $text = '';
    $query = new WP_Query($args);
    if ($query->have_posts()):
        $postN = 0;

        while ($query->have_posts()) : $query->the_post();
            $luzuk_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium_large');
       

            $post = get_post();
           
            ?> 
                <div class="item lz-gallery-images wow zoomIn">
                            <figure class="whuchooseus-gall">  
                                  <?php
                          if (has_post_thumbnail()) {
                            $image_url = $luzuk_image[0];
                        } else {
                            $image_url = get_template_directory_uri() . '/images/about1.jpg';
                        }
                    ?>
                        <img class="secondry-bg img-responsive" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" /><i class="fa fa-camera"></i><a class="group1 text" href="<?php echo esc_url($image_url); ?>" title="<?php the_title(); ?>"></a></figure>
                    </div>
                            <?php
                        endwhile;
                        $text = ob_get_contents();
                        ob_clean();
                    endif;
                    wp_reset_postdata();
                    return $text;
                }


    /**
     * Use for the show the testimonials at home page and in testimonial page with shortcode
     * @param int $pageId default is null the id of a post
     * @param boolean $isCustomizer default is false if set to true it mean the output is set for the home page
     * @param int $i default null
     * @param boolean $showStaticVals default is false
     * @return void
     * @author Luzuk <support@luzuk.com>
     * */
    function pricingShortcode() {
      ob_start();
      $cols = get_theme_mod('pricing_npp_count', 2);
      $cols++;
      switch ($cols) {
        case 1:
            $colCls = 'col-md-12 col-sm-12 col-xs-12';
            break;
            case 2: 
            $colCls = 'col-md-6 col-sm-6 col-xs-12';
            break;
            case 3:
            case 5:
            case 6:
            case 9:
            case 11:
            case 13:
            case 15:
            $colCls = 'col-md-4 col-sm-6 col-xs-12';
            break;
            default: 
            $colCls = 'col-md-6 col-sm-6 col-xs-12';
            break;
    }

    $showStatic = true;
    for ($i = 1; $i <= $cols; $i++) {
        $PlanPageId = get_theme_mod('pricing_plan_page_' . $i);
        $pricing_page_icon = get_theme_mod('pricing_plan_page_icon_'.$i);
        $planTitle  = get_theme_mod('pricing_plan_name_' . $i, 'Standard Plan');
        $planunit  = get_theme_mod('pricing_plan_unit_' . $i,'$');
        $planPrice  = get_theme_mod('pricing_plan_price_' . $i,'30');
        $planContent= get_theme_mod('pricing_plan_content_' . $i, '
            <p>Excepteur sint occaecat cupidatat non proi dent sunt in culpa.</p>
            <li>1 Bathroom Cleaning</li>
            <li>Up to 3 Bedrooms Cleaning</li>
            <li>1 Livingroom Cleaning</li>');

        $link = get_theme_mod('pricing_plan_url'.$i);
        $url = get_theme_mod('pricing_plan_url_'.$i, '#');

        if ($PlanPageId || $planTitle || $planunit || $planPrice || $planContent || $url || $pricing_page_icon) {
          $showStatic = false;
          ?>
          <div class="<?php echo $colCls; ?> pd-0">
            <div class="single-pricing wow bounceInUp">
            <div class="pr-s-area">
                <h4 class="plan-title inner-area-title" href="#">
                    <?php echo ($planTitle); ?>
                </h4>
                <div class="currency-price"><?php echo ($planunit); ?><?php echo ($planPrice); ?></div>
                <svg viewbox="0 0 100 25">
                    <path fill="#fff" d="M0 30 V19 Q30 28 50 20 T100 25 V30z" />
                </svg>
            </div>
            <ul class="pricing-list section-area-text wow slideInLeft"> <?php echo ($planContent); ?></ul>
            
            <?php
            $pricing_page_id = get_theme_mod('pricing_page');
            $pricing_page_button_title = get_theme_mod('pricing_page_button_title_'.$i, 'Select Plan');
            ?>
            <?php if($pricing_page_button_title){ ?>
                <div class="pc-btn wow zoomIn" data-wow-duration="4s">    
                    <a class="btn btn-lg" href="<?php echo esc_url(!empty($url)?$url:'#');?>" data-hover="/f178" >
                       <?php echo ($pricing_page_button_title);  ?>
                    </a>
                </div>
              

            <?php } ?>
            <!--  <div class="clearfix"></div> -->
        </div>
    </div>
    <?php
}
}
if ($showStatic === true) {
  for ($i = 1; $i <= $cols; $i++) {
    $link = get_theme_mod('pricing_plan_url'.$i);
    $url = get_theme_mod('pricing_plan_url_'.$i, '#');

    ?>
    <div class="<?php echo $colCls; ?> plan">
      <div class="pricing-plans">

        <div class="price-box">
          <div class="price-bx">

            <div class="plan-cost">$30</div>
        </div>
        <div class="clearfix"></div>
        <h4 class="plan-title">STANDARD</h4>
        <div class="table-content">
        Excepteur sint occaecat cupidatat non proi dent sunt in culpa.
     </div>
     <div class="clearfix"></div>
     <div class="pri-table-link">
      <a class="btn" href="#">DETAILS</a>
  </div>
</div>
<!-- <div class="clearfix"></div> -->
</div>
</div>
<?php
}

}

$pricingHtml = ob_get_contents();
        // echo $pricingHtml;
ob_flush();
ob_clean();
}

add_shortcode('TESTIMONIALS', 'testimonialShortCode');
//CREATING A SHORTCODE FOR THE GALLERY SECTION 
add_shortcode('GALLERY', 'galleryShortcode');
//adding a shortcode for the team / team list 
add_shortcode('SUBJECTS', 'subjectShortCode');
add_shortcode('FAQS', 'faqShortcode');

