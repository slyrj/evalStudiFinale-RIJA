<?php
define('ROOT_URL', 'http://localhost:3000/');
define('DB_HOST', 'localhost');
define('DB_USER', 'root'); //mettez votre nom d'utilisater
define('DB_PASS', ''); //votre mot de passe
define('DB_NAME', 'garage');

try {
    // Connexion PDO
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
