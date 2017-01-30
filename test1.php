<?php

//include the FileMaker PHP API
require_once ('FileMaker.php');

//create the FileMaker Object
$fm = new FileMaker();
//Specify the FileMaker database
$fm->setProperty('database', 'testdb1');
$fm->setProperty('hostspec', 'esn-d1.esntechnologies.co.in:81');
$fm->setProperty('username', 'satya');
$fm->setProperty('password', 'satya');

var_dump($fm->listDatabases());

?>
