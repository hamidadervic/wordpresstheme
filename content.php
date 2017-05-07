<article class="post has-thumbnail" >

<a href="<?php the_permalink(); ?>">

           <div class="<?php if( !is_single() ) { ?> inside-my-cat <?php } ?>"> 
                   <?php  the_post_thumbnail("banner_image"); ?>
           </div> 

       </a>


   <div class="inside-article">
         <a href="<?php the_permalink(); ?>">
             <h2 class="<?php if( has_post_thumbnail() && !is_single() ) { ?> PHasThumbnail <?php } ?>" > <?php if( !is_single() ) { echo max_title(get_the_title()); } else { the_title();} ?> 
             </h2> 
         </a>

   
      <!-- if is single post, show these details... -->
      <?php if (is_single() ) : ?>
         <p class="post-info  <?php if( has_post_thumbnail() ) { ?> PHasThumbnail <?php } ?>">  

		  Published on <?php the_time("F jS, Y");?>
		  by  <?php the_author_posts_link(); ?>
		  in 
              <?php 
		      $categories = get_the_category();
		      $separator= ", ";
		      $output = "";

		      if($categories) {

                     foreach ( $categories as $category)  {     	  	  
                         $output .= '<a href="'. get_category_link($category) .'">'. $category->cat_name .' </a> ' . $separator;
		      	      }

                echo trim($output, $separator);
		      }
 
		  ?> 

	    </p> 

       <?php endif; ?>
        
		<p class=" <?php if( has_post_thumbnail()  ) { ?> PHasThumbnail <?php } ?>
		           <?php if(!is_single() && !is_page() ){?> withoutText <?php } ?>"> 

		<?php if( is_single() || is_page() ) {

			    the_content();

			  } else {

				echo get_the_excerpt(); ?>

				<a href="<?php the_permalink(); ?>"> Read more &raquo </a>

		<?php 	} ?> 
		
		</p>

      </div>
 </article>