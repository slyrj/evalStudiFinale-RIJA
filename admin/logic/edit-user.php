<?php
session_start();
require '../config/database.php';

if (isset($_POST['submit'])) {
    // Récupération des nouvelles données
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $roles = filter_var($_POST['roles'], FILTER_SANITIZE_NUMBER_INT);

    // Vérification des données valides
    if (!$name || !$email || !in_array($roles, array(0, 1))) {
        $_SESSION['edit-user'] = "Données invalides";
    } else {
        // Mise à jour de l'utilisateur
        $update_query = "UPDATE users SET name=:name, email=:email, roles=:roles WHERE id=:id";
        $update_statement = $pdo->prepare($update_query);
        $update_statement->bindParam(':name', $name, PDO::PARAM_STR);
        $update_statement->bindParam(':email', $email, PDO::PARAM_STR);
        $update_statement->bindParam(':roles', $roles, PDO::PARAM_INT);
        $update_statement->bindParam(':id', $id, PDO::PARAM_INT);

        if ($update_statement->execute()) {
            $_SESSION['edit-user-success'] = "L'utilisateur $name a été modifié avec succès";
        } else {
            $_SESSION['edit-user'] = "Mise à jour échouée";
        }
    }
}
header('location: ' . ROOT_URL . 'admin/manage-user.php');
die();
