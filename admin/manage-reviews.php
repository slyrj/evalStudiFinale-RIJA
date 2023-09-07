<?php
include 'partials/header.php';
?>
<div class="row">
    <div class="col-md-12">
        <h2>Gestion des utilisateurs</h2>
        <div class="car-manage table-responsive">
            <a href="ajout-utilisateur.html" class="btn btn-primary">Ajouter un utilisateur</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Évaluation</th>
                        <th>Témoignage</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Nom</td>
                        <td> étoiles</td>
                        <td>le contenu ></td>
                        <td>la date de la publication</td>
                        <td>
                            <a href="#" class="btn btn-success">Valider</a>
                            <a href="#" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>
<?php
include 'partials/footer.php';
?>