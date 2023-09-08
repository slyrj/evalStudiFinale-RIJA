<?php ?>
<section class="footer">
    <div class="box-container">
        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <h3>Statut du jour</h3>
            <?php include 'partials/status-query.php';
            ?>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3>Horaire hebdomadaire</h3>
            <?php include 'partials/time-query.php';
            ?>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>Liens du site</h3>
            <a href="#index.php" class="links"> <i class="fas fa-arrow-right"></i> Accueil </a>
            <a href="services.php" class="links"> <i class="fas fa-arrow-right"></i> Nos services</a>
            <a href="ventes.php" class="links"> <i class="fas fa-arrow-right"></i> Voitures d'occasions</a>
            <a href="contact.php" class="links"> <i class="fas fa-arrow-right"></i> Nous contacter</a>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="logo"> <i class=""></i>Garage-V-Parrot </a>
            <p> <i class="fas fa-map"></i> 3 rue de la saucisse, 31123 - Toulouse</p>
            <p> <i class="fas fa-phone"></i> 05 23 45 67 89 </p>
            <p> <i class="fas fa-envelope"></i> gparrot@gmail.com </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
    </div>
</section>
<div class="credit">
    <p>&copy; 2023 Garage V-Parrot. Tous droits réservés. | <a href="/privacy-policy.php">Politique de
            Confidentialité</a>
    </p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="/assets/js/script.js"></script>

<script>
    AOS.init({
        duration: 800,
        offset: 100,
    });
</script>

</body>

</html>