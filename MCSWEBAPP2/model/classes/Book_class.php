<?php
/**
 * A summary of the book class
 *
 *The book class allows users to book for hostel and rooms
 *and sends data to the database for storage as well as 
 *validates the data and much more.
 *
 * @since version 0.01
 * @author hodoash
 */
class Book extends DatabaseConn{

	/**#@+
	 * @access protected 
	 * @staticvar
	 */
	static protected $tab_name1="bookings";
	static protected $tab_name2="roommates";
	static protected $bookings_col=['id','hostel','roommate','u_id'];
	static protected $roommates_col=['id','rm_email','rm_phone_no','u_id'];

	/**#@+
	 * @access public 
	 * 
	 */
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



	/**
	 * @param string array
	 * @return void
	 * this contructor takes an array of values that would
	 * be the properties
	 */
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
*/

	/**
	 * @return array
	 * @param void
	 * this method does backend validation for form input
	 * and returns an array of errors if any
	 */
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


	    return $this->errors;
	}


	/**
	 * @param string 
	 * @return bool ||array
	 * this method accepts a user id as a parameter and quarries 
	 * a table in a database to find a row of object and returns that
	 * or false if none was found
	 */
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
  	/**
	 * @param string 
	 * @return bool ||array
	 * this method accepts an emal as a parameter and quarries 
	 * a table in a database to find a row of object and returns that
	 * or false if none was found
	 */
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