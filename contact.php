<?php
include 'partials/header.php';
?>
<div class="banner">
    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>Nous contacter</span>
        <h3>Pour tous renseignements</h3>
        <p>N'hésitez pas à nous contacter pour toute question ou demande d'informations supplémentaires. Merci de nous
            faire confiance pour tous vos besoins automobiles.</p>
        <?php

        if (isset($_SESSION['contact-error'])) :
            echo '<p class="text-center text-muted msg-alert"><font color="red">' .   $_SESSION['contact-error'] . '</font></p>';
            unset($_SESSION['contact-error']);
            echo '<hr>';
        endif;
        ?>
    </div>
</div>
<section class="car-form" id="car-form">
    <form action="<?= ROOT_URL . '/logic/contact.php' ?>" method="POST">
        <input type="hidden" name="cars_id" value="<?php echo $carId; ?>">
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <input type="text" placeholder="Nom" name="name" required>
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
        <input type="hidden" name="csrf_token"
            value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">
        <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="Envoyer" class="btn">
    </form>
</section>
<?php include 'partials/footer.php'; ?>