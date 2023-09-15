<?php
include 'partials/header.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: signin.php');
    exit();
}

if (isset($_GET['id'])) {
    $carId = $_GET['id'];
} else {
    header('Location: index.php');
    exit();
}
?>
<div class="container">

    <h2>Ajouter et Gérer les Images</h2>

    <?php if (isset($_SESSION['add-car-image'])) : ?>
    <p class="text-center text-danger"><?php echo $_SESSION['add-car-image']; ?></p>
    <?php unset($_SESSION['add-car-image']); ?>
    <?php elseif (isset($_SESSION['delete-car-image'])) : ?>
    <p class="text-center text-success"><?php echo $_SESSION['delete-car-image']; ?></p>
    <?php unset($_SESSION['delete-car-image']); ?>
    <?php endif; ?>

    <form action="logic/add-car-images.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="car_id" value="<?php echo $carId; ?>">
        <div class="mb-3">
            <label for="image" class="form-label">Ajouter une image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="submit" name="submit" value="Ajouter" class="btn btn-primary">
        </div>
    </form>

    <?php
    $imagesQuery = "SELECT * FROM car_images WHERE cars_id = :carId";
    $imagesStatement = $pdo->prepare($imagesQuery);
    $imagesStatement->bindParam(':carId', $carId, PDO::PARAM_INT);
    $imagesStatement->execute();
    $images = $imagesStatement->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($images)) : ?>
    <h3>Gérer les Images</h3>
    <div class="row">
        <?php foreach ($images as $image) : ?>
        <div class="col-md-3 mb-4 mt-4">
            <img src="<?= ROOT_URL . 'admin/assets/gallery/' . $image['image_url']; ?>" alt="Image <?= $image['id']; ?>"
                class="img-fluid" style="max-height: 150px; max-width: 300px; margin-top: 20px;">
            <a href="logic/delete-car-image.php?id=<?= $image['id']; ?>" style="margin-top: 10px;"
                class="btn btn-danger btn-sm">Supprimer</a>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <div style="margin-top: 20px;">
        <p><a href="<?= ROOT_URL . 'admin'; ?>">&larr; Retour à la liste des voitures</a></p>
    </div>
</div>

<?php include 'partials/footer.php'; ?>