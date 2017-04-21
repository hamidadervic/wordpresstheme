<article class="post has-thumbnail" >

         <a href="<?php the_permalink(); ?>">
             <h2 class="<?php if( has_post_thumbnail() && !is_single() ) { ?> PHasThumbnail <?php } ?>" > <?php if( !is_single() ) { echo max_title(get_the_title()); } else { the_title();} ?> 
             </h2> 
         </a>

         <p class="post-info  <?php if( has_post_thumbnail() && !is_single() ) { ?> PHasThumbnail <?php } ?>">  

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

	    <div class=" <?php if( !is_single() ) { ?> feauturedImg <?php } ?> ">

	       <a href="<?php the_permalink(); ?>">

           <?php if( is_single() ) {
                     the_post_thumbnail("banner_image");
                  } else {
                  	 the_post_thumbnail("small_thumbnail");
                  }
           ?>

           </a>
           
	    </div>
       
       <a href="<?php the_permalink(); ?>">

		<p class=" <?php if( has_post_thumbnail()  ) { ?> PHasThumbnail <?php } ?>
		           <?php if(!is_single()){?> withoutText <?php } ?>"> 

		<?php if( is_single() ) {

			    the_content();

			  } else {

				echo get_the_excerpt(); ?>

				<a href="<?php the_permalink(); ?>"> Read more &raquo </a>

		<?php 	} ?> 
		
		</p>

		</a>


    </article>