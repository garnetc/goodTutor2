<?php 
/**
 *
 * @package Luzuk
 */
if(get_theme_mod('testimonials_area_disable') != 'on' ){ ?> 


    <?php 
    if( get_theme_mod('sec_testimonialsectionTpadding',true) ) {
      $sec_testimonialsectionTpadding = 'padding-top:'.esc_attr(get_theme_mod('sec_testimonialsectionTpadding')).';';
    }
    if( get_theme_mod('sec_testimonialsectionBpadding',true) ) {
      $sec_testimonialsectionBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('sec_testimonialsectionBpadding')).';';
    }
      $color_overlay_classes = '';
      $color_overlay_opacity = get_theme_mod( 'cover_testimonials_template_overlay_opacity' );
      $color_overlay_opacity = ( false === $color_overlay_opacity ) ? 95 : $color_overlay_opacity;
      $color_overlay_classes .= ' opacity-' . $color_overlay_opacity;
  ?>
  <div class="testimonials-area" id="testimonials">
    <div class="testimonials_gradiant <?php echo esc_attr( $color_overlay_classes ); ?>"></div>
      <div class="container">
          <?php if( get_theme_mod('testimonials_img_display','show' ) == 'show') :
                      ?>
    <div class="testimonials-img wow zoom">
                <?php 
                  $testimonials_img = get_theme_mod('testimonials_img');
                  if(!empty($testimonials_img)){
                    echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($testimonials_img).'" class="img-responsive secondry-bg-img" />';
                  }else{
                    echo '<img alt="About side img" src="'.get_template_directory_uri().'/images/testititle.png" class="img-responsive" />';
                  }

                  ?>
                  
              </div>
  <?php endif ?> 
       <?php
       $testimonials_title = get_theme_mod('testimonials_title', 'WHAT STUDENTS SAY'); 
       $testimonials_sub_title = get_theme_mod('testimonials_sub_title', 'Our Testimonials');
        $testimonials_sub_text = get_theme_mod('testimonials_sub_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .');
       ?>
       <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-sm-8 textcenter">
          <?php if($testimonials_title){ ?>
          <div class="section-title">
            <h2><?php echo ($testimonials_title);  ?></h2>
          </div>
          <?php }?>
            <?php if($testimonials_sub_title){ ?> 
          <div class="section-subtitle">
            <h3><?php echo ($testimonials_sub_title);  ?></h3>
          </div>
          <?php }?>
          <div class="section-area-text">
            <p><?php echo ($testimonials_sub_text);  ?></p>
          </div>
        </div>
      </div>

<div class="testimonials-single-area wow zoomIn">
      <div class="owl-carousel owl-theme">   
         
      <?php 
      $showStatic = true;
      $cols = get_theme_mod('test_npp_count', 5);
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
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
          $colCls = 'col-md-4 col-sm-6 col-xs-12';
          break;
        default:
          $colCls = 'col-md-3 col-sm-6 col-xs-12';
          break;
      }
      $icons = array(1=>'heart', 2=>'star', 3=>'flash', 4=>'bell',5=>'heart', 6=>'star', 7=>'flash', 8=>'bell'); 

      for( $i = 1; $i <= $cols; $i++ ){
        $testimonials_page_id = get_theme_mod('testimonials_page'.$i); 
        $testimonials_page_icon = get_theme_mod('testimonials_page_icon'.$i);
        if($testimonials_page_id){
          $showStatic = false;
          echo testimonialShortCode($testimonials_page_id, $isCustomizer=true, $i);
        }
      }
      // adding the static content
      if($showStatic === true){
        for( $i = 1; $i <= $cols; $i++ ){ ?>
        <div class="item">        
          <div class="ts-area-single col-md-12 col-sm-12 col-xs-12 pd-0">
            <div class="quote-icon">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
            </div>
             <div class="ts-area-content">
              <div class="ts-area-c section-area-text ">   
                <p>From its medieval origins to the <span>digital learn everything there</span>
                  is to know about the ubiquitous lorem ipsum passage esse and
                  dolore fugiat nulla pariatur excepteur sint occaecat cupidatat
                  non proident, sunt in culpa qui officia deserunt mollit
                  anim id est laborum.
                </p> 
                
              </div> 
              <div class="pd-0 ts-area-bx">
                <div class="col-md-2 col-sm-3 col-xs-4 pd-0">
                   <div class="ts-area-thumb">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/testimonial.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-10 col-sm-9 col-xs-8">
                    <h6 class="ts-area-title">Robert James</h6>
                    <div class="ts-area-desg">Student of M.SC 3rd Year</div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
        </div>
      </div>
        
        <?php 
        }
      } ?>
    </div>
    <div class="clearfix"></div>
              </div>
             <div class="clearfix"></div>
           </div>
            <div class="clearfix"></div>
       </div>
 <script>
        $(document).ready(function() {
          $('.testimonials-area .owl-carousel').owlCarousel({
           slideSpeed : 1500,
            autoplay: true,
              loop: true,
              margin: 30,
              responsiveClass: true,
              responsive: {
                0: {
                  items: 1,
                  nav: true
                },
                600: {
                  items:1,
                  nav: true
                },
                1000: {
                  items:2,
                  nav: true,
                  loop: true,
                  margin: 30
              }
            }
          })
        })
      </script>
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
    var groupName = $('[testimonials-match-height]');
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

   
    <?php }

