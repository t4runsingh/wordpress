<?php
/**
 * @package     wp_nexus
 * @subpackage  features.rokmenu.themes.fusion
 * @version     1.1 February 28, 2010
 * @author      RocketTheme http://www.rockettheme.com
 * @copyright   Copyright (C) 2007 - 2010 RocketTheme, LLC
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

/**
 * @package   wp_nexus
 * @subpackage features.rokmenu.themes.fusion
 */
class RokMenuOptionsFusion extends BaseRokMenuOptions {
    var $_defaults = array(
        'fusion_load_css' => 1,
        'fusion_enable_js' => 1,
        'fusion_opacity' => 1,
        'fusion_effect' => 'slidefade',
        'fusion_hidedelay' => 500,
        'fusion_menu_animation' => 'Quint.easeOut',
        'fusion_menu_duration' => 400,
        'fusion_pill' => 1,
        'fusion_pill_animation' => 'Quint.easeOut',
        'fusion_pill_duration' => 400,
        'fusion_centeredOffset' => 0,
        'fusion_tweakInitial_x' => -20,
        'fusion_tweakInitial_y' => 6,
        'fusion_tweakSubsequent_x' => -12,
        'fusion_tweakSubsequent_y' => -14,
        'fusion_enable_current_id' => 0
    );

    function getForm(&$widget, $params){
        extract($params);
        ?>
        <br /><br />
        <label for="<?php echo $widget->get_field_id('fusion_load_css'); ?>1"><?php _re('Load CSS:'); ?></label>
        <input id="<?php echo $widget->get_field_id('fusion_load_css'); ?>1" type="radio" value="1" name="<?php echo $widget->get_field_name('fusion_load_css'); ?>" <?php if($fusion_load_css=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $widget->get_field_id('fusion_load_css'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $widget->get_field_id('fusion_load_css'); ?>0" type="radio" value="0" name="<?php echo $widget->get_field_name('fusion_load_css'); ?>" <?php if($fusion_load_css=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $widget->get_field_id('fusion_load_css'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_enable_js'); ?>1"><?php _re('Enable Javascript:'); ?></label>
        <input id="<?php echo $widget->get_field_id('fusion_enable_js'); ?>1" type="radio" value="1" name="<?php echo $widget->get_field_name('fusion_enable_js'); ?>" <?php if($fusion_enable_js=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $widget->get_field_id('fusion_enable_js'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $widget->get_field_id('fusion_enable_js'); ?>0" type="radio" value="0" name="<?php echo $widget->get_field_name('fusion_enable_js'); ?>" <?php if($fusion_enable_js=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $widget->get_field_id('fusion_enable_js'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_opacity'); ?>"><?php _re('Menu Opacity:'); ?>&nbsp;
    	<input style="width: 60px;" id="<?php echo $widget->get_field_id('fusion_opacity'); ?>" name="<?php echo $widget->get_field_name('fusion_opacity'); ?>" type="text" value="<?php echo $fusion_opacity; ?>" />  (from 0.1 to 1)</label>
    	<br /><br />
        <label for="<?php echo $widget->get_field_id('fusion_effect'); ?>"><?php _re('Menu Effect:'); ?></label>&nbsp;
    	<select id="<?php echo $widget->get_field_id('fusion_effect'); ?>" name="<?php echo $widget->get_field_name('fusion_effect'); ?>">
      		<option value="slide"<?php selected( $fusion_effect, 'slide' ); ?>><?php _re('Slide'); ?></option>
      		<option value="slidefade"<?php selected( $fusion_effect, 'slidefade' ); ?>><?php _re('Slide &amp; Fade'); ?></option>
        </select>
        <br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_hidedelay'); ?>"><?php _re('Hide Delay:'); ?>&nbsp;
    	<input style="width: 60px;" id="<?php echo $widget->get_field_id('fusion_hidedelay'); ?>" name="<?php echo $widget->get_field_name('fusion_hidedelay'); ?>" type="text" value="<?php echo $fusion_hidedelay; ?>" />ms</label>
        <br /><br />
        <label for="<?php echo $widget->get_field_id('fusion_menu_animation'); ?>"><?php _re('Menu Animation:'); ?></label>&nbsp;
    	<select id="<?php echo $widget->get_field_id('fusion_menu_animation'); ?>" name="<?php echo $widget->get_field_name('fusion_menu_animation'); ?>">
      		<option value="linear"<?php selected( $fusion_menu_animation, 'linear' ); ?>><?php _re('linear'); ?></option>
      		<option value="Quad.easeOut"<?php selected( $fusion_menu_animation, 'Quad.easeOut' ); ?>><?php _e('Quad.easeOut'); ?></option>
      		<option value="Quad.easeIn"<?php selected( $fusion_menu_animation, 'Quad.easeIn' ); ?>><?php _e('Quad.easeIn'); ?></option>
      		<option value="Quad.easeInOut"<?php selected( $fusion_menu_animation, 'Quad.easeInOut' ); ?>><?php _e('Quad.easeInOut'); ?></option>
      		<option value="Cubic.easeOut"<?php selected( $fusion_menu_animation, 'Cubic.easeOut' ); ?>><?php _e('Cubic.easeOut'); ?></option>
      		<option value="Cubic.easeIn"<?php selected( $fusion_menu_animation, 'Cubic.easeIn' ); ?>><?php _e('Cubic.easeIn'); ?></option>
      		<option value="Cubic.easeInOut"<?php selected( $fusion_menu_animation, 'Cubic.easeInOut' ); ?>><?php _e('Cubic.easeInOut'); ?></option>
      		<option value="Quart.easeOut"<?php selected( $fusion_menu_animation, 'Quart.easeOut' ); ?>><?php _e('Quart.easeOut'); ?></option>
      		<option value="Quart.easeIn"<?php selected( $fusion_menu_animation, 'Quart.easeIn' ); ?>><?php _e('Quart.easeIn'); ?></option>
      		<option value="Quart.easeInOut"<?php selected( $fusion_menu_animation, 'Quart.easeInOut' ); ?>><?php _e('Quart.easeInOut'); ?></option>
      		<option value="Quint.easeOut"<?php selected( $fusion_menu_animation, 'Quint.easeOut' ); ?>><?php _e('Quint.easeOut'); ?></option>
      		<option value="Quint.easeIn"<?php selected( $fusion_menu_animation, 'Quint.easeIn' ); ?>><?php _e('Quint.easeIn'); ?></option>
      		<option value="Quint.easeInOut"<?php selected( $fusion_menu_animation, 'Quint.easeInOut' ); ?>><?php _e('Quint.easeInOut'); ?></option>
      		<option value="Expo.easeOut"<?php selected( $fusion_menu_animation, 'Expo.easeOut' ); ?>><?php _e('Expo.easeOut'); ?></option>
      		<option value="Expo.easeIn"<?php selected( $fusion_menu_animation, 'Expo.easeIn' ); ?>><?php _e('Expo.easeIn'); ?></option>
      		<option value="Expo.easeInOut"<?php selected( $fusion_menu_animation, 'Expo.easeInOut' ); ?>><?php _e('Expo.easeInOut'); ?></option>
      		<option value="Circ.easeOut"<?php selected( $fusion_menu_animation, 'Circ.easeOut' ); ?>><?php _e('Circ.easeOut'); ?></option>
      		<option value="Circ.easeIn"<?php selected( $fusion_menu_animation, 'Circ.easeIn' ); ?>><?php _e('Circ.easeIn'); ?></option>
      		<option value="Circ.easeInOut"<?php selected( $fusion_menu_animation, 'Circ.easeInOut' ); ?>><?php _e('Circ.easeInOut'); ?></option>
      		<option value="Sine.easeOut"<?php selected( $fusion_menu_animation, 'Sine.easeOut' ); ?>><?php _e('Sine.easeOut'); ?></option>
      		<option value="Sine.easeIn"<?php selected( $fusion_menu_animation, 'Sine.easeIn' ); ?>><?php _e('Sine.easeIn'); ?></option>
      		<option value="Sine.easeInOut"<?php selected( $fusion_menu_animation, 'Sine.easeInOut' ); ?>><?php _e('Sine.easeInOut'); ?></option>
      		<option value="Back.easeOut"<?php selected( $fusion_menu_animation, 'Back.easeOut' ); ?>><?php _e('Back.easeOut'); ?></option>
      		<option value="Back.easeIn"<?php selected( $fusion_menu_animation, 'Back.easeIn' ); ?>><?php _e('Back.easeIn'); ?></option>
      		<option value="Back.easeInOut"<?php selected( $fusion_menu_animation, 'Back.easeInOut' ); ?>><?php _e('Back.easeInOut'); ?></option>
      		<option value="Bounce.easeOut"<?php selected( $fusion_menu_animation, 'Bounce.easeOut' ); ?>><?php _e('Bounce.easeOut'); ?></option>
      		<option value="Bounce.easeIn"<?php selected( $fusion_menu_animation, 'Bounce.easeIn' ); ?>><?php _e('Bounce.easeIn'); ?></option>
      		<option value="Bounce.easeInOut"<?php selected( $fusion_menu_animation, 'Bounce.easeInOut' ); ?>><?php _e('Bounce.easeInOut'); ?></option>
      		<option value="Elastic.easeOut"<?php selected( $fusion_menu_animation, 'Elastic.easeOut' ); ?>><?php _e('Elastic.easeOut'); ?></option>
      		<option value="Elastic.easeIn"<?php selected( $fusion_menu_animation, 'Elastic.easeIn' ); ?>><?php _e('Elastic.easeIn'); ?></option>
      		<option value="Elastic.easeInOut"<?php selected( $fusion_menu_animation, 'Elastic.easeInOut' ); ?>><?php _e('Elastic.easeInOut'); ?></option>
        </select>
        <br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_menu_duration'); ?>"><?php _re('Menu Duration:'); ?>&nbsp;
    	<input style="width: 60px;" id="<?php echo $widget->get_field_id('fusion_menu_duration'); ?>" name="<?php echo $widget->get_field_name('fusion_menu_duration'); ?>" type="text" value="<?php echo $fusion_menu_duration; ?>" />ms</label>
    	<br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_pill'); ?>1"><?php _re('Enable Pill:'); ?></label>
        <input id="<?php echo $widget->get_field_id('fusion_pill'); ?>1" type="radio" value="1" name="<?php echo $widget->get_field_name('fusion_pill'); ?>" <?php if($fusion_pill=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $widget->get_field_id('fusion_pill'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $widget->get_field_id('fusion_pill'); ?>0" type="radio" value="0" name="<?php echo $widget->get_field_name('fusion_pill'); ?>" <?php if($fusion_pill=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $widget->get_field_id('fusion_pill'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_pill_animation'); ?>"><?php _re('Pill Animation:'); ?></label>&nbsp;
    	<select id="<?php echo $widget->get_field_id('fusion_pill_animation'); ?>" name="<?php echo $widget->get_field_name('fusion_pill_animation'); ?>">
      		<option value="linear"<?php selected( $fusion_pill_animation, 'linear' ); ?>><?php _re('linear'); ?></option>
      		<option value="Quad.easeOut"<?php selected( $fusion_pill_animation, 'Quad.easeOut' ); ?>><?php _e('Quad.easeOut'); ?></option>
      		<option value="Quad.easeIn"<?php selected( $fusion_pill_animation, 'Quad.easeIn' ); ?>><?php _e('Quad.easeIn'); ?></option>
      		<option value="Quad.easeInOut"<?php selected( $fusion_pill_animation, 'Quad.easeInOut' ); ?>><?php _e('Quad.easeInOut'); ?></option>
      		<option value="Cubic.easeOut"<?php selected( $fusion_pill_animation, 'Cubic.easeOut' ); ?>><?php _e('Cubic.easeOut'); ?></option>
      		<option value="Cubic.easeIn"<?php selected( $fusion_pill_animation, 'Cubic.easeIn' ); ?>><?php _e('Cubic.easeIn'); ?></option>
      		<option value="Cubic.easeInOut"<?php selected( $fusion_pill_animation, 'Cubic.easeInOut' ); ?>><?php _e('Cubic.easeInOut'); ?></option>
      		<option value="Quart.easeOut"<?php selected( $fusion_pill_animation, 'Quart.easeOut' ); ?>><?php _e('Quart.easeOut'); ?></option>
      		<option value="Quart.easeIn"<?php selected( $fusion_pill_animation, 'Quart.easeIn' ); ?>><?php _e('Quart.easeIn'); ?></option>
      		<option value="Quart.easeInOut"<?php selected( $fusion_pill_animation, 'Quart.easeInOut' ); ?>><?php _e('Quart.easeInOut'); ?></option>
      		<option value="Quint.easeOut"<?php selected( $fusion_pill_animation, 'Quint.easeOut' ); ?>><?php _e('Quint.easeOut'); ?></option>
      		<option value="Quint.easeIn"<?php selected( $fusion_pill_animation, 'Quint.easeIn' ); ?>><?php _e('Quint.easeIn'); ?></option>
      		<option value="Quint.easeInOut"<?php selected( $fusion_pill_animation, 'Quint.easeInOut' ); ?>><?php _e('Quint.easeInOut'); ?></option>
      		<option value="Expo.easeOut"<?php selected( $fusion_pill_animation, 'Expo.easeOut' ); ?>><?php _e('Expo.easeOut'); ?></option>
      		<option value="Expo.easeIn"<?php selected( $fusion_pill_animation, 'Expo.easeIn' ); ?>><?php _e('Expo.easeIn'); ?></option>
      		<option value="Expo.easeInOut"<?php selected( $fusion_pill_animation, 'Expo.easeInOut' ); ?>><?php _e('Expo.easeInOut'); ?></option>
      		<option value="Circ.easeOut"<?php selected( $fusion_pill_animation, 'Circ.easeOut' ); ?>><?php _e('Circ.easeOut'); ?></option>
      		<option value="Circ.easeIn"<?php selected( $fusion_pill_animation, 'Circ.easeIn' ); ?>><?php _e('Circ.easeIn'); ?></option>
      		<option value="Circ.easeInOut"<?php selected( $fusion_pill_animation, 'Circ.easeInOut' ); ?>><?php _e('Circ.easeInOut'); ?></option>
      		<option value="Sine.easeOut"<?php selected( $fusion_pill_animation, 'Sine.easeOut' ); ?>><?php _e('Sine.easeOut'); ?></option>
      		<option value="Sine.easeIn"<?php selected( $fusion_pill_animation, 'Sine.easeIn' ); ?>><?php _e('Sine.easeIn'); ?></option>
      		<option value="Sine.easeInOut"<?php selected( $fusion_pill_animation, 'Sine.easeInOut' ); ?>><?php _e('Sine.easeInOut'); ?></option>
      		<option value="Back.easeOut"<?php selected( $fusion_pill_animation, 'Back.easeOut' ); ?>><?php _e('Back.easeOut'); ?></option>
      		<option value="Back.easeIn"<?php selected( $fusion_pill_animation, 'Back.easeIn' ); ?>><?php _e('Back.easeIn'); ?></option>
      		<option value="Back.easeInOut"<?php selected( $fusion_pill_animation, 'Back.easeInOut' ); ?>><?php _e('Back.easeInOut'); ?></option>
      		<option value="Bounce.easeOut"<?php selected( $fusion_pill_animation, 'Bounce.easeOut' ); ?>><?php _e('Bounce.easeOut'); ?></option>
      		<option value="Bounce.easeIn"<?php selected( $fusion_pill_animation, 'Bounce.easeIn' ); ?>><?php _e('Bounce.easeIn'); ?></option>
      		<option value="Bounce.easeInOut"<?php selected( $fusion_pill_animation, 'Bounce.easeInOut' ); ?>><?php _e('Bounce.easeInOut'); ?></option>
      		<option value="Elastic.easeOut"<?php selected( $fusion_pill_animation, 'Elastic.easeOut' ); ?>><?php _e('Elastic.easeOut'); ?></option>
      		<option value="Elastic.easeIn"<?php selected( $fusion_pill_animation, 'Elastic.easeIn' ); ?>><?php _e('Elastic.easeIn'); ?></option>
      		<option value="Elastic.easeInOut"<?php selected( $fusion_pill_animation, 'Elastic.easeInOut' ); ?>><?php _e('Elastic.easeInOut'); ?></option>
        </select>
        <br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_pill_duration'); ?>"><?php _re('Pill Duration:'); ?>&nbsp;
    	<input style="width: 60px;" id="<?php echo $widget->get_field_id('fusion_pill_duration'); ?>" name="<?php echo $widget->get_field_name('fusion_pill_duration'); ?>" type="text" value="<?php echo $fusion_pill_duration; ?>" />ms</label>
    	<br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_centeredOffset'); ?>1"><?php _re('Centered Dropdowns:'); ?></label>
        <input id="<?php echo $widget->get_field_id('fusion_centeredOffset'); ?>1" type="radio" value="1" name="<?php echo $widget->get_field_name('fusion_centeredOffset'); ?>" <?php if($fusion_centeredOffset=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $widget->get_field_id('fusion_centeredOffset'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $widget->get_field_id('fusion_centeredOffset'); ?>0" type="radio" value="0" name="<?php echo $widget->get_field_name('fusion_centeredOffset'); ?>" <?php if($fusion_centeredOffset=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $widget->get_field_id('fusion_centeredOffset'); ?>0"><?php _re('No'); ?></label>
		<br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_tweakInitial_x'); ?>"><?php _re('Level 2 X Offset:'); ?>&nbsp;
    	<input style="width: 60px;" id="<?php echo $widget->get_field_id('fusion_tweakInitial_x'); ?>" name="<?php echo $widget->get_field_name('fusion_tweakInitial_x'); ?>" type="text" value="<?php echo $fusion_tweakInitial_x; ?>" /> pixels</label>
    	<br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_tweakInitial_y'); ?>"><?php _re('Level 2 Y Offset:'); ?>&nbsp;
    	<input style="width: 60px;" id="<?php echo $widget->get_field_id('fusion_tweakInitial_y'); ?>" name="<?php echo $widget->get_field_name('fusion_tweakInitial_y'); ?>" type="text" value="<?php echo $fusion_tweakInitial_y; ?>" /> pixels</label>
    	<br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_tweakSubsequent_x'); ?>"><?php _re('Submenus X Offset:'); ?>&nbsp;
    	<input style="width: 60px;" id="<?php echo $widget->get_field_id('fusion_tweakSubsequent_x'); ?>" name="<?php echo $widget->get_field_name('fusion_tweakSubsequent_x'); ?>" type="text" value="<?php echo $fusion_tweakSubsequent_x; ?>" /> pixels</label>
    	<br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_tweakSubsequent_y'); ?>"><?php _re('Submenus Y Offset:'); ?>&nbsp;
    	<input style="width: 60px;" id="<?php echo $widget->get_field_id('fusion_tweakSubsequent_y'); ?>" name="<?php echo $widget->get_field_name('fusion_tweakSubsequent_y'); ?>" type="text" value="<?php echo $fusion_tweakSubsequent_y; ?>" /> pixels</label>
        <br /><br />
		<label for="<?php echo $widget->get_field_id('fusion_enable_current_id'); ?>1"><?php _re('Enable Active ID:'); ?></label>
        <input id="<?php echo $widget->get_field_id('fusion_enable_current_id'); ?>1" type="radio" value="1" name="<?php echo $widget->get_field_name('fusion_enable_current_id'); ?>" <?php if($fusion_enable_current_id=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $widget->get_field_id('fusion_enable_current_id'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $widget->get_field_id('fusion_enable_current_id'); ?>0" type="radio" value="0" name="<?php echo $widget->get_field_name('fusion_enable_current_id'); ?>" <?php if($fusion_enable_current_id=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $widget->get_field_id('fusion_enable_current_id'); ?>0"><?php _re('No'); ?></label>
		<?php
    }    
}
