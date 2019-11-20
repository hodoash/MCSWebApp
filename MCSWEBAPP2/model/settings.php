<?php
	
	
	define("MODEL_PATH",dirname(__FILE__));
	define("MCSPROJECT_PATH",dirname(MODEL_PATH));
	define("VIEW_PATH",MCSPROJECT_PATH.'/viewandcontroller');
	define("URL",'http://localhost/mcswebapp2/viewandcontroller');

	//define the www root as well
	$endOfView=strpos($_SERVER['SCRIPT_NAME'],'/viewandcontroller')+18;
	$root=substr($_SERVER['SCRIPT_NAME'],0,$endOfView);
	define("WWW_ROOT",$root);

	
	require_once('form_validation.php');
	require_once('mcs_db_credentials.php');
	require_once('mcs_database_functions.php');
	require_once('status_functions.php');

	foreach(glob('classes/*_class.php')as $phpfile){//require all the classes in the directory at once
		require_once($phpfile);

	}

	function loadAnyClass($class){
		if(preg_match('/\A\w+\Z/', $class)){
			include('classes/'.$class.'_class.php');
		}
	}spl_autoload_register('loadAnyClass');
	$databaseName=db_conn();
	DatabaseConn::set_db($databaseName);
	$session=new session;
	//$WebParts=[];

?>