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
	static protected $tab_name0="user";
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
	 * @param void
	 * @return 
	 * this method creates a user, sends the information into 
	 * the user table in the database as well and returns nothing
	 */
	public function setUserId($id){
		$this->u_id->$id;		
	}



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

	/**
	 * @return array
	 * @param void
	 * this method does backend validation for form input
	 * and returns an array of errors if any
	 */
	protected function valUserForm(){
		$this->errors=[];

	    if(''===($this->phone_no)) {
      		$this->errors[] = "phone number cannot be blank.";
      	}elseif(strlen($this->phone_no)!=10){
      		$this->errors[] = "phone number cannot contain less or more than 10 characters.";
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
	static public function find_roommates($email) {
    	$sql = "SELECT * FROM " . static::$tab_name0 ." WHERE email='" . self::$databaseName->escape_string($email) . "'"; echo $sql;return true;

    	$obj_arr = static::find_sql($sql);
    	//print_r($obj_arr);
    	if(!empty($obj_arr)) {
    		return $obj_arr;
      		//return array_shift($obj_arr);
    	} else {
      		return false;
    	}
  	}

  	/**
	 * @param string 
	 * @return bool ||array
	 * this method accepts an emal as a parameter and quarries 
	 * a table in a database to find a row of object and returns that
	 * or false if none was found
	 */
  	static public function find_email($email) {
    	$sql = "SELECT * FROM " . static::$tab_name0 ." WHERE email='" . self::$databaseName->escape_string($email) . "'";
    	//echo $sql; return true;
    	$obj_arr = static::find_sql($sql);
    	//print_r($obj_arr);
    	if(!empty($obj_arr)) {
      		return array_shift($obj_arr);
    	} else {
      		return false;
    	}
    }

    /**
	 * @return false or an id
	 * this method inserts dataa into the database
	 * aand checks the database for the id and save it as 
	 * the id of the object that was instantiated
	 */
	protected function create(){
		$attributes = $this->sanitized_attributes();
	    $sql = "INSERT INTO " . static::$tab_name1 . " (";
	    $sql .= " 'hostel','roommate','u_id' ";
	    $sql .= ") VALUES ('";
	    $sql .= " '$this->hostel', '$this->roommate','$this->u_id'  ";
	    $sql .= "')";
	    echo $sql;
	    //return false;
	    $result = self::$databaseName->query($sql);
	    if($result) {
	      $this->id = self::$databaseName->insert_id;
	    }
	    return $result;

	}

	/**
	 * this method calls the create method
	 * it is a form of encapsulation
	 */
	public function save() {
		return $this->create();
  	}


}

?>