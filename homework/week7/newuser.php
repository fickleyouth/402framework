<?php
require 'user.class.php';
$user= new User('yorkshiregirl', 'Jane', 'Eyre', '18', 'Woman');

$userinfo = $user->getUserInformation();

echo $userinfo;


?>