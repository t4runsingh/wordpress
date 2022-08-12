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
class RokMenuFormatterFusion extends BaseRokMenuFormatter {
    function RokMenuFormatterFusion($args){
        $par = get_parent_class($this);
        parent::$par($args); 
    }
	function format_subnode(&$node) {
	    // Format the current node
        if ($node->hasChildren() ) {
            $node->addLinkClass("daddy");
        }  else {
            $node->addLinkClass("orphan");
        }

        $node->addLinkClass("item");

		if ($node->level == "0") {
		    $node->addListItemClass("root");
		}
	}

}