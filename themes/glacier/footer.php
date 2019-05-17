
</div>
<!-- END WRAPPER -->  

<!-- FOOTER -->
<footer class="footer">

  <?php if ( 'minimal' == get_theme_mod( 'variants_footer', true ) ) : ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">

      <!-- SOCIAL ICONS -->
      <div class="social-icons">
            
        <ul>

         <?php 

          $editor_social_icons = get_theme_mod( 'editor_social_icons', '<li><a href="#">TWITTER</a></li>
          <li><a href="#">FACEBOOK</a></li>
          <li><a href="#">BEHANCE</a></li>
          <li><a href="#">PINTEREST</a></li>
          <li><a href="#">DRIBBBLE</a></li>' );  
         
          echo wp_kses( $editor_social_icons,

             array('a' => array(
              'href' => array(),
              'target' => array(),
              'class' => array(),
             ),
             'li' => array(),
             'i' => array(
             'class' => array(),
              )
             ) ); 

          ?>
          
        </ul>

      </div>
      <!-- END SOCIAL ICONS -->  

      <?php $editor_copyright = get_theme_mod( 'editor_copyright', 'Copyright © 2017 by <a href="http://themeforest.net/user/MountainTheme?ref=MountainTheme" target="_blank"> MountainTheme</a>. All rights reserved.' );  ?>

      <div class="copyright">

         <?php
         
          echo wp_kses( $editor_copyright,

             array('a' => array(
             'href' => array(),
             'target' => array(),
             'class' => array(),
             )
             ) ); 

          ?>

      </div>

     </div>
    </div>
  </div>

  <?php endif; ?>

  <?php if ( 'widgets' == get_theme_mod( 'variants_footer' ) ) : ?>

  <div class="container">
    <div class="row-flex">

        <?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>

             <?php dynamic_sidebar( 'footer-sidebar' ); ?>

         <?php endif; ?>

    </div>
  </div>

  <?php endif; ?>

</footer>
<!-- END FOOTER -->


<!-- Javascript files -->
<?php wp_footer(); ?>

</body>
</html>


