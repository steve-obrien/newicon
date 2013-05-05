<?php

function content(){
	ob_start();
	ob_implicit_flush(false);
}

function contentEnd(){
	$content = ob_get_clean();
	include 'layout.php';
}

/**
 * generates href link attribute and adds "active" class if on the current page
 * very simple only compares script name
 * @param type $link
 * @return string link
 */
function active($url, $class='') {

   if (basename($_SERVER['SCRIPT_NAME']) == basename($url))
	   $class = ($class=='') ? 'active' : ' active';
   echo "class=\"$class\"";
}