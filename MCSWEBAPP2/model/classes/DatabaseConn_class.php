<?php
	
/**
 * A summary of the databse class
 *
 *The database class enables all other classes to connect
 *to the database and perform quarries on it.
 *
 * @since version 0.01
 * @author hodoash
 */	
class DatabaseConn{
	/**#@+
	 * @staticvar 
	 * this is a static variable that stores stuff about the database
	 */
	static protected $databaseName=null;
	static protected $tab_name="";
	static protected $colmns=[];
	/**
	 * this array stores errors that occur 
	 * in the database section
	 */
	public $errors=[];

	/**
	 * @param string
	 * this is a setter for the database name
	 */
	static public function set_db($db){
		self::$databaseName=$db;
	}

	/**
	 * this quarry goes inot the database to retrieve 
	 * information based on an sql command ppassed as a 
	 * parameter. it returns either false or an array of a column
	 * depending on wheter data was found or not
	 */
	static public function find_sql($sql){
		$result = self::$databaseName->query($sql);
<<<<<<< HEAD
		return 0;
		if(!$result){
			exit("query failed: check database.....");
		}
=======
		//if(!$result){
			//exit("query failed: check database.....");
		//}
>>>>>>> 9f635f263d3af9c295fd79c5164da5a7f1aa3fc2
		if(!$result){
				return false;
			}return $result->fetch_assoc();
	}

	

	//nono static functions

	/**
	 * @return false or an id
	 * this method inserts dataa into the database
	 * aand checks the database for the id and save it as 
	 * the id of the object that was instantiated
	 */
	protected function create(){
		$attributes = $this->sanitized_attributes();
	    $sql = "INSERT INTO " . static::$tab_name . " (";
	    $sql .= join(',', array_keys($attributes));
	    $sql .= ") VALUES ('";
	    $sql .= join("','", array_values($attributes));
	    $sql .= "')";
	    //echo $sql;
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


  	/**
	   * this method sanitizes all attributes or data 
	   * except id
	   */
  	protected function sanitized_attributes() {
   		$sanitized = [];
    	foreach($this->attributes() as $key => $value) {
     		$sanitized[$key] = self::$databaseName->escape_string($value);
    	}
    	return $sanitized;
 	}
	 /**
	  * this method calls the attributes of an object
	  * except the ids
	  */
 	public function attributes() {
    	$attributes = [];
    	foreach(static::$colmns as $col) {
        	if($col == 'id') { continue; }
      			$attributes[$col] = $this->$col;
    		}
    	return $attributes;
  	}

}


?>