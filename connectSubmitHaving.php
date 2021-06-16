<?php

require_once 'connectcovid.php';

if (isset($_POST['submit'])) {

    $city = $_POST['city'];
    $state = $_POST['state'];
    $description = $_POST['description'];
    

    if (emptyHaving($city, $state, $description) !== false){
        header("location: ./submit_having.php?error=emptyinput");
        exit(); 
    }
    
    $sql = createHaving($conn, $city, $state, $description);

    
    if ($sql){ 
        header("location: ./listing_patients.html"); 
        exit(); 
    }
    else {
        header("location: ./submit_having.php");
        exit();
    }
}    
else {
    header("location: ./submit_having.php");
    exit();
}

function emptyHaving($city, $state, $description){
    $result;
    if (empty($city) || empty($state) || empty($description)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function createHaving($conn, $city, $state, $description){
    $sql = "INSERT INTO availableneed (city, state, description) VALUES ('$city', '$state', '$description');";
    $result=mysqli_query($conn,$sql);

    return $result;
}