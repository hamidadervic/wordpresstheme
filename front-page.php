


<?php get_header();  ?>


<div class="<?php if( !is_page()) { ?> wrappAll <?php }?> ">

<?php 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 

  if( is_page() ){ ?>

   <article class="post">
   	       <div id="main-slider">
   	         <div id="post-slider">
                  <?php
                         $cat1 = NEW WP_Query("cat=21&posts_per_page=4");
                         if ( $cat1->have_posts() ) :
	                            while ( $cat1->have_posts() ) : $cat1->the_post();?>

                                 <div class="post-inside-slider">
                                      <div id="image-slider">
                                       <?php the_post_thumbnail("banner_image") ?> 
                                      </div>
                                  <div class="inside-article">
                                      <div id="title-slider">
                                              <h3> 
                                                <a href="<?php the_permalink(); ?>">
                                                  <?php echo max_title(get_the_title()); ?>
                                                 </a>
                                              </h3>

                                               <p> <?php the_excerpt(); ?>
                                                 <a href="<?php the_permalink(); ?>">
                                                      <button>  ...&raquo  </button>
                                                 </a> 
                                               <?php ?> 
                                               </p>
                                       </div>
                                   </div>
                                 </div>
                           <?php endwhile;
                           else :
	                           echo wpautop( 'Sorry, no pages were found' );
                           endif;
                           wp_reset_postdata();
                           ?> 

                </div>

   	       </div>
     
   </article>

<div id="front-page-my-category"> 
   <div class="my-category">
        <div class="inside-article">
             <?php 
                   $cat2 = NEW WP_Query("cat=21&posts_per_page=4");
                   if( $cat2->have_posts () ) : 
                   	    while ( $cat2->have_posts() ) : $cat2->the_post();

                   	    the_post_thumbnail("small_thumbnail");

                   	    endwhile;

                   	    else : 
                   	      echo "Sorry, no posts were found." ;

                   	    endif;
             ?>
         </div>
   </div>

   <div class="my-category">
        <div class="inside-article">
             hiEs verbreitet sein Gift durch den Kontakt und zirkuliert durch das ganze Menschliche System unter einer Minute. Man sollte ihn auf keinen Fall mit bloßen Händen berühren .Seit einem Jahr haben die Notdienste über 1000 Menschen behandelt. Mehr als 100 Menschen sind an diesem Virus “ India Contra Virus “ schon gestorben. Zeigen sie jedem diese Bilder , vor allem kleinen Kinder, damit sie wissen ,dass sie nie in die Nähe von diesen gehen sollten.Es verbreitet sein Gift durch den Kontakt und zirkuliert durch das ganze Menschliche System unter einer Minute. Man sollte ihn auf keinen Fall mit bloßen Händen berühren .Seit einem Jahr haben die Notdienste über 1000 Menschen behandelt. Mehr als 100 Menschen sind an diesem Virus “ India Contra Virus “ schon gestorben. Zeigen sie jedem diese Bilder , vor allem kleinen Kinder, damit sie wissen ,dass sie nie in die Nähe von diesen gehen sollten.
         </div>
   </div>
</div>  	  

<?php  } else {
  	get_template_part("content");
  }


endwhile;

else :
	echo wpautop( 'Sorry, no pages were found' );

endif;
?> 

</div>

<?php 

    if ( !is_page() ){
    	get_sidebar();
    }

?>


<?php get_footer(); ?>



