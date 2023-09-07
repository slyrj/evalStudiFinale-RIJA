<?php
include 'partials/header.php';

if (isset($_GET['id'])) {
    $carId = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $carQuery = "SELECT * FROM cars WHERE id = :carId";
    $carStatement = $pdo->prepare($carQuery);
    $carStatement->bindParam(':carId', $carId, PDO::PARAM_INT);
    $carStatement->execute();
    $car = $carStatement->fetch(PDO::FETCH_ASSOC);
} else {
    header('location: manage-car.php');
    die();
}
$name = $car['name'] ?? null;
$price = $car['price'] ?? null;
$image = $car['image'] ?? null;
$year = $car['year'] ?? null;
$mileage = $car['mileage'] ?? null;
?>
<header id="head" class="secondary"></header>

<div class="container">
    <div class="row">
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">Modification de la voiture</h1>
            </header>
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Modifier la voiture</h3>

                        <?php if (isset($_SESSION['edit-car-success'])) : ?>
                            <p class="text-center text-muted msg-alert">
                                <font color="red">
                                    <?= $_SESSION['edit-car-success']; ?> </font>
                            </p>
                            <hr>
                            <?php unset($_SESSION['edit-car-success']); ?>
                        <?php endif; ?>
                        <!-- ... (le code précédent reste inchangé) ... -->
                        <form action="logic/edit-car.php" enctype="multipart/form-data" method="POST">
                            <input type="hidden" value="<?= $car['id'] ?>" name="id">
                            <div class="top-margin">
                                <label>Nom</label>
                                <input type="text" value="<?= $car['name'] ?>" name="name" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label>Prix</label>
                                <input type="number" name="price" value="<?= $car['price'] ?>" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label>Année</label>
                                <input type="number" name="year" value="<?= $car['year'] ?>" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label>Kilométrage</label>
                                <input type="number" name="mileage" value="<?= $car['mileage'] ?>" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label>Image</label>
                                <input type="file" name="image" accept="image/*" class="form-control-file">
                                <small class="form-text text-muted">Formats d'image acceptés : PNG, JPG, JPEG</small>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action" name="submit" type="submit">Mettre à jour</button>
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