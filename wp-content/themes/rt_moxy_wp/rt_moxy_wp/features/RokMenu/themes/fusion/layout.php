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
class RokMenuLayoutFusion extends BaseRokMenuLayout {

    function renderMenu(&$menu) {
        ob_start();
        ?>
        <ul class="menutop level1">
            <?php foreach ($menu->getChildren() as $item) :  ?>
                <?php echo $this->renderItem($item, $menu); ?>
            <?php endforeach; ?>
        </ul>
        <?php
        return ob_get_clean();
    }

    function renderItem(&$item, &$menu)
    {
        //get columns count for children
        if (!empty($item->meta['fusion_columns'][0])) {
            $columns = (int)$item->meta['fusion_columns'][0];
        }
        else {
            $columns = 1;
        }

        // TODO add custom image  stuff
        //get custom image        
        if (!empty($item->meta['icon'])) $item->addLinkClass('image');
        else $item->addLinkClass('bullet');

        if (!empty($item->meta['subtext'])) $item->addLinkClass('subtext');

    ?>
    <li <?php if($item->hasListItemClasses()) : ?>class="<?php echo $item->getListItemClasses()?>"<?php endif;?> <?php if(isset($item->css_id)):?>id="<?php echo $item->css_id;?>"<?php endif;?>>
        <a <?php if($item->hasLinkClasses()):?>class="<?php echo $item->getLinkClasses();?>"<?php endif;?> <?php if($item->hasLink()):?>href="<?php echo $item->getLink();?>"<?php endif;?> <?php if($item->hasLinkAttribs()):?> <?php echo $item->getLinkAttribs();?><?php endif;?>>
            <span>
            <?php if (!empty($item->meta['icon']) && count($item->meta['icon'] > 0)) :?>
            <img src="<?php bloginfo('template_directory'); ?>/images/menus/icon-<?php echo $item->meta['icon'][0]; ?>.png" alt="" />
            <?php endif; ?>
            <?php echo $item->title;?>
            <?php if (!empty($item->meta['subtext']) && count($item->meta['subtext'] > 0)) :?>
            <em><?php echo implode("\n", $item->meta['subtext']); ?></em>
            <?php endif; ?>
            </span>
        </a>
        <?php if ($item->hasChildren()): ?>
            <div class="fusion-submenu-wrapper level<?php echo intval($item->level)+2; ?><?php if ($columns > 1) echo ' columns'.$columns; ?>">
                <div class="drop-top"></div>
                <ul class="level<?php echo intval($item->level)+2; ?><?php if ($columns > 1) echo ' columns'.$columns; ?>">
                    <?php foreach ($item->getChildren() as $child) : ?>
                        <?php echo $this->renderItem($child, $menu); ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </li>
        <?php
    }

}


