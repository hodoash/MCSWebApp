<?php

class User extends DatabaseConn{

	static protected $tab_name="user";
	static protected $colmns=['id','name','password','email','phone_no'];

	public $id;
	public $name;
	public $email;
	public $phone_no;
	public $pass;
	public $confirm_pass;
	protected $password;//hashed version
	protected $password_required = true;

	public function __construct($args=[]) {
	    $this->name = $args['name'] ?? '';
	    $this->email = $args['email'] ?? '';
	    $this->phone_no = $args['phone_no'] ?? '';
	    $this->pass = $args['pass'] ?? '';
	    $this->confirm_pass = $args['confirm_pass'] ?? '';
	}

	protected function hashPass(){
		$this->password=sha1($this->pass);
	}
	public function checkPass($pass){
		return password_verify($pass, $this->password);
	}

	protected function create(){
		$this->hashPass();
		return parent::create();
	}

	protected function valUserForm(){
		$this->errors=[];

		if(''===($this->name)) {
      		$this->errors[] = "Name cannot be blank.";
    	} elseif (!has_length($this->name, array('min' => 2, 'max' => 100))) {
      		$this->errors[] = "Name must be between 2 and 100 characters.";
    	}

	    if(''===($this->email)) {//echo "two";return true;
	     	$this->errors[] = "Email cannot be blank.";
	    } elseif (!has_length($this->email, array('max' => 255))) {
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
	        	$this->errors[] = "Password must contain 12 or more characters";
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
	}


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
  	}
  	static public function find_pass($pass) {
    	$sql = "SELECT * FROM " . static::$tab_name ." WHERE password='" . self::$databaseName->escape_string($pass) . "'";

    	$obj_arr = static::find_sql($sql);
    	//print_r($obj_arr);
    	if(!empty($obj_arr)) {
      		return array_shift($obj_arr);
    	} else {
      		return false;
    	}
    }
}

?>