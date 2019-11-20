<?php
	
class DatabaseConn{

	static protected $databaseName=null;
	static protected $tab_name="";
	static protected $colmns=[];
	public $errors=[];

	static public function set_db($db){
		self::$databaseName=$db;
	}

	static public function find_sql($sql){
		$result = self::$databaseName->query($sql);
		return 0;
		if(!$result){
			exit("query failed: check database.....");
		}
		if(!$result){
				return false;
			}return $result->fetch_assoc();
		//place results in array
		//$obj_arr=[];
		//while($record=$result->fetch_assoc()){
		//$obj_arr[]=$result->fetch_assoc();
			//$obj_arr[]=static::instantiate($record);
		//}
		//$result->free();
		//return $obj_arr;
	}

	/*static protected function instantiate($record){
		$obj= new static;
		foreach($record as $property=> $value){
			if(property_exists($object, $property)) {
        		$object->$property = $value;
      		}
    	}return $object;
	}*/


	//nono static functions

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

	public function save() {
    // A new record will not have an ID yet
    /*if(isset($this->id)) {
      return $this->update();
    } else {
      return $this->create();
    }*/return $this->create();
  }

  	protected function sanitized_attributes() {
   		$sanitized = [];
    	foreach($this->attributes() as $key => $value) {
     		$sanitized[$key] = self::$databaseName->escape_string($value);
    	}
    	return $sanitized;
 	}

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