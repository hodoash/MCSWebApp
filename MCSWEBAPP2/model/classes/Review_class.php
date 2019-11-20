<?php
/**
 * A summary of the review class
 *
 *The review class takes contains the code for 
 *alowing people to review hostels.
 *It adds the info to the databas which would later be retrived.  
 *
 * @since version 0.01
 * @author hodoash
 */
class Review extends DatabaseConn{

	/**
	 * @saticvar
	 * this is a static array that stores the columns for the table for quarries
	 */
	static protected $tab_name="review";
	/**
	 * @saticvar
	 * this is a static array that stores the columns for the table for quarries
	 */
	static protected $colmns=['id','name','subject','matter'];

	/**#@+
	 * @access public 
	 * 
	 */
	public $id;
	public $u_id;
	public $subject;
	public $matter;
	

	/**
	 * @param string 
	 * @return void
	 * this contructor takes values that would
	 * be the properties in the class
	 */
	public function __construct($name,$sub, $messages) {
	    $this->subject = $sub;//$args['subject'] ?? '';
	    $this->name = $name;//$args['email'] ?? '';
	    $this->matter = $messages;//$args['phone_no'] ?? '';
	    
	}

	
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
		if(''===($this->subject)) {
			$this->errors[] = "subject cannot be blank.";
	  } elseif (!has_length($this->subject, array('min' => 2, 'max' => 100))) {
			$this->errors[] = "subject must be between 2 and 100 characters.";
	  }
	  if(''===($this->matter)) {
		$this->errors[] = "comment cannot be blank.";
  } elseif (!has_length($this->matter, array('min' => 2, 'max' => 100))) {
		$this->errors[] = "comment must be between 2 and 100 characters.";
  }

	    return $this->errors;
	}
/*
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
    }*/
}

?>