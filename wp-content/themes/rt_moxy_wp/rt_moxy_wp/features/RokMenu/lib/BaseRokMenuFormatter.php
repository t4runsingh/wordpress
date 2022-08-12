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
class BaseRokMenuFormatter {
    var $active_branch = array();
    var $args = array();

    function BaseRokMenuFormatter($args){
        $this->args = $args;
    }

	function format_tree(&$menu) {
        if (!empty($menu) && $menu !== false){
            if ($menu->hasChildren()){
                reset($menu->_children);
                while (list($key, $value) = each($menu->_children)) {
                    $child_node =& $menu->_children[$key];
                    $this->_format_subnodes($child_node);
                }
            }
            $this->_default_format_menu($menu);
            $this->format_menu($menu);
        }
	}


	function _format_subnodes(&$node) {
        $this->_default_format_subnode($node);

		$this->format_subnode($node);

        if ($node->hasChildren()){
			reset($node->_children);
			while (list($key, $value) = each($node->_children)) {
				$child_node =& $node->_children[$key];
				$this->_format_subnodes($child_node);
			}
		}
	}

    function _default_format_menu(&$menu){
        // Limit the levels of the tree is called for By limitLevels
        $start = $this->args['startLevel'];
        $end = $this->args['endLevel'];;

        if ($this->args['limit_levels']){
            //Limit to the active path if the start is more the level 0
            if ($start > 0) {
                $found = false;
                // get active path and find the start level that matches
                if (count($this->active_branch)) {
                    reset($this->active_branch);
                    while (list($key, $value) = each($this->active_branch)) {
                        $active_child = &$menu->_children[$active_branch[$key]];
                        if ($active_child != null && $active_child !== false) {
                            if ($active_child->level == $start-1) {
                                $menu->resetTop($active_child->id);
                                $found = true;
                                break;
                            }
                        }
                    }
                }
                if (!$found){
                    $menu->_children= array();
                }
            }
            //remove lower then the defined end level
            $menu->removeLevel($end);
        }

        if (!$this->args['showAllChildren']) {
			if ($menu->hasChildren()){
				reset($menu->_children);
                $active = array_keys($this->active_branch);
				while (list($key, $value) = each($menu->_children)) {
					$toplevel =& $menu->_children[$key];

					if (array_key_exists($toplevel->id, $this->active_branch) !== false){
						$last_active =& $menu->findChild($active[count($active)-1]);
						if ($last_active !==  false) {
							$toplevel->removeIfNotInTree($active, $last_active->id);
						}
					}
					else {
						$toplevel->removeLevel($toplevel->level);
					}
				}
			}
		}
    }

	function _default_format_subnode(&$node) {
        global $wp_query;

        $current_page = $wp_query->get_queried_object_id();

        if ($node->id == $current_page){
            $node->css_id = 'current';
            $node->addListItemClass('active');
            $this->active_branch[$node->id] = &$node;
        }
        else if ($node->findChild($current_page) !== false){
            $node->addListItemClass('active');
            $this->active_branch[$node->id] = &$node;
        }
	}


    
    function format_menu(&$menu){

    }

	function format_subnode(&$node){
	}



}