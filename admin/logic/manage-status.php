<?php
session_start();
include '../config/database.php';

// checker user si admin
if (!isset($_SESSION['user_is_admin']) || !$_SESSION['user_is_admin']) {
    // Redirection vers une page d'erreur ou de refus d'accès
    header('Location: ' . ROOT_URL . 'admin/unauthorized.php');
    exit();
}

// Récup de l''ID de l'administrateur connecté
$admin_id = $_SESSION['user_id'];

// Récup de  l'ID du garage associé à l'administrateur connecté
$garage_id_query = "SELECT id FROM garages WHERE users_id = ?";
$stmt_garage_id = $pdo->prepare($garage_id_query);
$stmt_garage_id->execute([$admin_id]);
$garage_id_row = $stmt_garage_id->fetch(PDO::FETCH_ASSOC);
$garage_id = $garage_id_row['id'];

// Récup du statut du garage depuis le formulaire
$garage_status = $_POST['garage_status'];

// Mise à jour du statut du garage dans la base de données
$update_status_query = "UPDATE garages SET is_opened = ? WHERE id = ?";
$stmt_update_status = $pdo->prepare($update_status_query);
if ($stmt_update_status->execute([$garage_status, $garage_id])) {
    $_SESSION['garage-status'] = "Statut du garage mis à jour avec succès.";
} else {
    // En cas d'erreur lors de la mise à jour
    $_SESSION['garage-status'] = "Erreur lors de la mise à jour du statut du garage : " . implode(' ', $stmt_update_status->errorInfo());
}
header('Location: ' . ROOT_URL . 'admin/manage-status.php?id=' . $garage_id);
exit();
