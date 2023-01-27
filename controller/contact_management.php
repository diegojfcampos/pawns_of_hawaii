<?php
    
    //Verifying if privilegies is sat
    if(isset($_SESSION['privileges'])){        
        //Manneging content by user privileges
        switch ($_SESSION['privileges']) {
            
            case 'admin':
                echo '<h1 class="edit-titles"> Contact List</h1/>';
                include("../controller/contact_list.php");
                echo '<h1 class="edit-titles"> Contact Us</h1/>';
                include("../controller/contact_form.php");
                break;

            case 'member':   
                echo '<h1 class="edit-titles"> Contact Us</h1/>';             
                include("../controller/contact_form.php");
                break;

            default:
                break;
        }
    }else{
        echo '<h1 class="edit-titles"> Contact Us</h1/>';
        include("../controller/contact_form.php");
        
    }
?>