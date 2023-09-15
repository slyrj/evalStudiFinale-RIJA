<?php
include 'partials/header.php';
$query = "SELECT * FROM cars";
$result = mysqli_query($connection, $query);

// Boucle à travers les résultats et ajouter chaque voiture au tableau $cars
while ($row = mysqli_fetch_assoc($result)) {
    $cars[] = $row;
}
?>
<div class="banner">
    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>Nos voitures d'occasions </span>
        <h3>Venez chercher votre bonheur</h3>
        <p>Parcourez notre sélection exclusive de véhicules d'occasion. La qualité et la performance sont à portée de
            main.</p>
    </div>
</div>
<form>
    <div class="filter" data-price="<?php echo $car['price']; ?>" data-mileage="<?php echo $car['mileage']; ?>" data-year="<?php echo $car['year']; ?>">
        <div class="content">
            <label for="price-range">Fourchette de prix :</label>
            <input class="custom-slider car" type="range" id="price-range" class="form-range" min="1000" max="500000" step="500">
            <span id="price-value"></span>
        </div>
        <div class="content">
            <label for="mileage-range">Nombre de kilomètres :</label>
            <input class="custom-slider" type="range" id="mileage-range" class="form-range" min="0" max="150000" step="5000">
            <span id="mileage-value"></span>
        </div>
        <div class="content">
            <label for="year-select">Année de mise en circulation :</label>
            <select id="year-select" class="form-select">
                <option value="0">Toutes</option>
                <option value="2020">2020 et plus</option>
                <option value="2015">2015 et plus</option>
                <option value="2010">2010 et plus</option>
                <option value="2005">2005 et plus</option>
            </select>
        </div>
    </div>
</form>
<section class="sale" id="sale">
    <div class="box-container">
        <?php foreach ($cars as $car) : ?>
            <div class="box" data-aos="fade-up" data-aos-delay="150" data-price="<?php echo $car['price']; ?>" data-mileage="<?php echo $car['mileage']; ?>" data-year="<?php echo $car['year']; ?>">
                <div class="price-badge">
                    <p class="car-price"><?php echo $car['price']; ?> €</p>
                </div>
                <div class="image">
                    <img src="<?php echo ROOT_URL . '/admin/assets/images/' . $car['image']; ?>" alt="Image de voiture<?php echo $service['nom']; ?>">
                </div>
                <div class="content">
                    <h3><?php echo $car['name']; ?></h3>
                    <p class="car-year">Année : <?php echo $car['year']; ?></p>
                    <p class="car-mileage">Kilométrage : <?php echo $car['mileage']; ?> km</p>
                    <a href="<?php echo ROOT_URL . '/voiture.php?id=' . $car['id']; ?>">Voir plus <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php include 'partials/footer.php'; ?>