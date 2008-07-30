<?php
	/**
	 * Elgg Entity export.
	 * Displays an entity as ODD
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Marcus Povey
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */

	$entity = $vars['entity'];
	$serialised = exportAsArray($vars['entity']->guid);
	foreach ($serialised as $s)
		echo $s;
		
?>