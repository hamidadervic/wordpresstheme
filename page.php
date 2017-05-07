


<?php get_header();  ?>

<div class="wrappAll">

<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 

  get_template_part("content");


endwhile;


else :
	echo wpautop( 'Sorry, no pages were found' );

endif;
?> 

</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

