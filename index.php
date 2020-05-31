<?php

include_once'core/EquationInterface.php';
include_once'core/LogInterface.php';
include_once'core/LogAbstract.php';
include_once 'Oleg/Linear.php';
include_once 'Oleg/Square.php';
include_once 'Oleg/DobriogloException.php';
include_once 'Oleg/Log.php';

$arr=array();

$arr[] = readline("a= ");
$arr[] = readline("b= ");
$arr[] = readline("c= ");

try {
    $solver = new Alex\Square();
	$roots = $solver->solve($arr[0], $arr[1], $arr[2]);

    Alex\Log::log("roots: " . implode(" , ", $roots));
   
}catch(Alex\BuryaException $e) {

    Alex\Log::log($e->getMessage());
}
Alex\Log::write();