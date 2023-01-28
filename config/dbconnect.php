<?php
$host = 'pawnsofhawaii.mysql.database.azure.com';
$user = 'fznhknnefq';
$password = 'admin@123';
$dbname = 'pawnsofhawaii-database';

echo  "Trying to connect";
//Creating connection
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "config/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $host, $user, $password, $dbname, 3306, MYSQLI_CLIENT_SSL);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo  "Dbconnected" ;
?>