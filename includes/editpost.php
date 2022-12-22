<?php
    require_once 'db/conn.php';

    //Get Values from post operation
    if (isset($_POST['Register'])){
        //Extract values from post
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dateofbirth = $_POST['dateofbirth'];
        $emailaddress = $_POST['emailaddress'];
        $contactnumber = $_POST['contactnumber'];
        $disability = $_POST['disability'];



        //Call Crud Function
        $result = $crud->editpatient($id, $firstname, $lastname, $dateofbirth, $emailaddress, $contactnumber, $disability);
        //Redirect to index.php
        if ($result){
            header("Location: patient.php");
        }
        else {
            include 'includes/errormessage.php';
        }
    }
    else {
        include 'includes/errormessage.php';
    }

?>