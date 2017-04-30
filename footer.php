

<!--end container -->



 <footer class="site-footer">
     <p class="copyright-site"> 
           &copy;  <?php echo date('Y') ?>
                       <?php bloginfo('name'); ?>  
                            | Development and design by 
                                  <a target="_blank" href="https://www.behance.net/hamidadervic">
                                       HD 
                                            </a> </br>
     </p> 
    
     <?php if ( is_active_sidebar("footer1") ){ ?>
     <div class="footer-widget">
          <?php dynamic_sidebar("footer1"); ?>
     </div>
     <?php } ?>

     <?php if ( is_active_sidebar("footer2") ){ ?>
     <div class="footer-widget">
          <?php dynamic_sidebar("footer2"); ?>
     </div>
     <?php } ?>

     <?php if ( is_active_sidebar("footer3") ){ ?>
     <div class="footer-widget">
          <?php dynamic_sidebar("footer3"); ?>
     </div>
     <?php } ?>
 </footer>

</div>
<?php wp_footer(); ?>

</body>
</html>