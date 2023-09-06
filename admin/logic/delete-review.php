<?php
session_start();
require '../config/database.php';

if (isset($_GET['id'])) {
    $reviewId = $_GET['id'];

    // Suppression du témoignage de la table "reviews"
    $query = "DELETE FROM reviews WHERE id = :reviewId";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':reviewId', $reviewId, PDO::PARAM_INT);

    if ($statement->execute()) {
        $_SESSION['delete-review-success'] = 'Témoignage supprimé avec succès.';
        header('Location: ' . ROOT_URL . 'admin/manage-reviews.php');
        exit();
    } else {
        $_SESSION['delete-review-error'] = 'Une erreur s\'est produite lors de la suppression du témoignage.';
        header('Location: ' . ROOT_URL . 'admin/manage-reviews.php');
        exit();
    }
} else {
    header('Location: ' . ROOT_URL . 'admin/manage-reviews.php');
    exit();
}
