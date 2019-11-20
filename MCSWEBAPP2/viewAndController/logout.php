<?php  

require_once('../model/settings.php');

$session->logout();
echo "logged out successfully";
redirect_to(URL.'/login');

?>