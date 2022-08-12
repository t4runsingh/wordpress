<?php

class RokSwitcherWidget extends WP_Widget {

	// RocketTheme RokSwitcher Widget
	// by Jakub Baran

    function RokSwitcherWidget() {
    	$widget_ops = array('classname' => 'widget_rokswitcher', 'description' => _r('RocketTheme RokSwitcher Widget'));
    	$control_ops = array('width' => 300, 'height' => 400);
        $this->WP_Widget('widget-rokswitcher', _r('RokSwitcher'), $widget_ops, $control_ops);
    }

    function widget($args, $instance){
 		extract($args);
 		$title = apply_filters('widget_title', empty($instance['title']) ? 'Preset Styles' : $instance['title']);
 		$rokswitcher_interface = empty($instance['rokswitcher_interface']) ? 'gui' : $instance['rokswitcher_interface'];
 		$rokswitcher_gui_width = empty($instance['rokswitcher_gui_width']) ? '200' : $instance['rokswitcher_gui_width'];
 		$rokswitcher_gui_styling = empty($instance['rokswitcher_gui_styling']) ? 'margin: 0 auto; margin-top: 5px;' : $instance['rokswitcher_gui_styling'];
 		$rokswitcher_text_styling = empty($instance['rokswitcher_text_styling']) ? 'text-align: center; font-weight: bold;' : $instance['rokswitcher_text_styling'];
 		$rokswitcher_reset = empty($instance['rokswitcher_reset']) ? 'true' : $instance['rokswitcher_reset'];
 		$rokswitcher_label = empty($instance['rokswitcher_label']) ? 'Reset Settings' : $instance['rokswitcher_label'];
 		$rokswitcher_label_styling = empty($instance['rokswitcher_label_styling']) ? 'text-align: center; margin-bottom: 0;' : $instance['rokswitcher_label_styling'];

 		# Before the widget
 		echo $before_widget;

 		# The title
 		if ( $title )
 		echo $before_title . $title . $after_title;

  		# Content
  		
  		global $stylesList;
  		
  		$styles_count = count($stylesList);
  		
  		if ($rokswitcher_interface == 'gui') {

		?>
		
		<!-- Begin Content -->
																					
		<div style="width: <?php echo $rokswitcher_gui_width; ?>px; <?php echo $rokswitcher_gui_styling; ?>">
			<img src="<?php bloginfo('template_directory'); ?>/includes/widgets/rokswitcher/images/blank.png" name="variation_preview" id="variation_preview" border="0" width="<?php echo $rokswitcher_gui_width; ?>" height="160" alt="<?php _re('Style Preview'); ?>" />

			<form action="<?php bloginfo('wpurl'); ?>/?" name="chooserform" method="get" class="variation-chooser">

				<div class="controls">
					<img class="control-prev" id="variation_chooser_prev" title="<?php _re('Previous'); ?>" alt="prev" src="<?php bloginfo('template_directory'); ?>/includes/widgets/rokswitcher/images/blank.png" style="background-image: url(<?php bloginfo('template_directory'); ?>/includes/widgets/rokswitcher/images/showcase-controls.png);" />
					<select name="tstyle" id="variation_chooser" class="button" style="float: left;">
						<?php
						for ($x=1;$x<=$styles_count;$x++) {
							echo "<option value=\"style$x\"" . getSelected('style'. $x) .">"._r('Style')." $x</option>\n";
						}
						?>
					</select>
					<img class="control-next" id="variation_chooser_next" title="<?php _re('Next'); ?>" alt="next" src="<?php bloginfo('template_directory'); ?>/includes/widgets/rokswitcher/images/blank.png" style="background-image: url(<?php bloginfo('template_directory'); ?>/includes/widgets/rokswitcher/images/showcase-controls.png);"/>
				</div>
				<input class="button" type="submit" value="<?php _re('Select'); ?>" />
			</form>
		</div>
		
		<!-- End Content -->
		
		<?php } else { ?>
		
		<div style="<?php echo $rokswitcher_text_styling; ?>">
		
		<?php
			$styles_count = count($stylesList);
			for ($x=1;$x<=$styles_count;$x++) { ?>
			<a href="<?php bloginfo('wpurl'); ?>/?tstyle=style<?php echo $x; ?>"><?php _re('Style'); ?> <?php echo $x; ?></a>&nbsp;&nbsp;
			<?php }
		?>
		
		</div>
		
		<? }
		
		if ($rokswitcher_reset == 'true') { ?>
		
		<p style="<?php echo $rokswitcher_label_styling; ?>"><a href="<?php bloginfo('wpurl'); ?>/?delete_cookies=true" target="_self"><b><?php echo $rokswitcher_label; ?></b></a></p>
		
		<?php }
	
    	# After the widget
    	echo $after_widget;
	}

    function update($new_instance, $old_instance) {
    
    	$instance = $old_instance;
    	$instance['title'] = stripslashes($new_instance['title']);
    	$instance['rokswitcher_interface'] = stripslashes($new_instance['rokswitcher_interface']);
    	$instance['rokswitcher_gui_width'] = stripslashes($new_instance['rokswitcher_gui_width']);
    	$instance['rokswitcher_gui_styling'] = stripslashes($new_instance['rokswitcher_gui_styling']);
    	$instance['rokswitcher_text_styling'] = stripslashes($new_instance['rokswitcher_text_styling']);
    	$instance['rokswitcher_reset'] = stripslashes($new_instance['rokswitcher_reset']);
    	$instance['rokswitcher_label'] = stripslashes($new_instance['rokswitcher_label']);
    	$instance['rokswitcher_label_styling'] = stripslashes($new_instance['rokswitcher_label_styling']);

 		return $instance;
	}

    function form($instance){
   		
   		//Defaults
   		
  		$instance = wp_parse_args( (array) $instance, array('title'=>'Preset Styles', 'rokswitcher_interface'=>'gui', 'rokswitcher_gui_width'=>'200', 'rokswitcher_gui_styling'=>'margin: 0 auto; margin-top: 5px;', 'rokswitcher_text_styling'=>'text-align: center; font-weight: bold;', 'rokswitcher_reset'=>'true', 'rokswitcher_label'=>'Reset Settings', 'rokswitcher_label_styling'=>'text-align: center; margin-bottom: 0;') );

   		$title = htmlspecialchars($instance['title']);
   		$rokswitcher_interface = htmlspecialchars($instance['rokswitcher_interface']);
   		$rokswitcher_gui_width = htmlspecialchars($instance['rokswitcher_gui_width']);
   		$rokswitcher_gui_styling = htmlspecialchars($instance['rokswitcher_gui_styling']);
   		$rokswitcher_text_styling = htmlspecialchars($instance['rokswitcher_text_styling']);
   		$rokswitcher_reset = htmlspecialchars($instance['rokswitcher_reset']);
   		$rokswitcher_label = htmlspecialchars($instance['rokswitcher_label']);
   		$rokswitcher_label_styling = htmlspecialchars($instance['rokswitcher_label_styling']);

    	# Output the options
    	
    	?>
    	
    	<h3><?php _re('General Parameters'); ?></h3>
    	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _re('Title:'); ?>&nbsp;
    	<input style="width: 270px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label>
    	<br /><br />
    	<?php _re('RokSwitcher Style:'); ?>
        <input id="<?php echo $this->get_field_id('rokswitcher_interface'); ?>1" type="radio" value="gui" name="<?php echo $this->get_field_name('rokswitcher_interface'); ?>" <?php if($rokswitcher_interface=='gui') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokswitcher_interface'); ?>1"><?php _re('Graphical'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokswitcher_interface'); ?>0" type="radio" value="text" name="<?php echo $this->get_field_name('rokswitcher_interface'); ?>" <?php if($rokswitcher_interface=='text') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokswitcher_interface'); ?>0"><?php _re('Text'); ?></label>
    	<br /><br />
    	<?php _re('Reset Settings Button:'); ?>
        <input id="<?php echo $this->get_field_id('rokswitcher_reset'); ?>1" type="radio" value="true" name="<?php echo $this->get_field_name('rokswitcher_reset'); ?>" <?php if($rokswitcher_reset=='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokswitcher_reset'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('rokswitcher_reset'); ?>0" type="radio" value="text" name="<?php echo $this->get_field_name('rokswitcher_reset'); ?>" <?php if($rokswitcher_reset!='true') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('rokswitcher_reset'); ?>0"><?php _re('No'); ?></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokswitcher_label'); ?>"><?php _re('Reset Button Text:'); ?>&nbsp;
    	<input style="width: 160px;" id="<?php echo $this->get_field_id('rokswitcher_label'); ?>" name="<?php echo $this->get_field_name('rokswitcher_label'); ?>" type="text" value="<?php echo $rokswitcher_label; ?>" /></label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokswitcher_label_styling'); ?>"><?php _re('Reset Button Style:'); ?><br />
    	<textarea name="<?php echo $this->get_field_name('rokswitcher_label_styling'); ?>" id="<?php echo $this->get_field_id('rokswitcher_label_styling'); ?>" cols="32" rows="2"><?php echo $rokswitcher_label_styling; ?></textarea>
    	<br /><br />
    	<h3><?php _re('Only for Graphical Version'); ?></h3>
    	<label for="<?php echo $this->get_field_id('rokswitcher_gui_width'); ?>"><?php _re('Width:'); ?>&nbsp;
    	<input style="width: 100px;" id="<?php echo $this->get_field_id('rokswitcher_gui_width'); ?>" name="<?php echo $this->get_field_name('rokswitcher_gui_width'); ?>" type="text" value="<?php echo $rokswitcher_gui_width; ?>" />px</label>
    	<br /><br />
    	<label for="<?php echo $this->get_field_id('rokswitcher_gui_styling'); ?>"><?php _re('Graphical Version Styling:'); ?><br />
    	<textarea name="<?php echo $this->get_field_name('rokswitcher_gui_styling'); ?>" id="<?php echo $this->get_field_id('rokswitcher_gui_styling'); ?>" cols="32" rows="2"><?php echo $rokswitcher_gui_styling; ?></textarea>
    	<br /><br />
    	<h3><?php _re('Only for Text Version'); ?></h3>
    	<label for="<?php echo $this->get_field_id('rokswitcher_text_styling'); ?>"><?php _re('Text Version Styling:'); ?><br />
    	<textarea name="<?php echo $this->get_field_name('rokswitcher_text_styling'); ?>" id="<?php echo $this->get_field_id('rokswitcher_text_styling'); ?>" cols="32" rows="2"><?php echo $rokswitcher_text_styling; ?></textarea>
    	<br /><br />

<?php
  	
	}
}

function RokSwitcherInit() {
  register_widget('RokSwitcherWidget');
}

function RokSwitcherScripts() {
    echo "\n<script type=\"text/javascript\">
    window.addEvent('domready', function() {
	var select = $('variation_chooser'), preview = $('variation_preview'), next = $('variation_chooser_next'), prev = $('variation_chooser_prev');
	if (select && preview && prev && next) {
		select.addEvent('change', function(e) {
			new Event(e).stop();
			selectImage(select.selectedIndex);
		});
		prev.addEvent('click', function() {
			var index = select.selectedIndex;
			if (index - 1 < 0) index = select.options.length - 1;
			else index -= 1;
			select.selectedIndex = index;
			selectImage(index);
		});
		next.addEvent('click', function() {
			var index = select.selectedIndex;
			if (index + 1 >= select.options.length) index = 0;
			else index += 1;
			select.selectedIndex = index;
			selectImage(index);
		});
		
		var asset;
		var selectImage = function(index) {
			preview.setStyle('background', 'url(".get_bloginfo('template_directory')."/includes/widgets/rokswitcher/images/loading.gif) center center no-repeat');
			asset = new Asset.image('".get_bloginfo('template_directory')."/includes/widgets/rokswitcher/images/ss_' + select.options[index].value + '.jpg', {
				onload: function() { 
					if (index == select.selectedIndex) preview.setStyle('background-image', 'url(' + this.src + ')');
				}
			});
		};
		
		selectImage(select.selectedIndex);
	};
});
</script>\n";
}

add_action('widgets_init', 'RokSwitcherInit');
add_action('wp_head', 'RokSwitcherScripts');
?>