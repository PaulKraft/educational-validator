<?php

// filter validator
//1) custom validator with regexp
//2) email validator
//3) telephone number  validator "/^\+[0-9]{3}-[0-9]{2}-[0-9]{3}-[0-9]{4}$/"
//4) string validator "/^[a-zA-Z\s\.,?!\"\'\`-]*$/"
//5) int validator
//6) float validator


class Validator
{
	
	// input string $data, regular expression string $mask
	// if data valid return $data else false

	public static function regExp($data, $mask){
	
	 if(filter_var(
        $data, 
        FILTER_VALIDATE_REGEXP,
        array(
             "options" => array("regexp"=>$mask)
        )
    )){
	 	return $data;
	 }else{
	 	return false;
	 }
	}

	// input email string $email
	// if email valid return $email else false

	public static function emailValid($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			return $email;
		}else{
			return false;
		}

	}

	// input telephone number string $telephoneNumber by format "+777-77-777-7777"
	// if telephone number valid return $telephoneNumber else false
	public static function telephoneValid($telephoneNumber){
		$mask = "/^\+[0-9]{3}-[0-9]{2}-[0-9]{3}-[0-9]{4}$/";
		 if(filter_var(
	        $telephoneNumber, 
	        FILTER_VALIDATE_REGEXP,
	        array(
	             "options" => array("regexp"=>$mask)
	        )
	    )){
		 	return $telephoneNumber;
		 }else{
		 	return false;
		 }

	}


	// input string $data
	// if data valid return $data else false

	public static function stringValid($data){
		$mask =  "/^[a-zA-Z\s\.,?!\"\'\`-]*$/";
		 if(filter_var(
	        $data, 
	        FILTER_VALIDATE_REGEXP,
	        array(
	             "options" => array("regexp"=>$mask)
	        )
	    )){
		 	return $data;
		 }else{
		 	return false;
		 }
	}

	
	// input integer $data
	// if data valid return $data else false

	public static function intValid($data){
		if(filter_var($data, FILTER_VALIDATE_INT))
		{
			return $data;
		}else{
			return false;
		}
	}

	// input floating point number, float $data
	// if data valid return $data else false

	public static function floatValid($data){
		if(filter_var($data, FILTER_VALIDATE_FLOAT))
		{
			return $data;
		}else{
			return false;
		}
	}


}



?>