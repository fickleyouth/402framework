<?php
/**
 * employee.class.php - set and format various outputs for a user
 */
 
//require parent user class
require_once("user.class2.php");
 
/*
 * employee class
 */ 
class Employee extends User 
{
	
	//constructor
	function __construct($employeetitle) {
		$this->set_title($employeetitle);
	}

}
?>