<?php
/**
 * @package     wp_nexus
 * @subpackage  features
 * @version     1.1 February 28, 2010
 * @author      RocketTheme http://www.rockettheme.com
 * @copyright   Copyright (C) 2007 - 2010 RocketTheme, LLC
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

require_once(dirname(__FILE__).'/RokMenu/lib/RokMenuTree.php');
require_once(dirname(__FILE__).'/RokMenu/lib/BaseRokMenuFormatter.php');
require_once(dirname(__FILE__).'/RokMenu/lib/BaseRokMenuLayout.php');
require_once(dirname(__FILE__).'/RokMenu/lib/BaseRokMenuOptions.php');
require_once(dirname(__FILE__).'/RokMenu/lib/BaseRokMenuHeader.php');

/**
 * @package   wp_nexus
 * @subpackage features
 */
class RokMenu {

    function _defaults() {
        return array(
            'theme' => 'fusion',
            'show_home' => 1,
            'home_text' => 'Home',
            'limit_levels' => 0,
            'startLevel' => 0,
            'endLevel' => 0,
            'showAllChildren' => 1,
            'maxdepth' => 10,
            'exclude' => '',
            'echo' => 1,
            'sort_column' => 'menu_order',
        );
    }
    function render($args = '') {
        global $wp_query;

        $output = '';
        $current_page = 0;
        
        $defaults = RokMenu::_defaults();
        $r_temp = wp_parse_args( $args, $defaults );
        $theme_defaults = RokMenu::getThemeDefaults($r_temp['theme']);
        $full_defaults =  array_merge($defaults, $theme_defaults);
        $r = wp_parse_args( $args, $full_defaults );
        extract( $r, EXTR_SKIP );

        // sanitize, mostly to keep spaces out
        $r['exclude'] = preg_replace('/[^0-9,]/', '', $r['exclude']);

        // Allow plugins to filter an array of excluded pages (but don't put a nullstring into the array)
        $exclude_array = ( $r['exclude'] ) ? explode(',', $r['exclude']) : array();
        $r['exclude'] = implode( ',', apply_filters('wp_list_pages_excludes', $exclude_array) );

        $r['hierarchical'] = 0;

        $pages = get_pages($r);

        $current_page = $wp_query->get_queried_object_id();
        $menu = RokMenu::_getMenuTree($pages, $r);

        if (!empty($menu) && $menu !== false){
            $formatter = RokMenu::getFormatterInstance($r['theme'], $r);
            $layout = RokMenu::getLayoutInstance($r['theme'], $r);

            if ($formatter !== false && $layout !== false){
                $formatter->format_tree($menu);
                $output = $layout->render($menu);
            }
        }
        
        if ( $r['echo'] )
            echo $output;
        else
        return $output;
    }

    function _getMenuTree(&$pages, $args)
	{
        if (null == $pages){
            $pages = array();
        }

        $home_array = array();
        $menu = null;

        if ($args['show_home'] == 1) {
		$text = _r($args['home_text']);
        $home = new stdClass();
        $home->ID = 0;
        $home->post_parent = 0;
        $home->post_title = $text;
        $home_array = array($home);
        }

		// Get Menu Items
		$rows = array_merge($home_array,$pages);

        if (!empty($rows)){
            $menu = new RokMenuTree();
            $maxdepth = $args['maxdepth'];
            // Build Menu Tree root down (orphan proof - child might have lower id than parent)
            $ids = array();
            $ids[0] = true;
            $last = null;
            $unresolved = array();
            // pop the first item until the array is empty if there is any item
            if ( is_array($rows)) {
                while (count($rows) && !is_null($row = array_shift($rows)))
                {
                    if (!$menu->addNode($row)) {
                        if(!array_key_exists($row->id, $unresolved) || $unresolved[$row->id] < $maxdepth) {
                            array_push($rows, $row);
                            if(!isset($unresolved[$row->id])) $unresolved[$row->id] = 1;
                            else $unresolved[$row->id]++;
                        }
                    }
                }
            }
        }
		return $menu;
	}

    function getThemes(){
        $themes = array();

        $themes_dir = dirname(__FILE__).'/RokMenu/themes';
        if (file_exists($themes_dir) && is_dir($themes_dir)) {
            $d = dir($themes_dir);
            while (false !== ($entry = $d->read())) {
                if(!preg_match("/^\./", $entry)&& is_dir($themes_dir.'/'.$entry) ){
                    $themes[]=$entry;
                }
            }
        }
        return $themes;
    }

    function getThemeDefaults($theme) {
        $options = RokMenu::getOptionsInstance($theme);
        if ($options !== false) {
            return $options->getDefaults();            
        }
    }

    function getDefaults() {
        $defaults = RokMenu::_defaults();
        $themes = RokMenu::getThemes();
        foreach($themes as $theme) {
            $theme_options = RokMenu::getThemeDefaults($theme);
            $defaults =  array_merge($defaults, $theme_options);
        }
        return $defaults;
    }

    function getThemeForm($theme, &$widget, $args) {
        $option = RokMenu::getOptionsInstance($theme);
        if ($option !== false) {
            return $option->getForm($widget, $args);            
        }
    }
    
    function getOptionsInstance($theme) {
        $file = dirname(__FILE__).'/RokMenu/themes/'.$theme.'/options.php';
        $className = 'RokMenuOptions'.ucfirst($theme);
        if(!class_exists($className) && file_exists($file)) {
            require_once($file);
        }
        if (class_exists($className)) {
            return new $className();
        }
        else {
            return false;
        }
    }

    function getFormatterInstance($theme, $args) {
        $file = dirname(__FILE__).'/RokMenu/themes/'.$theme.'/formatter.php';
        $className = 'RokMenuFormatter'.ucfirst($theme);
        if(!class_exists($className) && file_exists($file)) {
            require_once($file);
        }
        if (class_exists($className)) {
            return new $className($args);
        }
        else {
            return false;
        }
    }
    
    function getLayoutInstance($theme, $args) {
        $file = dirname(__FILE__).'/RokMenu/themes/'.$theme.'/layout.php';
        $className = 'RokMenuLayout'.ucfirst($theme);
        if(!class_exists($className) && file_exists($file)) {
            require_once($file);
        }
        if (class_exists($className)) {
            return new $className($args);
        }
        else {
            return false;
        }
    }

    function getHeaderInstance($theme, $args) {
        $file = dirname(__FILE__).'/RokMenu/themes/'.$theme.'/header.php';
        $className = 'RokMenuHeader'.ucfirst($theme);
        if(!class_exists($className) && file_exists($file)) {
            require_once($file);
        }
        if (class_exists($className)) {
            return new $className($args);
        }
        else {
            return false;
        }
    }

}

