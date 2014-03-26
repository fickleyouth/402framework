<?php
class User {

public $username;
public $firstname; 
public $lastname;
public $age;
public $gender;

public function __construct($username, $firstname, $lastname, $age, $gender){
$this->username = $username;
$this->firstname = $firstname;
$this->lastname = $lastname;
$this->age = $age;
$this->gender = $gender;

}

public function getUserInformation() {
$userInformation = $this->username .' '. $this->firstname .' '. $this->lastname .' '. 
$this->age .' '. $this->gender;
//return the user's information
return $userInformation;
}

}
?>