<?php
/**
 * user.class.php - set and format various outputs for a user
 */
 
/*
 * user class
 */ 
class User 
{
	//properties for class
	public $title;
	private $age;
	
	//constructor
	function __construct($jobtitle) {
		$this->title = $jobtitle;
	}

	//setter for new title
	function set_title($newtitle) {
		$this->title = $newtitle;
	}
	
	//getter for name
	function get_title() {
		return $this->title;
	}
	
	//setter for age
	function set_age($newage) {
		$this->age = $newage;
	}
	
	//getter for age
	function get_age() {
		return $this->age;
	}

}
?>