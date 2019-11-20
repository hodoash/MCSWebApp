<?php
/**
 * 
 * 
 * @version 0.01
 * @author hodoash
 */

    /**
     * @param string
     * @return string
     * this function accepts form data or input and 
     * sanitizes it to prevent attacks through input
     */
	function sanitizeData($input) //ths funtion is for form handeling
    {
        $data=trim($input);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);//removes special chars
        return $data;
    }

     /**
     * @param string
     * @return string
     * this function accepts form data or input and 
     * sanitizes it to prevent attacks through input. this one does not remove white spaces
     */
    function sanitizeComment($input) //ths funtion is for form handeling
    {
        //$data=trim($input);
        $data=stripslashes($input);
        $data=htmlspecialchars($data);//removes special chars
        return $data;
    }

    /**
     * @param string email
     * @return 
     * this function uses regex to check if the input is an email format
     */
    function chechEmail($value){
    	$email_regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
    	return preg_match($email_regex, $value) === 1;
    }

    /**
     * @param string or form input
     * @return bool
     * this function accepts an input and return a boolean to indicate
     * if it is black or not
     */
    function isBlank($value) {
        if(trim($value) === '' || !isset($value)){
            return true;
        }return false ;
    }

?>