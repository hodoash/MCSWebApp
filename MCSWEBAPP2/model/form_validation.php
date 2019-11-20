<?php

	function sanitizeData($input) //ths funtion is for form handeling
    {
        $data=trim($input);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);//removes special chars
        return $data;
    }

    function sanitizeComment($input) //ths funtion is for form handeling
    {
        //$data=trim($input);
        $data=stripslashes($input);
        $data=htmlspecialchars($data);//removes special chars
        return $data;
    }

    function checkEmail($value){
    	$email_regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
    	return preg_match($email_regex, $value) === 1;
    }

    function isBlank($value) {
        if(trim($value) === '' || !isset($value)){
            return false;
        }return true ;
    }


?>