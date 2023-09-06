<?php
session_start();
require '../config/database.php';

if (isset($_GET['id'])) {
    $messageId = $_GET['id'];

    // Suppression du message de la table "contact_forms"
    $deleteQuery = "DELETE FROM contact_forms WHERE id = :messageId";

    $deleteStatement = $pdo->prepare($deleteQuery);
    $deleteStatement->bindParam(':messageId', $messageId, PDO::PARAM_INT);

    if ($deleteStatement->execute()) {

        $_SESSION['delete-message-success'] = 'Message supprimé avec succès.';
        header('Location: ' . ROOT_URL . 'admin/messages.php');
        exit();
    } else {
        $_SESSION['delete-message-error'] = 'Une erreur s\'est produite lors de la suppression du message.';
        header('Location: ' . ROOT_URL . 'admin/messages.php');
        exit();
    }
} else {
    header('Location: ' . ROOT_URL . 'admin/messages.php');
    exit();
}
