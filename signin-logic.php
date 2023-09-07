<?php
session_start();
require 'admin/config/database.php';
if (isset($_POST['submit'])) {
    // Vérification du jeton CSRF
    if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        // Jeton CSRF invalide
        $_SESSION['signin-error'] = "Erreur de sécurité CSRF. Veuillez réessayer.";
        header('location: ' . ROOT_URL . '/connexion.php');
        exit();
    }
    // Récupération des données du formulaire
    $password = filter_var($_POST['password']);

    // Validation des entrées
    if (!$email) {
        $_SESSION['signin'] = "Veuillez entrer votre Email";
    } elseif (!$password) {
        $_SESSION['signin'] = "Veuillez entrer votre mot de passe";
    } else {
        // récupération de l'utilisateur de la base de données
        $fetch_user_query = "SELECT * FROM users WHERE email = :email";
        $fetch_user_statement = $pdo->prepare($fetch_user_query);
        $fetch_user_statement->bindParam(':email', $email);
        $fetch_user_statement->execute();

        if ($fetch_user_statement->rowCount() == 1) {
            // Conversion du résultat en tableau associatif
            $user_record = $fetch_user_statement->fetch(PDO::FETCH_ASSOC);
            $db_password = $user_record['password'];

            // Comparaison du mot de passe avec la base de données
            if (password_verify($password, $db_password)) {
                // Redirection vers la session d'entrée
                $_SESSION['user_id'] = $user_record['id'];
                // $_SESSION['user_name'] = $user_record['name'];
                $_SESSION['user_name'] = htmlspecialchars($user_record['name'], ENT_QUOTES, 'UTF-8'); // Échappe le nom
                $_SESSION['user_email'] = $user_record['email'];
                $_SESSION['user_is_admin'] = intval($user_record['roles']) === 1;

                if ($_SESSION['user_is_admin']) {
                    $_SESSION['admin_id'] = $user_record['id'];
                }
                // Vérification du rôle de l'utilisateur
                elseif (intval($user_record['roles']) === 1) {
                    $_SESSION['user_is_admin'] = true;
                }
                // Attribution du nom d'utilisateur dans la session
                $_SESSION['user_name'] = $user_record['name'];
                $_SESSION['user_email'] = $user_record['email'];

                header('location: admin/');
                exit();
            } else {
                $_SESSION['signin'] = "Mot de passe incorrect";
            }
        } else {
            $_SESSION['signin'] = "L'utilisateur n'existe pas";
        }
    }
    // Si d'autres problèmes
    if (isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location: connexion.php');
        exit();
    }
} else {
    header('location: connexion.php');
    exit();
}
