<?php


require 'admin/config/database.php';
session_start();
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Génère un jeton aléatoire
}

$email = $_SESSION['signup-data']['email'] ?? null;
$password = $_SESSION['signup-data']['password'] ?? null;

include 'partials/head.php';
// include 'admin/functions.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>connexion </title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <link rel="stylesheet" href="/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="<?= ROOT_URL . '/admin/assets/css/bootstrap-theme.css' ?>" media="screen">
    <link rel="stylesheet" href="<?= ROOT_URL . '/admin/assets/css/main.css' ?>">
    <link rel="stylesheet" href="<?= ROOT_URL . 'assets/css/styles.css' ?>">
</head>

<body class="home">
    <header id="head" class="secondary"></header>
    <div class="container">
        <div class="row">
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Bienvenue sur votre page employé</h1>
                </header>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Se connecter à votre compte</h3>
                            <p class="text-center text-muted">Identifiez-vous avec votre adresse email </p>
                            <p class="text-center text-muted">En cas d'oubli de mot de passe, veuillez contacter la
                                direction.</p>
                            <?php
                            if (isset($_SESSION['signin'])) : ?>
                                <p class="text-center text-muted msg-alert">
                                    <font color="red">
                                        <?= $_SESSION['signin'];
                                        unset($_SESSION['signin']); ?> </font>
                                </p>
                                <hr>
                            <?php

                            elseif (isset($_SESSION['signin-error'])) :
                                echo '<p class="text-center text-muted msg-alert"><font color="red">' .   $_SESSION['signin-error'] . '</font></p>';
                                unset($_SESSION['signin-error']);
                                echo '<hr>'; ?>
                            <?php endif ?>
                            <form action="signin-logic.php" method="POST">
                                <div class="top-margin">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="text" value="<?= $email ?>" name="email" class="form-control">
                                </div>
                                <div class="top-margin">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input type="password" value="<?= $password ?>" name="password" class="form-control">
                                </div>
                                <hr>
                                <div class="row">
                                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-action" name="submit" type="submit">S'identifier</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <?php
    include 'admin/partials/footer.php'; ?>