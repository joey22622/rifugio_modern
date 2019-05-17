<?php

/** COMMENTS WALKER */
class glacier_comment_walker extends Walker_Comment {

    // init classwide variables
    var $tree_type = 'comment';
    var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

    /** CONSTRUCTOR
     * You'll have to use this if you plan to get to the top of the comments list, as
     * start_lvl() only goes as high as 1 deep nested comments */
    function __construct() { ?>

    <!-- COMMENT -->
    <ul class="comments">

    <?php }

    /*=== START LVL ===*/
    /* Starts the list before the CHILD elements are added. */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $GLOBALS['comment_depth'] = $depth + 1; ?>

        <ul class="child-comment"><!-- START CHILDREN -->

    <?php }

     /*=== END LVL ===*/

     /* Ends the children list of after the elements are added. */
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $GLOBALS['comment_depth'] = $depth + 1; ?>

        </ul><!-- END CHILDREN -->

    <?php }

    /*=== START_EL ===*/
    function start_el(&$output, $comment, $depth = 0, $args = Array(), $id = 0) {
        $depth++;
        $GLOBALS['comment_depth'] = $depth;
        $GLOBALS['comment'] = $comment;
        $parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); ?>

        <!-- LIST COMMENT -->
        <li id="comment-<?php comment_ID() ?>" class="comment">

        	<div class="border-comment">

        		<!-- AVATAR AUTHOR -->
                <div class="avatar-author">
                    <?php echo ( $args['avatar_size'] != 0 ? get_avatar( $comment, $args['avatar_size'] ) :'' ); ?>
                </div>
               	<!-- END AVATAR AUTHOR -->

               		<!-- COMMENT INFO -->
                	<div class="comment-info">

	                	<!-- NAME AUTHOR -->
	                    <div class="name-author">
	                    	<?php echo get_comment_author_link(); ?>
	                    </div>
	                    <!-- END NAME AUTHOR -->

	                    <!-- DATE COMMENT -->
	                    <div class="date-comment">
	                        <?php comment_date(); ?> at <?php comment_time(); ?>
	                        <?php edit_comment_link( '(Edit)' ); ?>
	                    </div>
	                    <!-- END DATE COMMENT -->
	                  
	                  	<!-- BODY COMMENT -->
	                    <div id="comment-content-<?php comment_ID(); ?>" class="body-comment">
	                        <?php if( !$comment->comment_approved ) : ?>
	                        <em class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'glacier'); ?></em>
	                        <?php else:
	                            echo get_comment_text();
	                        ?>
	                        <?php endif; ?>
	                    </div>
	                    <!-- END BODY COMMENT -->

	                    <!-- REPLY COMMENT -->
	                    <div class="reply">
	                            <?php
	                            comment_reply_link( array_merge( $args, array(
	                                'add_below' => isset($args['add_below'])?$args['add_below']:'comment',
	                                'depth' => $depth,
	                                'max_depth' => $args['max_depth'],
	                                'reply_text' => sprintf( esc_html__('reply', 'glacier'))
	                            ) ), $comment->comment_ID );
	                            ?>
	                    </div>
	                    <!-- END REPLY COMMENT -->

 					 </div>
 					 <!-- END COMMENT INFO -->
 			</div>

    <?php }
    /*=== END_EL ===*/

    function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

        </li>
        <!-- END LIST COMMENT -->

    <?php }

    /** DESTRUCTOR
     * I'm just using this since we needed to use the constructor to reach the top
     * of the comments list, just seems to balance out nicely:) */
    function __destruct() { ?>

    </ul>
    <!-- END COMMENT -->

    <?php }
}
