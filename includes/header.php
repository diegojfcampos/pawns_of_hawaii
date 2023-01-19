<?php
    session_start();
    define('PROJECT_ROOT', dirname(__FILE__));
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="social project, pets, pawns, adoption">
  <meta name="description" content="Providing pets and families happier">
  <link rel="stylesheet" type="text/css" href="/pawns_of_hawaii/css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  
  <script src="/pawns_of_hawaii/js/index.js" defer></script>
  <title>Pawns Hawaii</title>
</head>

<body>
  <header>  

    <section class="nav-session">      
   
    <?php 
        switch ($_SERVER['PHP_SELF']) {
            case '/pawns_of_hawaii/index.php':                  
                require PROJECT_ROOT . '/controller/navpanel.php';
                break;            
            default:
            include("../controller/navpanel.php");
                break;
        } 
    ?> 
    </section>

    <section class="logo-header">
      <div>
		  
	  <?php 
		 
        switch ($_SERVER['PHP_SELF']) {
            case '/paws_of_hawaii/index.php':                  
               echo'<img src="assets/img/logo.png" height="300px" width="350px">';
                break;            
            default:
				echo '<img src="../assets/img/logo.png" height="300px" width="350px">';
				break;
        } 
      ?> 
        
      </div>
      <div>
        <p id="titlePrahse">Providing pets and families happier!</p>
      </div>

    </section>
    
    <section class="nav-bar" id="nav-bar">

    <?php 
        switch ($_SERVER['PHP_SELF']) {
            case '/pawns_of_hawaii/index.php':                  
                include("./controller/navbar.php");
                break;            
            default:
            include("../controller/navbar.php");
                break;
        } 
    ?>
    </section>

  </header>


