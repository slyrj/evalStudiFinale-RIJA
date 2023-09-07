<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css>">
    <title>Document</title>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top headroom">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Garage Parrot"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="nav-link active"><a href="<?= ROOT_URL ?>index.php" target="_blank">Voir le site</a></li>
                <li><a class="nav-link" href="<?= ROOT_URL . "admin/" ?>">Gérer les voitures</a></li>
                <li><a class="nav-link" href="<?= ROOT_URL . "admin/messages.php" ?>">Lire les messages</a></li>
                <li><a class="nav-link" href="<?= ROOT_URL . 'admin/manage-reviews.php' ?>">Gérer les
                        témoignages</a></li>
                <?php if ($_SESSION['user_is_admin'] == 1) : ?>
                    <?php include 'admin-menu.php'; ?>
                <?php endif; ?>
                <li><a class="nav-link" class="exit" href="<?= ROOT_URL . "connexion.php" ?>">Se déconnecter</a>
                </li>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Right Sidebar</li>
        </ol>