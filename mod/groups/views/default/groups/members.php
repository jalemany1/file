<?php
	/**
	 * Elgg groups items view.
	 * This is the messageboard, members, pages and latest forums posts. Each plugin will extend the views
	 * 
	 * @package ElggGroups
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */
	 
	 //var_export($vars['entity']);
?>

<h2><?php echo elgg_echo("groups:members"); ?></h2>

<?php

    $members = $vars['entity']->getMembers(20);
    foreach($members as $mem){
           
        echo "<div class=\"member_icon\" style=\"float:left;margin:4px;\">" . elgg_view("profile/icon",array('entity' => $mem, 'size' => 'small')) . "</div>";   
           
    }
    
?>