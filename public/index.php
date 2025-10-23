<?php
echo "<h1>Hola Mön </h1>";

$host = 'db';
$db   = 'demo';
$user = 'user';
$pass = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h2> Connexió correcta a la base de dades!</h2>";
} catch (PDOException $e) {
    echo "<h2> Error de connexió: " . $e->getMessage() . "</h2>";
}
