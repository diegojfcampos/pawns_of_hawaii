<?php

/*

Create the nave pane allowing all managemnts and upgrade pages

Members access and resources are built into the nav-bar page,
the functions will be displeyd there

*/


//Verifying if privilegies is sat
if (isset($_SESSION['privileges'])) {
    //Manneging content by user privileges
    switch ($_SESSION['privileges']) {

        case 'admin':
            echo <<<EOT
         
            <a href="/pawns_of_hawaii/controller/dologout.php">Logout</a>
            
            EOT;
            break;

        case 'member':
            echo <<<EOT
            
            <a href="/pawns_of_hawaii/controller/dologout.php">Logout</a>
            
            EOT;
            
            break;

        default:
            break;
    }
} else {
    echo <<<EOT
        
        <a href="/pawns_of_hawaii/views/login.php">Login</a>        
        <a href="/pawns_of_hawaii/views/signup.php">Sign-up</a>
    EOT;

}
?>