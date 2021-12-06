<?php

require_once 'layout.php';

function classAutoLoad($classname)
{
    $filename = $classname . ".php";
    include_once($filename);
}

spl_autoload_register('classAutoLoad');
$obj = new Manager();

$obj->say('Help me!!!!');
