<?php
session_start();
require '../config/database.php';
// check de  l'utilisateur  si connecté 
$is_authenticated = true;

// Redirection vers page de connexion Si l'utilisateur n'est pas connecté
if (!$is_authenticated) {
    header("Location: " . ROOT_URL . "connexion.php");
    exit();
}

//checker si formulaire d'ajout de voiture a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération données formulaire
    $name = $_POST['name'];
    $price = $_POST['price'];
    $year = $_POST['year'];
    $mileage = $_POST['mileage'];
    $user_id = $_SESSION['user_id'];

    // Upload de l'image
    $image_name = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_destination = '../assets/images/' . $image_name;

    if (move_uploaded_file($image_tmp_name, $image_destination)) {
        // Insertion des données dans la base de données en PDO
        $insert_query = "INSERT INTO cars (name, price, year, mileage, users_id, image) VALUES (:name, :price, :year, :mileage, :user_id, :image_name)";
        $stmt = $pdo->prepare($insert_query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':mileage', $mileage);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':image_name', $image_name);

        if ($stmt->execute()) {
            $_SESSION['add-car-success'] = "La voiture a été ajoutée avec succès.";
            header('location: ' . ROOT_URL . 'admin/'); // Redirection vers la page de gestion des voitures avec un message de succès
            exit();
        } else {
            $_SESSION['add-car-error'] = "Erreur lors de l'ajout de la voiture : " . $stmt->errorInfo()[2];
            header('location: ' . ROOT_URL . 'admin/'); // Redirection vers la page de gestion des voitures avec un message d'erreur
            exit();
        }
    } else {
        $_SESSION['add-car-error'] = "Erreur lors de l'upload de l'image.";
        header('location: ' . ROOT_URL . 'admin/'); 
        exit();
    }
}
