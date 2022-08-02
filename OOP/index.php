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

echo "<br />";

require_once('Classes/Profile.php');

// example of Inheritance Pillar

$profile = new Profile;

var_dump($profile->hasProfile());

echo "<br />";

require_once('Classes/Shape.php');

// examples of Abstraction And Polymorphism Pillars
var_dump($square->getAria(5, 4));

echo "<br />";

var_dump($square->getShadow($square->getAria(5, 4), 2));



