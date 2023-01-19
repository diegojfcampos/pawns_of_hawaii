<?php
$host = 'localhost';
$user = 'phpmyadmin';
$password = 'root';
$dbname = 'pawns_of_hawaii';

// Criar conexão
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar conexão
if (!$conn) {
    die("Connection DB error" . mysqli_connect_error());
}
?>