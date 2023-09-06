<?php
require '../config/database.php';

if (isset($_GET['id'])) {
    $reviewId = $_GET['id'];

    // Mise à jour du témoignage en changeant la valeur de la colonne is_published
    $query = "UPDATE reviews SET is_published = 1 WHERE id = :reviewId";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':reviewId', $reviewId, PDO::PARAM_INT);

    if ($statement->execute()) {
        header('Location: ' . ROOT_URL . 'admin/manage-reviews.php?success=true');
        exit();
    } else {
        header('Location: ' . ROOT_URL . 'admin/manage-reviews.php?error=database');
        exit();
    }
} else {
    header('Location: ' . ROOT_URL . 'admin/manage-reviews.php');
    exit();
}
