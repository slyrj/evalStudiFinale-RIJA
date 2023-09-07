<?php
session_start();
require '../config/database.php';
if (isset($_GET['id'])) {
    $imageId = $_GET['id'];

    // Récup des informations de l'image à supprimer
    $imageQuery = "SELECT * FROM car_images WHERE id = :imageId";
    $imageStatement = $pdo->prepare($imageQuery);
    $imageStatement->bindParam(':imageId', $imageId, PDO::PARAM_INT);
    $imageStatement->execute();
    $image = $imageStatement->fetch(PDO::FETCH_ASSOC);

    if ($image) {
        // Supprimer l'image du dossier
        $imagePath = '../assets/gallery/' . $image['image_url'];
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        // Supprimer l'entrée de la base de données
        $deleteQuery = "DELETE FROM car_images WHERE id = :imageId";
        $deleteStatement = $pdo->prepare($deleteQuery);
        $deleteStatement->bindParam(':imageId', $imageId, PDO::PARAM_INT);
        if ($deleteStatement->execute()) {
            $_SESSION['delete-image-success'] = "L'image a été supprimée avec succès.";
        } else {
            $_SESSION['delete-image-error'] = "Erreur lors de la suppression de l'image.";
        }
    } else {
        $_SESSION['delete-image-error'] = "L'image n'existe pas.";
    }
} else {
    $_SESSION['delete-image-error'] = "ID d'image non fourni.";
}
header('Location: ' . ROOT_URL . 'admin/add-car-images.php?id=' . $image['cars_id']);
exit();
