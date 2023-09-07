<?php
require __DIR__ . '/../config/database.php';
session_start();
// Génération d'un jeton CSRF
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Génère un jeton aléatoire
}
include 'partials/head.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= isset($descriptions[$_SERVER['REQUEST_URI']]) ? $descriptions[$_SERVER['REQUEST_URI']] : $defaultDescription ?>">
    <meta name="keywords" content="<?= isset($keywords[$_SERVER['REQUEST_URI']]) ? $keywords[$_SERVER['REQUEST_URI']] : $defaultKeywords ?>">
    <title>
        <?= isset($titles[$_SERVER['REQUEST_URI']]) ? $titles[$_SERVER['REQUEST_URI']] . $garageTitle : 'Garage-V-Parrot' . $garageTitle ?>
    </title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= ROOT_URL . '/assets/css/style.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <img src="images/logo.png
        " alt="" width="150" height="50"></a>
        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="300" href="index.php">Accueil</a>
            <a data-aos="zoom-in-left" data-aos-delay="450" href="services.php">Nos Services </a>
            <a data-aos="zoom-in-left" data-aos-delay="600" href="ventes.php">Véhicules Occasions</a>
            <a data-aos="zoom-in-left" data-aos-delay="750" href="contact.php">Contact</a>
            <!-- <a data-aos="fade-up" data-aos-delay="600" href="login.html" class="btn-nav">S'identifier</a> -->
        </nav>
    </header>