<?php
session_start();
session_unset();
session_destroy();
header('Location: /pawns_of_hawaii/index.php');
?>