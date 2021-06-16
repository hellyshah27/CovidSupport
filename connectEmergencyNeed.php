<?php

require_once 'connectcovid.php';

if (isset($_POST['submit'])) {

    $prescriptionImage = $_POST['prescription'];
    $IDImage = $_POST['IDimage'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $description = $_POST['description'];
    

    if (emptyEmergencyNeed($prescriptionImage, $IDImage, $city, $state, $description) !== false){
        header("location: ./submit_emergencyneed.php?error=emptyinput");
        exit(); 
    }
    
    $sql = createEmergencyNeed($conn, $prescriptionImage, $IDImage, $city, $state, $description);

    
    if ($sql){ 
        header("location: ./listing_helpprovider_NGO.html"); 
        exit(); 
    }
    else {
        header("location: ./submit_emergencyneed.php");
        exit();
    }
}    
else {
    header("location: ./submit_emergencyneed.php");
    exit();
}

function emptyEmergencyNeed($prescriptionImage, $IDImage, $city, $state, $description){
    $result;
    if (empty($prescriptionImage) || empty($IDImage) || empty($city) || empty($state) || empty($description)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function createEmergencyNeed($conn, $prescriptionImage, $IDImage, $city, $state, $description){
    $sql = "INSERT INTO emergencyneed (prescription, IDimage, city, state, description) VALUES ('$prescriptionImage', '$IDImage', '$city', '$state', '$description');";
    $result=mysqli_query($conn,$sql);

    return $result;
}