<?php
require_once('../model/settings.php');
echo "hello";

$args=['albert','senyo123SENYO','albert@senyo','3234567894'];
$user=new User($args);
#$user->save();
$result=User::find_email($args['email']);
echo $result;
echo "hello";


?>
