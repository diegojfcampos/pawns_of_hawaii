<?php
// Including DB Connection 

//Including DB Connection using require_once as better pratice.
require_once('../config/dbconnect.php');


//Debbuging - Verifying if the datas was sent corretly from the form

//Starting validations
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        /*I don't need verify datas ex: if(!empty($email) $$ !empty($password)) because the
        essentials to the database  and  to execute this system are required on the form 
        so will never be empty before posted*/

        //Instancing variables
        $email = trim($_POST['email']);
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);

        //Adding hash to encrypt passwords for best security practices.
        $passwordRegister = md5(trim($_POST['passwordRegister']));
        $passwordCheck = md5(trim($_POST['passwordCheck']));

        //Checking privileges
        if($_POST['privileges'] == "admin"){
            $admin = 1;
            $privileges = "admin";
        }else{
            $admin = 0;
            $privileges = "member";
        };

        //Verifying if user is alreayd registered in the DB
        $queryIsRegistered = "SELECT * FROM user where email='$email'" ;        
        $queryRegisterCheck = mysqli_query($conn, $queryIsRegistered);        
        var_dump($_POST);
        if (mysqli_num_rows($queryRegisterCheck) > 0) {
           
            echo "User already registerd";        

        /*Validating email format using filter => FILTER_VALIDATE_EMAIL)
        also checking if email's domain exists => !checkdnsrr(explode('@', $email)[1]
        
        I'm using or to allow test with no real e-mail

        */
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !checkdnsrr(explode('@', $email)[1], 'MX')) {
            echo "Invalid email";
        
            //Verifying check password   
        } else if ($passwordRegister != $passwordCheck) {
            echo "Passwords are diferents";   
             //Registering     
        } else {       
            // SQL Query
            $queryInsertUser = "INSERT INTO user (firstname, lastname, email, userpassword, useradmin) VALUES ('$fname', '$lname', '$email', '$passwordRegister', $admin)";
           
            // Query Execution
            if (mysqli_query($conn, $queryInsertUser)) {
                echo "User inserted";                
                //Creating Session
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['privileges'] = $privileges;   
                
             
                header('Location: ../views/index.php');

            //Throwing error           
            } else {
                echo "Error to insert user " . mysqli_error($conn);
            }
        }
    
    }

?>