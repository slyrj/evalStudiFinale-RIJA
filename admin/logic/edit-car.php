<?php
session_start();
require '../config/database.php';


if (isset($_POST['submit'])) {
    // Récupéation des nouvelles données du formulaire
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
    $year = filter_var($_POST['year'], FILTER_SANITIZE_NUMBER_INT);
    $mileage = filter_var($_POST['mileage'], FILTER_SANITIZE_NUMBER_INT);
    $image = $_FILES['image'];

    // check si  il y a une nouvelle image 
    if ($image['name']) {
        // Vérification du format
        $allowed_extensions = ['png', 'jpg', 'jpeg'];
        $image_extension = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
        if (in_array($image_extension, $allowed_extensions)) {
            // Attribution nom unique pour l'image
            $image_name = uniqid() . '.' . $image_extension;

            // Envoi de l'image téléchargée vers son dossier
            $image_destination = '../assets/images/' . $image_name;
            if (move_uploaded_file($image['tmp_name'], $image_destination)) {
                // Mise à jour de la voiture dans la base de données 
                $update_query = "UPDATE cars SET name=:name, price=:price, year=:year, mileage=:mileage, image=:image WHERE id=:id";
                $update_statement = $pdo->prepare($update_query);
                $update_statement->bindValue(':name', $name, PDO::PARAM_STR);
                $update_statement->bindValue(':price', $price, PDO::PARAM_INT);
                $update_statement->bindValue(':year', $year, PDO::PARAM_INT);
                $update_statement->bindValue(':mileage', $mileage, PDO::PARAM_INT);
                $update_statement->bindValue(':image', $image_name, PDO::PARAM_STR);
                $update_statement->bindValue(':id', $id, PDO::PARAM_INT);

                if ($update_statement->execute()) {
                    $_SESSION['edit-car-success'] = "La voiture '$name' a été mise à jour avec succès";
                } else {
                    $_SESSION['edit-car'] = "Erreur lors de la mise à jour de la voiture : " . implode(" ", $update_statement->errorInfo());
                }
            } else {
                $_SESSION['edit-car'] = "Erreur lors du téléchargement de l'image";
            }
        } else {
            $_SESSION['edit-car'] = "Le format de l'image n'est pas valide";
        }
    } else {
        // conservation de l'image existante ( Si aucune nouvelle image téléchargée)
        $update_query = "UPDATE cars SET name=:name, price=:price, year=:year, mileage=:mileage WHERE id=:id";
        $update_statement = $pdo->prepare($update_query);
        $update_statement->bindValue(':name', $name, PDO::PARAM_STR);
        $update_statement->bindValue(':price', $price, PDO::PARAM_INT);
        $update_statement->bindValue(':year', $year, PDO::PARAM_INT);
        $update_statement->bindValue(':mileage', $mileage, PDO::PARAM_INT);
        $update_statement->bindValue(':id', $id, PDO::PARAM_INT);

        if ($update_statement->execute()) {
            $_SESSION['edit-car-success'] = "La voiture a été mise à jour avec succès";
        } else {
            $_SESSION['edit-car'] = "Erreur lors de la mise à jour de la voiture : " . implode(" ", $update_statement->errorInfo());
        }
    }
}
// Redirection vers la page de gestion des voitures
header('location: ' . ROOT_URL . 'admin/');
exit();
