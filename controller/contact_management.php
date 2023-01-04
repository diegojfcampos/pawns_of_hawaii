<?php
    
    //Verifying if privilegies is sat
    if(isset($_SESSION['privileges'])){        
        //Manneging content by user privileges
        switch ($_SESSION['privileges']) {
            
            case 'admin':
                include("contact_list.php");
                include("contact_form.php");
                break;

            case 'member':                
                include("contact_form.php");
                break;

            default:
                break;
        }
    }else{
        include("contact_form.php");
        
    }
?>