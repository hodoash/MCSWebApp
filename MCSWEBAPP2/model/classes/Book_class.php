<?php

class Book extends DatabaseConn{

	static protected $tab_name1="bookings";
	static protected $tab_name2="roommates";
	static protected $bookings_col=['id','hostel','roommate','u_id'];
	static protected $roommates_col=['id','rm_email','rm_phone_no','u_id'];

	public $email;
    public $phone_no;
    public $hostel;
    //public $roomtype;
    public $roommate;
    public $room;
    public $emailr1;
    public $phone_nor1;
    public $emailr2;
    public $phone_no2;
    public $email3;
    public $phone_no3;

	public $id;
	public $u_id;



	public function __construct($args=[]) {
	    $this->email = $args['email'] ?? '';
	    $this->hostel = $args['hostel'] ?? '';
	    $this->phone_no = $args['phone_no'] ?? '';
	    $this->roommate = $args['roommate'] ?? '';
	    $this->room = $args['room'] ?? '';

		$this->emailr1 = $args['emailr1'] ?? '';
	    $this->emailr2 = $args['emailr2'] ?? '';
	    $this->email3 = $args['email3'] ?? '';

	    $this->phone_nor1 = $args['phone_nor1'] ?? '';
	    $this->phone_no2 = $args['phone_no2'] ?? '';
	    $this->phone_no3 = $args['phone_no3'] ?? '';

	 	    
	}



	/*
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

		if(is_blank($this->name)) {
      		$this->errors[] = "Name cannot be blank.";
    	} elseif (!has_length($this->name, array('min' => 2, 'max' => 100))) {
      		$this->errors[] = "Name must be between 2 and 100 characters.";
    	}

	    if(is_blank($this->email)) {
	     	$this->errors[] = "Email cannot be blank.";
	    } elseif (!has_length($this->email, array('max' => 255))) {
	      	$this->errors[] = " email must be less than 255 characters.";
	    } elseif (!has_valid_email_format($this->email)) {
	      	$this->errors[] = "Email must be a valid format.";
	    }


	    if(is_blank($this->phone_number)) {
	    	$this->errors[] = "Phone Number cannot be blank.";
	    } elseif (!has_length($this->phone_number, array('max' => 10))) {
	      	$this->errors[] = "Invalid Phone Number";
	    } elseif (!has_length($this->phone_number, array('min' => 10))) {
	      	$this->errors[] = "Invalid Phone Number";
	    }

	
	    if($this->password_required) {
	    	if(is_blank($this->pass)) {
	        	$this->errors[] = "Password cannot be blank.";
	      	} elseif (!has_length($this->password, array('min' => 8))) {
	        	$this->errors[] = "Password must contain 12 or more characters";
	        } elseif (!preg_match('/[A-Z]/', $this->password)) {
	        	$this->errors[] = "Password must contain at least 1 uppercase letter";
	        } elseif (!preg_match('/[a-z]/', $this->password)) {
	        	$this->errors[] = "Password must contain at least 1 lowercase letter";
	      	} elseif (!preg_match('/[0-9]/', $this->password)) {
	        	$this->errors[] = "Password must contain at least 1 number";
	      	} 

	        if(is_blank($this->confirm_pass)) {
	        	$this->errors[] = "Confirm password cannot be blank.";
	        } elseif ($this->pass !== $this->confirm_pass) {
	        	$this->errors[] = "Password and confirm password must match.";
	      	}
	    }

	    return $this->errors;
	}*/


	static public function find_roommates($u_id) {
    	$sql = "SELECT * FROM " . static::$tab_name ." WHERE u_id='" . self::$databaseName->escape_string($email) . "'";

    	$obj_arr = static::find_sql($sql);
    	//print_r($obj_arr);
    	if(!empty($obj_arr)) {
    		return $obj_arr;
      		//return array_shift($obj_arr);
    	} else {
      		return false;
    	}
  	}

  	/*static public function find_roommates($u_id) {
    	$sql = "SELECT * FROM " . static::$tab_name ." WHERE u_id='" . self::$databaseName->escape_string($email) . "'";

    	$obj_arr = static::find_sql($sql);
    	//print_r($obj_arr);
    	if(!empty($obj_arr)) {
    		return $obj_arr;
      		//return array_shift($obj_arr);
    	} else {
      		return false;
    	}
  	}*/
  	
  	static public function find_email($email) {
    	$sql = "SELECT * FROM " . static::$tab_name ." WHERE email='" . self::$databaseName->escape_string($pass) . "'";

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