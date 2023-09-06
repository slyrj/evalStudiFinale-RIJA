<?php
session_start();
require '../config/database.php';

if (isset($_POST['submit'])) {
    $car_id = $_POST['car_id'];
    $image = $_FILES['image'];

    // Valider l'entrée de l'ID de la voiture
    if (!$car_id) {
        $_SESSION['add-car-images-error'] = "Veuillez sélectionner une voiture.";
    } elseif (!$image['name']) {
        $_SESSION["add-car-images-error"] = "Veuillez ajouter une image.";
    } else {
        // Obtenir le nom de l'image et son emplacement temporaire
        $image_name = $image['name'];
        $image_tmp_name = $image['tmp_name'];
        // Chemin de destination  de l'image
        $image_destination_path = '../assets/gallery/' . $image_name;

        // Vérification du bon format de l'image 
        $allowed_files = ['png', 'jpg', 'jpeg'];
        $extension = pathinfo($image_name, PATHINFO_EXTENSION);

        if (!in_array($extension, $allowed_files)) {
            $_SESSION['add-car-images-error'] = "Le format de l'image n'est pas valide. Les formats autorisés sont : png, jpg, jpeg";
        } elseif ($image['size'] > 1000000) {
            $_SESSION['add-car-images-error'] = "La taille de l'image ne doit pas d�passer 1 MB";
        } else {
            if (move_uploaded_file($image_tmp_name, $image_destination_path)) {
                $insert_image_query = "INSERT INTO car_images (cars_id, image_url) VALUES (:car_id, :image_name)";
                $insert_image_statement = $pdo->prepare($insert_image_query);
                $insert_image_statement->bindParam(':car_id', $car_id, PDO::PARAM_INT);
                $insert_image_statement->bindParam(':image_name', $image_name, PDO::PARAM_STR);

                if ($insert_image_statement->execute()) {
                    $_SESSION['add-car-images-success'] = "L'image de la voiture a été ajoutée avec succés.";
                } else {
                    $_SESSION['add-car-images-error'] = "Erreur lors de l'ajout de l'image dans la base de donn�es.";
                }
            } else {
                $_SESSION['add-car-images-error'] = "Erreur lors du t�l�chargement de l'image.";
            }
        }
    }
}
header("Location:" . ROOT_URL . "admin/add-car-images.php?id=$car_id");
exit();
