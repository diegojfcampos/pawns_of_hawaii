<?php

echo '<pre>'; print_r($_SERVER); echo '</pre>';

switch ($_SERVER['PHP_SELF']) {
  case '/pawns_of_hawaii/views/login.php':
   
    break;
  case '/pawns_of_hawaii/views/signup.php':
    // código para a página about.php
    break;
  case '/pawns_of_hawaii/views/contact.php':
    
    break;
  default:
    break;
}
?>

