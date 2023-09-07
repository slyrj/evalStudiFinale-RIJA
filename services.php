<?php
include 'partials/header.php';
include 'partials/service-query.php';
?>
<div class="banner">
    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>Nos préstations</span>
        <h3>Des services de qualités </h3>
        <p>Forts d'une passion pour l'automobile et d'une expertise inégalée, nous nous efforçons de garantir votre
            satisfaction à chaque visite. Votre véhicule est entre de bonnes mains chez Garage-V-Parrot..</p>
    </div>
</div>
<section class="services" id="services">
    <div class="heading">
        <span>Nos services</span>
    </div>
    <div class="box-container">
        <?php foreach ($services as $service) : ?>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <img class="serv" src="admin/assets/images/<?php echo $service['image']; ?>" alt="Image <?php echo $service['nom']; ?>">
                <h3><?php echo $service['nom']; ?> :</h3>
                <?php foreach ($service['prestations'] as $prestation) : ?>
                    <p><?php echo $prestation['nom']; ?></p>
                <?php endforeach; ?>
                <a href="contact.php" class="btn">Faire un devis</a>
            </div>
        <?php endforeach; ?>
</section>
<?php include 'partials/footer.php'; ?>