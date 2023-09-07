<?php
include 'partials/header.php';

if (!isset($_SESSION['user_is_admin']) || !$_SESSION['user_is_admin']) {
    header('Location: ' . ROOT_URL . 'admin/unauthorized.php');
    exit();
}

// Récup des données des services depuis la base de données
$query_services = "SELECT * FROM services";
$result_services = $pdo->query($query_services);
$services = $result_services->fetchAll(PDO::FETCH_ASSOC);

?>

<header id="head" class="secondary"></header>

<div class="container">
    <h1 class="text-center">Administration des Services</h1>
    <!-- Bouton ajouter un nouveau service -->
    <a href="add-service.php" class="btn btn-primary">Ajouter un service</a>

    <!-- Liste des services existants avec gestion des prestations -->
    <div class="row">
        <div class="col-md-12">
            <h3>Liste des services</h3>

            <?php if (isset($_SESSION['add-service-success'])) :
                echo '<p class="text-center text-muted msg-alert"><font color="blue">' . $_SESSION['add-service-success'] . '</font></p>';
                unset($_SESSION['add-service-success']);
                echo '<hr>';
            endif; ?>

            <?php if (isset($_SESSION['edit-service-success'])) :
                echo '<p class="text-center text-muted msg-alert"><font color="blue">' . $_SESSION['edit-service-success'] . '</font></p>';
                unset($_SESSION['edit-service-success']);
                echo '<hr>';
            endif;
            ?>
            <?php if (isset($_SESSION['add-prestations-success'])) :
                echo '<p class="text-center text-muted msg-alert"><font color="green">' . $_SESSION['add-prestations-success'] . '</font></p>';
                unset($_SESSION['add-prestations-success']);
                echo '<hr>';
            endif;
            ?>
            <?php if (isset($_SESSION['delete-prestations-success'])) :
                echo '<p class="text-center text-muted msg-alert"><font color="green">' . $_SESSION['delete-prestations-success'] . '</font></p>';
                unset($_SESSION['delete-prestations-success']);
                echo '<hr>';
            endif;
            ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Service</th>
                        <th>Prestations</th>
                        <th>Ajouter/supprimer prestation</th>
                        <th>Editer/Supprimer le service</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($services as $service) : ?>
                        <tr>
                            <td><img style="background-color: #232323;" src="<?= ROOT_URL . 'admin/assets/images/' . $service['image']; ?>" alt="Image du service" style="max-height: 100px;"></td>
                            <td><?= $service['name']; ?></td>
                            <td>
                                <ul>
                                    <?php
                                    // Récupérer les opérations liées à ce service depuis la base de données
                                    $service_id = $service['id'];
                                    $query_operations = "SELECT * FROM operations WHERE service_id = :service_id";
                                    $statement_operations = $pdo->prepare($query_operations);
                                    $statement_operations->bindParam(':service_id', $service_id, PDO::PARAM_INT);
                                    $statement_operations->execute();
                                    $operations = $statement_operations->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($operations as $operation) :
                                    ?>
                                        <li><?= $operation['name']; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </td>
                            <td>
                                <!-- Formulaire pour ajouter une prestation au service -->
                                <form action="logic/add-prestations.php" method="post">
                                    <input type="hidden" name="id_service" value="<?php echo $service['id']; ?>">
                                    <div class="form-group">
                                        <label for="nom_prestation">Nom de la prestation :</label>
                                        <input type="text" class="form-control" id="nom_prestation" name="nom_prestation" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </form>

                                <!-- Bouton "Supprimer une prestation" avec modal -->
                                <button style="margin-top: 20px;" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalPrestations<?= $service['id']; ?>">
                                    Supprimer une prestation
                                </button>

                                <!-- Modal pour afficher la liste des prestations à cocher -->
                                <div class="modal fade" id="modalPrestations<?= $service['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalPrestationsLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalPrestationsLabel">Supprimer une prestation
                                                    pour <?= $service['name']; ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="logic/delete-prestation.php" method="post">
                                                    <input type="hidden" name="id_service" value="<?= $service['id']; ?>">
                                                    <div class="form-group">
                                                        <label>Sélectionnez les prestations à supprimer :</label>
                                                        <?php foreach ($operations as $operation) : ?>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="operations[]" value="<?= $operation['name']; ?>">
                                                                <label class="form-check-label"><?= $operation['name']; ?></label>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <!-- Bouton "Editer le service" -->
                                <a style=" margin-bottom: 10px;" href="<?= ROOT_URL . 'admin/edit-services.php?id=' . $service['id']; ?>" class="btn btn-success btn-sm">Editer</a>
                                <!-- Bouton "Supprimer le service" -->
                                <a style=" margin-bottom: 10px;" href="logic/delete-service.php?id=<?php echo $service['id']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'partials/footer.php'; ?>