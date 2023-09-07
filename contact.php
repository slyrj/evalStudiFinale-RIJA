<?php
include 'partials/header.php';
?>
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
            <textarea placeholder="Tapez votre message ici..." class="form-control" rows="9" name="message" required></textarea>
        </div>
        </div>
        <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="Envoyer" class="btn">
    </form>
</section>

<?php
include 'partials/header.php';
?>