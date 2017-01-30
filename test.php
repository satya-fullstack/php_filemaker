<?php

require_once ('Filemaker.php');

$fm = new FileMaker("TestDB", "esn-d1.esntechnologies.co.in:81", "satya", "satya");

$findCommand = $fm->newFindAnyCommand("PHP Test");
$result = $findCommand->execute()->f;
echo "<pre>";
var_dump($result);
echo "</pre>";


?>