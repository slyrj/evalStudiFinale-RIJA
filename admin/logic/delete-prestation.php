<?php
session_start();
require '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_service']) && isset($_POST['operations']) && is_array($_POST['operations'])) {
        $id_service = filter_var($_POST['id_service'], FILTER_SANITIZE_NUMBER_INT);
        $prestations_to_delete = $_POST['operations'];

        // Préparation de la liste des noms de prestations 
        $placeholders = rtrim(str_repeat('?, ', count($prestations_to_delete)), ', ');

        // Préparation la requête pour supprimer les prestations
        $query_delete_prestations = "DELETE FROM operations WHERE name IN ($placeholders) AND service_id = ?";

        // Création du tableau des valeurs à associer aux placeholders
        $values = array_merge($prestations_to_delete, array($id_service));

        // Préparation + exécution de la  requête
        $stmt = $pdo->prepare($query_delete_prestations);
        if ($stmt->execute($values)) {
            $_SESSION['delete-prestations-success'] = "Les prestations ont été supprimées avec succès.";
        } else {
            $_SESSION['delete-prestations-error'] = "La suppression des prestations a échoué.";
        }
    } else {
        $_SESSION['delete-prestations-error'] = "Aucune prestation sélectionnée pour la suppression.";
    }
}
header('Location: ' . ROOT_URL . 'admin/manage-service.php');
die();
