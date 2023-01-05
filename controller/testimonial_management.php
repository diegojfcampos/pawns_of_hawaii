<?php
    
    //Verifying if privilegies is sat
    if(isset($_SESSION['privileges'])){        
        //Manneging content by user privileges
        switch ($_SESSION['privileges']) {

        case 'admin':
                echo '<h1 class="edit-titles"> Testimonial Display Edit</h1/>';
                include("testimonial_list_edit.php");
                echo '<h1 class="edit-titles"> Testimonials List</h1/>';
                include("testimonial_list.php");    
                echo '<h1 class="edit-titles">Send Testimonial</h1/>';            
                include("testimonial_form.php");
                break;

            case 'member':
                echo '<h1 class="edit-titles"> Testimonials List</h1/>';
                include("testimonial_list.php");
                echo '<h1 class="edit-titles">Send Testimonial</h1/>';    
                include("testimonial_form.php");
                break;

            default:
                break;
        }
    }else{
        echo '<h1 class="edit-titles"> Testimonials List</h1/>';
        include("testimonial_list.php");
        
    }
?>