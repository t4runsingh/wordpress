	<?php
	
	// Do not delete these lines
	
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (post_password_required()) { ?>
		<span class="alert"><?php _re('This post is password protected. Enter the password to view comments.') ?></span>
	
	<?php

		return;
	}
		
	?>

	<!-- You can start editing here. -->

	<?php if (have_comments()) : ?>
	
		<br />
		<div class="comment-section">
			<h2 class="contentheading"><?php comments_number(_r('No Comments'), _r('1 Comment'), _r('% Comments'));?></h2>
		</div>
	
		<ol class="commentlist">
			
			<?php wp_list_comments('style=ol&callback=mytheme_comment&reply_text='._r('Reply')); ?>
	
		</ol>
		
		<div class="nav">
			<div class="alignleft"><?php next_comments_link('&laquo; '._r('Older Comments')); ?></div>
			<div class="alignright"><?php previous_comments_link(_r('Newer Comments').' &raquo;') ?></div>
			<div class="clr"></div>
		</div>

 	<?php else : // this is displayed if there are no comments so far ?>

		<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

		<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<span class="attention"><?php _re('Comments are closed.'); ?></span>

		<?php endif; ?>
		
	<?php endif; ?>

	<!-- RESPOND -->

	<?php if ( comments_open() ) : ?>

	<div id="respond">
		
		<div class="comment-section">
			<h2 class="contentheading"><?php comment_form_title( _r('Leave a Reply'), _r('Leave a Reply to %s') ); ?></h2>
		</div>
		
		<div class="cancel-comment-reply">
			<small><?php cancel_comment_reply_link(); ?></small>
		</div>

		<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>

		<span class="attention"><?php _re('You must be'); ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _re('logged in'); ?></a> <?php _re('to post a comment.'); ?></span>
			
		<?php else : ?>
		
		<!-- Begin Form -->

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

			<?php if ( is_user_logged_in() ) : ?>

			<p><?php _re('Logged in as'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _re('Log out of this account'); ?>"><?php _re('Log out'); ?> &raquo;</a></p>

			<?php else : ?>

			<p>
				<input type="text" name="author" id="author" onblur="if(this.value=='') this.value='<?php _re('Name (Required)'); ?>';" onfocus="if(this.value=='<?php _re('Name (Required)'); ?>') this.value='';" value="Name (Required)" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
			</p>

			<p>
				<input type="text" name="email" id="email" onblur="if(this.value=='') this.value='<?php _re('E-mail (Required)'); ?>';" onfocus="if(this.value=='<?php _re('E-mail (Required)'); ?>') this.value='';" value="E-mail (Required)" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
			</p>

			<p>
				<input type="text" name="url" id="url" onblur="if(this.value=='') this.value='<?php _re('Website'); ?>';" onfocus="if(this.value=='<?php _re('Website'); ?>') this.value='';" value="Website" size="22" tabindex="3" />
			</p>

			<?php endif; ?>

			<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

			<p style="margin: 0;">
				<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
			</p>

			<div class="readon-wrap1">
				<div class="readon1-l png"></div>
				<a class="readon-main">
					<span class="readon1-m png">
						<span class="readon1-r png">
							<input class="button" name="submit" type="submit" id="submit" tabindex="5" value="<?php _re('Submit'); ?>" />
						</span>
					</span>
				</a>
			</div>
			<div class="clr"></div>
			<?php comment_id_fields(); ?>
			
			<?php do_action('comment_form', $post->ID); ?>

		</form>
		
		<!-- End Form -->

		<?php endif; // If registration required and not logged in ?>

	</div>

	<?php endif; // if you delete this the sky will fall on your head ?>