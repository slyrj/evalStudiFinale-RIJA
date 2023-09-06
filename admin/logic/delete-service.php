<?php
session_start();
require '../config/database.php';

// Vérification de l'ID 
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // Suppression de toutes les opérations liées au service
    $query_delete_operations = "DELETE FROM operations WHERE service_id = ?";
    $delete_operations_statement = $pdo->prepare($query_delete_operations);
    $delete_operations_result = $delete_operations_statement->execute([$id]);

    if (!$delete_operations_result) {
        //Si suppression des opérations qui échoue
        $error_message = "La suppression des opérations liées au service a échoué.";
        $_SESSION['delete-service-error'] = $error_message;
        header('Location: ' . ROOT_URL . 'admin/manage-service.php?delete-message=' . urlencode($error_message));
        exit;
    }

    // Suppression du service 
    $query_delete_service = "DELETE FROM services WHERE id=?";
    $delete_service_statement = $pdo->prepare($query_delete_service);
    $delete_service_result = $delete_service_statement->execute([$id]);

    if ($delete_service_result) {
        // Suppression réussie
        $success_message = "Le service a été supprimé avec succès.";
        $_SESSION['delete-service-success'] = $success_message;
    } else {
        $error_message = "La suppression du service a échoué.";
        $_SESSION['delete-service-error'] = $error_message;
    }
    header('Location: ' . ROOT_URL . 'admin/manage-service.php');
    exit;
}
