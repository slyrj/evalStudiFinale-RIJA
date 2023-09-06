<?php
include 'partials/header.php';
?>

<div class="row">
    <div class="col-md-12">
        <h2>Modifier la voiture</h2>
        <form action="add-car-logic.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="users_id" value="">
            <div class="mb-3">
                <label for="name" class="form-label">Nom de la voiture</label>
                <input type="text" value="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prix</label>
                <input type="number" value="price" name="price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Année de mise en circulation</label>
                <input type="number" name="year" value="year" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="mileage" class="form-label">Kilométrage</label>
                <input type="number" name="mileage" value="mileage" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image de la voiture</label>
                <input type="file" name="image" value="image" class="form-control" required>
                <small class="form-text text-muted">Formats d'image acceptés : PNG, JPG, JPEG</small>
            </div>
            <div class="mb-3">
                <input type="submit" value="Modifier" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
</div>
<?php
include 'partials/footer.php';
?>