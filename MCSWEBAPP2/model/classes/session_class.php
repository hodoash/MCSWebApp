<?php
/**
 * A summary of the session class
 *
 *The session class takes care of user session
 *login details and others that enable a user remain 
 *loged iin or not.
 *
 * @since version 0.01
 * @author hodoash
 */
class Session{
	/**#@+
	 * @access public 
	 * 
	 */
	public $user_id;
	public $name;
	public $email;
	public $lastLoginTime;
    public $userThis=[];

	/**
	 * @constvar 
	 * this is a constant variable that stores the max session time for a user
	 */
	public const SESSION_TIME=90*90;
	/**
	 * @param 
	 * @return void
	 * this contructor creates an instance of the session class
	 */
	public function __construct(){
		session_start();
		if(!isset($_SESSION['pricing'])){
			$_SESSION['pricing']=[];
		}$this->checkLogin();
	}

	/**
	 * @param user object
	 * this method creates a user, creates a session id and
	 * keeps the users details in the session
	 */
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

	/**
	 * this method removes user data from the session
	 */
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
	  /**
	   * @param
	   * @return bool
	   * this method returns true or false depending
	   * on whether the user's data is in the session or not
	   */
	public function isLogedIn() { echo $_SESSION['user_id'];echo $_SESSION['email'];return true;
    	// return isset($this->user_id);
    	return isset($this->user_id) && $this->lastLoginIsRecent();

  	}

	  /**
	   * @param
	   * @return bool
	   * this method returns the true if the user was last loged in
	   *  recently or false if it wassnt
	   */
  	private function lastLoginIsRecent() {
    	if(!isset($this->lastLoginTime)) {
      		return false;
    	} elseif(($this->lastLoginTime + self::SESSION_TIME) < time()) {
      		return false;
    	} else {
      		return true;
    	}
  	}
	  /**
	   * @param
	   * @return
	   * this method assigns a users info from the
	   * session to the user object or instance 
	   * created by the class
	   */
  	private function checkLogin() {
    	if(isset($_SESSION['user_id'])) {
    		$this->user_id = $_SESSION['user_id'];
      		$this->name = $_SESSION['name'];
      		$this->email = $_SESSION['email'];
      		$this->lastLoginTime = $_SESSION['lastLoginTime'];
    	}
 	}

	 /**
	  * @param string
	  *this is a getter and steer based on whether 
	  *a parameter has been given or not.
	  *It is a seeter when given but getter when empty
	  */
	public function message($msg="") {
		if(!empty($msg)) {//setter
		$_SESSION['message'] = $msg;
		return true;
		} 
		else {//getter
		return $_SESSION['message'] ?? '';
		}
	}

	/**
	 * @return
	 * @param
	 * this method clears the session messsages
	 */
  public function clrMessage(){
    unset($_SESSION['message']);
  }


}

?>