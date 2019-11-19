<?php  

require_once('../model/settings.php');

$session->logout();

redirect_to(URL.'/login');

?>