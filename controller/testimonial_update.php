<?php
// Including DB Connection 

//Including DB Connection using require_once as better pratice.
require_once('../config/dbconnect.php');

//Debbuging - Verifying if the datas was sent corretly from the form

echo '<pre>'; print_r($_POST); echo '</pre>';
var_dump($_POST);
print_r($_POST['testimonialid']);


    //Starting validations
    if (isset($_POST['selected_testimonials'])) {

        /*Reciving array with Testimonials to set visible*/   
           
        $selected_rows = $_POST['selected_testimonials'];

        foreach ($selected_rows as $testimonialid) {

            /*This query will change the value  of visible column
            if already display will set it of and if not siplaying will diaplas      
            */
            $query = "UPDATE testimonial SET visible = NOT visible WHERE testimonialid = $testimonialid";            
            $result = mysqli_query($conn, $query);
        }            
        
        header('Location: ../views/testimonial.php');
        
        echo "Alterations saved";
       
}


?>