<?php
// Including DB Connection 

//Including DB Connection using require_once as better pratice.
require_once('../config/dbconnect.php');

//Debbuging - Verifying if the datas was sent corretly from the form
echo '<pre>'; print_r($_POST); echo '</pre>';
var_dump($_POST);

    //Starting validations
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        /*I don't need verify datas ex: if(!empty($email) $$ !empty($password)) because the
        essentials to the database  and  to execute this system are required on the form 
        so will never be empty before posted*/

        //Instancing variables
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['mail'];
        $donationAmount = $_POST['donation'];
        $address = $_POST['addr'];

        //Creating Query
        $queryInsertUser = "INSERT INTO donate (firstName, lastName, email, donationAmount, address) VALUES ('$firstName', '$lastName', '$email', '$donationAmount','$address')";
        
        // Query Execution
    if (mysqli_query($conn, $queryInsertUser)) {
        //Redirecting User
        header('Location: /pawns_of_hawaii/index.php');
        //Throwing a text;
        echo "Donation sent";
    }
}
?>