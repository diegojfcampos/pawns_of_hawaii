<?php
    
        //Verifying if privilegies is sat
    if (isset($_SESSION['privileges'])) {
        //Manneging content by user privileges
        switch ($_SESSION['privileges']) {

            case 'admin':
               
                include("findapawn_table_edit.php");
                              
                break;

            default:
                break;
        }
    }
   
?>