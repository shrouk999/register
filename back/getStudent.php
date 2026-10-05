<?php



require_once __DIR__ ."/../database/connection.php";
if($_SERVER['REQUEST_METHOD']!=="GET"){
    throwError(405,"Method Not Allowed");
}

if(!isset($_GET['student_id'])){
    throwError(422,"Unprpocessable Entity");
}

if(empty($_SESSION['_errors'])){
    $DB = connection();

    $stmt = $DB->query("SELECT
                            id,
                            first_name as firstName,
                            last_name as lastName,
                            email,
                            age,
                            phone
                            FROM students WHERE id='{$_GET['student_id']}'");
                            

    $student = $stmt->fetch();

    if(empty($student)){
        throwError(422,"invalid id");
    }
    $_SESSION['_old']=$student;
    //pr($student, true);

}


