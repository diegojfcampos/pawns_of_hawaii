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
        $email = trim($_POST['email']);
        $fname = trim($_POST['firstname']);
        $lname = trim($_POST['lastname']);        
        $textmessage = $_POST['subject'];

        session_start();
        $user = $_SESSION['id'];

       
        //Creating Query
        $queryInsertUser = "INSERT INTO testimonial (firstname, lastname, email, testimonial, visible, user_id) VALUES ('$fname', '$lname', '$email', '$textmessage', default, '$user')";
        
        // Query Execution
    if (mysqli_query($conn, $queryInsertUser)) {
        //Redirecting User
        header('Location: /pawns_of_hawaii/index.php');
        //Throwing a text;
        echo "Message sent";
    }
}
?>