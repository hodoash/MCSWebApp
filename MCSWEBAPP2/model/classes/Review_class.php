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
	public function valUserForm(){
		$this->errors=[];

		if(''===($this->name)) {
      		$this->errors[] = "Name cannot be blank.";
      	}elseif(strlen($this->name)<5){
      		$this->errors[] = "Name cannot contain less than 5 characters.";
      	}
		if(''===($this->subject)) {
			$this->errors[] = "subject cannot be blank.";
	  	} elseif (strlen($this->subject)>50) {
			$this->errors[] = "subject must be between 2 and 50 characters.";
	  	}
	  	if(''===($this->matter)) {
		$this->errors[] = "comment cannot be blank.";
  		} elseif (strlen($this->matter)>225) {
		$this->errors[] = "comment must be between 2 and 225 characters.";
  		}

	    return $this->errors;
	}
}

?>