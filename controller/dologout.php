<?php
session_start(); //Starting to aloow procediments
session_unset(); //Unseting current values to avoid crash
session_destroy(); //Destroying current files
header('Location: ./index.php');
?>