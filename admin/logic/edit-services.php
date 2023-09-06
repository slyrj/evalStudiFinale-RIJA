<?php
session_start();
require '../config/database.php';

if (isset($_POST['submit'])) {
    // Récupération des nouvelles données du formulaire
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $image = $_FILES['image'];

    //check si  il y a une nouvelle image 
    if ($image['name']) {
        // Check format 
        $allowed_extensions = ['png', 'jpg', 'jpeg'];
        $image_extension = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
        if (in_array($image_extension, $allowed_extensions)) {
            // Attribution nom unique pour l'image
            $image_name = uniqid() . '.' . $image_extension;

            //Envoi de l'image téléchargée vers son dossier
            $image_destination = '../assets/images/' . $image_name;
            if (move_uploaded_file($image['tmp_name'], $image_destination)) {
                // Mise à jour du service dans la base de données
                $update_query = "UPDATE services SET name=?, image=? WHERE id=?";
                $update_statement = $pdo->prepare($update_query);
                $update_result = $update_statement->execute([$name, $image_name, $id]);

                if ($update_result) {
                    $_SESSION['edit-service-success'] = "Le service '$name' a été mis à jour avec succès";
                } else {
                    $_SESSION['edit-service'] = "Erreur lors de la mise à jour du service";
                }
            } else {
                $_SESSION['edit-service'] = "Erreur lors du téléchargement de l'image";
            }
        } else {
            $_SESSION['edit-service'] = "Le format de l'image n'est pas valide";
        }
    } else {
        //si pas de nouvelle image
        $update_query = "UPDATE services SET name=? WHERE id=?";
        $update_statement = $pdo->prepare($update_query);
        $update_result = $update_statement->execute([$name, $id]);

        if ($update_result) {
            $_SESSION['edit-service-success'] = "Le service a été mis à jour avec succès";
        } else {
            $_SESSION['edit-service'] = "Erreur lors de la mise à jour du service";
        }
    }
}

// Redirection vers la page de gestion des services
header('Location: ' . ROOT_URL . 'admin/manage-service.php');
exit();
