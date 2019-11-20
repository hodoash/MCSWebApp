<?php

/*function goTo($script_path){
	if($script_path[0]!='/'){//adds / to the path if not there
		$script_path='/'.$script_path;

	} return WWW_ROOT.$script_path;
}*/

function redirect_to($location) {
	header("Location: " . $location);
  	exit;
}

function h($string="") {
	return htmlspecialchars($string);
}



?>