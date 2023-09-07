<?php
include 'partials/header.php';
?>
<section class="about" id="about">
    <div class="image-container" data-aos="fade-right" data-aos-delay="300">
        <img src="images/gallery-img-2.jpg" muted autoplay loop class="video"></img>
    </div>
    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>Ferrari</span>
        <p>15000 €</p>
        <p>Année : 2017</p>
        <p>Kilométrage : 50000 km</p>
        <h4>Détails et options</h4>
        <p> Sièges chauffants : Avant et arrière</p>
        <p>Caméra de recul : oui</p>
        <p>Système de navigation GPS : Intégré</p>

</section>
<section class="gallery" id="gallery">
    <div class="heading">
        <span>Les images associées</span>
    </div>

    <div class="box-container">
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/gallery-img-4.jpg" alt="">
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/gallery-img-5.jpg" alt="">
        </div>
    </div>
</section>
<div class="banner">
    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>cette voiture vous intéresse</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum praesentium amet quibusdam quam officia suscipit odio.</p>
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
            <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
                <input type="object" placeholder="Objet" name="object">
            </div>
            <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
                <textarea placeholder="Tapez votre message ici..." class="form-control" rows="9" name="message" required></textarea>
            </div>
        </div>
        <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="Envoyer" class="btn">
    </form>
</section>

<?php
include 'partials/header.php';
?>