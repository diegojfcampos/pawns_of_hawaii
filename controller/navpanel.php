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
         
            <a href="../controller/dologout.php">Logout</a>
            
            EOT;
            break;

        case 'member':
            echo <<<EOT
            
            <a href="../controller/dologout.php">Logout</a>
            
            EOT;
            
            break;

        default:
            break;
    }
} else {
   
	 switch ($_SERVER['PHP_SELF']) {
			 
           case '/paws_of_hawaii/index.php':                  
                echo '<a href="./views/login.php">Login</a>';        
        		echo '<a href="./views/signup.php">Sign-up</a>';
                break;            
            default:
                echo '<a href="../views/login.php">Login</a>';        
        		echo '<a href="../views/signup.php">Sign-up</a>';
                break;
        } 
        

    	

}
?>