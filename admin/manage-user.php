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
                        <th>Email</th>
                        <th>Admin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John</td>
                        <td>john@mail.com</td>
                        <td>Oui</td>
                        <td>06/06/2023</td>
                        <td><a href="#" class="btn btn-primary">Modifier</a></td>
                        <td><a href="#" class="btn btn-danger">Supprimer</a></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td>Jane</td>
                        <td>jane@mail.com</td>
                        <td>Oui</td>
                        <td>06/09/2023</td>
                        <td><a href="#" class="btn btn-primary">Modifier</a></td>
                        <td><a href="#" class="btn btn-danger">Supprimer</a></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>Jill</td>
                        <td>jill@mail.com</td>
                        <td>Oui</td>
                        <td>06/09/2023</td>
                        <td><a href="#" class="btn btn-primary">Modifier</a></td>
                        <td><a href="#" class="btn btn-danger">Supprimer</a></td>
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