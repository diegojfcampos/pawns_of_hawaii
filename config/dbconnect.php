<?php
$host = 'localhost';
$user = 'admin';
$password = 'admin123';
$dbname = 'pawns_of_hawaii';

// Criar conexão
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar conexão
if (!$conn) {
    die("Connection DB error" . mysqli_connect_error());
}
echo "DB Connected";
?>