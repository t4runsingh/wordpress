<?php
/**
 * @package     wp_nexus
 * @subpackage  include.widgets
 * @version     1.1 February 28, 2010
 * @author      RocketTheme http://www.rockettheme.com
 * @copyright   Copyright (C) 2007 - 2010 RocketTheme, LLC
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
class RokMenuWidget extends WP_Widget {

    var $_defaults = array(
        'theme' => 'fusion',
        'show_home' => 1,
        'home_text' => 'Home',
        'limit_levels' => 0,
        'startLevel' => 0,
        'endLevel' => 0,
        'showAllChildren' => 1,
        'maxdepth' => 10 
    );
    

    function RokMenuWidget() {
    	$widget_ops = array('classname' => 'widget_rokmenu', 'description' => _r('RocketTheme RokMenu Widget'));
    	$control_ops = array('width' => 300, 'height' => 400);
        $this->WP_Widget('rokmenu', _r('RokMenu'), $widget_ops, $control_ops);
    }

    function widget($args, $instance){
 		extract($args);

         $defaults = $this->_defaults;

        $themes = RokMenu::getThemes();

        foreach($themes as $theme) {
            $theme_options = RokMenu::getThemeDefaults($theme);
            $defaults =  array_merge($defaults, $theme_options);
        }

        foreach ($instance as $variable => $value) {
            $$variable =  empty($variable) ? $this->_defaults[$variable] : $value;
            $instance[$variable] = $$variable;
        }
        $args = implode_with_key("&", $instance, "=");
        ?>
        <?php RokMenu::render($args);?>
        <?php
	}

    function update($new_instance, $old_instance) {
    	$instance = $old_instance;
        foreach ($new_instance as $new_var => $new_value) {
            $instance[$new_var] = stripslashes($new_value);
        }
 		return $instance;
	}

    function form($instance){
        $themes = RokMenu::getThemes();
        $defaults = $this->_defaults;

        foreach($themes as $theme) {
            $theme_options = RokMenu::getThemeDefaults($theme);
            $defaults =  array_merge($defaults, $theme_options);
        }

  		$instance = wp_parse_args((array) $instance, $defaults);

        foreach ($instance as $variable => $value)
        {   $instance[$variable] = htmlspecialchars($value);
            $$variable =  htmlspecialchars($value);
        }
        
    	?>
    	<label for="<?php echo $this->get_field_id('show_home'); ?>1"><?php _re('Show Home Menu Item:'); ?></label>
        <input id="<?php echo $this->get_field_id('show_home'); ?>1" type="radio" value="1" name="<?php echo $this->get_field_name('show_home'); ?>" <?php if($show_home=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('show_home'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('show_home'); ?>0" type="radio" value="0" name="<?php echo $this->get_field_name('show_home'); ?>" <?php if($show_home=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('show_home'); ?>0"><?php _re('No'); ?></label>
		<br /><br />


        <label for="<?php echo $this->get_field_id('home_text'); ?>"><?php _re('Home Menu Text:'); ?>&nbsp;
    	<input style="width: 100px;" id="<?php echo $this->get_field_id('home_text'); ?>" name="<?php echo $this->get_field_name('home_text'); ?>" type="text" value="<?php echo $home_text; ?>" /></label>
		<br /><br />
    	<input id="<?php echo $this->get_field_id('theme'); ?>" name="<?php echo $this->get_field_name('theme'); ?>" type="hidden" value="<?php echo $theme; ?>"/>
    	<label for="<?php echo $this->get_field_id('limit_levels'); ?>1"><?php _re('Limit Levels:'); ?></label>
        <input id="<?php echo $this->get_field_id('limit_levels'); ?>1" type="radio" value="1" name="<?php echo $this->get_field_name('limit_levels'); ?>" <?php if($limit_levels=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('limit_levels'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('limit_levels'); ?>0" type="radio" value="0" name="<?php echo $this->get_field_name('limit_levels'); ?>" <?php if($limit_levels=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('limit_levels'); ?>0"><?php _re('No'); ?></label>
		<br /><br />

		<label for="<?php echo $this->get_field_id('startLevel'); ?>"><?php _re('Start Level:'); ?>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('startLevel'); ?>" name="<?php echo $this->get_field_name('startLevel'); ?>" type="text" value="<?php echo $startLevel; ?>" /></label>
    	<br /><br />

    	<label for="<?php echo $this->get_field_id('endLevel'); ?>"><?php _re('End Level:'); ?>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('endLevel'); ?>" name="<?php echo $this->get_field_name('endLevel'); ?>" type="text" value="<?php echo $endLevel; ?>" /></label>
    	<br /><br />

    	<label for="<?php echo $this->get_field_id('showAllChildren'); ?>1"><?php _re('Show All Children:'); ?></label>
        <input id="<?php echo $this->get_field_id('showAllChildren'); ?>1" type="radio" value="1" name="<?php echo $this->get_field_name('showAllChildren'); ?>" <?php if($showAllChildren=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('showAllChildren'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('showAllChildren'); ?>0" type="radio" value="0" name="<?php echo $this->get_field_name('showAllChildren'); ?>" <?php if($showAllChildren=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('showAllChildren'); ?>0"><?php _re('No'); ?></label>
		<br /><br />

        <label for="<?php echo $this->get_field_id('maxdepth'); ?>"><?php _re('Maximum Depth:'); ?>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('maxdepth'); ?>" name="<?php echo $this->get_field_name('maxdepth'); ?>" type="text" value="<?php echo $maxdepth; ?>" /></label>
        <?php
        // Load theme forms
        foreach($themes as $theme) {
            $theme_options = RokMenu::getThemeForm($theme, $this, $instance);
        }
	}

    function header($instance){
        
    }
}

function RokMenuInit() {
  register_widget('RokMenuWidget');
}

function RokMenuScripts() {
    global $wp_registered_widgets;
    $sidebars_widgets = wp_get_sidebars_widgets();
    unset($sidebars_widgets['wp_inactive_widgets']);
    foreach ( (array) $sidebars_widgets as $sidebar ) {
        foreach ((array)$sidebar as $id) {
            $widget_info =& $wp_registered_widgets[$id];
            if ($widget_info['name'] == "RokMenu"){
                $widget =& $widget_info['callback'][0];
                $instances = $widget->get_settings();
                $instance = $instances[$widget_info['params'][0]['number']];
                $theme = $instance['theme'];
                $header = RokMenu::getHeaderInstance($theme, $instance);
                if ($header !== false) {
                    echo $header->render();
                }
            }
        }
    }
}


add_action('widgets_init', 'RokMenuInit');
add_action('wp_head', 'RokMenuScripts');
?>