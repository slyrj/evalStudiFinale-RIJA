<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de contact | garage-V-Parrot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
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
    <div class="banner">
        <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
            <span>Nous contacter</span>
            <h3>Pour tous renseignements</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum praesentium amet quibusdam quam
                officia suscipit odio.</p>
        </div>
    </div>
    <section class="book-form" id="book-form">
        <form action="">
            <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
                <input type="text" placeholder="nom" value="">
            </div>
            <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
                <input type="text" placeholder="Téléphone" name="phone_number" required>
            </div>
            <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
                <input type="object" placeholder="Objet" name="object">
            </div>
            <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
                <textarea placeholder="Tapez votre message ici..." class="form-control" rows="9" name="message"
                    required></textarea>
            </div>
            </div>
            <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="Envoyer" class="btn">
        </form>
    </section>

    <?php
include 'partials/header.php';
?>