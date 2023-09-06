<?php
include 'partials/header.php';
?>
<div class="row">
    <div class="col-md-12">
        <h2>Gestion des messages</h2>
        <div class="car-manage table-responsive">
            <a href="index.html" class="btn btn-primary">Ajouter une voiture</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Objet</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>John</td>
                        <td>doe@mail.com</td>
                        <td>Golf</td>
                        <td>27/05/2023</td>
                        <td>
                            <a href="index.html" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="index.html" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td>Jo</td>
                        <td>joe@mail.com</td>
                        <td>Golf</td>
                        <td>28/05/2023</td>
                        <td>
                            <a href="index.html" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="index.html" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td>Jane</td>
                        <td>jane@mail.com</td>
                        <td>Porsh</td>
                        <td>22/03/2023</td>
                        <td>
                            <a href="index.html" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="index.html" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>6</td>
                        <td>Jacques</td>
                        <td>jacques@mail.com</td>
                        <td>Renseignement</td>
                        <td>12/06/2023</td>
                        <td>
                            <a href="index.html" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="index.html" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash-can"></i></a>
                        </td>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php
include 'partials/footer.php';
?>