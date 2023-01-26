<?php
// Including DB Connection 

//Including DB Connection using require_once as better pratice.
require_once('../config/dbconnect.php');

    //Starting validations
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        /*I don't need verify datas ex: if(!empty($email) $$ !empty($password)) because the
        essentials to the database  and  to execute this system are required on the form 
        so will never be empty before posted*/

        //Instancing variables
        $email =  htmlspecialchars(trim($_POST['email']));
        $fname =  htmlspecialchars(trim($_POST['firstname']));
        $lname =  htmlspecialchars(trim($_POST['lastname']));        
        $textmessage =  htmlspecialchars($_POST['subject']);
       
        //Creating Query
        $queryInsertUser = "INSERT INTO contact (firstname, lastname, email, textmessage) VALUES ('$fname', '$lname', '$email', '$textmessage')";
        
        // Query Execution
    if (mysqli_query($conn, $queryInsertUser)) {
        //Redirecting User
        header('Location: ../views/index.php');
        //Throwing a text;
        echo "Message sent";
    }
}
?>