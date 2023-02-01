<?php
    
        //Verifying if privilegies is sat
    if (isset($_SESSION['privileges'])) {
        //Manneging content by user privileges
        switch ($_SESSION['privileges']) {

            case 'admin':
                include("../index_form_edit.php");                
                break;

            default:
                break;
        }
    }
?>