<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= ROOT_URL . '/admin/assets/css/style.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <img src="images/logo.png
        " alt="" width="150" height="50"></a>
        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="300" href="index.html">Accueil</a>
            <a data-aos="zoom-in-left" data-aos-delay="450" href="services.html">Nos Préstations </a>
            <a data-aos="zoom-in-left" data-aos-delay="600" href="ventes.html">Véhicules Occasuions</a>
            <a data-aos="zoom-in-left" data-aos-delay="750" href="contact.html">Contact</a>
            <!-- <a data-aos="fade-up" data-aos-delay="600" href="login.html" class="btn-nav">S'identifier</a> -->
        </nav>
    </header>