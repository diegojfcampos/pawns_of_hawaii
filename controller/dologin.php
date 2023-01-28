<?php
    
    // Including DB Connection 

    //Including DB Connection using require_once as better pratice.
    require_once('../config/dbconnect.php');
    

    //Checking login requirement
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        //Instancing, hashing and sanitazing variables;
        $email = trim($_POST["email"]);
        //Hashing password to check with password storade in DB
        $password = md5(trim($_POST["password"]));

        //Query to check user
        $queryCheckUser = "SELECT * FROM user where email='$email' and userpassword='$password'";
        $resultCheckUser = mysqli_query($conn, $queryCheckUser);
        //Checking if user in database
        if (mysqli_num_rows($resultCheckUser) == 1){
            //Getting user data
            $user = mysqli_fetch_assoc($resultCheckUser);   
            
            //Selecting data that can be useful
            $userid = $user['userid'];
            $firstname = $user['firstname'];
            $lastname = $user['lastname'];
            $email = $user['email'];
            $admin = $user['useradmin']; 
              
           
            
            //Starting Session                
            session_start();
            $hashed_value = hash("sha256", $value);
            setcookie("hashed_value", $hashed_value, time() + (12 * 60 * 60), "/");
            
            //Instancing user data into Super Global Session
            
            $_SESSION['id'] = $user["userid"];            
            $_SESSION['fname'] = $user["firstname"];
            $_SESSION['lname'] = $user["lastname"];
            $_SESSION['email'] = $user["email"];
            $_SESSION['admin'] = $user["useradmin"];

            //Redirecting user depending his admin privileges
            if($user["useradmin"] == '1'){
                $_SESSION['privileges'] = "admin";
                    
                header('Location: ../views/index.php');
                
            }else{
                $_SESSION['privileges'] = "member";
                
                header('Location: ../views/index.php');
            }
        } else {
            echo "User not found";
        }
    }
?>