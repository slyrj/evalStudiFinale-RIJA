<?php
session_start();
require '../config/database.php';

if (isset($_POST['submit'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $content = filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $rating = $_POST['rating'];
    $users_id = 1; // ID de l'utilisateur par défaut (propriétaire du garage)
    $is_published = 0; // Nouveau témoignage non publié par défaut
    // Insértion du témoignage dans la base de données
    $insert_review_query = "INSERT INTO reviews (users_id, name, content, rating, is_published) 
                            VALUES ('$users_id', '$name', '$content', '$rating', '$is_published')";

    if (mysqli_query($connection, $insert_review_query)) {
        $_SESSION['review-success'] = "Votre témoignage a été enregistré avec succès et sera examiner par notre équipe.";
    } else {
        $_SESSION['review-error'] = "Erreur lors de l'enregistrement du témoignage : " . mysqli_error($connection);
    }
}

header('location: ' . ROOT_URL . '/index.php');
exit();
