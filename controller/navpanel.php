<?php

/*
Create the nave pane allowing all managemnts and upgrade pages
Members access and resources are built into the nav-bar page,
the functions will be displeyd there
*/

session_start();
//Verifying if privilegies is sat
if (isset($_SESSION['privileges'])) {  

    echo `<a href="../controller/dologout.php">Logout</a>`;

} else {
    echo '<a href="../views/login.php">Login</a>';
    echo '<a href="../views/signup.php">Sign-up</a>';

}






?>