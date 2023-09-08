<?php
include 'partials/header.php';
$query = "SELECT * FROM cars";
$result = $pdo->query($query);

$cars = array();

if ($result) {
    $cars = $result->fetchAll(PDO::FETCH_ASSOC);
} else {
    $error_message = "Erreur lors de la récupération des voitures : " . $pdo->errorInfo()[2];
}
$is_authenticated = true;
if (!$is_authenticated) {
    header("Location: connexion.php");
    exit();
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Gestionohioi des voitures</h2>
            <div class="car-manage">
                <!-- Bouton "Ajouter une voiture" -->
                <a href="<?= ROOT_URL . 'admin/add-car.php?user_id=' . $_SESSION['user_id']; ?>"
                    class="btn btn-primary">Ajouter une voiture</a>
                <!-- Utilisation d'un tableau pour afficher les voitures -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Miniature</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Année</th>
                            <th>Kilométrage</th>
                            <th>Publié par</th>
                            <th>Date d'ajout</th>
                            <th>Options</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Boucle sur les voitures pour les afficher dans le tableau -->
                        <?php foreach ($cars as $car) : ?>
                        <tr>
                            <td><img src="<?= ROOT_URL . 'admin/assets/images/' . $car['image']; ?>"
                                    alt="Image de voiture" style="max-height: 40px;"></td>
                            <td><?= $car['name']; ?></td>
                            <td><?= $car['price']; ?> €</td>
                            <td><?= $car['year']; ?></td>
                            <td><?= $car['mileage']; ?> km</td>
                            <td>
                                <?php
                                    $user_id = $car['users_id'];
                                    $user_query = "SELECT name FROM users WHERE id = :user_id";
                                    $user_statement = $pdo->prepare($user_query);
                                    $user_statement->bindParam(':user_id', $user_id);
                                    $user_statement->execute();
                                    $user = $user_statement->fetch(PDO::FETCH_ASSOC);
                                    echo $user['name'];
                                    ?>
                            </td>
                            <td><?= $car['created_at'] ?></td>
                            <td>
                                <?php
                                    $carId = $car['id'];
                                    include 'get-car-features.php';
                                    ?>
                                <a href="<?= ROOT_URL . 'admin/add-feature.php?car_id=' . $car['id']; ?>"
                                    class="btn btn-primary btn-sm">Ajouter une option</a>
                            </td>
                            <td>
                                <!-- Bouton "Modifier" qui renvoie vers la page de modification de la voiture avec l'ID correspondant -->
                                <a href="<?= ROOT_URL . 'admin/edit-car.php?id=' . $car['id']; ?>">
                                    <i class="fa-solid fa-pen-to-square" style="color: #2d2e2f;"></i>
                                </a>

                                <!-- Bouton "ajouter images" qui renvoie vers la page d'ajout d'image de la voiture avec l'ID correspondant -->
                                <a href="<?= ROOT_URL . 'admin/add-car-images.php?id=' . $car['id']; ?>">
                                    <i class="fa-regular fa-images" style="margin-left: 10px;"></i>
                                </a>

                                <!-- Bouton "Supprimer" qui renvoie vers la page de suppression de la voiture avec l'ID correspondant -->
                                <br><br>
                                <a href="<?= ROOT_URL . 'admin/logic/delete-car.php?id=' . $car['id']; ?>">
                                    <i class="fa-solid fa-trash-can" style="color: #434446;"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php if (isset($error_message)) : ?>
                <div class="alert alert-danger"><?php echo $error_message; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php include 'partials/footer.php'; ?>