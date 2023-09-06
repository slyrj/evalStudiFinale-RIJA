<?php
session_start();
include '../config/database.php';

// Check  'utilisateur si  adminin 
if (!isset($_SESSION['user_is_admin']) || !$_SESSION['user_is_admin']) {
    // Redirection vers une page d'erreur ou de refus d'accès
    header('Location: ' . ROOT_URL . 'admin/unauthorized.php');
    exit();
}
$garage_id = $_POST['garage_id'];
// Connexion à la base de données 
$days = array(
    1 => "Lundi",
    2 => "Mardi",
    3 => "Mercredi",
    4 => "Jeudi",
    5 => "Vendredi",
    6 => "Samedi",
);
foreach ($days as $day => $dayName) {
    if (isset($_POST['selected_days']) && in_array($day, $_POST['selected_days'])) {
        $opening_time = $_POST["opening_time_$day"];
        $closing_time = $_POST["closing_time_$day"];

        if (strtotime($opening_time) >= strtotime($closing_time)) {
            $_SESSION['garage-status-error'] = "Erreur : L'horaire d'ouverture ne peut pas être supérieur ou égal à l'horaire de fermeture pour le jour $dayName.";
            header('Location: ' . ROOT_URL . 'admin/manage-status.php');
            exit();
        }

        $update_query = "UPDATE opening_hours SET opening_time=:opening_time, closing_time=:closing_time WHERE day=:dayName";
        $update_statement = $pdo->prepare($update_query);
        $update_statement->bindParam(':opening_time', $opening_time);
        $update_statement->bindParam(':closing_time', $closing_time);
        $update_statement->bindParam(':dayName', $dayName);
        $update_statement->execute();
    }
}

$_SESSION['garage-status'] = "Horaires d'ouverture mis à jour avec succès.";
header('Location: ' . ROOT_URL . 'admin/manage-status.php?id=1');
exit();
