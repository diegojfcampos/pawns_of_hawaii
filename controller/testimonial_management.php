<?php
    
    //Verifying if privilegies is sat
    if(isset($_SESSION['privileges'])){        
        //Manneging content by user privileges
        switch ($_SESSION['privileges']) {
            
            case 'admin':
                include("testimonial_list.php");
                include("testimonial_form.php");
                break;

            case 'member':
                include("testimonial_list.php");
                include("testimonial_form.php");
                break;

            default:
                break;
        }
    }else{
        include("testimonial_list.php");
        
    }
?>