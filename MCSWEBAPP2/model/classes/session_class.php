<?php

class Session{

	public $user_id;
	public $name;
	public $email;
	public $lastLoginTime;
  public $userThis=[];

	public const SESSION_TIME=90*90;

	public function __construct(){
		session_start();
		if(!isset($_SESSION['pricing'])){
			$_SESSION['pricing']=[];
		}$this->checkLogin();
	}

	public function login($user){print_r($user);return true;
    $this->userThis=$user;
		if($this->userThis){
			session_regenerate_id();//this line prevents fixation attacks
			$this->user_id=$_SESSION['user_id']=session_regenerate_id();//$user->id;
			$this->name=$_SESSION['name']=$user['name'];
			$this->email=$_SESSION['email']=$user['email'];
			$this->lastLoginTime=$_SESSION['lastLoginTime']=time();
		}return true;
	}

	public function logout() {
    	unset($_SESSION['user_id']);
    	unset($_SESSION['name']);
    	unset($_SESSION['email']);
    	unset($_SESSION['lastLoginTime']);
    	unset($this->user_id);
    	unset($this->name);
    	unset($this->email);
    	unset($this->lastLoginTime);
    	return true;
  	}

	public function isLogedIn() { echo $_SESSION['user_id'];echo $_SESSION['email'];return true;
    	// return isset($this->user_id);
    	return isset($this->user_id) && $this->lastLoginIsRecent();

  	}

  	private function lastLoginIsRecent() {
    	if(!isset($this->lastLoginTime)) {
      		return false;
    	} elseif(($this->lastLoginTime + self::SESSION_TIME) < time()) {
      		return false;
    	} else {
      		return true;
    	}
  	}

  	private function checkLogin() {
    	if(isset($_SESSION['user_id'])) {
    		$this->user_id = $_SESSION['user_id'];
      		$this->name = $_SESSION['name'];
      		$this->email = $_SESSION['email'];
      		$this->lastLoginTime = $_SESSION['lastLoginTime'];
    	}
 	}

  public function message($msg="") {
    if(!empty($msg)) {//setter
      $_SESSION['message'] = $msg;
      return true;
    } 
    else {//getter
      return $_SESSION['message'] ?? '';
    }
  }

  public function clrMessage(){
    unset($_SESSION['message']);
  }


}

?>