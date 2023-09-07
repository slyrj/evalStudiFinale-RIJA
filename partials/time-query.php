<?php
$days = array(
    "Lundi" => 1,
    "Mardi" => 2,
    "Mercredi" => 3,
    "Jeudi" => 4,
    "Vendredi" => 5,
    "Samedi" => 6,
);

$horaire_query = "SELECT day, opening_time, closing_time FROM opening_hours";
$horaire_result = mysqli_query($connection, $horaire_query);

if ($horaire_result && mysqli_num_rows($horaire_result) > 0) {
    while ($row = mysqli_fetch_assoc($horaire_result)) {
        $day = $row['day'];
        $opening_time = date("H:i", strtotime($row['opening_time']));
        $closing_time = date("H:i", strtotime($row['closing_time']));
        if (isset($days[$day])) {
            echo "<p><i class='fa-regular fa-clock'></i>{$day} : $opening_time - $closing_time </p>";
        }
    }
} else {
    echo "<p>Les horaires d'ouverture ne sont pas disponibles.</p>";
}
