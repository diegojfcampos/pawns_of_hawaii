<?php
// Including DB Connection 
require_once './config/dbconnect.php';

// Verifying if the datas was sent by the form
if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['passwordRegister']) && isset($_POST['passwordCheck'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $passwordRegister = mysqli_real_escape_string($conn, $_POST['passwordRegister']);
    $passwordCheck = mysqli_real_escape_string($conn, $_POST['passwordCheck']);

    // SQL Query
    $sql = "INSERT INTO users (fname, lname, email, passwordRegister) VALUES ('$fname', '$lname', '$email', '$passwordRegister')";

    // Query Execution
    if (mysqli_query($conn, $sql)) {
        echo "User inserted";
    } else {
        echo "Error to insert user " . mysqli_error($conn);
    }
}
?>