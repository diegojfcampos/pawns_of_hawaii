<?php
// Including DB Connection 
require_once '/pawns_of_hawaii/config/dbconnect.php';

// Verifying if the datas was sent by the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $passwordRegister = $_POST['passwordRegister'];
    $passwordCheck = $_POST['passwordCheck'];

    // SQL Query
    $sql = "INSERT INTO users (firstname, lastname, email, userpassword, useradmin) VALUES ('$fname', '$lname', '$email', '$passwordRegister', default)";

    // Query Execution
    if (mysqli_query($conn, $sql)) {
        echo "User inserted";
        header('Location: /pawns_of_hawaii/index.php');        
    } else {
        echo "Error to insert user " . mysqli_error($conn);
    }
}
?>