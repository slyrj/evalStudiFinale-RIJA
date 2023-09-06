<?php
session_start();
require '../config/database.php';

if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $roles = (int)$_POST['roles']; // Convertir en entier
    $createpassword = filter_input(INPUT_POST, 'createpassword', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_input(INPUT_POST, 'confirmpassword', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Valider les entrées
    if (!$name) {
        $_SESSION['signup'] = "Veuillez entrer votre nom";
    } elseif (!$email) {
        $_SESSION['signup'] = "Veuillez entrer une adresse email valide";
    } elseif (!in_array($roles, array(0, 1))) {
        $_SESSION['signup'] = "Veuillez sélectionner un rôle valide";
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Le mot de passe doit comporter au moins 8 caractères";
    } elseif ($createpassword !== $confirmpassword) {
        $_SESSION['signup'] = "Les mots de passe ne correspondent pas";
    } else {
        // Hachage du mot de passe
        $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

        // Vérifier si le nom ou l'email existe déjà dans la base de données
        $user_check_query = "SELECT * FROM users WHERE name=:name OR email=:email";
        $user_check_statement = $pdo->prepare($user_check_query);
        $user_check_statement->bindParam(':name', $name, PDO::PARAM_STR);
        $user_check_statement->bindParam(':email', $email, PDO::PARAM_STR);
        $user_check_statement->execute();

        if ($user_check_statement->rowCount() > 0) {
            $_SESSION['signup'] = "Le nom ou l'email existe déjà";
        } else {
            // Insérer le nouvel utilisateur dans la table
            $insert_user_query = "INSERT INTO users (name, email, roles, password) VALUES (:name, :email, :roles, :password)";
            $insert_user_statement = $pdo->prepare($insert_user_query);
            $insert_user_statement->bindParam(':name', $name, PDO::PARAM_STR);
            $insert_user_statement->bindParam(':email', $email, PDO::PARAM_STR);
            $insert_user_statement->bindParam(':roles', $roles, PDO::PARAM_INT);
            $insert_user_statement->bindParam(':password', $hashed_password, PDO::PARAM_STR);

            if ($insert_user_statement->execute()) {
                // Redirection vers la page de gestion des utilisateurs avec un message de succès
                $_SESSION['signup-success'] = "L'utilisateur a été enregistré avec succès.";
                header('location: ' . ROOT_URL . 'admin/manage-user.php');
                die();
            }
        }
    }
    // Si d'autres problèmes
    if (isset($_SESSION['signup'])) {
        $_SESSION['signup-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/add-user.php');
        die();
    }
} else {
    // Redirection vers la page d'ajout d'utilisateur si le formulaire n'a pas été soumis
    header('location: ' . ROOT_URL . 'admin/add-user.php');
    die();
}
