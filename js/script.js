jQuery(document).ready(function( $ ) {

	
	/* toggle navigation for tablets and phones */
	$("#menu").click(function (){
		$(".site-nav").toggle("slow");
	});

	/* next post in the slider */
    $margin = -100;

   	 function slider_function(){

   	    	$("#post-slider").animate({
   	    		"margin-left": `${$margin}%`
   	    	});

   	        $margin-=100;

   	           if($margin === -400){
   	           	  $margin = -0;
   	           }
   	 }

   	 setInterval(slider_function,3000);
   });
	
