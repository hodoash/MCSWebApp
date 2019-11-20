<?php

/**
 * needs the user to be loged in before the usr can continue
 */
function requireLogin(){
	global $session;
	if(!$session->isLogedIn()){
		redirect_to(URL.'../login');
	}else{
		//.............allow the page....................
	}
}

/**
 * displays all errors generated when called
 */
function showAllErrors($errors=array()){
	$errResult='';
	if(!empty($errors)){
		$errResult.="<div class=\"alert alert-danger\"style='text-align:left;'> <ul>";
		foreach($errors as $err){
			$errResult.="<li>".h($err)."</li>";
		}$errResult.="</ul> </div>";

	}
} 

/**
 * @return bool
 * checks to see if user info is stored
 * in session or not
 */
function checkLogin(){
	global $session;
	if(!$session->isLogedIn()){
		return false;
	}else{
		return true;
	}
}
/**
 * alerts session messages
 */
function sessionMessages(){
	global $session;
	$mess='';
	$messItem=$session->message();
	if($messItem!='' && isset($messItem)){
		$session->clrMessage();
		$mess.='<div class="alert alert-success" style="width:initial;">'.h($messItem).'</div>';
		return $mess;
	}
}






?>