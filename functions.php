<?php

function emptyInputRegister($name, $age, $gender, $address, $cno, $email, $uname, $pass, $confirmPass){
    $result;
    if (empty($name) || empty($age) || empty($gender) || empty($address) || empty($cno) || empty($email) || empty($uname) || empty($pass) || empty($confirmPass)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUname($uname){
    $result;
    if (preg_match("/^[a-zA-Z0-9*$]/", $uname)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pass, $confirmPass){
    $result;
    if ($pass !== $confirmPass) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

// function unameExist($conn, $uname, $email){
//     $sql = "SELECT * FROM patients WHERE patientsUname = ? OR patientsEmail = ?;";
//     $stmt = mysql_stmt_init($conn);
//     if (!mysql_stmt_prepare($stmt, $sql)){
//         header("location: ./registerpatient.php?error=stmtfailed");
//         exit();
//     }

//     mysql_stmt_bind_param($stmt, "ss", $uname, $email);
//     mysql_stmt_execute($stmt);

//     $resultData = mysql_stmt_get_result($stmt);

//     if ($row = mysql_fetch_assoc($resultData)) {
//         return $row;
//     }
//     else{
//         $result = false;
//         return $result;
//     }

//     mysql_stmt_close($stmt);
// }

// function createPatient($conn, $name, $age, $gender, $address, $cno, $email, $uname, $pass, $confirmPass){
//     $sql = "INSERT INTO patients (patientsName, patientsAge, patientsGender, patientsAddress, patientsContactnum, patientsEmail, patientsUname, patientsPwd, patientsCpwd) VALUES ($name, $age, $gender, $address, $cno, $email, $uname, $pass, $confirmPass);";
//     $stmt = mysql_stmt_init($conn);
//     if (!mysql_stmt_prepare($stmt, $sql)){
//         header("location: ./registerpatient.php?error=stmtfailed");
//         exit();
//     }

//   $hashedpass = password_hash($pass, PASSWORD_DEFAULT);

//     mysql_stmt_bind_param($stmt, "sssssssss", $name, $age, $gender, $address, $cno, $email, $uname, $pass, $confirmPass);
//     mysql_stmt_execute($stmt);
//     mysql_stmt_close($stmt);
//     header("location: ./login.html?error=none");
//     exit();
// }

function createPatient($conn, $name, $age, $gender, $address, $cno, $email, $uname, $pass, $confirmPass){
    $sql = "INSERT INTO patients (patientsName, patientsAge, patientsGender, patientsAddress, patientsContactnum, patientsEmail, patientsUname, patientsPwd, patientsCpwd) VALUES ('$name', $age, '$gender', '$address', $cno, '$email', '$uname', '$pass', '$confirmPass');";
    $result=mysqli_query($conn,$sql);

    return $result;
}