<?php

/* ====================== */
/* :::::::: Index ::::::: */
/* ====================== */

?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
  
  <div class="col-md-9">

    <?php 

      if ( have_posts() ) : 

        while ( have_posts() ) : the_post(); 
       
          get_template_part( 'template-parts/blog/classic/content', get_post_format() );  

        endwhile; 

      else : 

          get_template_part( 'template-parts/content', 'none' ); 

      endif;

    	the_posts_pagination( array(
      	'prev_text' => ( '<i class="fa fa-angle-left"></i>' ),
      	'next_text' => ( '<i class="fa fa-angle-right"></i>' ),
    	) );

    ?>
    

  </div>


  <div class="col-md-3 glacier-padding-left">

    <?php get_sidebar(); ?>

  </div>

 </div>
</div>

<?php get_footer(); ?>
