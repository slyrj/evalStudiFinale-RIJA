<?php
session_start();

require '../config/database.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    try {
        $pdo->beginTransaction();

        // Suppression des options liées à la voiture
        $deleteFeatureQuery = "DELETE FROM car_features WHERE cars_id = :id";
        $deleteFeatureStatement = $pdo->prepare($deleteFeatureQuery);
        $deleteFeatureStatement->bindParam(':id', $id);
        $deleteFeatureStatement->execute();

        // Suppression des images liées à la voiture
        $deleteCarImageQuery = "DELETE FROM car_images WHERE cars_id = :id";
        $deleteCarImageStatement = $pdo->prepare($deleteCarImageQuery);
        $deleteCarImageStatement->bindParam(':id', $id);
        $deleteCarImageStatement->execute();
        //  Suppression des messages liés à la voiture
        $deleteContactFormsQuery = "DELETE FROM contact_forms WHERE cars_id = :id";
        $deleteContactFormsStatement = $pdo->prepare($deleteContactFormsQuery);
        $deleteContactFormsStatement->bindParam(':id', $id);
        $deleteContactFormsStatement->execute();

        // Suppression de la voiture 
        $deleteCarQuery = "DELETE FROM cars WHERE id = :id";
        $deleteCarStatement = $pdo->prepare($deleteCarQuery);
        $deleteCarStatement->bindParam(':id', $id);
        $deleteCarStatement->execute();

        $pdo->commit();
        $_SESSION['delete-car-success'] = "La voiture a été supprimée avec succès.";
    } catch (PDOException $e) {
        $pdo->rollBack();
        $_SESSION['delete-car-error'] = "Erreur lors de la suppression de la voiture : " . $e->getMessage();
    }

    header('location: ' . ROOT_URL . 'admin/');
    die();
}
