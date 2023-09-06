<?php
include 'partials/header.php';
?>
<div class="row">
    <div class="col-md-12">
        <h2>Ajouter un utilisateur</h2>
        <form action="add-user-logic.php" enctype="multipart/form-data" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nom de l'utilisateur</label>
                <input type="text" value="" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Valeur</label>
                <input type="text" value="" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Rôle</label>
                <select name="roles" class="form-control">
                    <option value="0">Employé</option>
                    <option value="1">Admin</option>
                </select>
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