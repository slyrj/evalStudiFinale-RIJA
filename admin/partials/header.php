<?php
session_start();
//include __DIR__ . '/../config/constants.php';
include __DIR__ . '/../config/database.php';

include __DIR__ . '/../partials/titles.php';

if (!isset($_SESSION['user_is_admin'])) {
    header('location: ' . ROOT_URL . 'connexion.php');
}

$currentUrl = $_SERVER['REQUEST_URI'];
$garageTitle = ' | Garage-V-Parrot';
$pageTitle = $titleMappings[$currentUrl] ?? 'Titre par défaut';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page d'administration du site Garage-V-Parrot">
    <title>
        <?= isset($titleMappings[$currentUrl]) ? $titleMappings[$currentUrl] : 'Page d\'administration' ?><?= $garageTitle ?>
    </title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="shortcut icon" href="assets/images/gt_favicon.png">
    <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= ROOT_URL . 'admin/assets/css/main.css' ?>">
    <link rel="stylesheet" href="<?= ROOT_URL . 'admin/assets/css/bootstrap.min.css' ?>">
</head>

<body class="home">
    <div class="navbar navbar-inverse navbar-fixed-top headroom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="<?= ROOT_URL . 'images/logo.png' ?>" class="logo"
                        alt="image-logo" width="150" height="50"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="nav-item"><a class="nav-link active" href="<?= ROOT_URL ?>index.php" target="_blank">Voir
                            le site</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= ROOT_URL . "admin/" ?>">Gérer les voitures</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= ROOT_URL . "admin/messages.php" ?>">Lire les
                            messages</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= ROOT_URL . 'admin/manage-reviews.php' ?>">Gérer
                            les témoignages</a></li>
                    <?php if ($_SESSION['user_is_admin'] == 1) : ?>
                    <?php include 'admin-menu.php'; ?>
                    <?php endif; ?>
                    <li class="nav-item"><a class="nav-link exit" href="<?= ROOT_URL . "connexion.php" ?>">Se
                            déconnecter</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="jumbotron top-space">
        <ol class="breadcrumb">
            <?php include 'partials/breadcrumb.php'; ?>
        </ol>
    </div>
    <header id="head">
        <div class="container">
            <div class="row">
                <?php
                if (isset($_SESSION['user_name']) && isset($_SESSION['user_email'])) {
                    echo '<h1 class="lead">Bienvenue ' . ucfirst($_SESSION['user_name']) . ' !</h1>';
                    echo '<p class="tagline" style="font-size: 30px;">Vous êtes connecté avec le mail ' . $_SESSION['user_email'] . '.</p>';
                }
                ?>
            </div>
        </div>
    </header>