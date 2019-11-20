<?php

/**
 * 
 * 
 * @version 0.01
 * @author hodoash
 */

/*function goTo($script_path){
	if($script_path[0]!='/'){//adds / to the path if not there
		$script_path='/'.$script_path;

	} return WWW_ROOT.$script_path;
}*/

/**
 * @param string end part of the folder directory
 * this function redirects or changes the link
 * to the desires directory needed
 */
function redirect_to($location) {
	header("Location: " . $location);
  	exit;
}

/**
 * @param string
 * @return string
 * this function takes a string and removes the html
 * special characters from it
 * it serves as a check for threats
 */
function h($string="") {
	return htmlspecialchars($string);
}



?>