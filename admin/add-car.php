<?php
include 'partials/header.php';
$usersId = $_SESSION['add-car-data']['users_id'] ?? null;
$name = $_SESSION['add-car-data']['name'] ?? null;
$price = $_SESSION['add-car-data']['price'] ?? null;
$image = $_SESSION['add-car-data']['image'] ?? null;
$year = $_SESSION['add-car-data']['year'] ?? null;
$mileage = $_SESSION['add-car-data']['mileage'] ?? null;

// Suppression de la session
unset($_SESSION['add-car-data']);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Ajouter une voiture</h2>

            <?php if (isset($_SESSION['add-car-success'])) : ?>
                <p class="text-center text-muted msg-alert">
                    <font color="green">
                        <?= $_SESSION['add-car-success'];
                        unset($_SESSION['add-car-success']); ?> </font>
                </p>
                <hr>
            <?php endif; ?>
            <?php if (isset($_SESSION['add-car'])) : ?>
                <p class="text-center text-muted msg-alert">
                    <font color="red">
                        <?= $_SESSION['add-car']; ?> </font>
                </p>
                <hr>
            <?php endif; ?>
            <form action="logic/add-car.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="users_id" value="<?php echo $userId; ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom de la voiture</label>
                    <input type="text" value="<?= $name ?>" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prix</label>
                    <input type="number" value="<?= $price ?>" name="price" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Année de mise en circulation</label>
                    <input type="number" name="year" value="<?= $year ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="mileage" class="form-label">Kilométrage</label>
                    <input type="number" name="mileage" value="<?= $mileage ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image de la voiture</label>
                    <input type="file" name="image" value="<?= $image ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Ajouter" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>