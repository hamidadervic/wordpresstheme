

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
                         $cat1 = NEW WP_Query("cat=1&posts_per_page=4");
                         if ( $cat1->have_posts() ) :
	                            while ( $cat1->have_posts() ) : $cat1->the_post();?>

                                 <div class="post-inside-slider">
                                      <div id="image-slider">
                                       <?php the_post_thumbnail("banner_image"); ?> 
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
             <?php 
                   $cat2 = NEW WP_Query("cat=16&posts_per_page=4");

                        if( $cat2->have_posts () ) : 

                   	           while ( $cat2->have_posts() ) : $cat2->the_post(); ?>
                          
                   	          <div class="front-page-article">

                                        <a href="<?php the_permalink(); ?>">
                                                  <div class="inside-my-cat"> 
                                                            <?php  the_post_thumbnail("banner_image"); ?>
                                                  </div> 

                                                 <div class="inside-article"> 
                                                        <h4>  
                                                            <?php echo max_title(get_the_title()); ?>
                                                        </h4>
                                         </a>

                   	                                <?php  the_excerpt(); ?>
                 	          
                   	                                </div> 
                   	                                </div>
                   	          <?php endwhile;

                   	    else : 
                   	      echo "Sorry, no posts were found." ;

                   	    endif;
               ?>
   </div>

   <div class="my-category">
        <?php 
                   $cat2 = NEW WP_Query("cat=17&posts_per_page=4");

                        if( $cat2->have_posts () ) : 

                   	           while ( $cat2->have_posts() ) : $cat2->the_post(); ?>
                   	                      <div class="front-page-article">
                                                  <a href="<?php the_permalink(); ?>">
                                                           <div class="inside-my-cat"> 
                                                                     <?php  the_post_thumbnail("banner_image"); ?>
                                                           </div> 

                                                          <div class="inside-article"> 
                                                                 <h4>  
                                                                     <?php echo max_title(get_the_title()); ?>
                                                                 </h4>
                                                   </a>
                   	                                   <?php  the_excerpt(); ?>

                   	          
                   	                       </div> 
                   	          </div>
                   	          <?php endwhile;

                   	    else : 
                   	      echo "Sorry, no posts were found." ;

                   	    endif;
               ?>
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



