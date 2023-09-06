<?php
session_start();
require '../config/database.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    try {
        // Récupération des données de l'utilisateur à supprimer
        $select_user_query = "SELECT * FROM users WHERE id = :id";
        $select_user_statement = $pdo->prepare($select_user_query);
        $select_user_statement->bindValue(':id', $id, PDO::PARAM_INT);
        $select_user_statement->execute();
        $user = $select_user_statement->fetch(PDO::FETCH_ASSOC);

        // Suppression de l'utilisateur 
        $delete_user_query = "DELETE FROM users WHERE id = :id";
        $delete_user_statement = $pdo->prepare($delete_user_query);
        $delete_user_statement->bindValue(':id', $id, PDO::PARAM_INT);
        $delete_user_statement->execute();

        $delete_user_message = "L'utilisateur '{$user['name']}' a été supprimé avec succès.";
        $_SESSION['delete-user-success'] = $delete_user_message;
    } catch (PDOException $e) {
        // Exception et affichage  message d'erreur personnalisé
        $error_message = "Impossible de supprimer l'utilisateur '{$user['name']}'.";
        $_SESSION['delete-user'] = $error_message;

        //  Juste une  autre façon(via paramètre GET) de redirection vers la page de gestion des utilisateurs avec le message d'erreur
        header('location: ' . ROOT_URL . 'admin/manage-user.php?delete-message=' . urlencode($error_message));
        die();
    }
}

header('location: ' . ROOT_URL . 'admin/manage-user.php');
die();
