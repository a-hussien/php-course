<?php

require_once('Classes/User.php');

// create new instance
$user = New User();
// use method to set fullname
$user->setName('Ahmed', 'Hussein');
// use method to get fullname
var_dump($user->getFullName());

echo "<br />";
// create new instance
$user1 = new User();
// get typed property
var_dump($user1->major);

echo "<br />";

// get static property
var_dump(User::getLocation());