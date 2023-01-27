<?php
$host = 'pawnsofhawaii.mysql.database.azure.com';
$user = 'fznhknnefq';
$password = 'admin@123';
$dbname = 'pawnsofhawaii-database';


//Creating connection
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "/home/diego/Desktop/paws_of_hawaii/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $host, $user, $password, $dbname, 3306, MYSQLI_CLIENT_SSL);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo  "Dbconnected" ;
?>