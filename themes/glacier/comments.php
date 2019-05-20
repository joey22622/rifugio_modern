<?php

/* ======================= */
/* :::::: Comments ::::::: */
/* ======================= */

if ( post_password_required() ) {
  return;
}
?>

<div id="comments">


<?php if ( have_comments() ) : ?>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
    <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
      <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'glacier' ); ?></h2>
      <div class="nav-links">
        <div class="nav-comment-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'glacier' ) ); ?></div>
        <div class="nav-comment-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'glacier' ) ); ?></div>
      </div><!-- .nav-links -->
    </nav><!-- #comment-nav-above -->
<?php endif; // check for comment navigation ?>

  <h3 class="comments-title">

  <?php
  printf( _nx( 'Comments (1)', 'Comments (%1$s)', get_comments_number(), 'comments title', 'glacier' ),
  number_format_i18n( get_comments_number() ), get_the_title() );
  ?>
    
  </h3>

 <ol class="comment-list">
      
      <?php 
        
        $args = array(
          'walker'      => new glacier_comment_walker,
          'short_ping'  => true,
          'avatar_size'   => 80,
        );
        
        wp_list_comments( $args );
      ?>
      
    </ol>

<?php if ( ! comments_open() && get_comments_number() ) : ?>
<p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'glacier' ); ?></p>
<?php endif; ?>

<?php else: // have_comments() ?>

   <h3 class="comments-title"><?php esc_html_e( 'No Comments', 'glacier' ); ?></h3>

<?php endif; // have_comments() ?>

<div class="form-comment">

<?php 
    
    $commenter = wp_get_current_commenter();

    $fields = array(
      
      'author' =>
        '<span class="required"></span> <input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" placeholder="'.esc_html__('Name', 'glacier').'" />',
        
      'email' =>
        '<span class="required"></span><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required="required" placeholder="'.esc_html__('Email', 'glacier').'" />',      
    );
    
    $args = array(
      'id_form'           => 'commentform',
      'id_submit'         => 'submit',
      'name_submit'       => 'submit',
      'title_reply'       => esc_html__( 'Leave a Reply', 'glacier' ),
      'title_reply_to'    => esc_html__( 'Leave a Reply', 'glacier' ),
      'cancel_reply_link' => esc_html__( 'Cancel Reply', 'glacier' ),
      'label_submit' => esc_html__( 'Submit Comment', 'glacier' ),
      'comment_field' => '<div class="form-group"><span class="required"></span><textarea id="comment" name="comment" rows="3" required="required" placeholder="'.esc_html__('Comment', 'glacier').'"></textarea></div>',
      'fields' => apply_filters( 'comment_form_default_fields', $fields ),
      'comment_notes_before' => '',
      'comment_notes_after' => '',
      'format' => 'html5',
      
    );
    
    comment_form( $args ); 
    
  ?>
</div>
</div><!-- #comments -->
