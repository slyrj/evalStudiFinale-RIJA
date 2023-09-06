<?php
session_start();
require '../config/database.php';

if (isset($_POST['submit'])) {
    $car_id = $_POST['car_id'];
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $value = filter_var($_POST['value'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Validation des entrées
    if (!$name) {
        $_SESSION['add-feature'] = "Veuillez entrer le nom de l'option";
    } elseif (!$value) {
        $_SESSION['add-feature'] = "Veuillez ajouter une valeur";
    } else {
        $insertFeatureQuery = "INSERT INTO car_features (cars_id, name, value) VALUES (:car_id, :name, :value)";
        $insertFeatureStatement = $pdo->prepare($insertFeatureQuery);
        $insertFeatureStatement->bindParam(':car_id', $car_id);
        $insertFeatureStatement->bindParam(':name', $name);
        $insertFeatureStatement->bindParam(':value', $value);

        if ($insertFeatureStatement->execute()) {
            $_SESSION['add-feature-success'] = "L'option a été ajoutée avec succès";
            header('location: ' . ROOT_URL . 'admin');
            die();
        } else {
            $_SESSION['add-feature'] = "Erreur lors de l'ajout de l'option dans la base de données : " . implode(', ', $insertFeatureStatement->errorInfo());
        }
    }
}

header('location: ' . ROOT_URL . 'admin/add-feature.php?car_id=' . $car_id);
die();
