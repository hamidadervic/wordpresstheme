


<?php get_header();  ?>

<div class="wrappAll">

<?php
if ( have_posts() ) : ?>

 <h4 class="site-archive">  
    
         <?php
      
         if( is_category() ){
         	 single_cat_title();
         }
         else if( is_author() ){
         	the_post();
         	echo "Author Archive: " . get_the_author();
         	rewind_posts();
         }
         else if( is_tag() ){
         	single_tag_title();
         }
         else if( is_month() ){
         	echo "Monthly Archives: " . get_the_date("F Y");
         }
         else if( is_year() ){
         	echo "Yearly Archives: " . get_the_date("Y");
         }
         else if( is_day() ){
         	echo "Daily Archives: " . get_the_date();
         }
         else {
         	echo "Archive: ";
         }
  
        ?>
</h4>
 
<?php	

    while ( have_posts() ) : the_post(); 
   
           get_template_part("content",get_post_format());
     	
      endwhile;

      echo paginate_links();

else :
	echo wpautop( 'Sorry, no posts were found' );

endif;
?> 

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

