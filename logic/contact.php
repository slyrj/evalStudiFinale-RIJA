<?php
require '../config/database.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Vérification du jeton CSRF
    if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        // Jeton CSRF invalide
        $_SESSION['contact-error'] = "Erreur de sécurité CSRF. Veuillez réessayer.";
        header('location: ' . ROOT_URL . '/contact.php');
        exit();
    }
    if (isset($_POST['name'], $_POST['email'], $_POST['phone_number'], $_POST['message'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $phone_number = filter_var($_POST['phone_number'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $object = isset($_POST['object']) ? $_POST['object'] : '';

        if (empty($name) || empty($email) || empty($phone_number) || empty($message)) {
            $_SESSION['contact-error'] = "Veuillez remplir tous les champs du formulaire.";
        } else {

            $carId = isset($_POST['car_id']) ? $_POST['car_id'] : null;
            // Insérer le message dans la base de données
            $insert_query = "INSERT INTO contact_forms (name, email, phone_number, object, content, created_at)
                            VALUES (?, ?, ?, ?, ?, NOW())";

            $stmt = mysqli_prepare($connection, $insert_query);
            mysqli_stmt_bind_param($stmt, 'sssss', $name, $email, $phone_number, $object, $message);

            if (mysqli_stmt_execute($stmt)) {
                $_SESSION['contact-success'] = "Votre message a été envoyé avec succès.";
                header('Location: ' .  ROOT_URL . '/contact.php');
                die();
            } else {
                $_SESSION['contact-error'] = "Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.";
            }
            mysqli_stmt_close($stmt);
        }
    } else {
        $_SESSION['contact-error'] = "Veuillez remplir tous les champs du formulaire.";
    }
}
