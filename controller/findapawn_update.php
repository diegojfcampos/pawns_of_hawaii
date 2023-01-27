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

        $petid = $_POST['petid'];
        $code =  htmlspecialchars(trim($_POST['code']));
        $name =  htmlspecialchars(trim($_POST['name']));        
        $age =  htmlspecialchars($_POST['age']);
        $breed =  htmlspecialchars($_POST['breed']);
        $city =  htmlspecialchars($_POST['city']);
        $description =  htmlspecialchars($_POST['description']);       

        
        //Creating Query
        $queryUpdateUser = "UPDATE pet SET code = '$code', name = '$name', age = '$age', breed = '$breed', city = '$city', description = '$description' WHERE petid = $petid";
        
        // Query Execution
        if (mysqli_query($conn, $queryUpdateUser)) {
            // query was successful
            header('Location: ../views/findapawn.php');
            echo "Message sent";
        } else {
            // query failed
            echo "Error: " . mysqli_error($conn);
        }
        
}
?>