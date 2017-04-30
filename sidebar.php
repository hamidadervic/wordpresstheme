
<aside class="sidebar">
  <div class="content"> 
    <div class="inside-widget">
          <?php if ( is_active_sidebar("sidebar1") )  {
              dynamic_sidebar("sidebar1"); 
          } else {
              echo "<h4> This is a sidebar. <br/> You can edit it in your widgets. </h4>";
          }
          ?>
    </div>
  </div>
 </aside>


