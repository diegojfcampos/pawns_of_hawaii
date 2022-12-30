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
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $passwordRegister = trim($_POST['passwordRegister']);
        $passwordCheck = trim($_POST['passwordCheck']);


        //Verifying if user is alreayd registered
        $query = "SELECT * FROM users where email=$email ";        
        $queryResult = mysqli_query($conn, $query);        
       
        if (mysqli_num_rows($queryResult) > 0) {
           
            echo "User already registerd";        

            /*Validating email format using filter => FILTER_VALIDATE_EMAIL)
            also checking if email exists => !checkdnsrr(explode('@', $email)[1]*/
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !checkdnsrr(explode('@', $email)[1], 'MX')) {
            echo "Invalid email";
            
        } else if ($passwordRegister != $passwordCheck) {
            echo "Passwords are diferents";
        
        } else {
            //Registering

            // SQL Query
            $query = "INSERT INTO users (firstname, lastname, email, userpassword, useradmin) VALUES ('$fname', '$lname', '$email', '$passwordRegister', default)";

            // Query Execution
            if (mysqli_query($conn, $query)) {
                echo "User inserted";
                $_SESSION["email"] = $email;
                header('Location: /pawns_of_hawaii/views/index_edit.php');
            } else {
                echo "Error to insert user " . mysqli_error($conn);
            }
        }
    
    }

?>