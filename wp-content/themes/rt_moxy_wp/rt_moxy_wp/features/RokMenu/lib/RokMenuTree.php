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
 class RokMenuTreeBase {
 	/**
	 * Base ID for the menu  as ultimate parent
	 */
	var $id = 0;
	var $parent 	= 0;
	var $_parentRef = null;
	var $level 		= -1;
	var $_children = array();

	function addChild(&$node) {
		if ( $this->id == $node->parent) {
			$node->_parentRef = &$this;
			$this->_children[$node->id] = & $node;
            $node->level = $this->level + 1;
			return true;
		}
		else if ($this->hasChildren()) {
			reset($this->_children);
			while (list($key, $value) = each($this->_children)) {
				$child =& $this->_children[$key];
				if ($child->addChild($node)) {
					return true;
				}
			}
		}
		return false;
	}

 	function hasChildren()
	{
		return count($this->_children);
	}

	function &getChildren()
	{
		return $this->_children;
	}

	function &findChild($node_id) {
		if (array_key_exists($node_id, $this->_children)) {
			return $this->_children[$node_id];
		}
		else if ($this->hasChildren()) {
			reset($this->_children);
			while (list($key, $value) = each($this->_children)) {
				$child =& $this->_children[$key];
				$wanted_node = $child->findChild($node_id);
				if ($wanted_node !== false) {
					return $wanted_node;
				}
			}
		}
		$ret = false;
		return $ret;
	}

	function removeChild($node_id) {
		if (array_key_exists($node_id, $this->_children)) {
			unset($this->_children[$node_id]);
			return true;
		}
		else if ($this->hasChildren()) {
			reset($this->_children);
			while (list($key, $value) = each($this->_children)) {
				$child =& $this->_children[$key];
				$ret = $child->removeChild($node_id);
				if ($ret === true) {
					return $ret;
				}
			}
		}
		return false;
	}

	function removeLevel($end) {
		if ( $this->level == $end ) {
			$this->_children = array();
		}
		else if ($this->level < $end) {
			if ($this->hasChildren()) {
				reset($this->_children);
				while (list($key, $value) = each($this->_children)) {
					$child =& $this->_children[$key];
					$child->removeLevel($end);
				}
			}
		}
	}

	function removeIfNotInTree(&$active_tree, $last_active) {
		if (!empty($active_tree)) {

			if (in_array((int)$this->id, $active_tree)  && $last_active == $this->id) {
				// i am the last node in the active tree
				if ($this->hasChildren()) {
					reset($this->_children);
					while (list($key, $value) = each($this->_children)) {
						$child =& $this->_children[$key];
						$child->_children = array();
					}
				}
			}
			else if (in_array((int)$this->id, $active_tree)) {
				// i am in the active tree but not the last node
				if ($this->hasChildren()) {
					reset($this->_children);
					while (list($key, $value) = each($this->_children)) {
						$child =& $this->_children[$key];
						$child->removeIfNotInTree($active_tree, $last_active);
					}
				}
			}
			else {
				// i am not in the active tree
				$this->_children = array();
			}
		}
	}

	function getParent() {
		return $this->_parentRef;
	}

 }


/**
 * Rok Nav Menu Tree Class.
 */
class RokMenuTree extends RokMenuTreeBase
{
	function addNode(&$item)
	{
		// Get menu item data
		$node = $this->_getItemData($item);
		if ($node !== false) {
			return $this->addChild($node);
		}
		else {
			return true;
		}

	}
    
	function resetTop($top_node_id) {
		$new_top_node = $this->findChild($top_node_id);
		if ($new_top_node !== false)
		{
			$this->id = $new_top_node->id;
			$this->_children = $new_top_node->getChildren();
		}
		else {
			return false;
		}
	}

	function _getSecureUrl($url, $secure) {
		if ($secure == -1) {
			$url = str_replace('https://', 'http://', $url);
		} elseif ($secure == 1) {
			$url = str_replace('http://', 'https://', $url);
		}
		return $url;
	}

	function _getItemData(&$item)
	{
		//Create the new Node
		$node = new RokMenuNode();
        
		$node->id 		= $item->ID;
		$node->parent 	= $item->post_parent;
		$node->title	= $item->post_title;
		$node->link		= ($item->ID == 0)? get_option('home'):get_permalink($item->ID);

        $meta = get_post_meta($node->id,'',false);
        if ($meta !== false) $node->meta = &$meta;

		$node->addListItemClass("item" . $node->id);
		$node->addSpanClass('menuitem');

		return $node;
	}
}

/**
 * RokMenuNode
 */
class RokMenuNode extends RokMenuTreeBase
{
	var $title 		= null;
	var $link 		= null;
    var $meta       = array();

	var $_link_additions = array();
    var $_link_attribs = array();
	var $_li_classes = array();
	var $_a_classes = array();
	var $_span_classes = array();

	function hasLink() {
		return (isset($this->link));
	}

	function getLink() {
		$outlink = $this->link;
		$outlink .= $this->getLinkAdditions(!strpos($this->link, '?'));
		return $outlink;
	}

	function addLinkAddition($name ,$value) {
		$this->_link_additions[$name] = $value;
	}

	function getLinkAdditions($starting_query = false, $starting_seperator = false){
		$link_additions = " ";
		reset($this->_link_additions);
		$i = 0;
		while (list($key, $value) = each($this->_link_additions)) {
			$link_additions .= (($i == 0) && $starting_query )?'?':'';
			$link_additions .= (($i == 0) && !$starting_query )?'&':'';
			$link_additions .= ($i > 0)?'&':'';
			$link_additions .= $key.'='.$value;
			$i++;
		}
		return rtrim(ltrim($link_additions));
	}

	function hasLinkAdditions(){
		return count($this->_link_additions);
	}

	function addLinkAttrib($name, $value) {
		$this->_link_attribs[$name] = $value;
	}

	function getLinkAttribs(){
		$link_attribs = " ";
		reset($this->_link_attribs);
		while (list($key, $value) = each($this->_link_attribs)) {
			$link_attribs .= $key . "='" .$value . "' ";
		}
		return rtrim(ltrim($link_attribs));
	}

	function hasLinkAttribs(){
		return count($this->_link_attribs);
	}

	function getListItemClasses() {
		$html_classes = " ";
		reset($this->_li_classes);
		while (list($key, $value) = each($this->_li_classes)) {
			$class =& $this->_li_classes[$key];
			$html_classes .= $class. " ";
		}
		return rtrim(ltrim($html_classes));
	}

	function addListItemClass($class) {
		$this->_li_classes[] = $class;
	}

	function hasListItemClasses(){
		return count($this->_li_classes);
	}


	function getLinkClasses() {
		$html_classes = " ";
		reset($this->_a_classes);
		while (list($key, $value) = each($this->_a_classes)) {
			$class =& $this->_a_classes[$key];
			$html_classes .= $class. " ";
		}
		return rtrim(ltrim($html_classes));
	}

	function addLinkClass($class) {
		$this->_a_classes[] = $class;
	}

	function hasLinkClasses(){
		return count($this->_a_classes);
	}

	function getSpanClasses() {
		$html_classes = " ";
		reset($this->_span_classes);
		while (list($key, $value) = each($this->_span_classes)) {
			$class =& $this->_span_classes[$key];
			$html_classes .= $class. " ";
		}
		return rtrim(ltrim($html_classes));
	}

	function addSpanClass($class) {
		$this->_span_classes[] = $class;
	}
	function hasSpanClasses(){
		return count($this->_span_classes);
	}

	function addChild(&$node) {
        //$ret = parent::addChild($node);
        $ret = false;

        if ( $this->id == $node->parent) {
            $node->_parentRef = &$this;
            $this->_children[$node->id] = & $node;
            $node->level = $this->level+1;
            $ret = true;
        }
        else if ($this->hasChildren()) {
            reset($this->_children);
            while (list($key, $value) = each($this->_children)) {
                $child =& $this->_children[$key];
                if ($child->addChild($node)) {
                    return true;
                }
            }
        }
        if ($ret === true) {
            if (!array_search('parent', $this->_li_classes)) {
                $this->addListItemClass('parent');
            }
        }
        return $ret;
	}
}

