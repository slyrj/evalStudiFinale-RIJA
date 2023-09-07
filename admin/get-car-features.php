<?php
$featuresQuery = "SELECT * FROM car_features WHERE cars_id = :car_id";
$featuresStatement = $pdo->prepare($featuresQuery);
$featuresStatement->bindParam(':car_id', $carId);
$featuresStatement->execute();
$features = $featuresStatement->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- Boucle pour afficher les options de la voiture -->
<ul style="list-style-type: none; padding-left: 0;">
    <?php foreach ($features as $feature) : ?>
    <li><span style="font-weight: bold;"><?php echo $feature['name']; ?>:</span> <span
            style="font-style: italic;"><?php echo $feature['value']; ?></span></li>
    <?php endforeach; ?>
</ul>

<span style="font-style: italic;">