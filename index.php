<?php 

include "components/validator.php";


// filter validator
//1) custom validator with regexp
//2) email validator
//3) telephone number validator "/^\+[0-9]{3}-[0-9]{2}-[0-9]{3}-[0-9]{4}$/"
//4) string validator "/^[a-zA-Z\s\.,?!\"\'\`-]*$/"
//5) int validator
//6) float validator


$mask =  "/^[A]*$/";

var_dump(Validator::regExp("hello",$mask ));
var_dump(Validator::regExp("A", $mask ));

var_dump(Validator::emailValid("tester@hkp.com.ua"));
var_dump(Validator::emailValid("tester@123.html"));

var_dump(Validator::telephoneValid("+380-77-777-7777"));
var_dump(Validator::telephoneValid("+77-777-7777"));

var_dump(Validator::stringValid("hello world"));
var_dump(Validator::stringValid("hell0 w0rld"));

var_dump(Validator::intValid(99));
var_dump(Validator::intValid(-9.9));

var_dump(Validator::floatValid("hello"));
var_dump(Validator::floatValid(-9.9));

?>