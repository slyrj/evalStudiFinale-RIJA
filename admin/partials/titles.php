<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$titleMappings = array(
  '/about.php' => 'À Propos de',
  '/signin.php' => 'Page d\'authentification',
  '/prestations.php' => 'Nos services',
  '/admin/' => 'gérer les voitures',
  '/admin/add-car.php' => (strpos($currentUrl, '/admin/add-car.php') === true) ? 'Ajouter une voiture' : '',
  '/admin/edit-car.php' => (strpos($currentUrl, '/admin/edit-car.php') !== false && isset($_GET['id'])) ? ('Modifier une voiture ' . $_GET['id']) : '',
  '/admin/add-feature.php' => (strpos($currentUrl, '/admin/add-feature.php') !== false && isset($_GET['car_id'])) ? ('Ajouter une option pour la voiture ' . $_GET['car_id']) : '',
  '/admin/add-car-images.php' => (strpos($currentUrl, '/admin/add-car-images.php') !== false && isset($_GET['id'])) ? ('Ajouter et gérer les images pour la voiture ' . $_GET['id']) : '',
  '/admin/view-message.php' => (strpos($currentUrl, '/admin/view-message.php') !== false && isset($_GET['id'])) ? ('Détails du message ' . $_GET['id']) : '',
  '/admin/edit-user.php' => (strpos($currentUrl, '/admin/edit-user.php') !== false && isset($_GET['id'])) ? ('Modifier utilisateur ' . $_GET['id']) : '',
  '/admin/edit-services.php' => (strpos($currentUrl, '/admin/edit-services.php') !== false && isset($_GET['id'])) ? ('Modifier service ' . $_GET['id']) : '',
  '/admin/manage-status.php' => (strpos($currentUrl, '/admin/manage-status.php') !== false && isset($_GET['id'])) ? ('Gérer les horaires pour l\'utilisateur ' . $_GET['id']) : '',

);
