<?php

	if ($vars['size'] == 'large') {
		$ext = '_lrg';
	} else {
		$ext = '';
	}
	echo "<img src=\"".elgg_get_site_url()."mod/file/graphics/icons/ppt{$ext}.gif\" border=\"0\" />";

?>