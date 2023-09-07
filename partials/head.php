<?php
$carDetailsTitle = "/voiture.php" . (isset($_GET['id']) ? "?id=" . $_GET['id'] : '');

$titles = array(
    '/index.php' => 'Accueil',

    '/services.php' => 'Nos Services',
    '/ventes.php' => 'Nos Voitures',
    '/contact.php' => 'Page de Contact',
    $carDetailsTitle => isset($_GET['id']) ? ('Détails de la voiture ' . $_GET['id']) : 'Détails de la voiture',
    '/signin.php' => 'Page d\'authentification',
    '/prestations.php' => 'Nos services',
    '/admin/index.php' => 'gérer les voitures',
    '/admin/add-car-images.php' => 'Ajouter une image',
    '/admi/add-car.php' => 'Ajouter une voiture',
    '/admin/add-feature.php' => 'Ajouter une optiion',
    '/add-service.php' => 'Ajouter un service',
    '/admin/add-user.php' => 'Ajouter un utilisateur',
    '/admin/edit-car.php' => 'Modifier la voiture',
    '/admin/edit-services.php' => 'Modifier le service',
    '/admin/edit-user.php' => 'Modifier l\'utilisateur',
    '/admin/manage-review.php' => 'gérer les témoignages',
    '/admin/manage-service.php' => 'gérer les services',
    '/admin/manage-statut.php' => 'gérer le statut',
    '/admin/manage-user.php' => 'gérer les utilisateurs',
    '/admin/messages.php' => 'Messages',
    '/admin/view-messages.php' => 'détails du messages',
);

$garageTitle = ' | Garage-V-Parrot';

$carDetailsDescription = "/voiture.php" . (isset($_GET['id']) ? "?id=" . $_GET['id'] : '');

$descriptions = array(
    '/index.php' => 'Bienvenue sur notre site Web ! Découvrez nos services automobiles de qualité, nos ventes de voitures d\'occasion et contactez-nous pour plus d\'informations.',

    '/services.php' => 'Découvrez nos services automobiles professionnels, de l\'entretien à la réparation. Notre équipe qualifiée est là pour répondre à tous vos besoins.',
    '/ventes.php' => 'Explorez notre sélection de voitures d\'occasion de qualité à vendre. Trouvez la voiture de vos rêves à des prix compétitifs.',
    '/contact.php' => 'Contactez-nous pour toutes vos questions et demandes d\'informations sur nos services et nos voitures à vendre. Nous sommes là pour vous aider.',
    $carDetailsDescription => isset($_GET['id']) ? ('Découvrez en détail la voiture d\'occasion que vous recherchez. Consultez les spécifications, l\'historique et les prix. de la voiture' . $_GET['id']) : 'Découvrez en détail la voiture d\'occasion que vous recherchez. Consultez les spécifications, l\'historique et les prix.',
);
$defaultDescription = 'Bienvenue sur notre site Web ! Découvrez nos services automobiles de qualité, nos ventes de voitures d\'occasion et contactez-nous pour plus d\'informations.';

$carDetailsKeyword = "/voiture.php" . (isset($_GET['id']) ? "?id=" . $_GET['id'] : '');

$keywords = array(
    '/index.php' => 'garage, automobiles, voitures d\'occasion, services, contact',
    '/services.php' => 'services automobiles, entretien, réparation, mécanique, carrosserie',
    '/ventes.php' => 'vente de voitures, voitures d\'occasion, achat de voitures',
    '/contact.php' => 'contact, informations, assistance, questions, formulaire de contact',
    $carDetailsKeyword => isset($_GET['id']) ? ('Détails de voiture, spécifications, historique, prix, voitures d\'occasion, voiture ' . $_GET['id']) : 'détails de voiture, spécifications, historique, prix, voitures d\'occasion',
);
$defaultKeywords = 'garage, automobiles, voitures d\'occasion, services, contact';
