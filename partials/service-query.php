<?php
// Récupération des services et leurs prestations
$query = "SELECT * FROM services";
$result = mysqli_query($connection, $query);

// Tableau pour stocker les données des services
$services = array();

//récupération des  données des services & prestations
while ($row = mysqli_fetch_assoc($result)) {
    $service_id = $row['id'];
    $service_name = $row['name'];
    $service_image = $row['image'];

    // Récup des prestations du service
    $query_prestations = "SELECT * FROM operations WHERE service_id=$service_id";
    $result_prestations = mysqli_query($connection, $query_prestations);

    // Tableau pour stocker les données des prestations du service
    $prestations = array();

    // Récup des données des prestations
    while ($row_prestations = mysqli_fetch_assoc($result_prestations)) {
        $prestation_name = $row_prestations['name'];
        $prestations[] = array('nom' => $prestation_name);
    }

    // Ajout des données du service et de ses prestations au tableau des services
    $services[] = array('nom' => $service_name, 'image' => $service_image, 'prestations' => $prestations);
}
