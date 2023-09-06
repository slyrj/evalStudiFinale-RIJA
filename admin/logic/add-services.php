<?php
session_start();

require '../config/database.php';

$is_authenticated = true;

if (!$is_authenticated) {
    header("Location: signin.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $image = $_FILES['image'];

    $image_name = $image['name'];
    $image_tmp_name = $image['tmp_name'];
    $image_destination = '../assets/images/' . $image_name;

    if (move_uploaded_file($image_tmp_name, $image_destination)) {
        $insert_query = "INSERT INTO services (name, image) VALUES (:name, :image_name)";
        $stmt = $pdo->prepare($insert_query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image_name', $image_name);

        if ($stmt->execute()) {
            $_SESSION['add-service-success'] = "Le service a été ajouté avec succés.";
            header('Location: ' . ROOT_URL . 'admin/manage-service.php'); // Redirection vers la page de gestion des services avec un message de succés
            exit();
        } else {
            $_SESSION['add-service-error'] = "Erreur lors de l'ajout du service : " . $stmt->errorInfo()[2];
            header('Location: ' . ROOT_URL . 'admin/add-service.php');  // Redirection vers la page de gestion des services avec un message d'erreur
            exit();
        }
    } else {
        $_SESSION['add-service-error'] = "Erreur lors de l'upload de l'image.";
        header('Location: ' . ROOT_URL . 'admin/add-service.php'); // Redirection vers la page de gestion des services avec un message d'erreur
        exit();
    }
}
