

<?php

/* get stylesheets */

function styleFunc(){
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts','styleFunc');



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
     add_image_size("small_thumbnail", 250, 150, true);
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

function max_title($title){
    if( strlen($title ) > 60){
        return substr($title,0,60)."...";
    } else {
        return $title;
    }
}