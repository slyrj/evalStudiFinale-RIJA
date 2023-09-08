<?php
include 'partials/header.php';
include 'partials/voiture-query.php';
?>
<div class="banner">
    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>cette voiture vous intéresse</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum praesentium amet quibusdam quam
            officia suscipit odio.</p>
        <?php
        if (isset($_SESSION['success'])) :
            echo '<p class="text-center text-muted msg-alert"><font color="green">' .   $_SESSION['success']  . '</font></p>';
            unset($_SESSION['success']);
            echo '<hr>';
        elseif (isset($_SESSION['error'])) :
            echo '<p class="text-center text-muted msg-alert"><font color="red">' .   $_SESSION['error'] . '</font></p>';
            unset($_SESSION['error']);
            echo '<hr>';
        endif;
        ?>
    </div>
</div>
<section class="about" id="about">
    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
        <img src="<?php echo ROOT_URL . '/admin/assets/images/' . $car['image']; ?>"
            alt="<?php echo $car['name']; ?>"></img>
    </div>
    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span><?php echo $car['name']; ?></span>
        <p>Prix : <?php echo $car['price']; ?> €</p>
        <p>Année : <?php echo $car['year']; ?></p>
        <p>Kilométrage : <?php echo $car['mileage']; ?> km</p>
        <h4>Détails et options</h4>
        <?php foreach ($features as $feature) : ?>
        <p><strong><?php echo $feature['name']; ?> :</strong> <?php echo $feature['value']; ?></p>
        <?php endforeach; ?>
    </div>
</section>
<section class="gallery" id="gallery">
    <div class="heading">
        <span>Les images associées</span>
    </div>
    <div class="box-container">
        <?php foreach ($images as $index => $image) : ?>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="<?php echo ROOT_URL . '/admin/assets/gallery/' . $image['image_url']; ?>"
                alt="Image <?php echo $image['id']; ?>">
        </div>
        <?php endforeach; ?>

    </div>
</section>
<div class="banner">
    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>cette voiture vous intéresse</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum praesentium amet quibusdam quam
            officia suscipit odio.</p>
    </div>
</div>
<section class="car-form" id="car-form">
    <form action="<?= ROOT_URL . '/logic/car-contact.php' ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="object" value="<?php echo $car['name']; ?>">
        <input type="hidden" name="car_id" value="<?php echo $carId; ?>">
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <input type="text" placeholder="nom" name="name" required>
        </div>
        <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
            <input type="email" placeholder="Email" name="email" required>
        </div>
        <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
            <input type="text" placeholder="Téléphone" name="phone_number" required>
            <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
                <textarea placeholder="Tapez votre message ici..." class="form-control" rows="9" name="message"
                    required></textarea>
            </div>
        </div>
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
        <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="Envoyer" class="btn">
    </form>
</section>
<?php include 'partials/footer.php';