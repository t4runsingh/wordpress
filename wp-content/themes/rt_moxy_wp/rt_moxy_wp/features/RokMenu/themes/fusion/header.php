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
class RokMenuHeaderFusion extends BaseRokMenuHeader {

    function RokMenuHeaderFusion($args){
        $par = get_parent_class($this);
        parent::$par($args); 
    }

    function render()
    {
        extract($this->args);
        $initialization = '';
        if ($fusion_effect == 'slidefade') $fusion_effect = "slide and fade";

        if (RokMenuHeaderFusion::isIe(6)) {
             $initialization .= '<script type="text/javascript" src="'.get_bloginfo('template_url').'/features/RokMenu/themes/fusion/js/sfhover.js"></script>';
        }

        if (RokMenuHeaderFusion::isIe() && $fusion_effect == 'slide and fade') $fusion_effect = "slide";

        if ($fusion_enable_js) {
            $initialization .= '<script type="text/javascript" src="'.get_bloginfo('template_url').'/features/RokMenu/themes/fusion/js/fusion.js"></script>';
            $initialization .= '<script type="text/javascript">';
            $initialization .= "window.addEvent('domready', function() {
                new Fusion('ul.menutop', {
                    pill: $fusion_pill,
                    effect: '$fusion_effect',
                    opacity: $fusion_opacity,
                    hideDelay: $fusion_hidedelay,
                    centered: $fusion_centeredOffset,
                    tweakInitial: {'x': ".$fusion_tweakInitial_x.", 'y': ".$fusion_tweakInitial_y."},
                    tweakSubsequent: {'x': ".$fusion_tweakSubsequent_x.", 'y': ".$fusion_tweakSubsequent_y."},
                    menuFx: {duration: $fusion_menu_duration, transition: Fx.Transitions.$fusion_menu_animation},
                    pillFx: {duration: $fusion_pill_duration, transition: Fx.Transitions.$fusion_pill_animation}
                });
            });";
            $initialization .= "</script>";
        }

        if ($fusion_loadcss)  {
            $initialization .= '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/features/RokMenu/themes/fusion/css/fusion.css" type="text/css" />';
        if (RokMenuHeaderFusion::isIe(6)) {
            $initialization .= '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/features/RokMenu/themes/fusion/css/fusion-ie6.css" type="text/css" />';
        }
}
        return $initialization;
    }

    function isIe($version = false) {
        $agent=$_SERVER['HTTP_USER_AGENT'];
        $found = strpos($agent,'MSIE ');
        if ($found) {
                if ($version) {
                    $ieversion = substr(substr($agent,$found+5),0,1);
                    if ($ieversion == $version) return true;
                    else return false;
                } else {
                    return true;
                }

            } else {
                    return false;
            }
        if (stristr($agent, 'msie'.$ieversion)) return true;
        return false;
    }
}