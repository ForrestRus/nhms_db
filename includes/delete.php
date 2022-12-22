<?php
require_once 'includes/auth_check.php';
require_once 'db/conn.php';
if (!$_GET['id']){

    include 'includes/errormessage.php';
    header("location: patient.php");
}
else{
    //Get ID values
    $id = $_GET['id'];

    //Call Delete function
    $result = $crud->deletepatient($id);

    //Redirect to list
    if($result){
        header("Location: patient.php");
    }
    else{
        include 'includes/errormessage.php';
    }
}



?>