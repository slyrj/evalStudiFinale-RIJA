<?php
include 'partials/header.php';
$car_id = $_GET['car_id'] ?? null;
$name = $_SESSION['add-feature-data']['name'] ?? null;
$value = $_SESSION['add-feature-data']['value'] ?? null;

unset($_SESSION['add-feature-data']);
?>
<div class="container">
    <div class="row">
        <article class="col-xs-12 maincontent">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Ajouter une option</h3>
                        <?php if (isset($_SESSION['add-feature'])) : ?>
                            <p class="text-center text-muted msg-alert">
                                <font color="red">
                                    <?= $_SESSION['add-feature']; ?> </font>
                            </p>
                            <hr>
                        <?php endif ?>
                        <form action="logic/add-feature.php" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="car_id" value="<?php echo $car_id; ?>">
                            <div class="top-margin">
                                <label>Nom de l'option</label>
                                <input type="text" value="<?= $name ?>" name="name" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>Valeur</label>
                                <input type="text" value="<?= $value ?>" name="value" class="form-control">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action" name="submit" type="submit">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>

<?php
include 'partials/footer.php';
?>
<!-- options
Option : Toit ouvrant panoramique
Valeur : Oui

Option : Système de navigation GPS
Valeur : Intégré

Option : Caméra de recul
Valeur : Oui

Option : Capteurs de stationnement
Valeur : Avant et arrière

Option : Assistance au freinage d'urgence
Valeur : Active

Option : Phares LED adaptatifs
Valeur : Oui

Option : Sièges chauffants
Valeur : Avant et arrière

Option : Connexion Bluetooth
Valeur : Oui

Option : Jantes en alliage
Valeur : 18 pouces

Ces exemples illustr -->