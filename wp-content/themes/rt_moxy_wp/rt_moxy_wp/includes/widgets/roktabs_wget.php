<?php

class RokTabsWidget extends WP_Widget {

	// RocketTheme RokTabs Widget
	// Port by Jakub Baran

    function RokTabsWidget() {
    	$widget_ops = array('classname' => 'widget_roktabs', 'description' => __('RocketTheme RokTabs Widget'));
    	$control_ops = array('width' => 300, 'height' => 400);
        $this->WP_Widget('roktabs', __('RokTabs'), $widget_ops, $control_ops);
    }

    function widget($args, $instance){
 		extract($args);
 		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
 		$roktabs_width = empty($instance['roktabs_width']) ? '260' : $instance['roktabs_width'];
 		$roktabs_tabs_count = empty($instance['roktabs_tabs_count']) ? '2' : $instance['roktabs_tabs_count'];
 		$roktabs_cat = empty($instance['roktabs_cat']) ? '1' : $instance['roktabs_cat'];
 		$roktabs_content = empty($instance['roktabs_content']) ? 'content' : $instance['roktabs_content'];
 		$roktabs_order = empty($instance['roktabs_order']) ? 'date' : $instance['roktabs_order'];
 		$roktabs_pos = empty($instance['roktabs_pos']) ? 'top' : $instance['roktabs_pos'];
 		$roktabs_duration = empty($instance['roktabs_duration']) ? '600' : $instance['roktabs_duration'];
 		$roktabs_transition_type = empty($instance['roktabs_transition_type']) ? 'scrolling' : $instance['roktabs_transition_type'];
 		$roktabs_link_margin = empty($instance['roktabs_link_margin']) ? '0' : $instance['roktabs_link_margin'];
 		$roktabs_autoplay = empty($instance['roktabs_autoplay']) ? '0' : $instance['roktabs_autoplay'];
 		$roktabs_autoplay_delay = empty($instance['roktabs_autoplay_delay']) ? '2000' : $instance['roktabs_autoplay_delay'];
 		$roktabs_effect = empty($instance['roktabs_effect']) ? 'Quad.easeInOut' : $instance['roktabs_effect'];

 		# Before the widget
 		echo $before_widget;

 		# The title
 		if ( $title )
 		echo $before_title . $title . $after_title;

  		# Content
  		
  		global $more;
  		
		?>
		
		<?php if (get_posts('cat='.$roktabs_cat)) { ?>
		
  		<script type="text/javascript">
			RokTabsOptions.duration.push(<?php echo $roktabs_duration; ?>);
			RokTabsOptions.transition.push(Fx.Transitions.<?php echo $roktabs_effect; ?>);
			RokTabsOptions.auto.push(<?php echo $roktabs_autoplay; ?>);
			RokTabsOptions.delay.push(<?php echo $roktabs_autoplay_delay; ?>);
			RokTabsOptions.type.push('<?php echo $roktabs_transition_type; ?>');
			RokTabsOptions.linksMargins.push(<?php echo $roktabs_link_margin; ?>);
		</script>
		<div class="tabs-top">
			<div class="roktabs-wrapper" style="width: <?php echo $roktabs_width; ?>px;">
				<div class="roktabs base">
				
					<?php if($roktabs_pos == 'top' || $roktabs_pos == 'hidden') { ?>
				
					<div class='roktabs-links'<?php if ($roktabs_pos == 'hidden') echo ' style="display: none;"'; ?>>
						<!--<div class="roktabs-arrows">
							<span class="previous">&larr;</span>
							<span class="next">&rarr;</span>
						</div>-->
						<ul class='roktabs-top'>
						
							<?php $i = 1; ?>
							
							<?php $roktabs = new WP_Query('cat='.$roktabs_cat.'&showposts='.$roktabs_tabs_count.'&orderby='.$roktabs_order);
    						if($roktabs->have_posts()) : while($roktabs->have_posts()) : $roktabs->the_post(); ?>
							
							<?php if($i == 1) { $tabs_order = 'first active'; } elseif ($i == $roktabs_tabs_count) { $tabs_order = 'last'; } else { $tabs_order = ''; } ?>
							
							<li class="<?php echo $tabs_order; ?>"><span><?php the_title(); ?></span></li>
							
							<?php $i++; ?>
			                <?php endwhile; endif; ?>
			                
						</ul>
					</div>
					
					<?php } ?>
					
					<div class="roktabs-container-tr">
						<div class="roktabs-container-tl">
							<div class="roktabs-container-br">
								<div class="roktabs-container-bl">
									<div class="roktabs-container-inner">
										<div class="roktabs-container-wrapper">
										
											<?php $i = 1; ?>	
											
											<?php $roktabs = new WP_Query('cat='.$roktabs_cat.'&showposts='.$roktabs_tabs_count.'&orderby='.$roktabs_order);
    										if($roktabs->have_posts()) : while($roktabs->have_posts()) : $roktabs->the_post(); ?>	
    										
    										<?php $more = 0; ?>		
																								
											<!-- Begin Tab <?php echo $i; ?> -->
																								
											<div class='roktabs-tab<?php echo $i; ?>'>
												<div class='wrapper'>
													
													<?php if ($roktabs_content == 'content') { ?>
													
													<?php the_content(); ?>
													
													<?php } else { ?>
													
													<?php the_excerpt(); ?>
													<a href="<?php the_permalink(); ?>"><?php _re('(more ...)'); ?></a>
													
													<?php } ?>
													
												</div>
											</div>
																									
											<!-- End Tab <?php echo $i; ?> -->
											
											<?php $i++; ?>
			                				<?php endwhile; endif; ?>
											
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					
					<?php if($roktabs_pos == 'bottom') { ?>
				
					<div class='roktabs-links'>
						<!--<div class="roktabs-arrows">
							<span class="previous">&larr;</span>
							<span class="next">&rarr;</span>
						</div>-->
						<ul class='roktabs-bottom'>
						
							<?php $i = 1; ?>
							
							<?php $roktabs = new WP_Query('cat='.$roktabs_cat.'&showposts='.$roktabs_tabs_count.'&orderby='.$roktabs_order);
    						if($roktabs->have_posts()) : while($roktabs->have_posts()) : $roktabs->the_post(); ?>
							
							<?php if($i == 1) { $tabs_order = 'first active'; } elseif ($i == $roktabs_tabs_count) { $tabs_order = 'last'; } else { $tabs_order = ''; } ?>
							
							<li class="<?php echo $tabs_order; ?>"><span><?php the_title(); ?></span></li>
							
							<?php $i++; ?>
			                <?php endwhile; endif; ?>
			                
						</ul>
					</div>
					
					<?php } ?>
					
				</div>
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
    	$instance['roktabs_width'] = stripslashes($new_instance['roktabs_width']);
    	$instance['roktabs_tabs_count'] = stripslashes($new_instance['roktabs_tabs_count']);
    	$instance['roktabs_cat'] = stripslashes($new_instance['roktabs_cat']);
    	$instance['roktabs_content'] = stripslashes($new_instance['roktabs_content']);
    	$instance['roktabs_order'] = stripslashes($new_instance['roktabs_order']);
    	$instance['roktabs_pos'] = stripslashes($new_instance['roktabs_pos']);
    	$instance['roktabs_duration'] = stripslashes($new_instance['roktabs_duration']);
    	$instance['roktabs_transition_type'] = stripslashes($new_instance['roktabs_transition_type']);
    	$instance['roktabs_link_margin'] = stripslashes($new_instance['roktabs_link_margin']);
    	$instance['roktabs_autoplay'] = stripslashes($new_instance['roktabs_autoplay']);
    	$instance['roktabs_autoplay_delay'] = stripslashes($new_instance['roktabs_autoplay_delay']);
    	$instance['roktabs_effect'] = stripslashes($new_instance['roktabs_effect']);

 		return $instance;
	}

    function form($instance){
   		
   		//Defaults
   		
  		$instance = wp_parse_args( (array) $instance, array('title'=>'RokTabs', 'roktabs_width'=>'260', 'roktabs_tabs_count'=>'2', 'roktabs_cat'=>'1', 'roktabs_content'=>'content', 'roktabs_order'=>'date', 'roktabs_pos'=>'top', 'roktabs_duration'=>'600', 'roktabs_transition_type'=>'scrolling', 'roktabs_link_margin'=>'1', 'roktabs_autoplay'=>'0', 'roktabs_autoplay_delay'=>'2000', 'roktabs_effect'=>'Quad.easeInOut') );

   		$title = htmlspecialchars($instance['title']);
   		$roktabs_cat = htmlspecialchars($instance['roktabs_cat']);
   		$roktabs_content = htmlspecialchars($instance['roktabs_content']);
   		$roktabs_width = htmlspecialchars($instance['roktabs_width']);
   		$roktabs_tabs_count = htmlspecialchars($instance['roktabs_tabs_count']);
   		$roktabs_order = htmlspecialchars($instance['roktabs_order']);
   		$roktabs_pos = htmlspecialchars($instance['roktabs_pos']);
   		$roktabs_duration = htmlspecialchars($instance['roktabs_duration']);
   		$roktabs_transition_type = htmlspecialchars($instance['roktabs_transition_type']);
   		$roktabs_link_margin = htmlspecialchars($instance['roktabs_link_margin']);
   		$roktabs_autoplay = htmlspecialchars($instance['roktabs_autoplay']);
   		$roktabs_autoplay_delay = htmlspecialchars($instance['roktabs_autoplay_delay']);
   		$roktabs_effect = htmlspecialchars($instance['roktabs_effect']);

    	# Output the options
    	
    	?>
    	
    	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _re('Title:'); ?>&nbsp;
    	<input style="width: 270px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('roktabs_cat'); ?>"><?php _re('Category:'); ?></label>&nbsp;
    	<?php wp_dropdown_categories('hide_empty=0&name=' . $this->get_field_name('roktabs_cat') . '&orderby=name&selected='.$roktabs_cat); ?>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('roktabs_content'); ?>"><?php _re('Type Of Content :'); ?></label>&nbsp;
    	<select id="<?php echo $this->get_field_id('roktabs_content'); ?>" name="<?php echo $this->get_field_name('roktabs_content'); ?>">
      		<option value="content"<?php selected( $instance['roktabs_content'], 'content' ); ?>><?php _re('Content'); ?></option>
      		<option value="excerpt"<?php selected( $instance['roktabs_content'], 'excerpt' ); ?>><?php _re('Excerpt'); ?></option>
        </select>
        <br /><br />
    	<label for="<?php echo $this->get_field_id('roktabs_order'); ?>"><?php _re('Order:'); ?></label>&nbsp;
    	<select id="<?php echo $this->get_field_id('roktabs_order'); ?>" name="<?php echo $this->get_field_name('roktabs_order'); ?>">
      		<option value="author"<?php selected( $instance['roktabs_order'], 'author' ); ?>><?php _re('Author'); ?></option>
      		<option value="date"<?php selected( $instance['roktabs_order'], 'date' ); ?>><?php _re('Date'); ?></option>
      		<option value="title"<?php selected( $instance['roktabs_order'], 'title' ); ?>><?php _re('Title'); ?></option>
      		<option value="modified"<?php selected( $instance['roktabs_order'], 'modified' ); ?>><?php _re('Modified'); ?></option>
      		<option value="menu_order"<?php selected( $instance['roktabs_order'], 'menu_order' ); ?>><?php _re('Menu Order'); ?></option>
      		<option value="parent"<?php selected( $instance['roktabs_order'], 'parent' ); ?>><?php _re('Parent'); ?></option>
      		<option value="id"<?php selected( $instance['roktabs_order'], 'id' ); ?>><?php _re('ID'); ?></option>
      		<option value="rand"<?php selected( $instance['roktabs_order'], 'rand' ); ?>><?php _re('Random'); ?></option>
        </select><br /><br />
    	<label for="<?php echo $this->get_field_id('roktabs_tabs_count'); ?>"><?php _re('Number of tabs:'); ?></label>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('roktabs_tabs_count'); ?>" name="<?php echo $this->get_field_name('roktabs_tabs_count'); ?>" type="text" value="<?php echo $roktabs_tabs_count; ?>" />
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('roktabs_pos'); ?>"><?php _re('Tabs position:'); ?></label>&nbsp;
    	<select id="<?php echo $this->get_field_id('roktabs_pos'); ?>" name="<?php echo $this->get_field_name('roktabs_pos'); ?>">
      		<option value="top"<?php selected( $instance['roktabs_pos'], 'top' ); ?>><?php _re('Top'); ?></option>
      		<option value="bottom"<?php selected( $instance['roktabs_pos'], 'bottom' ); ?>><?php _re('Bottom'); ?></option>
      		<option value="hidden"<?php selected( $instance['roktabs_pos'], 'hidden' ); ?>><?php _re('Hidden'); ?></option>
        </select>
        <br /><br />
    	<label for="<?php echo $this->get_field_id('roktabs_width'); ?>"><?php _re('Width:'); ?>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('roktabs_width'); ?>" name="<?php echo $this->get_field_name('roktabs_width'); ?>" type="text" value="<?php echo $roktabs_width; ?>" />px</label>
        <br /><br />
        <label for="<?php echo $this->get_field_id('roktabs_link_margin'); ?>1"><?php _re('Links margin:'); ?></label>
        <input id="<?php echo $this->get_field_id('roktabs_link_margin'); ?>1" type="radio" value="1" name="<?php echo $this->get_field_name('roktabs_link_margin'); ?>" <?php if($roktabs_link_margin=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('roktabs_link_margin'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('roktabs_link_margin'); ?>0" type="radio" value="0" name="<?php echo $this->get_field_name('roktabs_link_margin'); ?>" <?php if($roktabs_link_margin=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('roktabs_link_margin'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
    	<label for="<?php echo $this->get_field_id('roktabs_duration'); ?>"><?php _re('Transition duration:'); ?>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('roktabs_duration'); ?>" name="<?php echo $this->get_field_name('roktabs_duration'); ?>" type="text" value="<?php echo $roktabs_duration; ?>" />ms</label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('roktabs_transition_type'); ?>"><?php _re('Transition type:'); ?></label>&nbsp;
    	<select id="<?php echo $this->get_field_id('roktabs_transition_type'); ?>" name="<?php echo $this->get_field_name('roktabs_transition_type'); ?>">
      		<option value="scrolling"<?php selected( $instance['roktabs_transition_type'], 'scrolling' ); ?>><?php _re('Scrolling'); ?></option>
      		<option value="fading"<?php selected( $instance['roktabs_transition_type'], 'fading' ); ?>><?php _re('Fadding'); ?></option>
        </select>
        <br /><br />
        <label for="<?php echo $this->get_field_id('roktabs_effect'); ?>"><?php _re('Transition effect:'); ?></label>&nbsp;
    	<select id="<?php echo $this->get_field_id('roktabs_effect'); ?>" name="<?php echo $this->get_field_name('roktabs_effect'); ?>">
      		<option value="linear"<?php selected( $instance['roktabs_effect'], 'linear' ); ?>><?php _re('linear'); ?></option>
      		<option value="Quad.easeOut"<?php selected( $instance['roktabs_effect'], 'Quad.easeOut' ); ?>><?php _e('Quad.easeOut'); ?></option>
      		<option value="Quad.easeIn"<?php selected( $instance['roktabs_effect'], 'Quad.easeIn' ); ?>><?php _e('Quad.easeIn'); ?></option>
      		<option value="Quad.easeInOut"<?php selected( $instance['roktabs_effect'], 'Quad.easeInOut' ); ?>><?php _e('Quad.easeInOut'); ?></option>
      		<option value="Cubic.easeOut"<?php selected( $instance['roktabs_effect'], 'Cubic.easeOut' ); ?>><?php _e('Cubic.easeOut'); ?></option>
      		<option value="Cubic.easeIn"<?php selected( $instance['roktabs_effect'], 'Cubic.easeIn' ); ?>><?php _e('Cubic.easeIn'); ?></option>
      		<option value="Cubic.easeInOut"<?php selected( $instance['roktabs_effect'], 'Cubic.easeInOut' ); ?>><?php _e('Cubic.easeInOut'); ?></option>
      		<option value="Quart.easeOut"<?php selected( $instance['roktabs_effect'], 'Quart.easeOut' ); ?>><?php _e('Quart.easeOut'); ?></option>
      		<option value="Quart.easeIn"<?php selected( $instance['roktabs_effect'], 'Quart.easeIn' ); ?>><?php _e('Quart.easeIn'); ?></option>
      		<option value="Quart.easeInOut"<?php selected( $instance['roktabs_effect'], 'Quart.easeInOut' ); ?>><?php _e('Quart.easeInOut'); ?></option>
      		<option value="Quint.easeOut"<?php selected( $instance['roktabs_effect'], 'Quint.easeOut' ); ?>><?php _e('Quint.easeOut'); ?></option>
      		<option value="Quint.easeIn"<?php selected( $instance['roktabs_effect'], 'Quint.easeIn' ); ?>><?php _e('Quint.easeIn'); ?></option>
      		<option value="Quint.easeInOut"<?php selected( $instance['roktabs_effect'], 'Quint.easeInOut' ); ?>><?php _e('Quint.easeInOut'); ?></option>
      		<option value="Expo.easeOut"<?php selected( $instance['roktabs_effect'], 'Expo.easeOut' ); ?>><?php _e('Expo.easeOut'); ?></option>
      		<option value="Expo.easeIn"<?php selected( $instance['roktabs_effect'], 'Expo.easeIn' ); ?>><?php _e('Expo.easeIn'); ?></option>
      		<option value="Expo.easeInOut"<?php selected( $instance['roktabs_effect'], 'Expo.easeInOut' ); ?>><?php _e('Expo.easeInOut'); ?></option>
      		<option value="Circ.easeOut"<?php selected( $instance['roktabs_effect'], 'Circ.easeOut' ); ?>><?php _e('Circ.easeOut'); ?></option>
      		<option value="Circ.easeIn"<?php selected( $instance['roktabs_effect'], 'Circ.easeIn' ); ?>><?php _e('Circ.easeIn'); ?></option>
      		<option value="Circ.easeInOut"<?php selected( $instance['roktabs_effect'], 'Circ.easeInOut' ); ?>><?php _e('Circ.easeInOut'); ?></option>
      		<option value="Sine.easeOut"<?php selected( $instance['roktabs_effect'], 'Sine.easeOut' ); ?>><?php _e('Sine.easeOut'); ?></option>
      		<option value="Sine.easeIn"<?php selected( $instance['roktabs_effect'], 'Sine.easeIn' ); ?>><?php _e('Sine.easeIn'); ?></option>
      		<option value="Sine.easeInOut"<?php selected( $instance['roktabs_effect'], 'Sine.easeInOut' ); ?>><?php _e('Sine.easeInOut'); ?></option>
      		<option value="Back.easeOut"<?php selected( $instance['roktabs_effect'], 'Back.easeOut' ); ?>><?php _e('Back.easeOut'); ?></option>
      		<option value="Back.easeIn"<?php selected( $instance['roktabs_effect'], 'Back.easeIn' ); ?>><?php _e('Back.easeIn'); ?></option>
      		<option value="Back.easeInOut"<?php selected( $instance['roktabs_effect'], 'Back.easeInOut' ); ?>><?php _e('Back.easeInOut'); ?></option>
      		<option value="Bounce.easeOut"<?php selected( $instance['roktabs_effect'], 'Bounce.easeOut' ); ?>><?php _e('Bounce.easeOut'); ?></option>
      		<option value="Bounce.easeIn"<?php selected( $instance['roktabs_effect'], 'Bounce.easeIn' ); ?>><?php _e('Bounce.easeIn'); ?></option>
      		<option value="Bounce.easeInOut"<?php selected( $instance['roktabs_effect'], 'Bounce.easeInOut' ); ?>><?php _e('Bounce.easeInOut'); ?></option>
      		<option value="Elastic.easeOut"<?php selected( $instance['roktabs_effect'], 'Elastic.easeOut' ); ?>><?php _e('Elastic.easeOut'); ?></option>
      		<option value="Elastic.easeIn"<?php selected( $instance['roktabs_effect'], 'Elastic.easeIn' ); ?>><?php _e('Elastic.easeIn'); ?></option>
      		<option value="Elastic.easeInOut"<?php selected( $instance['roktabs_effect'], 'Elastic.easeInOut' ); ?>><?php _e('Elastic.easeInOut'); ?></option>
        </select>
        <br /><br />
        <label for="<?php echo $this->get_field_id('roktabs_autoplay'); ?>1"><?php _re('Enable autoplay:'); ?></label>
        <input id="<?php echo $this->get_field_id('roktabs_autoplay'); ?>1" type="radio" value="1" name="<?php echo $this->get_field_name('roktabs_autoplay'); ?>" <?php if($roktabs_autoplay=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('roktabs_autoplay'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('roktabs_autoplay'); ?>0" type="radio" value="0" name="<?php echo $this->get_field_name('roktabs_autoplay'); ?>" <?php if($roktabs_autoplay=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('roktabs_autoplay'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<label for="<?php echo $this->get_field_id('roktabs_autoplay_delay'); ?>"><?php _re('Autplay delay:'); ?>&nbsp;
    	<input style="width: 60px;" id="<?php echo $this->get_field_id('roktabs_autoplay_delay'); ?>" name="<?php echo $this->get_field_name('roktabs_autoplay_delay'); ?>" type="text" value="<?php echo $roktabs_autoplay_delay; ?>" />ms</label>
        <?php
    	
	}

}

function RokTabsInit() {
  register_widget('RokTabsWidget');
}

add_action('widgets_init', 'RokTabsInit');

?>