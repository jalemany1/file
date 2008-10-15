<?php
	/**
	 * Elgg upgrade script.
	 * 
	 * This script triggers any upgrades necessary, ensuring that upgrades are triggered deliberately by a single
	 * user.
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */

	// Include elgg engine
	require_once(dirname(__FILE__) . "/engine/start.php");

	if (version_upgrade_check()) {
		version_upgrade();
	}
	
	forward();
?>