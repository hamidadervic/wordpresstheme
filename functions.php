

<?php

/* get stylesheets */

function styleFunc(){
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts','styleFunc');


/* get js file */

function wpmu_load_scripts() {

  wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js' , array( 'jquery' ) );

}
add_action( 'wp_enqueue_scripts', 'wpmu_load_scripts' );

/*theme setup*/

function HD_Baby_Theme_setup(){
	/* register navigation menus */
    register_nav_menus(array(
        "primary" => __("Primary Menu"),
        "category" => __("Category Menu")
	));
     /* Add support futured image */
     add_theme_support("post-thumbnails");
     add_theme_support("post-formats",array("link","quote","aside"));
     add_image_size("small_thumbnail", 150, 100, true);
     add_image_size("banner_image", 900, 500, true);

}

add_action("after_setup_theme", "HD_Baby_Theme_setup");

/* widgets */

function my_widgets(){
       register_sidebar(array(
          "name" => "Right Sidebar",
          "id" => "sidebar1"
        ));

        register_sidebar(array(
          "name" => "Footer1",
          "id" => "footer1"
        ));

         register_sidebar(array(
          "name" => "Footer2",
          "id" => "footer2"
        ));

          register_sidebar(array(
          "name" => "Footer3",
          "id" => "footer3"
        ));
}

add_action("widgets_init","my_widgets");

/* set maximum title characters */

function max_title( $title ){
    if( strlen( $title ) > 57){
        return substr( $title, 0, 57)."...";
    } else {
        return $title;
    }
}

/*the excerpt on frontpage */

function excerpt_function(){
   return 30;
}

add_action("excerpt_length","excerpt_function");


/* customize function */


function customize( $wp_customize ){
     
     /* link settings */
     $wp_customize->add_setting('setting_link_color', array(
           'default' => '#084C61',
           'transport' => 'refresh',
      ));
    
      /* navigation settings */
     $wp_customize->add_setting('setting_nav_color', array(
           'default' => '#0047b3',
           'transport' => 'refresh',
      ));
  
      /* navigation over and current */
     $wp_customize->add_setting('setting_nav_hover_color', array(
           'default' => '#1365ad',
           'transport' => 'refresh',
      ));

     $wp_customize->add_section('section_link_color', array(
            'title' => __('Colors', 'HD Baby Theme'),
            'priority' => 30,
      ));

    /* link color control */
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'control_link_color', array(
           'label' => __('Link color', 'HD Baby Theme'),
           'section' => 'section_link_color',
           'settings' => 'setting_link_color',
    ) ) ); 

    /* navigation color control */
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'control_nav_color', array(
           'label' => __('Main background color', 'HD Baby Theme'),
           'section' => 'section_link_color',
           'settings' => 'setting_nav_color',
    ) ) ); 

    /* navigation color hover and current control */
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'control_nav_hover_color', array(
           'label' => __('Navigation background hover color', 'HD Baby Theme'),
           'section' => 'section_link_color',
           'settings' => 'setting_nav_hover_color',
    ) ) ); 

}

add_action("customize_register", "customize");


/* customize css */

function customize_css(){ ?>
   
      <style type="text/css">
        
          a:link,
          a:visited {
            color: <?php  echo get_theme_mod('setting_link_color'); ?> ;
          }
         
          /* customize the background color of the navigation menu and wdgets */
          .site-nav,
          h2.widgettitle,
          #wp-calendar caption {
            background-color: <?php echo get_theme_mod('setting_nav_color'); ?> ;
          }
           
          /* what about hover */
          nav.site-nav  ul li:hover,
          nav.site-nav ul li.current-menu-item  {
               background-color: <?php echo get_theme_mod('setting_nav_hover_color'); ?> ;
          }
         
           /*customize the hr tag */
           header.site-header hr {
               border-top: 5px double <?php echo get_theme_mod('setting_nav_color'); ?>;
           }    

      </style>

<?php }

add_action('wp_head', 'customize_css');