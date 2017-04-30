

<?php get_header();  ?>

<div class="wrappAll">

<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 

    get_template_part("content",get_post_format());
    	
endwhile;

else :
	echo wpautop( 'Sorry, no posts were found' );

endif;

?> 

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

