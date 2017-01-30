<?php
use airmoi\FileMaker\FileMaker;
use airmoi\FileMaker\FileMakerException;

require('autoloader.php');

$fm = new FileMaker('TestDB', 'esn-d1.esntechnologies.co.in:81', 'satya', 'satya', ['prevalidate' => true]);

try {
    $command = $fm->newFindCommand('PHP Test');
    $records = $command->execute()->getRecords();

    foreach($records as $record) {
        echo $record->getField('fieldname');
    }
}
catch (FileMakerException $e) {
    echo 'An error occured ' . $e->getMessage() . ' - Code : ' . $e->getCode();
}