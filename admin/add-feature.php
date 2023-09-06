<?php
include 'partials/header.php';
?>

<div class="row">
    <div class="col-md-12">
        <h2>Ajouter une option</h2>
        <form action="add-feature-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="car_id" value="car_id">
            <div class="mb-3">
                <label for="name" class="form-label">Nom de la voiture</label>
                <input type="text" value="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Valeur</label>
                <input type="text" value="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="submit" value="Ajouter" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
</div>
<?php
include 'partials/footer.php';
?>