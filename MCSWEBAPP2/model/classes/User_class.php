<?php
/**
 * A summary of the user class
 *
 *The user class is a class that is used to create instances of a user or a client 
 *and this client can do validation and quarries.
 *
 * @since version 0.01
 * @author hodoash
 */
class User extends DatabaseConn{
	/**
	 * @staticvar 
	 * this is a static variable that stores the table name for quarries
	 */
	static protected $tab_name="user";
	/**
	 * @saticvar
	 * this is a static array that stores the columns for the table for quarries
	 */
	static protected $colmns=['id','name','password','email','phone_no'];
	/**#@+
	 * @access public 
	 * 
	 */
	public $id;
	public $name;
	public $email;
	public $phone_no;
	public $pass;
	public $confirm_pass;
	protected $password;//hashed version
	protected $password_required = true;
	/**
	 * @param string array
	 * @return void
	 * this contructor takes an array of values that would
	 * be the properties
	 */
	public function __construct($args=[]) {
	    $this->name = $args['name'] ?? '';
	    $this->email = $args['email'] ?? '';
	    $this->phone_no = $args['phone_no'] ?? '';
	    $this->pass = $args['pass'] ?? '';
	    $this->confirm_pass = $args['confirm_pass'] ?? '';
	}
	/**
	 * @param void
	 * @return void
	 * this method creates a hashed version of the password
	 */
	protected function hashPass(){
		$this->password=sha1($this->pass);
	}
	/**
	 * @param password
	 * this method accepts a password and verifies that it
	 * has the hashed version
	 */
	public function checkPass($pass){
		return password_verify($pass, $this->password);
	}
	/**
	 * @param void
	 * @return 
	 * this method creates a user, sends the information into 
	 * the user table in the database as well and returns nothing
	 */
	protected function create(){
		$this->hashPass();
		return parent::create();
	}
	
	/*public function valUserForm(){
		$this->errors=[];
		if(''===($this->name)) {
      		$this->errors[] = "Name cannot be blank.";
    	} elseif (!has_length($this->name, array('min' => 2, 'max' => 100))) {
      		$this->errors[] = "Name must be between 2 and 100 characters.";
    	}

	    if(''===($this->email)) {//echo "two";return true;
	     	$this->errors[] = "Email cannot be blank.";
	    } elseif (!$this->has_length($this->email, array('max' => 255))) {
	      	$this->errors[] = " email must be less than 255 characters.";
	    } elseif (!has_valid_email_format($this->email)) {
	      	$this->errors[] = "Email must be a valid format.";
	    }


	    if(''===($this->phone_no)) {
	    	$this->errors[] = "Phone Number cannot be blank.";
	    } elseif (!has_length($this->phone_no, array('max' => 10))) {
	      	$this->errors[] = "Invalid Phone Number";
	    } elseif (!has_length($this->phone_no, array('min' => 10))) {
	      	$this->errors[] = "Invalid Phone Number";
	    }

	
	    if($this->password_required) {
	    	if(''===($this->pass)) {
	        	$this->errors[] = "Password cannot be blank.";
	      	} elseif (!has_length($this->pass, array('min' => 8))) {
	        	$this->errors[] = "Password must contain 8 or more characters";
	        } elseif (!preg_match('/[A-Z]/', $this->pass)) {
	        	$this->errors[] = "Password must contain at least 1 uppercase letter";
	        } elseif (!preg_match('/[a-z]/', $this->pass)) {
	        	$this->errors[] = "Password must contain at least 1 lowercase letter";
	      	} elseif (!preg_match('/[0-9]/', $this->pass)) {
	        	$this->errors[] = "Password must contain at least 1 number";
	      	} 

	        if(''===($this->confirm_pass)) {
	        	$this->errors[] = "Confirm password cannot be blank.";
	        } elseif ($this->pass !== $this->confirm_pass) {
	        	$this->errors[] = "Password and confirm password must match.";
	      	}
	    }

	    return $this->errors;
	}*/
	
	/**
	 * @return array
	 * @param void
	 * this method does backend validation for form input
	 * and returns an array of errors if any
	 */
	public function validateData(){
		$this->errors=[];
		if(''===($this->name)) {
      		$this->errors[] = "Name cannot be blank.";
      	}elseif(strlen($this->name)<5){
      		$this->errors[] = "Name cannot contain less than 5 characters.";
      	}

      	if(''===($this->phone_no)) {
      		$this->errors[] = "phone number cannot be blank.";
      	}elseif(strlen($this->phone_no)!=10){
      		$this->errors[] = "phone number cannot contain less or more than 10 characters.";
      	}

      	if(!preg_match('/[A-Z]/', $this->pass)) {
	        	$this->errors[] = "Password must contain at least 1 uppercase letter";	
		} elseif (!preg_match('/[a-z]/', $this->pass)) {
	        	$this->errors[] = "Password must contain at least 1 lowercase letter";
	    } elseif (!preg_match('/[0-9]/', $this->pass)) {
	        	$this->errors[] = "Password must contain at least 1 number";
	    }

	    if(''===($this->confirm_pass)) {
	        	$this->errors[] = "Confirm password cannot be blank.";
	    }elseif ($this->pass !== $this->confirm_pass) {
	        	$this->errors[] = "Password and confirm password must match.";
	    }
			return $this->errors;

	}

	/**
	 * @param string 
	 * @return bool ||array
	 * this method accepts an emal as a parameter and quarries 
	 * a table in a database to find a row of object and returns that
	 * or false if none was found
	 */
	static public function find_email($email) {
    	$sql = "SELECT * FROM " . static::$tab_name ." WHERE email='" . self::$databaseName->escape_string($email) . "'";

    	$obj_arr = static::find_sql($sql);
    	//print_r($obj_arr);
    	if(!empty($obj_arr)) {
    		return $obj_arr;
      		//return array_shift($obj_arr);
    	} else {
      		return false;
    	}
  	}/*
  	static public function find_pass($pass) {
    	$sql = "SELECT * FROM " . static::$tab_name ." WHERE password='" . self::$databaseName->escape_string($pass) . "'";

    	$obj_arr = static::find_sql($sql);
    	//print_r($obj_arr);
    	if(!empty($obj_arr)) {
      		return array_shift($obj_arr);
    	} else {
      		return false;
    	}
    }*/
}

?>