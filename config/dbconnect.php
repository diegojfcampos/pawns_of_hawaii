<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pawns_of_hawaii';

// Criar conexão
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar conexão
if (!$conn) {
    die("Connection DB error" . mysqli_connect_error());
}
?>