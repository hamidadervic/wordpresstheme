<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
         <meta charset="<?php bloginfo('charset') ?>">
         <meta name="viewport" content="width=device-width">
         <title> <?php bloginfo('name')?> </title>
         <?php wp_head(); ?>
   </head>
<body <?php body_class();  ?>>

 <!-- navigation menu  
        <nav class="site-nav">
            <?php 

            $args = array(
                'theme_location' => "primary"
                );
            ?>

            <?php wp_nav_menu( $args ); ?>
         </nav> -->
        <div id="menu" >
               <img  src="<?php echo get_template_directory_uri(); ?>/images/menu.png" />
         </div>

         <nav class="site-nav">
            <?php 

            $args = array(
                'theme_location' => "category"
                );
            ?>

            <?php wp_nav_menu( $args ); ?>
         </nav>

<div class="container">


     <header class="site-header">
     	 <h1> <a href="<?php echo home_url(); ?>"> <?php bloginfo('name');?>  <?php bloginfo('description'); ?>   </a>  </h1> 
         <hr/>
     </header>
