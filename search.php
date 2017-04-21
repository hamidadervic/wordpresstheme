

<?php get_header();  ?>

<div class="wrappAll">

<?php
if ( have_posts() ) : ?>

      <div class="search-results">
          <h2> Search results for: <?php the_search_query(); ?> </h2>
      </div>

<?php	while ( have_posts() ) : the_post(); 

    get_template_part("content",get_post_format());

endwhile;

else :
	echo wpautop( 'Sorry, no posts were found' );

endif;

?> 

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

