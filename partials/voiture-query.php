<?php

if (isset($_GET['id'])) {
    $carId = $_GET['id'];
} else {
    header('Location: voiture.php');
    exit();
}

if (!isset($carId)) {

    echo 'Error: carId variable is not set.';
    exit();
}
$carQuery = "SELECT * FROM cars WHERE id = $carId";
$carResult = mysqli_query($connection, $carQuery);
$car = mysqli_fetch_assoc($carResult);

//table car-features
$featuresQuery = "SELECT * FROM car_features WHERE cars_id = $carId";
$featuresResult = mysqli_query($connection, $featuresQuery);
$features = mysqli_fetch_all($featuresResult, MYSQLI_ASSOC);

//table car_images
$imagesQuery = "SELECT * FROM car_images WHERE cars_id = $carId";
$imagesResult = mysqli_query($connection, $imagesQuery);
$images = mysqli_fetch_all($imagesResult, MYSQLI_ASSOC);
