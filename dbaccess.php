<?php


/**
 * This file is responsible for creating and initializing the FileMaker object.
 * This object allows you to manipulate data in the database. To do so, simply
 * include this file in the PHP file that needs access to the FileMaker database.
 */
//include the FileMaker PHP API
require_once ('FileMaker.php');

//create the FileMaker Object
$fm = new FileMaker();



//Specify the FileMaker database
$fm->setProperty('database', 'testdb1');
//Specify the Host
$fm->setProperty('hostspec', 'esn-d1.esntechnologies.co.i'); //temporarily hosted on local server

/**
 * To gain access to the questionnaire database, use the default administrator account,
 * which has no password. To change the authentication settings, open the database in
 * FileMaker Pro and select "Manage > Accounts & Privileges" from the "File" menu.
 */

$fm->setProperty('username', 'satya');
$fm->setProperty('password', 'satya');

var_dump($fm->listDatabases());



?>
