<?php
include 'partials/header.php';
?>
<div class="row">
    <div class="col-md-12">
        <h2>Modifier le service</h2>
        <form action="add-services-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="car_id" value="car_id">
            <div class="mb-3">
                <label for="name" class="form-label">Nom du service</label>
                <input type="text" value="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Image <span class="text-danger">*</span></label>
                <input type="file" class="form-control" id="image_service" name="image" accept="image/*" required>
            </div>
            <div class="mb-3">
                <input type="submit" value="Mettre à jour" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
</div>
<?php
include 'partials/footer.php';
?>