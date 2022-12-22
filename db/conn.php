<?php
    $host = 'localhost';
    $db = 'nhmsdb';
    $user = 'root';
   $pass = '';
   $charset = 'utf8mb4';

    //Remote Database connection
    /*$host = 'remotemysql.com';
    $db = 'UZ6WbBkYba';
    $user = 'UZ6WbBkYba';
    $pass = 'pIYX7cFPKd';
    $charset = 'utf8mb4';*/

    $dsn = "mysql:host=$host; dbname=$db; charset=$charset";

    try{
        $pdo = new PDO ($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch (PDOException $e) {
        throw new PDOException($e->getMessage());
       //echo "<h1 class= 'text-danger'> No Database Found</h1>";
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo); 
    $user = new user($pdo); 

    $user->insertUser("admin", "@dministrat0r");
?>