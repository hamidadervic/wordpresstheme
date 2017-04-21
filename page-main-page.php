


<?php get_header();  ?>


<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 
?>

	<article class="post" align="center">
       <div class="left-column">
	       <h2> <?php the_title(); ?>  </h2> 
	   </div>
		<p> <?php the_content(); ?>  </p>
    </article>


<?php 	
endwhile;

else :
	echo wpautop( 'Sorry, no posts were found' );

endif;
?> 

<?php get_footer(); ?>

