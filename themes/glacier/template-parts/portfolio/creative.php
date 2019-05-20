<?php

/* =============================*/
/* :::: Creative Portfolio :::: */
/* ============================ */

  $thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full' );

  // vars ( ACF )

  // portfolio settings
  $column = get_field('portfolio_column', get_queried_object_id());
  $portfolio_animation = get_field('portfolio_animation', get_queried_object_id());
  $type_portfolio = get_field('type_portfolio', get_queried_object_id());
  $portfolio_output = get_field('portfolio_output', get_queried_object_id());
  $setting_gallery = get_field('setting_gallery', get_queried_object_id());

  // video settings
  $video_item = get_field('video_item');
  $type_video = get_field('type_video');

  // youtube
  $youtube_link = get_field('youtube_link');
  $autoplay_youtube = get_field('autoplay_youtube');
  $controls_youtube = get_field('controls_youtube');
  $showinfo_youtube = get_field('showinfo_youtube');

  // vimeo
  $vimeo_link = get_field('vimeo_link');
  $autoplay_vimeo = get_field('autoplay_vimeo');
  $title_vimeo = get_field('title_vimeo');
  $byline_vimeo = get_field('byline_vimeo');
  $portrait_vimeo = get_field('portrait_vimeo');

  // html5
  $video_file_html5 = get_field('video_file_html5');
  $filedir = wp_make_link_relative($video_file_html5);


   $terms = get_the_terms( $post->ID, 'portfolio-categories' );						
  
    if ( $terms && ! is_wp_error( $terms ) ) : 

          $links = array();

         	foreach ( $terms as $term ) :

              	$links[] = $term->name;

         	endforeach;

          $tax_links = join( " ", str_replace(' ', '-', $links));          
          $tax = strtolower($tax_links);
      	
      	else :	
     	
     	  $tax = '';	

    endif; 


	echo '<article class="'. esc_html($column) .' element-item all '. esc_html($tax) .'">';

	echo '<div class="overlay-box">';

	echo '<div class="'. esc_html($portfolio_animation) .'">';

		if ( $type_portfolio == 'gallery') :

	    if ( $setting_gallery == 'general') :

		  	if ( $video_item == 'on' ) :

		  		if ( $type_video == 'youtube') :

		 			echo '<a href="' . esc_url($youtube_link) . '?rel=0&autoplay=' . esc_attr($autoplay_youtube) . '&controls=' . esc_attr($controls_youtube) . '&showinfo=' . esc_attr($showinfo_youtube) . '" class="showcase" data-rel="lightcase:gallery" title="' . get_the_title() . '">';

		 		endif;

		 		if ( $type_video == 'vimeo') :

		 			echo '<a href="' . esc_url($vimeo_link) . '?autoplay=' . esc_attr($autoplay_vimeo) . '&title=' . esc_attr($title_vimeo) . '&byline=' . esc_attr($byline_vimeo) . '&portrait=' . esc_attr($portrait_vimeo) . '" class="showcase" data-rel="lightcase:gallery" title="' . get_the_title() . '">';

		 		endif;

		 		if ( $type_video == 'html5') :

		 			echo '<a href data-lc-href="' . esc_html($filedir) . '" class="showcase" data-rel="lightcase:gallery" title="' . get_the_title() . '">';

		 		endif;
		 		 
			else :

		 		echo '<a href="' .  esc_url($thumb) . '" class="showcase" data-rel="lightcase:gallery" title="' . get_the_title() . '">';

			endif;

		else :

			if ( $video_item == 'on' ) :

				if ( $type_video == 'youtube') :

		 			echo '<a href="' . esc_url($youtube_link) . '?rel=0&autoplay=' . esc_attr($autoplay_youtube) . '&controls=' . esc_attr($controls_youtube) . '&showinfo=' . esc_attr($showinfo_youtube) . '" class="showcase" data-rel="lightcase:'. esc_html($tax) .'" title="' . get_the_title() . '">';

		 		endif;

		 		if ( $type_video == 'vimeo') :

		 			echo '<a href="' . esc_url($vimeo_link) . '?autoplay=' . esc_attr($autoplay_vimeo) . '&title=' . esc_attr($title_vimeo) . '&byline=' . esc_attr($byline_vimeo) . '&portrait=' . esc_attr($portrait_vimeo) . '" class="showcase" data-rel="lightcase:'. esc_html($tax) .'" title="' . get_the_title() . '">';

		 		endif;

		 		if ( $type_video == 'html5') :

		 			echo '<a href data-lc-href="' . esc_html($filedir) . '" class="showcase" data-rel="lightcase:'. esc_html($tax) .'" title="' . get_the_title() . '">';

		 		endif;
		 		 
			else :

		 		echo '<a href="' .  esc_url($thumb) . '" class="showcase" data-rel="lightcase:'. esc_html($tax) .'" title="' . get_the_title() . '">';

			endif;

		endif;

	   endif;


	   	if ( $type_portfolio == 'project') :

	 		echo '<a href="' . get_permalink() . '">';

	  	endif;	


	     if ( $portfolio_output == 'masonry' ) :

	        echo '<img src="' .  esc_url($thumb) . '">';

	     endif;

	     if ( $portfolio_output == 'box' ) :

	     	echo '<div style="background-image:url('.  esc_url($thumb) . ')" class="work-box"></div>';

	     endif;

	        echo '<div class="overlay-wrap">';
	        echo '<div class="overlay">';
	        echo '<h2>'. get_the_title() .'</h2>';
	        echo '<p>';
				$word = join( ", ", str_replace(' ', '-', $links)); 
				$category = strtolower($word);
				echo esc_html($category);   
				echo '</p>'; 
	        echo '</div>';
	        echo '</div>';
	        echo '</a>';

	echo '</div>';   

	echo '</div>';

	echo '</article>';

							