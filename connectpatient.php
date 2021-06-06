<?php

require_once 'connectcovid.php';
require_once 'functions.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $cno = $_POST['cno'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $confirmPass = $_POST['confirmPass'];

    if (emptyInputRegister($name, $age, $gender, $address, $cno, $email, $uname, $pass, $confirmPass) !== false){
        header("location: ./registerpatient.php?error=emptyinput");
        exit(); 
    }
    if (invalidEmail($email) !== false){
        header("location: ./registerpatient.php?error=invalidemail");
        exit(); 
    }
    // if (invalidUname($uname) !== false){
    //     header("location: ./registerpatient.php?error=invaliduname");
    //     exit(); 
    // }
    if (pwdMatch($pass, $confirmPass) !== false){
        header("location: ./registerpatient.php?error=passwordsdontmatch");
        exit(); 
    }
    // if (unameExist($conn, $uname, $email) !== false){
    //     header("location: ./registerpatient.php?error=usernametaken");
    //     exit(); 
    // }

    $sql = createPatient($conn, $name, $age, $gender, $address, $cno, $email, $uname, $pass, $confirmPass);

    
    if ($sql){ 
        header("location: ./login.html"); 
        exit(); 
    }
    else {
        header("location: ./registerpatient.php");
        exit();
    }
}    
else {
    header("location: ./registerpatient.php");
    exit();
}
