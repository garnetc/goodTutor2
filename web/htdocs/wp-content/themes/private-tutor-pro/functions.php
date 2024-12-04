<?php
/**
 *  functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * * @package Luzuk Premium
 */
$query='';
if ( ! function_exists( 'luzuk_lite_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function luzuk_lite_setup() {
        define( 'MTS_THEME_VERSION', '2.0.6' );
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on publishable, use a find and replace
         * to change 'Luzuk Premium' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'Luzuk Premium', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150, true );
        add_image_size( 'Luzuk Premium-related', 200, 125, true ); //related

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'Luzuk Premium' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        if ( luzuk_lite_is_wc_active() ) {
            add_theme_support( 'woocommerce' );
        }
        
        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'luzuk_lite_custom_background_args', array(
          'default-color' => '#000',
          'default-image' => '',
      ) ) );
    }
endif;
add_action( 'after_setup_theme', 'luzuk_lite_setup' );

function luzuk_lite_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'luzuk_lite_content_width', 678 );
}
add_action( 'after_setup_theme', 'luzuk_lite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function luzuk_lite_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'Luzuk Premium' ),
        'id'            => 'sidebar',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s  wow bounceInUp">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    /*// Header Ad sidebar
    register_sidebar(array(
        'name' => __('Header Ad', 'Luzuk Premium'),
        'description'   => __( '728x90 Ad Area', 'Luzuk Premium' ),
        'id' => 'widget-header',
        'before_widget' => '<div id="%1$s" class="widget-header">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));*/
    
    // Shop side bar
    register_sidebar( array(
        'name'          => esc_html__( 'Shop Sidebar', 'Luzuk Premium' ),
        'id'            => 'luzuk-shop-sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar of shop page.', 'Luzuk Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s wow bounceInUp">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    // Blog side bar
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'Luzuk Premium' ),
        'id'            => 'luzuk-blog-sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar of blog page.', 'Luzuk Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s  wow bounceInUp">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    // Subject side bar
    register_sidebar( array(
        'name'          => esc_html__( 'Subject Sidebar', 'Luzuk Premium' ),
        'id'            => 'luzuk-subject-sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar of subject page.', 'Luzuk Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s  wow bounceInUp">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    // FOOTER ONE WIDGET SIDEBAR
    register_sidebar( array(
        'name'          => esc_html__( 'Footer One', 'Luzuk Premium' ),
        'id'            => 'luzuk-footer1',
        'description'   => __( 'Add widgets here to appear in your Footer.', 'Luzuk Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    // FOOTER TWO WIDGET SIDEBAR
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'Luzuk Premium' ),
        'id'            => 'luzuk-footer2',
        'description'   => __( 'Add widgets here to appear in your Footer.', 'Luzuk Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    // FOOTER THREE WIDGET SIDEBAR
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'Luzuk Premium' ),
        'id'            => 'luzuk-footer3',
        'description'   => __( 'Add widgets here to appear in your Footer.', 'Luzuk Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    // FOOTER FOUR WIDGET SIDEBAR
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Four', 'Luzuk Premium' ),
        'id'            => 'luzuk-footer4',
        'description'   => __( 'Add widgets here to appear in your Footer.', 'Luzuk Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

// FOOTER FIVE WIDGET SIDEBAR
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Five', 'luzuk-premium' ),
        'id'            => 'luzuk-footer5',
        'description'   => __( 'Add widgets here to appear in your Footer.', 'luzuk-premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    // FOOTER SIX WIDGET SIDEBAR
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Six', 'luzuk-premium' ),
        'id'            => 'luzuk-footer6',
        'description'   => __( 'Add widgets here to appear in your Footer.', 'luzuk-premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );



    if ( luzuk_lite_is_wc_active() ) {
        // Register WooCommerce Shop and Single Product Sidebar
        register_sidebar( array(
            'name' => __('Shop Page Sidebar', 'Luzuk Premium' ),
            'description'   => __( 'Appears on Shop main page and product archive pages.', 'Luzuk Premium' ),
            'id' => 'shop-sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ) );
        register_sidebar( array(
            'name' => __('Single Product Sidebar', 'Luzuk Premium' ),
            'description'   => __( 'Appears on single product pages.', 'Luzuk Premium' ),
            'id' => 'product-sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ) );
    }
}
add_action( 'widgets_init', 'luzuk_lite_widgets_init' );

function luzuk_lite_custom_sidebar() {
    // Default sidebar.
    $sidebar = 'sidebar';

    // Woocommerce.
    if ( luzuk_lite_is_wc_active() ) {
        if ( is_shop() || is_product_category() ) {
            $sidebar = 'shop-sidebar';
        }
        if ( is_product() ) {
            $sidebar = 'product-sidebar';
        }
    }

    return $sidebar;
}

/**
 * Enqueue scripts and styles.
 */
function luzuk_lite_scripts() {
    wp_enqueue_style( 'Luzuk Premium-style', get_stylesheet_uri() );

    $handle = 'Luzuk Premium-style';

    // WooCommerce
    if ( luzuk_lite_is_wc_active() ) {
        if ( is_woocommerce() || is_cart() || is_checkout() ) {
            wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/css/woocommerce2.css' );
            $handle = 'woocommerce';
        }
    }

    wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/SmoothScroll.js', array(), '20160809', false );
    wp_enqueue_script( 'jquery-nav', get_template_directory_uri() . '/js/jquery.nav.js', array('jquery'), '20160903', true );
    wp_enqueue_script( 'jquery-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array('jquery'), '4.1.2', true );
     wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/js/isotope.pkgd.js', array('jquery', 'imagesloaded' ), '20150903', true );
    wp_enqueue_script( 'nivo-lightbox', get_template_directory_uri() . '/js/nivo-lightbox.js', array('jquery'), '20150903', true );
    wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', array('jquery'), '20150903', true );
    wp_enqueue_script( 'jquery-stellar', get_template_directory_uri() . '/js/jquery.stellar.js', array('imagesloaded'), '20150903', false ); 

    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '1.3.3', true );

    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), '20150903', true );
    wp_enqueue_script( 'odometer', get_template_directory_uri() . '/js/odometer.js', array('jquery'), '20150903', true );
    wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/js/waypoint.js', array('jquery'), '20150903', true );
    wp_enqueue_script( 'total-custom', get_template_directory_uri() . '/js/total-custom.js', array('jquery'), '20150903', true );
    wp_enqueue_script('slider', get_template_directory_uri().'/js/slider.js', array(), '1.1', true);
    wp_localize_script( 'total-custom', 'total_localize', array('template_path' => get_template_directory_uri() ));

  // wp_enqueue_script('jquery-3-3-1-min', get_template_directory_uri().'/js/jquery-3.3.1.min.js', array(), '1.1', true);
    //  wp_enqueue_script( 'jquery-3-1-1-slim-min', get_template_directory_uri() . '/js/jquery-3.1.1.slim.min.js', array('jquery'), '20150903', true );
      wp_enqueue_script( 'jquery-colorbox', get_template_directory_uri() . '/js/jquery.colorbox.js', array(), '20160809', false );

    wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '4.1.2' );
    wp_enqueue_style( 'colorbox-popup', get_template_directory_uri() . '/css/colorbox.css', array(), '4.1.2' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.4.0' );
  

    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.3.3' );
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array(), '1.3.3' );
        wp_enqueue_style( 'nivo-lightbox', get_template_directory_uri() . '/css/nivo-lightbox.css', array(), '1.3.3' );
    wp_enqueue_style( 'superfish', get_template_directory_uri() . '/css/superfish.css', array(), '1.3.3' );

     wp_enqueue_style( 'docs-theme-min', get_template_directory_uri() . '/css/docss.theme.min.css', array(), '1.3.3' );
        wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.3.3' );
        wp_enqueue_style( 'owl-theme-default-min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.3.3' );
   

    //wp_enqueue_script('owl-carousel-min', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '1.1', true);

  // wp_enqueue_style( 'total-style', get_stylesheet_uri(), array( 'bxslider', 'animate', 'font-awesome', 'owl-carousel', 'owl-theme', 'nivo-lightbox', 'superfish'), '1.0' );
  // wp_enqueue_style( 'total-fonts', total_fonts_url(), array(), null );
   // wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array(), '1.1', true);


// extra for header
  
   wp_enqueue_style( 'templete', get_template_directory_uri() . '/css-new/templete.css', array(), '1.3.3' );

// extra for header

wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '20150903', true );
 wp_enqueue_style( 'style-min', get_template_directory_uri() . '/css/style.min.css', array(), '1.3.3' );

    //google fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Archivo+Narrow|Arimo|Berkshire+Swash|Bitter|Comfortaa|Dancing+Script|Dosis|Droid+Serif|Francois+One|Germania+One|Hammersmith+One|Indie+Flower|Lobster|Muli|Nosifer|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|Pacifico|Questrial|Roboto+Mono|Roboto+Slab|Source+Serif+Pro|Titillium+Web|Work+Sans|Rubik:700i' );
    // wp_add_inline_style( 'total-style', total_dymanic_styles() );

    wp_enqueue_script( 'Luzuk Premium-customscripts', get_template_directory_uri() . '/js/customscripts.js',array('jquery'),'',true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
  }

  $luzuk_lite_color_scheme = get_theme_mod('luzuk_template_color', '#fe5722');
  $luzuk_lite_color_scheme2 = get_theme_mod('luzuk_template_color2', '#44afdd');
  $header = get_theme_mod('header_textcolor', '#000');
  $luzuk_lite_layout = get_theme_mod('luzuk_lite_layout', 'cslayout');

  $custom_css = total_dymanic_styles();
  wp_add_inline_style( $handle, $custom_css );
}
add_action( 'wp_enqueue_scripts', 'luzuk_lite_scripts' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/style.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/lz-customizer.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/lz-customizer-functions.php';
/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Load Font Awesome list file.
 */
require get_template_directory() . '/inc/font-awesome-list.php';
/**
 * Load function file.
 */
require get_template_directory() . '/inc/functions.php';
/**
 * Add the Social buttons Widget.
 */
include_once( "functions/widget-social.php" );
require_once('functions/meta-data.php'); // ADD THE META DETA FOR THE PHP
/**
 * Copyrights
 */
if ( ! function_exists( 'luzuk_lite_copyrights_credit' ) ) {
    function luzuk_lite_copyrights_credit() { 
        global $mts_options
        ?>
        <!--start copyrights-->
        <div class="copyrights">
            <div class="container">
                <div id="copyright-note">
                    <span>Copyright <?php echo '&copy; '.date_i18n(__('Y','Luzuk')); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved

            <!--<div class="top">
            
                <a href="#top" class="toplink"><?php //_e('Back to Top','Luzuk Premium'); ?> &uarr;</a>
            </div>-->
        </div>
    </div>
</div>
<!--end copyrights-->
<?php }
}

/**
 * Custom Comments template
 */
if ( ! function_exists( 'luzuk_lite_comments' ) ) {
    function luzuk_lite_comment($comment, $args, $depth) { ?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>" style="position:relative;" itemscope itemtype="http://schema.org/UserComments">
                <div class="comment-author vcard">
                    <?php echo get_avatar( $comment->comment_author_email, 70 ); ?>
                    <div class="comment-metadata">
                        <?php printf('<span class="fn" itemprop="creator" itemscope itemtype="http://schema.org/Person">%s</span>', get_comment_author_link()) ?>
                        <span class="comment-meta">
                          <?php edit_comment_link(__('(Edit)', 'Luzuk Premium'),'  ','') ?>
                      </span>
                  </div>
              </div>
              <?php if ($comment->comment_approved == '0') : ?>
               <em><?php _e('Your comment is awaiting moderation.', 'Luzuk Premium') ?></em>
               <br />
           <?php endif; ?>
           <div class="commentmetadata" itemprop="commentText">
               <?php comment_text() ?>
               <time><?php comment_date(get_option( 'date_format' )); ?></time>
               <span class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </span>
        </div>
    </div>
</li>
<?php }
}

/*
 * Excerpt
 */
function luzuk_lite_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt);
} else {
    $excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
return $excerpt;
}

/**
 * Shorthand function to check for more tag in post.
 *
 * @return bool|int
 */
function luzuk_lite_post_has_moretag() {
    return strpos( get_the_content(), '<!--more-->' );
}

if ( ! function_exists( 'luzuk_lite_readmore' ) ) {
    /**
     * Display a "read more" link.
     */
    function luzuk_lite_readmore() {
        ?>
      <!--   <div class="readMore">
            <a href="<?php //echo esc_url( get_the_permalink() ); ?>" title="<?php //the_title_attribute(); ?>" target="_blank">
                <?php //_e( 'Continue Reading', 'Luzuk Premium' ); ?>
            </a>
        </div> -->

     
            <?php if( get_theme_mod('blogpage_button_display','show' ) == 'show') :
                      ?>
                      <?php
                        $bloginner_page_id = get_theme_mod('bloginner_page'); 
                        $bloginnerbutn_text = get_theme_mod('blogbutninner_text', 'Continue Reading');
                        ?>

                  
                         <a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php the_title_attribute(); ?>" target="_blank">
                            <?php echo $bloginnerbutn_text; ?>
                                
                            </a>
                   
                      <?php endif ?>



        <?php 
    }
}

/**
 * Breadcrumbs
 */
if (!function_exists('luzuk_lite_the_breadcrumb')) {
    function luzuk_lite_the_breadcrumb() {
        if ( is_front_page() ) {
            return;
        }
        echo '<span typeof="v:Breadcrumb" class="root"><a rel="v:url" property="v:title" href="';
        echo esc_url( home_url() );
        /* =====breadcrumb text====== */
        $breadcrumbhometxtbutton = get_theme_mod('luzuk_breadcrumbhometxt', 'Home'); 
        /* =====breadcrumb text====== */
        echo '">'.(sprintf( __( "$breadcrumbhometxtbutton", 'Luzuk Premium' )));
        echo '</a></span><span class="bread-arrow"><i class="fa fa-angle-right
        "></i></span>';
        if (is_single()) {
            $categories = get_the_category();
            if ( $categories ) {
                $level = 0;
                $hierarchy_arr = array();
                foreach ( $categories as $cat ) {
                    $anc = get_ancestors( $cat->term_id, 'category' );
                    $count_anc = count( $anc );
                    if (  0 < $count_anc && $level < $count_anc ) {
                        $level = $count_anc;
                        $hierarchy_arr = array_reverse( $anc );
                        array_push( $hierarchy_arr, $cat->term_id );
                    }
                }
                if ( empty( $hierarchy_arr ) ) {
                    $category = $categories[0];
                    echo '<span typeof="v:Breadcrumb"><a href="'. esc_url( get_category_link( $category->term_id ) ).'" rel="v:url" property="v:title">'.esc_html( $category->name ).'</a></span><span class="bread-arrow"><i class="fa fa-angle-right
                    "></i></span>';
                } else {
                    foreach ( $hierarchy_arr as $cat_id ) {
                        $category = get_term_by( 'id', $cat_id, 'category' );
                        echo '<span typeof="v:Breadcrumb"><a href="'. esc_url( get_category_link( $category->term_id ) ).'" rel="v:url" property="v:title">'.esc_html( $category->name ).'</a></span><span class="bread-arrow"><i class="fa fa-angle-right
                        "></i></span>';
                    }
                }
            }
            echo "<span><span class='treeEnd'>";
            the_title();
            echo "</span></span>";
        } elseif (is_page()) {
            $parent_id  = wp_get_post_parent_id( get_the_ID() );
            if ( $parent_id ) {
                $breadcrumbs = array();
                while ( $parent_id ) {
                    $page = get_page( $parent_id );
                    $breadcrumbs[] = '<span typeof="v:Breadcrumb"><a href="'.esc_url( get_permalink( $page->ID ) ).'" rel="v:url" property="v:title">'.esc_html( get_the_title($page->ID) ). '</a></span><span><i class="fa fa-angle-right
                    "></i></span>';
                    $parent_id  = $page->post_parent;
                }
                $breadcrumbs = array_reverse( $breadcrumbs );
                foreach ( $breadcrumbs as $crumb ) { echo $crumb; }
            }
            echo "<span><span class='treeEnd'>";
            the_title();
            echo "</span></span>";
        } elseif (is_category()) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $this_cat_id = $cat_obj->term_id;
            $hierarchy_arr = get_ancestors( $this_cat_id, 'category' );
            if ( $hierarchy_arr ) {
                $hierarchy_arr = array_reverse( $hierarchy_arr );
                foreach ( $hierarchy_arr as $cat_id ) {
                    $category = get_term_by( 'id', $cat_id, 'category' );
                    echo '<span typeof="v:Breadcrumb"><a href="'.esc_url( get_category_link( $category->term_id ) ).'" rel="v:url" property="v:title">'.esc_html( $category->name ).'</a></span><span><i class="fa fa-angle-right
                    "></i></span>';
                }
            }
            echo "<span><span class='treeEnd'>";
            single_cat_title();
            echo "</span></span>";
        } elseif (is_author()) {
            echo "<span><span class='treeEnd'>";
            if(get_query_var('author_name')) :
                $curauth = get_user_by('slug', get_query_var('author_name'));
            else :
                $curauth = get_userdata(get_query_var('author'));
            endif;
            echo esc_html( $curauth->nickname );
            echo "</span></span>";
        } elseif (is_search()) {
            echo "<span><span class='treeEnd'>";
            the_search_query();
            echo "</span></span>";
        } elseif (is_tag()) {
            echo "<span><span class='treeEnd'>";
            single_tag_title();
            echo "</span></span>";
        }
    }
}


/*
 * Google Fonts
 */
function luzuk_lite_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
    * supported by Monda, translate this to 'off'. Do not translate
    * into your own language.
    */
    $monda = _x( 'on', 'Monda font: on or off', 'Luzuk Premium' );

    if ( 'off' !== $monda ) {
        $font_families = array();

        if ( 'off' !== $monda ) {
            $font_families[] = urldecode('Roboto:400,500,700,900');
        }

        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            //'subset' => urlencode( 'latin,latin-ext' ),
        );

        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }

    return $fonts_url;
}

function luzuk_lite_scripts_styles() {
    wp_enqueue_style( 'theme-slug-fonts', luzuk_lite_fonts_url(), array(), null );

}
add_action( 'wp_enqueue_scripts', 'luzuk_lite_scripts_styles' );

/**
 * WP Mega Menu Plugin Support
 */
function luzuk_lite_megamenu_parent_element( $selector ) {
    return '.primary-navigation .container';
}
add_filter( 'wpmm_container_selector', 'luzuk_lite_megamenu_parent_element' );

/**
 * Determines whether the WooCommerce plugin is active or not.
 * @return bool
 */
function luzuk_lite_is_wc_active() {
    if ( is_multisite() ) {
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

        return is_plugin_active( 'woocommerce/woocommerce.php' );
    } else {
        return in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
    }
}

/**
 * WooCommerce
 */
if ( luzuk_lite_is_wc_active() ) {
    if ( !function_exists( 'mts_loop_columns' )) {
        /**
         * Change number or products per row to 3
         *
         * @return int
         */
        function mts_loop_columns() {
            return 3; // 3 products per row
        }
    }
    add_filter( 'loop_shop_columns', 'mts_loop_columns' );

    /**
     * Redefine woocommerce_output_related_products()
     */
    function woocommerce_output_related_products() {
        $args = array(
            'posts_per_page' => 3,
            'columns' => 3,
        );
        woocommerce_related_products($args); // Display 3 products in rows of 1
    }
    
    global $pagenow;
    if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) {
        /**
         * Define WooCommerce image sizes.
         */
        function luzuk_lite_woocommerce_image_dimensions() {
            $catalog = array(
                'width'     => '210',   // px
                'height'    => '155',   // px
                'crop'      => 1        // true
            );
            $single = array(
                'width'     => '326',   // px
                'height'    => '444',   // px
                'crop'      => 1        // true
            );
            $thumbnail = array(
                'width'     => '74',    // px
                'height'    => '74',   // px
                'crop'      => 0        // false
            );
            // Image sizes
            update_option( 'shop_catalog_image_size', $catalog );       // Product category thumbs
            update_option( 'shop_single_image_size', $single );         // Single product image
            update_option( 'shop_thumbnail_image_size', $thumbnail );   // Image gallery thumbs
        }
        add_action( 'init', 'luzuk_lite_woocommerce_image_dimensions', 1 );
    }


    /**
     * Change the number of product thumbnails to show per row to 4.
     *
     * @return int
     */
    function luzuk_lite_woocommerce_thumb_cols() {
     return 4; // .last class applied to every 4th thumbnail
 }
 add_filter( 'woocommerce_product_thumbnails_columns', 'luzuk_lite_woocommerce_thumb_cols' );


    /**
     * Ensure cart contents update when products are added to the cart via AJAX.
     *
     * @param $fragments
     *
     * @return mixed
     */
    function luzuk_lite_header_add_to_cart_fragment( $fragments ) {
        global $woocommerce;
        ob_start(); ?>
        
        <a class="cart-contents" href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" title="<?php _e( 'View your shopping cart', 'Luzuk Premium' ); ?>"><?php echo sprintf( _n( '%d item', '%d items', $woocommerce->cart->cart_contents_count, 'Luzuk Premium' ), $woocommerce->cart->cart_contents_count );?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
        
        <?php $fragments['a.cart-contents'] = ob_get_clean();
        return $fragments;
    }
    add_filter( 'add_to_cart_fragments', 'luzuk_lite_header_add_to_cart_fragment' );

    /**
     * Optimize WooCommerce Scripts
     * Updated for WooCommerce 2.0+
     * Remove WooCommerce Generator tag, styles, and scripts from non WooCommerce pages.
     */
    function luzuk_lite_manage_woocommerce_styles() {
        //remove generator meta tag
        remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );

        //first check that woo exists to prevent fatal errors
        if ( function_exists( 'is_woocommerce' ) ) {
            //dequeue scripts and styles
            if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
                wp_dequeue_style( 'woocommerce-layout' );
                wp_dequeue_style( 'woocommerce-smallscreen' );
                wp_dequeue_style( 'woocommerce-general' );
                wp_dequeue_style( 'wc-bto-styles' ); //Composites Styles
                wp_dequeue_script( 'wc-add-to-cart' );
                wp_dequeue_script( 'wc-cart-fragments' );
                wp_dequeue_script( 'woocommerce' );
                wp_dequeue_script( 'jquery-blockui' );
                wp_dequeue_script( 'jquery-placeholder' );



            }
        }
    }
    add_action( 'wp_enqueue_scripts', 'luzuk_lite_manage_woocommerce_styles', 99 );

    // Remove WooCommerce generator tag.
    remove_action('wp_head', 'wc_generator_tag');
}

/**
 * Post Layout for Archives
 */
if ( ! function_exists( 'luzuk_lite_archive_post' ) ) {
    /**
     * Display a post of specific layout.
     * 
     * @param string $layout
     */
    function luzuk_lite_archive_post( $layout = '' ) { 
        $luzuk_lite_full_posts = get_theme_mod('luzuk_lite_full_posts', '0'); ?>
        <article class="post excerpt">
                <?php
            if ( is_sticky() && is_home() && ! is_paged() ) {
                printf( '<span class="sticky-post">%s</span>', __( 'Featured', 'Luzuk Premium' ) );
            } ?>
            <?php if ( is_single() ) : ?>
                <div class="post-date-publishable"><?php the_time( get_option( 'date_format' ) ); ?></div>
            <?php endif; ?>



<!-- category page -->
 <div class="inner-blog-post col-md-6 col-sm-6 col-xs-12 wow zoomIn">
       <div class="inner-blogpost">
        <?php if ( empty($luzuk_lite_full_posts) ) : ?>
                <?php if ( has_post_thumbnail() ) { ?>
         <div class="ht-blog-thumbnail">

           <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('Luzuk Premium-featured',array('title' => '')); ?>
                <?php if (function_exists('wp_review_show_total')) wp_review_show_total(true, 'latestPost-review-wrapper'); ?>
          </a>
          <div class="overlay">
              <div class="box">
                  <div class="content">
                      <a href="<?php the_permalink(); ?>" class="fa fa-link"></a>
                  </div>
              </div>
          </div>
        </div>

   <?php } else { ?>
    <?php } ?>

    <div class="inner-blogpost-info">
       <?php if( get_theme_mod('postdate_button_display','show' ) == 'show') :
               ?>
      <div class="blog-date">
          by <?php echo get_the_author(); ?> / on <span> <?php echo get_the_date( 'j F, Y' ); ?></span>
      </div>
      <?php endif ?> 

         <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
          <div class="inner-blog-excerpt">
               <?php echo luzuk_lite_excerpt(45); ?>
          </div>
       <?php if( get_theme_mod('postsocialsshare_button_display','show' ) == 'show') :
        ?>
 

        <div class="socialMedia">
          <ul>
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="site-button sharp"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title();?>&source=<?php the_title();?>" target="_blank" class="site-button sharp"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            
            <li><a href="https://twitter.com/share?url=<?php the_permalink();?>&amp;text=<?php the_title();?>" class="site-button sharp" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="http://www.digg.com/submit?url=<?php the_permalink();?>" target="_blank" class="site-button sharp"><i class="fa fa-digg" aria-hidden="true"></i></a></li>
            <li class="share-button"><a href="#" class="site-button sharp"><i class="fa fa-share-alt"></i></a></li>
          </ul>
            <div class="clearfix"></div>
        </div>
    <?php endif ?>  


      <?php else : ?>
        <?php if (luzuk_lite_post_has_moretag()) : ?>
    
   <div class="clearfix"></div>
 </div>
   <div class="clearfix"></div> 
                   
           </div>
            
       </div> 

<!-- END category page -->

 
                    <?php endif; ?>
                <?php endif; ?>
            <div class="clearfix"></div>
            </article>
       
        <?php }
    }


/**
 * Extras
 */
add_action( 'customize_controls_print_styles', 'luzuk_customizer_stylesheet' );

function luzuk_load_custom_wp_admin_style( $hook ) {
    if ( 'appearance_page_about-luzuk_mag' !== $hook ) {
        return;
    }
    wp_enqueue_style( 'luzuk_mag-custom-admin-css', get_template_directory_uri() . '/css/themeinfo.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'luzuk_load_custom_wp_admin_style' );


// Adding Custome Post Type
function createCustomeTypes() {

    // Testimonials Custome type
    register_post_type( 'our-testimonial',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' , 'Luzuk Premium'),
                'singular_name' => __( 'Testimonial', 'Luzuk Premium' )
            ),
            'public' => true,
            'featured_image'=>true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-chat', //  The url to the icon to be used for this menu or the name of the icon from the iconfont
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
        )
    );

// Subject
    register_post_type( 'our-subjects',
        array(
            'labels' => array(
                'name' => __( 'Subject' , 'Luzuk'),
                'singular_name' => __( 'Subject', 'Luzuk' )
            ),
            'public' => true,
            'featured_image'=>true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-learn-more', //  The url to the icon to be used for this menu or the name of the icon from the iconfont
            'supports' => array('title', 'editor', 'thumbnail', 'author', 'page-attributes'),
        )
    );  
    
     // Gallery Custome type
    register_post_type( 'our-gallery',
        array(
            'labels' => array(
                'name' => __( 'Gallery' , 'Luzuk'),
                'singular_name' => __( 'gallery', 'Luzuk' )
            ),
            'public' => true,
            'featured_image'=>true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-media', //  The url to the icon to be used for this menu or the name of the icon from the iconfont
            'supports' => array('title', 'thumbnail', 'author', 'page-attributes'),
        )
    ); 
     // FAQ Custome type
    register_post_type( 'our-faq',
        array(
            'labels' => array(
                'name' => __( 'FAQs' , 'Luzuk'),
                'singular_name' => __( 'FAQ', 'Luzuk' )
            ),
            'public' => true,
            'featured_image'=>true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-status', //  The url to the icon to be used for this menu or the name of the icon from the iconfont
            'supports' => array('title', 'editor', 'page-attributes'),
        )
    );
    // SLIDER Custome type
    register_post_type( 'slider',
        array(
            'labels' => array(
                'name' => __( 'Sliders' , 'Luzuk'),
                'singular_name' => __( 'Slider', 'Luzuk' )
            ),
            'public' => true,
            'featured_image'=>true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-images-alt', //  The url to the icon to be used for this menu or the name of the icon from the iconfont
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
        )
    );
}
add_action( 'add_meta_boxes', 'luzukSliderCustomFild' );
/**
 * Method to add the custom field for the slider postsM 
 * @author Luzuk <support@luzuk.com>
 * @since V 1.1  09th Oct 2017
 **/
function luzukSliderCustomFild(){
 add_meta_box( 'luzuk-more-btn-link', __('Slider button link to page', 'Luzuk'), 'luzukSliderPages', 'slider', 'normal', 'high' );
}


/**
 * Method to add the custom field's html that to be apears at the admin section
 * @author Luzuk <support@luzuk.com>
 * @since V 1.1  09th Oct 2017
 **/
function luzukSliderPages(){
    global $post;
    // Use nonce for verification
    wp_nonce_field( plugin_basename( __FILE__ ), 'Sider_button_link' );
    //get the saved meta as an array
    $slider_btn_link = get_post_meta($post->ID,'slider_btn_link',false);
    $sliderBtnTxt = get_post_meta($post->ID,'sliderBtnTxt',false);
    $luzuk_pages = get_pages(array('hide_empty' => 0));
    echo '<div>Select the page : ';
    echo '<select name="sliderBtnLink">';
    echo '<option>Select page</option>';
    foreach ($luzuk_pages as $luzuk_pages_single) {
        $selected = ( $luzuk_pages_single->ID == $slider_btn_link[0] )?'selected':'';
        echo '<option value="'.$luzuk_pages_single->ID.'" '.$selected.'>'.$luzuk_pages_single->post_title.'</option>';
    }
    echo '</select></div>';
    echo '<div>Button Text :';
    echo '<input type="text" name="sliderBtnTxt" value="'.$sliderBtnTxt[0].'" /></div>';
}
/**
 * Method to save the custom field for the slider posts 
 * When the post is saved, saves our custom data 
 * @param integer $post_id - An id of the post 
 * @author Luzuk <support@luzuk.com>
 * @since V 1.1  09th Oct 2017
 **/
function saveCustomFieds($post_id){
    // verify if this is an auto save routine. 
    // If it is our form has not been submitted, so we dont want to do anything
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;
    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if ( !isset( $_POST['Sider_button_link'] ) )
        return;

    if ( !wp_verify_nonce( $_POST['Sider_button_link'], plugin_basename( __FILE__ ) ) )
        return;

    // OK, we're authenticated: we need to find and save the data
    $sliderBtnLink = $_POST['sliderBtnLink'];
    $sliderBtnTxt = $_POST['sliderBtnTxt'];
    update_post_meta($post_id,'slider_btn_link',$sliderBtnLink);
    update_post_meta($post_id,'sliderBtnTxt',$sliderBtnTxt);
}
// add web hook for save the custome field
add_action('save_post', 'saveCustomFieds');
add_action( 'init', 'createCustomeTypes' );

/**
 * Method to save the custom field for the slider posts 
 * When the post is saved, saves our custom data 
 * @author Luzuk <support@luzuk.com>
 * @since V 1.1  19 Jun 2020
 **/
function testimonialsDesignationCutomFieldHtml(){
    global $post;
    // get the saved value 
    $designation = get_post_meta($post->ID, 'designation', false);
    $designation = !empty($designation[0])?$designation[0]:'';

    // Use nonce for verification
    wp_nonce_field(plugin_basename(__FILE__), 'testimonials_social_media_links');
    echo '<table id="socialUrls" width="100%">';
    echo '<tr> 
    <th width="10%"><span class="dashicons dashicons-welcome-learn-more
"></span></th>
    <td width="90%"><input type="text" name="designation" width="100%" placeholder="Designation" value="'.$designation.'" /></td>
    </tr>';
    echo '</table>';
}
function addtestimonialsHook(){
    add_meta_box('luzuk-testimonials-designation', __('Add Designation', 'Luzuk'), 'testimonialsDesignationCutomFieldHtml', 'our-testimonial', 'normal', 'high');
}
/**
 * Method to save the custom field for the testimonial posts 
 * When the post is saved, saves our custom data 
 * @param integer $post_id - An id of the post 
 * @author Luzuk <support@luzuk.com>
 * @since V 1.1  19 Jun 2020
 **/
function savetestimonialsSocialCutomData($post_id){
    // If it is our form has not been submitted, so we dont want to do anything
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
    if(empty($_POST['designation']) ){
        // echo 'empty --> '; exit;       
        return;
    }

    $designation = $_POST['designation'];
    update_post_meta($post_id, 'designation', $designation);
}
add_action('add_meta_boxes', 'addtestimonialsHook');
add_action('save_post', 'savetestimonialsSocialCutomData');

/**
 * Method to save the custom field for the testimonial posts 
 * When the post is saved, saves our custom data 
 * @param integer $post_id - An id of the post 
 * @author Luzuk <support@luzuk.com>
 * @since V 1.1  09th Oct 2017
 **/
function getFonts($list = false, $index = -1){
    $fonts = array(
        "'Archivo Narrow', sans-serif",
        "'Archivo Black', sans-serif",
        "'Arial', sans-serif",
        "'Arimo', sans-serif",
        "'Allerta', sans-serif",
        "'Alex Brush', cursive",
        "'Berkshire Swash', cursive",
        "'Bitter', serif",
        "'Carter One', cursive",
        "'Comfortaa', cursive",
        "'Dancing Script', cursive",
        "'Dosis', sans-serif",
        "'Droid Serif', serif",
        "'Francois One', sans-serif",
        "'Germania One', cursive",
        "'Hammersmith One', sans-serif",
        "'Indie Flower', cursive",
        "'Lobster', cursive",
        "'Lato', sans-serif",
        "'Muli', sans-serif",
        "'Nosifer', cursive",
        "'Oswald', sans-serif",
        "'PT Sans Caption', sans-serif",
        "'PT Sans Narrow', sans-serif",
        "'PT Sans', sans-serif",
        "'Pacifico', cursive",
        "'Poppins', sans-serif",
        "'Open Sans', sans-serif",
        "'Montserrat', sans-serif",
        "'Pontano Sans', sans-serif",
        "'Questrial', sans-serif",
        "'Roboto Mono', monospace",
        "'Roboto Slab', serif",
        "'Roboto', sans-serif",
        "'Rubik', sans-serif",
        "'Source Serif Pro', serif",
        "'Titillium Web', sans-serif",
        "'Biryani', sans-serif", 
        "'Montserrat Alternates', sans-serif",
        "'Work Sans', sans-serif",
        "'Arvo', serif",
        "'Passion One', cursive",
        "'Schoolbell', cursive",
        
    );
    if($list == true){
        foreach ($fonts as $key => $value) {
            $fonts[$key] = str_replace("'", "", $value);
        }
        asort($fonts);
        return $fonts;
    }
    $len = count($fonts);
    if(is_integer($index) && $index >= 0 && $index < $len){
        return $fonts[$index];
    }else{
        return $fonts;
    }
}

/**
 * show the pagination for the custome or normal post types
 * @param object $customeQuery - An onject of a query post
 * @author Luzuk <support@luzuk.com>
 * @since V 1.1  09th Nov 2017
 **/
function lzGetPagination($customQuery){
    if(!is_object($customQuery)){return false;}
    $total_pages = $customQuery->max_num_pages;
    $big = 999999999;
    $current_page = max(1, get_query_var('paged'));
    echo paginate_links(array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => $current_page,
        'total' => $total_pages,    
    ));
}
// for overlay opacity
function luzuk_customize_opacity_range() {
return apply_filters(
'luzuk_customize_opacity_range',
array(
'min' => 0,
'max' => 100,
'step' => 5,
)
);
}

function luzuk_customize_preview_init() {
$theme_version = wp_get_theme()->get( 'Version' );


wp_add_inline_script(
'twentytwenty-customize-preview',
sprintf(
'wp.customize.selectiveRefresh.partialConstructor[ %1$s ].prototype.attrs = %2$s;',
wp_json_encode( 'cover_opacity' ),
wp_json_encode( luzuk_customize_opacity_range() )
)
);
}

add_action( 'customize_preview_init', 'luzuk_customize_preview_init' );