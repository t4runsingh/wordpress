<?php

class RokStoriesWidget extends WP_Widget {

	// RocketTheme RokStories Widget
	// Port by Jakub Baran

    function RokStoriesWidget() {
    	$widget_ops = array('classname' => 'widget_rokstories', 'description' => _r('RocketTheme RokStories Widget'));
    	$control_ops = array('width' => 300, 'height' => 400);
        $this->WP_Widget('widget-rokstories', _r('RokStories'), $widget_ops, $control_ops);
    }

    function widget($args, $instance){
 		extract($args);
 		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
 		$rokstories_layout = empty($instance['rokstories_layout']) ? 'layout3' : $instance['rokstories_layout'];
 		$rokstories_display = empty($instance['rokstories_display']) ? 'content' : $instance['rokstories_display'];
 		$rokstories_cat = empty($instance['rokstories_cat']) ? '1' : $instance['rokstories_cat'];
 		$rokstories_artcount = empty($instance['rokstories_artcount']) ? '3' : $instance['rokstories_artcount'];
 		$rokstories_order = empty($instance['rokstories_order']) ? 'date' : $instance['rokstories_order'];
 		$rokstories_contentpos = empty($instance['rokstories_contentpos']) ? 'none' : $instance['rokstories_contentpos'];
 		$rokstories_title = empty($instance['rokstories_title']) ? 'true' : $instance['rokstories_title'];
 		$rokstories_date = empty($instance['rokstories_date']) ? 'false' : $instance['rokstories_date'];
 		$rokstories_content = empty($instance['rokstories_content']) ? 'true' : $instance['rokstories_content'];
 		$rokstories_readmore = empty($instance['rokstories_readmore']) ? 'true' : $instance['rokstories_readmore'];
 		$rokstories_thumbbox = empty($instance['rokstories_thumbbox']) ? 'auto' : $instance['rokstories_thumbbox'];
 		$rokstories_firstart = empty($instance['rokstories_firstart']) ? '0' : $instance['rokstories_firstart'];
 		$rokstories_thumbopa = empty($instance['rokstories_thumbopa']) ? '1' : $instance['rokstories_thumbopa'];
 		$rokstories_interact = empty($instance['rokstories_interact']) ? 'click' : $instance['rokstories_interact'];
 		$rokstories_autoplay = empty($instance['rokstories_autoplay']) ? '0' : $instance['rokstories_autoplay'];
 		$rokstories_autoplaydelay = empty($instance['rokstories_autoplaydelay']) ? '5000' : $instance['rokstories_autoplaydelay'];
 		$rokstories_labeltitle = empty($instance['rokstories_labeltitle']) ? 'true' : $instance['rokstories_labeltitle'];
 		$rokstories_preview = empty($instance['rokstories_preview']) ? '0' : $instance['rokstories_preview'];
 		$rokstories_fixedpreview = empty($instance['rokstories_fixedpreview']) ? '1' : $instance['rokstories_fixedpreview'];
 		$rokstories_linklabel = empty($instance['rokstories_linklabel']) ? 'false' : $instance['rokstories_linklabel'];
 		$rokstories_linkimage = empty($instance['rokstories_linkimage']) ? '0' : $instance['rokstories_linkimage'];
 		$rokstories_imgw = empty($instance['rokstories_imgw']) ? '620' : $instance['rokstories_imgw'];
 		$rokstories_imgh = empty($instance['rokstories_imgh']) ? '240' : $instance['rokstories_imgh'];
 		$rokstories_thumbw = empty($instance['rokstories_thumbw']) ? '90' : $instance['rokstories_thumbw'];
 		$rokstories_thumbh = empty($instance['rokstories_thumbh']) ? '41' : $instance['rokstories_thumbh'];

 		# Before the widget
 		echo $before_widget;

 		# The title
 		if ( $title )
 		echo $before_title . $title . $after_title;

  		# Content
  		
  		global $post, $more;
			
		$original_stuff = $args['widget_id'];
		$id = (int) str_replace("widget-rokstories-", "", $original_stuff); 
		
		$image_pad = '';
		$content_pad = '';
		if ($rokstories_contentpos == 'right') $image_pad = ' feature-pad';
		if ($rokstories_contentpos == 'left') $content_pad = ' feature-pad';
		
		$contentOptions = ($rokstories_title == 'true' || $rokstories_date == 'true' || $rokstories_content == 'true' || $rokstories_readmore == 'true');

		?>
		
		<?php if (get_posts('cat='.$rokstories_cat)) { ?>
		
  		<script type="text/javascript">
  		/* <![CDATA[ */
  		
  			RokStoriesImage['rokstories-<?php echo $id; ?>'] = [];
  			
  			<?php if($rokstories_linkimage == 'true') { ?>
  			
			RokStoriesLinks['rokstories-<?php echo $id; ?>'] = [];
			
			<?php } ?>
  		
  			<?php $rokstories = new WP_Query('cat='.$rokstories_cat.'&showposts='.$rokstories_artcount.'&orderby='.$rokstories_order);
    		if($rokstories->have_posts()) : while($rokstories->have_posts()) : $rokstories->the_post(); ?>
  			
  			<?php $image = get_post_meta($post->ID, 'image', TRUE); ?>
  		
   			RokStoriesImage['rokstories-<?php echo $id; ?>'].push('<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image ?>&w=<?php echo $rokstories_imgw; ?>&h=<?php echo $rokstories_imgh; ?>&zc=1&q=75');
   			
   			<?php if($rokstories_linkimage == 'true') { ?>
   			
			RokStoriesLinks['rokstories-<?php echo $id; ?>'].push('<?php the_permalink(); ?>');
			
			<?php } ?>
			
			<?php endwhile; endif; ?>
			
			window.addEvent('domready', function() {
				new RokStories('rokstories-<?php echo $id; ?>', {
					'id': <?php echo $id; ?>,
 					'startElement': <?php echo $rokstories_firstart; ?>,
					'thumbsOpacity': <?php echo $rokstories_thumbopa; ?>,
					'mousetype': '<?php echo $rokstories_interact; ?>',
					'autorun': <?php echo $rokstories_autoplay; ?>,
					'delay': <?php echo $rokstories_autoplaydelay; ?>,
					'startWidth': '<?php echo $rokstories_thumbbox; ?>',
					'layout': '<?php echo $rokstories_layout; ?>',
					'linkedImgs': <?php echo $rokstories_linkimage; ?>,
					'showThumbs': <?php echo $rokstories_preview; ?>,
					'fixedThumb': <?php echo $rokstories_fixedpreview; ?>,
					'thumbLeftOffsets': {x: -40, y: -100},
					'thumbRightOffsets': {x: -30, y: -100}
				});
			});
		
		/* ]]> */	
		</script>
		<div id="rokstories-<?php echo $id; ?>" class="rokstories-<?php echo $rokstories_layout; ?>">
			<div class="feature-block">
				<div class="image-container<?php echo $image_pad; ?>" style="float: <?php echo $rokstories_contentpos; ?>">
					<div class="image-full"></div>
					<div class="image-small">
					    
					    <?php $rokstories = new WP_Query('cat='.$rokstories_cat.'&showposts='.$rokstories_artcount.'&orderby='.$rokstories_order);
    					if($rokstories->have_posts()) : while($rokstories->have_posts()) : $rokstories->the_post(); ?>
  			
  						<?php $image = get_post_meta($post->ID, 'image', TRUE); ?>
					    
					    <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image ?>&amp;w=<?php echo $rokstories_thumbw ?>&amp;h=<?php echo $rokstories_thumbh ?>&amp;zc=1&amp;q=75" class="feature-sub" alt="<?php the_title(); ?>" />
						
						<?php endwhile; endif; ?>
						
					</div>
					<?php if ($rokstories_layout == 'layout2'): ?>
						<div class="feature-block-tl"></div>
						<div class="feature-block-tr"></div>
						<div class="feature-block-bl"></div>
						<div class="feature-block-br"></div>
						<div class="feature-arrow-r"></div>
						<div class="feature-arrow-l"></div>
						
						<?php if ($rokstories_labeltitle == 'true'): ?>
				
						<div class="labels-title">
						
							<?php $rokstories = new WP_Query('cat='.$rokstories_cat.'&showposts='.$rokstories_artcount.'&orderby='.$rokstories_order);
    						if($rokstories->have_posts()) : while($rokstories->have_posts()) : $rokstories->the_post(); ?>
	
							<div class="feature-block-title">
								<div class="feature-block-title2"></div>
								<div class="feature-block-title3">
									<?php if ($rokstories_linklabel == 'true'): ?>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									<?php else: ?>
										<?php the_title(); ?>
									<?php endif; ?>
								</div>
							</div>
								
							<?php endwhile; endif; ?>
							
						</div>
						
						<?php endif;?>
						
					<?php endif;?>
				
				<?php if($rokstories_layout != 'layout3') { ?>
					</div>
				<?php } ?>
				
				<div class="desc-container">
					
					<?php if ($contentOptions && $rokstories_layout == 'layout3'): ?>
					<div class="feature-block-top"><div class="feature-block-top2"></div><div class="feature-block-top3"></div></div>
					<?php endif; ?>
					
					<?php if($rokstories_layout == 'layout3') { ?>
					<div class="feature-block-inner">
					<?php } ?>
				    
				    <?php $rokstories = new WP_Query('cat='.$rokstories_cat.'&showposts='.$rokstories_artcount.'&orderby='.$rokstories_order);
    				if($rokstories->have_posts()) : while($rokstories->have_posts()) : $rokstories->the_post(); ?>
    				
    				<?php $more = 0; ?>
	        
					<div class="description<?php echo $content_pad; ?>">
					
						<?php if ($rokstories_title == 'true'): ?>
							<span class="feature-title"><?php the_title(); ?></span>
						<?php endif;?>
						
						<?php if ($rokstories_date == 'true'): ?>
						    <span class="created-date"><?php the_time('l, j F o'); ?></span>
						<?php endif;?>
			
						<?php if ($rokstories_content == 'true'): ?>
							
							<?php if ($rokstories_display == 'content') { ?>
						
								<?php remove_filter('the_content', 'wpautop'); ?>
						
								<span class="feature-desc"><?php the_content(false); ?></span>
						
								<?php add_filter('the_content', 'wpautop'); ?>
								
							<?php } else { ?>
							
								<?php remove_filter('the_excerpt', 'wpautop'); ?>
						
								<span class="feature-desc"><?php the_excerpt(); ?></span>
						
								<?php add_filter('the_excerpt', 'wpautop'); ?>
							
							<?php } ?>
						
						<?php endif; ?>
		    
						<?php if ($rokstories_readmore == 'true'): ?>
							<div class="clr"></div><div class="readon-wrap1"><div class="readon1-l"></div><a href="<?php the_permalink(); ?>" class="readon-main"><span class="readon1-m"><span class="readon1-r"><?php _re('Read the Full Story'); ?></span></span></a></div><div class="clr"></div>
						<?php endif; ?>
						
					</div>
	    			
	    			<?php endwhile; endif; ?>
	    			
	    			<?php if($rokstories_layout == 'layout3') { ?>
					</div>
					<?php } ?>
					
					<?php if ($contentOptions && $rokstories_layout == 'layout3'): ?>
					<div class="feature-block-bottom"><div class="feature-block-bottom2"></div><div class="feature-block-bottom3"></div></div>
					<?php endif; ?>
	    			
				</div>
				
				<?php if($rokstories_layout == 'layout3') { ?>
				
				</div>
				
				<div class="feature-circles">
					
					<?php $i = 0; ?>
					
					<?php $rokstories = new WP_Query('cat='.$rokstories_cat.'&showposts='.$rokstories_artcount.'&orderby='.$rokstories_order);
    				if($rokstories->have_posts()) : while($rokstories->have_posts()) : $rokstories->the_post(); ?>
					
						<?php 
							if ($i == $rokstories_firstart) $class = ' active';
							else $class = '';
						?>
						
		    			<span class="feature-circles-sub<?php echo $class; ?>"><span>*</span></span>
		    			
						<?php $i++; ?>
						
					<?php endwhile; endif; ?>
					
				</div>
				
				<?php } ?>
								
			</div>
		</div>
		
		<?php } else {
		
		_re('Sorry, but your category is empty!');
		
		} ?>
		
		<?php
	
    	# After the widget
    	echo $after_widget;
	}

    function update($new_instance, $old_instance) {
    
    	$instance = $old_instance;
    	$instance['title'] = stripslashes($new_instance['title']);
    	$instance['rokstories_layout'] = stripslashes($new_instance['rokstories_layout']);
    	$instance['rokstories_display'] = stripslashes($new_instance['rokstories_display']);
    	$instance['rokstories_cat'] = stripslashes($new_instance['rokstories_cat']);
    	$instance['rokstories_artcount'] = stripslashes($new_instance['rokstories_artcount']);
    	$instance['rokstories_order'] = stripslashes($new_instance['rokstories_order']);
    	$instance['rokstories_contentpos'] = stripslashes($new_instance['rokstories_contentpos']);
    	$instance['rokstories_title'] = stripslashes($new_instance['rokstories_title']);
    	$instance['rokstories_date'] = stripslashes($new_instance['rokstories_date']);
    	$instance['rokstories_content'] = stripslashes($new_instance['rokstories_content']);
    	$instance['rokstories_readmore'] = stripslashes($new_instance['rokstories_readmore']);
    	$instance['rokstories_thumbbox'] = stripslashes($new_instance['rokstories_thumbbox']);
    	$instance['rokstories_firstart'] = stripslashes($new_instance['rokstories_firstart']);
    	$instance['rokstories_thumbopa'] = stripslashes($new_instance['rokstories_thumbopa']);
    	$instance['rokstories_interact'] = stripslashes($new_instance['rokstories_interact']);
    	$instance['rokstories_autoplay'] = stripslashes($new_instance['rokstories_autoplay']);
    	$instance['rokstories_autoplaydelay'] = stripslashes($new_instance['rokstories_autoplaydelay']);
    	$instance['rokstories_labeltitle'] = stripslashes($new_instance['rokstories_labeltitle']);
    	$instance['rokstories_preview'] = stripslashes($new_instance['rokstories_preview']);
    	$instance['rokstories_fixedpreview'] = stripslashes($new_instance['rokstories_fixedpreview']);
    	$instance['rokstories_linklabel'] = stripslashes($new_instance['rokstories_linklabel']);
    	$instance['rokstories_linkimage'] = stripslashes($new_instance['rokstories_linkimage']);
    	$instance['rokstories_imgw'] = stripslashes($new_instance['rokstories_imgw']);
    	$instance['rokstories_imgh'] = stripslashes($new_instance['rokstories_imgh']);
    	$instance['rokstories_thumbw'] = stripslashes($new_instance['rokstories_thumbw']);
    	$instance['rokstories_thumbh'] = stripslashes($new_instance['rokstories_thumbh']);

 		return $instance;
	}

    function form($instance){
   		
   		//Defaults
   		
  		$instance = wp_parse_args( (array) $instance, array('title'=>'', 'rokstories_layout'=>'layout3', 'rokstories_display'=>'content', 'rokstories_cat'=>'1', 'rokstories_artcount'=>'3', 'rokstories_order'=>'date', 'rokstories_contentpos'=>'none', 'rokstories_title'=>'true', 'rokstories_date'=>'false', 'rokstories_content'=>'true', 'rokstories_readmore'=>'true', 'rokstories_thumbbox'=>'auto', 'rokstories_firstart'=>'0', 'rokstories_thumbopa'=>'1', 'rokstories_interact'=>'click', 'rokstories_autoplay'=>'0', 'rokstories_autoplaydelay'=>'5000', 'rokstories_labeltitle'=>'true', 'rokstories_preview'=>'0', 'rokstories_fixedpreview'=>'1', 'rokstories_linklabel'=>'false', 'rokstories_linkimage'=>'0', 'rokstories_imgw'=>'620', 'rokstories_imgh'=>'240', 'rokstories_thumbw'=>'90', 'rokstories_thumbh'=>'41' ) );

   		$title = htmlspecialchars($instance['title']);
   		$rokstories_layout = htmlspecialchars($instance['rokstories_layout']);
   		$rokstories_display = htmlspecialchars($instance['rokstories_display']);
   		$rokstories_cat = htmlspecialchars($instance['rokstories_cat']);
   		$rokstories_artcount = htmlspecialchars($instance['rokstories_artcount']);
   		$rokstories_order = htmlspecialchars($instance['rokstories_order']);
   		$rokstories_contentpos = htmlspecialchars($instance['rokstories_contentpos']);
   		$rokstories_title = htmlspecialchars($instance['rokstories_title']);
   		$rokstories_date = htmlspecialchars($instance['rokstories_date']);
   		$rokstories_content = htmlspecialchars($instance['rokstories_content']);
   		$rokstories_readmore = htmlspecialchars($instance['rokstories_readmore']);
   		$rokstories_thumbbox = htmlspecialchars($instance['rokstories_thumbbox']);
   		$rokstories_firstart = htmlspecialchars($instance['rokstories_firstart']);
   		$rokstories_thumbopa = htmlspecialchars($instance['rokstories_thumbopa']);
   		$rokstories_interact = htmlspecialchars($instance['rokstories_interact']);
   		$rokstories_autoplay = htmlspecialchars($instance['rokstories_autoplay']);
   		$rokstories_autoplaydelay = htmlspecialchars($instance['rokstories_autoplaydelay']);
   		$rokstories_labeltitle = htmlspecialchars($instance['rokstories_labeltitle']);
   		$rokstories_preview = htmlspecialchars($instance['rokstories_preview']);
   		$rokstories_fixedpreview = htmlspecialchars($instance['rokstories_fixedpreview']);
   		$rokstories_linklabel = htmlspecialchars($instance['rokstories_linklabel']);
   		$rokstories_linkimage = htmlspecialchars($instance['rokstories_linkimage']);
   		$rokstories_imgw = htmlspecialchars($instance['rokstories_imgw']);
   		$rokstories_imgh = htmlspecialchars($instance['rokstories_imgh']);
   		$rokstories_thumbw = htmlspecialchars($instance['rokstories_thumbw']);
   		$rokstories_thumbh = htmlspecialchars($instance['rokstories_thumbh']);

    	# Output the options
    	
    	?>
    	
    	<h3><?php _re('General Parameters'); ?></h3>
    	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _re('Title:'); ?>&nbsp;
    	<input style="width: 270px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokstories_layout'); ?>"><?php _re('Layout:'); ?></label>&nbsp;
    	<select id="<?php echo $this->get_field_id('rokstories_layout'); ?>" name="<?php echo $this->get_field_name('rokstories_layout'); ?>">
      		<option value="layout1"<?php selected( $instance['rokstories_layout'], 'layout1' ); ?>><?php _re('Default'); ?></option>
      		<option value="layout2"<?php selected( $instance['rokstories_layout'], 'layout2' ); ?>><?php _re('Showcase'); ?></option>
      		<option value="layout3"<?php selected( $instance['rokstories_layout'], 'layout3' ); ?>><?php _re('Compact Showcase'); ?></option>
        </select>
        <br /><br />
    	<label for="<?php echo $this->get_field_id('rokstories_cat'); ?>"><?php _re('Category:'); ?></label>&nbsp;
    	<?php wp_dropdown_categories('hide_empty=0&name=' . $this->get_field_name('rokstories_cat') . '&orderby=name&selected='.$rokstories_cat); ?>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokstories_artcount'); ?>"><?php _re('Max Number Of Articles:'); ?>&nbsp;
    	<input style="width: 40px;" id="<?php echo $this->get_field_id('rokstories_artcount'); ?>" name="<?php echo $this->get_field_name('rokstories_artcount'); ?>" type="text" value="<?php echo $rokstories_artcount; ?>" /></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokstories_order'); ?>"><?php _re('Order:'); ?></label>&nbsp;
    	<select id="<?php echo $this->get_field_id('rokstories_order'); ?>" name="<?php echo $this->get_field_name('rokstories_order'); ?>">
      		<option value="author"<?php selected( $instance['rokstories_order'], 'author' ); ?>><?php _re('Author'); ?></option>
      		<option value="date"<?php selected( $instance['rokstories_order'], 'date' ); ?>><?php _re('Date'); ?></option>
      		<option value="title"<?php selected( $instance['rokstories_order'], 'title' ); ?>><?php _re('Title'); ?></option>
      		<option value="modified"<?php selected( $instance['rokstories_order'], 'modified' ); ?>><?php _re('Modified'); ?></option>
      		<option value="menu_order"<?php selected( $instance['rokstories_order'], 'menu_order' ); ?>><?php _re('Menu Order'); ?></option>
      		<option value="parent"<?php selected( $instance['rokstories_order'], 'parent' ); ?>><?php _re('Parent'); ?></option>
      		<option value="id"<?php selected( $instance['rokstories_order'], 'id' ); ?>><?php _re('ID'); ?></option>
        </select>
        <br /><br />
        <label for="<?php echo $this->get_field_id('rokstories_contentpos'); ?>"><?php _re('Image Position:'); ?></label>&nbsp;
    	<select id="<?php echo $this->get_field_id('rokstories_contentpos'); ?>" name="<?php echo $this->get_field_name('rokstories_contentpos'); ?>">
      		<option value="left"<?php selected( $instance['rokstories_contentpos'], 'left' ); ?>><?php _re('Left'); ?></option>
      		<option value="right"<?php selected( $instance['rokstories_contentpos'], 'right' ); ?>><?php _re('Right'); ?></option>
      		<option value="none"<?php selected( $instance['rokstories_contentpos'], 'none' ); ?>><?php _re('None'); ?></option>
        </select>
        <br /><br />
        <?php _re('Display Article Title:'); ?>
        <input id="<?php echo $this->get_field_id('rokstories_title'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokstories_title'); ?>" <?php if($rokstories_title=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_title'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokstories_title'); ?>0" type="radio" value="false" name="<?php echo $this->get_field_name('rokstories_title'); ?>" <?php if($rokstories_title=='false') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_title'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<?php _re('Display Article Date:'); ?>
        <input id="<?php echo $this->get_field_id('rokstories_date'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokstories_date'); ?>" <?php if($rokstories_date=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_date'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokstories_date'); ?>0" type="radio" value="false" name="<?php echo $this->get_field_name('rokstories_date'); ?>" <?php if($rokstories_date=='false') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_date'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<?php _re('Display Article Content:'); ?>
        <input id="<?php echo $this->get_field_id('rokstories_content'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokstories_content'); ?>" <?php if($rokstories_content=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_content'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokstories_content'); ?>0" type="radio" value="false" name="<?php echo $this->get_field_name('rokstories_content'); ?>" <?php if($rokstories_content=='false') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_content'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<label for="<?php echo $this->get_field_id('rokstories_display'); ?>"><?php _re('Type Of Content :'); ?></label>&nbsp;
    	<select id="<?php echo $this->get_field_id('rokstories_display'); ?>" name="<?php echo $this->get_field_name('rokstories_display'); ?>">
      		<option value="content"<?php selected( $instance['rokstories_display'], 'content' ); ?>><?php _re('Content'); ?></option>
      		<option value="excerpt"<?php selected( $instance['rokstories_display'], 'excerpt' ); ?>><?php _re('Excerpt'); ?></option>
        </select>
        <br /><br />
		<?php _re('Display \'Read More\' Button:'); ?>
        <input id="<?php echo $this->get_field_id('rokstories_readmore'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokstories_readmore'); ?>" <?php if($rokstories_readmore=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_readmore'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokstories_readmore'); ?>0" type="radio" value="false" name="<?php echo $this->get_field_name('rokstories_readmore'); ?>" <?php if($rokstories_readmore=='false') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_readmore'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<label for="<?php echo $this->get_field_id('rokstories_imgw'); ?>"><?php _re('Image Dimensions:'); ?>&nbsp;
    	<input style="width: 40px;" id="<?php echo $this->get_field_id('rokstories_imgw'); ?>" name="<?php echo $this->get_field_name('rokstories_imgw'); ?>" type="text" value="<?php echo $rokstories_imgw; ?>" />&nbsp;px</label>
    	&nbsp;&nbsp;x&nbsp;&nbsp;
    	<input style="width: 40px;" id="<?php echo $this->get_field_id('rokstories_imgh'); ?>" name="<?php echo $this->get_field_name('rokstories_imgh'); ?>" type="text" value="<?php echo $rokstories_imgh; ?>" />&nbsp;px
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokstories_thumbbox'); ?>"><?php _re('Thumbnail Container Size:'); ?>&nbsp;
    	<input style="width: 40px;" id="<?php echo $this->get_field_id('rokstories_thumbbox'); ?>" name="<?php echo $this->get_field_name('rokstories_thumbbox'); ?>" type="text" value="<?php echo $rokstories_thumbbox; ?>" />&nbsp;px</label>
    	<br /><br />
		<label for="<?php echo $this->get_field_id('rokstories_thumbw'); ?>"><?php _re('Thumbnail Dimensions:'); ?>&nbsp;
    	<input style="width: 40px;" id="<?php echo $this->get_field_id('rokstories_thumbw'); ?>" name="<?php echo $this->get_field_name('rokstories_thumbw'); ?>" type="text" value="<?php echo $rokstories_thumbw; ?>" />&nbsp;px</label>
    	&nbsp;&nbsp;x&nbsp;&nbsp;
    	<input style="width: 40px;" id="<?php echo $this->get_field_id('rokstories_thumbh'); ?>" name="<?php echo $this->get_field_name('rokstories_thumbh'); ?>" type="text" value="<?php echo $rokstories_thumbh; ?>" />&nbsp;px
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokstories_thumbbox'); ?>"><?php _re('Thumbnail Container Size:'); ?>&nbsp;
    	<input style="width: 40px;" id="<?php echo $this->get_field_id('rokstories_thumbbox'); ?>" name="<?php echo $this->get_field_name('rokstories_thumbbox'); ?>" type="text" value="<?php echo $rokstories_thumbbox; ?>" />&nbsp;px</label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokstories_firstart'); ?>"><?php _re('First Article:'); ?>&nbsp;
    	<input style="width: 40px;" id="<?php echo $this->get_field_id('rokstories_firstart'); ?>" name="<?php echo $this->get_field_name('rokstories_firstart'); ?>" type="text" value="<?php echo $rokstories_firstart; ?>" /></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokstories_thumbopa'); ?>"><?php _re('Thumbs Opacity:'); ?>&nbsp;
    	<input style="width: 40px;" id="<?php echo $this->get_field_id('rokstories_thumbopa'); ?>" name="<?php echo $this->get_field_name('rokstories_thumbopa'); ?>" type="text" value="<?php echo $rokstories_thumbopa; ?>" /></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokstories_interact'); ?>"><?php _re('Interaction:'); ?></label>&nbsp;
    	<select id="<?php echo $this->get_field_id('rokstories_interact'); ?>" name="<?php echo $this->get_field_name('rokstories_interact'); ?>">
      		<option value="click"<?php selected( $instance['rokstories_interact'], 'click' ); ?>><?php _re('Click'); ?></option>
      		<option value="mouseenter"<?php selected( $instance['rokstories_interact'], 'mouseenter' ); ?>><?php _re('Mouse Over'); ?></option>
        </select>
        <br /><br />
        <?php _re('Autoplay:'); ?>
        <input id="<?php echo $this->get_field_id('rokstories_autoplay'); ?>1" type="radio" value="1" name="<?php echo $this->get_field_name('rokstories_autoplay'); ?>" <?php if($rokstories_autoplay=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_autoplay'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokstories_autoplay'); ?>0" type="radio" value="0" name="<?php echo $this->get_field_name('rokstories_autoplay'); ?>" <?php if($rokstories_autoplay=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_autoplay'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<label for="<?php echo $this->get_field_id('rokstories_autoplaydelay'); ?>"><?php _re('Autoplay Delay:'); ?>&nbsp;
    	<input style="width: 60px;" id="<?php echo $this->get_field_id('rokstories_autoplaydelay'); ?>" name="<?php echo $this->get_field_name('rokstories_autoplaydelay'); ?>" type="text" value="<?php echo $rokstories_autoplaydelay; ?>" />&nbsp;ms</label>
    	<br /><br />
    	<h3><?php _re('Only for Showcase Layout'); ?></h3>
    	<?php _re('Show Label Title:'); ?>
        <input id="<?php echo $this->get_field_id('rokstories_labeltitle'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokstories_labeltitle'); ?>" <?php if($rokstories_labeltitle=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_labeltitle'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokstories_labeltitle'); ?>0" type="radio" value="false" name="<?php echo $this->get_field_name('rokstories_labeltitle'); ?>" <?php if($rokstories_labeltitle!='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_labeltitle'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<?php _re('Show Previews on Arrows:'); ?>
        <input id="<?php echo $this->get_field_id('rokstories_preview'); ?>1" type="radio" value="1" name="<?php echo $this->get_field_name('rokstories_preview'); ?>" <?php if($rokstories_preview=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_preview'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokstories_preview'); ?>0" type="radio" value="0" name="<?php echo $this->get_field_name('rokstories_preview'); ?>" <?php if($rokstories_preview=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_preview'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<?php _re('Fixed Previews:'); ?>
        <input id="<?php echo $this->get_field_id('rokstories_fixedpreview'); ?>1" type="radio" value="1" name="<?php echo $this->get_field_name('rokstories_fixedpreview'); ?>" <?php if($rokstories_fixedpreview=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_fixedpreview'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokstories_fixedpreview'); ?>0" type="radio" value="0" name="<?php echo $this->get_field_name('rokstories_fixedpreview'); ?>" <?php if($rokstories_fixedpreview=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_fixedpreview'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<?php _re('Linked Labels:'); ?>
        <input id="<?php echo $this->get_field_id('rokstories_linklabel'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokstories_linklabel'); ?>" <?php if($rokstories_linklabel=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_linklabel'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokstories_linklabel'); ?>0" type="radio" value="false" name="<?php echo $this->get_field_name('rokstories_linklabel'); ?>" <?php if($rokstories_linklabel!='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_linklabel'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<?php _re('Linked Images:'); ?>
        <input id="<?php echo $this->get_field_id('rokstories_linkimage'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokstories_linkimage'); ?>" <?php if($rokstories_linkimage=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_linkimage'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokstories_linkimage'); ?>0" type="radio" value="false" name="<?php echo $this->get_field_name('rokstories_linkimage'); ?>" <?php if($rokstories_linkimage!='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokstories_linkimage'); ?>0"><?php _re('No'); ?></label>
		<br /><br />

<?php
  	
	}
}

function RokStoriesInit() {
  register_widget('RokStoriesWidget');
}

add_action('widgets_init', 'RokStoriesInit');

?>