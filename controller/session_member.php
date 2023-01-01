<?php
    if(!isset($_SESSION)){
    session_start();
    };
    
    if($_SESSION['previleges'] != 'member' || $_SESSION['previleges'] != 'admin'){
        die("Not Loged <p><a href='\index/pawns_of_hawaii/views/login.php'</a>Login</p>");
    }
    

?>