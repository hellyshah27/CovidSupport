<?php

require_once 'connectcovid.php';
require_once 'functions_NGO.php';

if (isset($_POST['submit'])) {

    $oname = $_POST['oname'];
    $address = $_POST['address'];
    $cno = $_POST['cno'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $confirmPass = $_POST['confirmPass'];
    $helpprovider = $_POST['helpprovider'];
    $NGO = $_POST['NGO'];

    if (emptyInputRegister($oname, $address, $cno, $email, $uname, $pass, $confirmPass, $helpprovider, $NGO) !== false){
        header("location: ./registerhelpprovider.php?error=emptyinput");
        exit(); 
    }
    if (invalidEmail($email) !== false){
        header("location: ./registerhelpprovider.php?error=invalidemail");
        exit(); 
    }
    // if (invalidUname($uname) !== false){
    //     header("location: ./registerhelpprovider.php?error=invaliduname");
    //     exit(); 
    // }
    if (pwdMatch($pass, $confirmPass) !== false){
        header("location: ./registerhelpprovider.php?error=passwordsdontmatch");
        exit(); 
    }
    // if (unameExist($conn, $uname, $email) !== false){
    //     header("location: ./registerhelpprovider.php?error=usernametaken");
    //     exit(); 
    // }

    $sql = createNGO($conn, $oname, $address, $cno, $email, $uname, $pass, $confirmPass, $helpprovider, $NGO);

    
    if ($sql){ 
        header("location: ./login.html"); 
        exit(); 
    }
    else {
        header("location: ./registerhelpprovider.php");
        exit();
    }
}    
else {
    header("location: ./registerhelpprovider.php");
    exit();
}