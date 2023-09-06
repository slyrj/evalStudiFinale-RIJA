<?php
require '../config/database.php';
//check  formulaire si soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récup de l'ID du service à partir du formulaire
    $service_id = $_POST['id_service'];

    // Récup du nom de la prestation à partir du formulaire
    $nom_prestation = $_POST['nom_prestation'];

    // Validation des entrées
    if (empty($nom_prestation)) {
        header('Location: ' . ROOT_URL . 'admin/manage-service.php?error=empty');
        exit();
    }
    // Préparation de la requête d'insertion de la prestation dans la table "operations"
    $query = "INSERT INTO operations (service_id, name) VALUES (:service_id, :nom_prestation)";
    $insert_prest_stmt = $pdo->prepare($query);
    $insert_prest_stmt->bindParam(':service_id', $service_id, PDO::PARAM_INT);
    $insert_prest_stmt->bindParam(':nom_prestation', $nom_prestation, PDO::PARAM_STR);

    if ($insert_prest_stmt->execute()) {
        // Message de succès si l'insertion réussit, puis redirection
        $_SESSION['add-prestation-success'] = "La prestation a été ajoutée avec succès";
        header('location: ' . ROOT_URL . 'admin/manage-service.php');
        exit();
    } else {
        // Redirection en cas d'erreur lors de l'exécution de la requête
        header('Location: ' . ROOT_URL . 'admin/manage-service.php?error=database');
        exit();
    }
} else {
    // Redirection vers la page de gestion des services si le formulaire n'a pas été soumis
    header('Location: ' . ROOT_URL . 'admin/manage-service.php');
    exit();
}
