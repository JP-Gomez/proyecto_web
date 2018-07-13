<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'prueba3';
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Fallo de coneccion: ' . $e->getMessage());
}
?>