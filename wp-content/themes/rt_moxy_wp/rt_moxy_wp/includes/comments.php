<?php

// Comment Styling

function mytheme_comment($comment, $args, $depth) {
   
   $GLOBALS['comment'] = $comment; ?>
   
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
   	<div id="comment-<?php comment_ID(); ?>" class="comment-div-wrapper">
      
      <div class="comment-author vcard" style="line-height: 50px;">
         
         <div class="comment_gravatar_wrapper">
         
         	<?php echo get_avatar($comment,$size=50); ?>
		
		 </div>
         
         <div class="comment-meta commentmetadata">
         
         	<?php printf(_r('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
         	
         	<div class="comment-meta-time">
      	
      	 		<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(_r('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a>
      			<?php edit_comment_link(_r('(Edit)'),'  ','') ?>
      		
      		</div>
      
      	 </div>
         
         <div class="clr"></div>
      
      </div>
      
      <?php if ($comment->comment_approved == '0') : ?>
      
         <span class="attention"><?php _re('Your comment is awaiting moderation.') ?></span>
         
      <?php endif; ?>

      <?php comment_text() ?>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
      
      <div class="clr"></div>
     
     </div>

<?php } ?>