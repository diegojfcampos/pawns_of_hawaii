<?php
    session_start();
    echo $_SESSION['privileges']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="social project, pets, pawns, adoption">
  <meta name="description" content="Providing pets and families happier">
  <link rel="stylesheet" type="text/css" href="/pawns_of_hawaii/css/style.css">  
  <script src="/pawns_of_hawaii/js/index.js" defer></script>
  <title>Pawns Hawaii</title>
</head>

<body>
  <header>  

    <section class="nav-session">
      <?php include("/opt/lampp/htdocs/pawns_of_hawaii/controller/navpanel.php");?>
    </section>

    <section class="logo-header">
      <div>
        <img src="/pawns_of_hawaii/assets/img/logo.png" height="300px" width="350px">
      </div>
      <div>
        <p id="titlePrahse">Providing pets and families happier!</p>
      </div>

    </section>
    
    <section class="nav-bar" id="nav-bar">
      <?php 
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
      include("/opt/lampp/htdocs/pawns_of_hawaii/controller/navbar.php");?>
    </section>

  </header>


