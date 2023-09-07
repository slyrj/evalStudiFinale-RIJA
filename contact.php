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
            <textarea placeholder="Tapez votre message ici..." class="form-control" rows="9" name="message" required></textarea>
        </div>
        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">
        <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="Envoyer" class="btn">
    </form>
</section>
<?php include 'partials/footer.php'; ?>
<!-- 
     <input type="hidden" name="csrf_token"
            value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">

            J'ai ajouté <input type="hidden"> dans le code HTML pour créer un champ de formulaire caché. Cela signifie que les utilisateurs ne verront pas ce champ sur la page.

J'ai attribué le nom "csrf_token" à ce champ de formulaire en utilisant l'attribut name. Ce nom sera utilisé pour identifier la valeur du jeton CSRF lorsque le formulaire sera soumis.

La valeur du champ de formulaire est définie avec value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>". afin d'inclure ce jeton  dans le champ caché. La valeur de ce dernier est extraite de la session de l'utilisateur ($_SESSION['csrf_token']), puis elle est échappée avec htmlspecialchars pour éviter les attaques XSS, ce qui est important pour la sécurité du site.( valeur encodée en UTF-8)


Ce code crée un champ de formulaire HTML de type hidden (caché) qui sert à inclure un jeton CSRF (Cross-Site Request Forgery) dans un formulaire. Le jeton CSRF est une mesure de sécurité pour protéger le site contre les attaques.

<input type="hidden">: C'est la balise HTML pour créer un champ de formulaire caché, ce qui signifie que les utilisateurs ne le voient pas sur la page.

name="csrf_token": C'est le nom de ce champ de formulaire, qui sera utilisé pour identifier la valeur du jeton CSRF lorsque le formulaire est soumis.

value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>": C'est la valeur du jeton CSRF qui est placée dans le champ caché. Il est extrait de la session de l'utilisateur ($_SESSION['csrf_token']), échappé avec htmlspecialchars pour éviter les attaques XSS, et encodé en UTF-8.

En résumé, ce champ de formulaire caché contient un jeton CSRF sécurisé qui sera soumis avec le formulaire. Lorsque le formulaire est traité côté serveur, le jeton CSRF est vérifié pour s'assurer que la demande provient d'une source légitime et n'est pas une attaque CSRF. -->