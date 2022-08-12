<?php
/**
 * @package     wp_nexus
 * @subpackage  features.rokmenu.lib
 * @version     1.1 February 28, 2010
 * @author      RocketTheme http://www.rockettheme.com
 * @copyright   Copyright (C) 2007 - 2010 RocketTheme, LLC
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

/**
 * @package   wp_nexus
 * @subpackage features.rokmenu.lib
 */
class BaseRokMenuLayout {
    var $args = array();

    function BaseRokMenuLayout(){
        $this->args = $args;
    }

	function render(&$menu) {
        return $this->renderMenu($menu);
	}
    
	function renderMenu(&$menu){
	}
    
}