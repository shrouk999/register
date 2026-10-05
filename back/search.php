<?php

require_once __DIR__."/getStudents.php";
require_once __DIR__."/helpers.php";

header('Content-Type: application/json; charset=UTF-8');

if($_SERVER['REQUEST_METHOD']!=="POST"){
    throwAPIError(405,"Method Not Allowed");
}

if(!isset($_POST['search'])){
    throwAPIError(422,"Unprpocessable Entity");
}
$students = getStudents(($_POST['search']));


echo json_encode($students);