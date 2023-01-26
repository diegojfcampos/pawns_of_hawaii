<?php
$host = 'pawnsofhawaii.mysql.database.azure.com';
$user = 'fznhknnefq';
$password = 'admin@123';
$dbname = 'pawnsofhawaii-database';




//Creating connection
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{/home/diego/Desktop/DigiCertGlobalRootCA.crt.pem}", NULL, NULL);
mysqli_real_connect($conn, "pawnsofhawaii.mysql.database.azure.com", "fznhknnefq", "{admin@123}", "{pawns_of_hawaii}", 3306, MYSQLI_CLIENT_SSL);
echo  "Dbconnected" ;
?>