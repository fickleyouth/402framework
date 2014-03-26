<?php
//require the file
require 'employee.class.php';

//instantiate object of employee class (NB: extends User class)
$employee = new Employee("governess");

//get name
$employee_title = $employee->get_title();
//set gender
$employee_age = $employee->set_age("18");
//get gender
$employee_age = $employee->get_age();

//output name
echo '<p>new employee = '.$employee_title.'</p>';
//output gender
echo '<p>gender = '.$employee_age.'</p>';

?>