<?php
include 'partials/header.php';
?>
<div class="row">
    <div class="col-md-12">
        <h2>Gestion des services</h2>
        <div class="car-manage">
            <a href="index.html" class="btn btn-primary">Ajouter une voiture</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Service</th>
                        <th>Prestations</th>
                        <th>Ajouter/supprimer prestation</th>
                        <th>Editer/Supprimer le service</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><img src="images/carro.png" alt="" /></td>
                        <td>Carrosserie</td>
                        <td>
                            <ul>
                                <li>Peinture</li>
                                <li>Réparation des impacts</li>
                                <li>Rénovation</li>
                            </ul>
                        </td>
                        <td>
                            <form action="add-prestations-logic.php" method="post">
                                <div class="form-group">
                                    <label for="nom_prestation">Nom de la prestation :</label>
                                    <input type="text" class="form-control" id="nom_prestation" name="nom_prestation" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </form>
                            <!-- Bouton "Supprimer une prestation" avec modal -->
                            <button style=" margin-top: 20px;" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalPrestations<?= $service['id']; ?>">
                                Supprimer une prestation
                            </button>

                            <!-- Modal pour afficher la liste des prestations à cocher -->
                            <div class="modal fade" id="modalPrestations" tabindex="-1" role="dialog" aria-labelledby="modalPrestationsLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalPrestationsLabel">Supprimer une prestation
                                                dans: Réparation mécanique</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="delete-prestation.php" method="post">
                                                <input type="hidden" name="id_service" value="id_service">
                                                <div class="form-group">
                                                    <label>Sélectionnez les prestations à supprimer :</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="operations[]" value="nom_operation; ?>">
                                                        <label class="form-check-label">Niveau</label>
                                                        <input class="form-check-input" type="checkbox" name="operations[]" value="nom_operation; ?>">
                                                        <label class="form-check-label">Vidange</label>
                                                        <input class="form-check-input" type="checkbox" name="operations[]" value="nom_operation; ?>">
                                                        <label class="form-check-label">Frein</label>

                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <!-- Bouton "Editer le service" -->
                            <a style=" margin-bottom: 10px;" href="#" class="btn btn-success btn-sm">Editer</a>
                            <!-- Bouton "Supprimer le service" -->
                            <a style=" margin-bottom: 10px;" href="delete-service.php?id=<?php echo $service['id']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/mec.png" alt="" /></td>
                        <td>Réparation mécanique</td>
                        <td>
                            <ul>
                                <li>Niveau</li>
                                <li>Vidange</li>
                                <li>Freins</li>
                            </ul>
                        </td>
                        <td>
                            <form action="add-prestations-logic.php" method="post">
                                <div class="form-group">
                                    <label for="nom_prestation">Nom de la prestation :</label>
                                    <input type="text" class="form-control" id="nom_prestation" name="nom_prestation" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </form>
                            <!-- Bouton "Supprimer une prestation" avec modal -->
                            <button style=" margin-top: 20px;" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalPrestations<?= $service['id']; ?>">
                                Supprimer une prestation
                            </button>

                            <!-- Modal pour afficher la liste des prestations à cocher -->
                            <div class="modal fade" id="modalPrestations" tabindex="-1" role="dialog" aria-labelledby="modalPrestationsLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalPrestationsLabel">Supprimer une prestation
                                                dans: Réparation mécanique</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="delete-prestation.php" method="post">
                                                <input type="hidden" name="id_service" value="id_service">
                                                <div class="form-group">
                                                    <label>Sélectionnez les prestations à supprimer :</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="operations[]" value="nom_operation; ?>">
                                                        <label class="form-check-label">Niveau</label>
                                                        <input class="form-check-input" type="checkbox" name="operations[]" value="nom_operation; ?>">
                                                        <label class="form-check-label">Vidange</label>
                                                        <input class="form-check-input" type="checkbox" name="operations[]" value="nom_operation; ?>">
                                                        <label class="form-check-label">Frein</label>

                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <!-- Bouton "Editer le service" -->
                            <a style=" margin-bottom: 10px;" href="#" class="btn btn-success btn-sm">Editer</a>
                            <!-- Bouton "Supprimer le service" -->
                            <a style=" margin-bottom: 10px;" href="delete-service.php?id=<?php echo $service['id']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/entr.png" alt="" /></td>
                        <td>Entretien régulier</td>
                        <td>
                            <ul>
                                <li>Changement des filtres</li>
                                <li>Changement des bougies</li>
                                <li>Contrôle des fluides</li>
                            </ul>
                        </td>
                        <td>
                            <form action="add-prestations-logic.php" method="post">
                                <div class="form-group">
                                    <label for="nom_prestation">Nom de la prestation :</label>
                                    <input type="text" class="form-control" id="nom_prestation" name="nom_prestation" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </form>
                            <!-- Bouton "Supprimer une prestation" avec modal -->
                            <button style=" margin-top: 20px;" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="">
                                Supprimer une prestation
                            </button>
                            <!-- Modal pour afficher la liste des prestations à cocher -->
                            <div class="modal fade" id="modalPrestations" tabindex="-1" role="dialog" aria-labelledby="modalPrestationsLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalPrestationsLabel">Supprimer une prestation
                                                dans: Réparation mécanique</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="delete-prestation.php" method="post">
                                                <input type="hidden" name="id_service" value="id_service">
                                                <div class="form-group">
                                                    <label>Sélectionnez les prestations à supprimer :</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="operations[]" value="nom_operation; ?>">
                                                        <label class="form-check-label">Niveau</label>
                                                        <input class="form-check-input" type="checkbox" name="operations[]" value="nom_operation; ?>">
                                                        <label class="form-check-label">Vidange</label>
                                                        <input class="form-check-input" type="checkbox" name="operations[]" value="nom_operation; ?>">
                                                        <label class="form-check-label">Frein</label>

                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <!-- Bouton "Editer le service" -->
                            <a style=" margin-bottom: 10px;" href="#" class="btn btn-success btn-sm">Editer</a>
                            <!-- Bouton "Supprimer le service" -->
                            <a style=" margin-bottom: 10px;" href="" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/carro.png" alt="" /></td>
                        <td>Carrosserie</td>
                        <td>
                            <ul>
                                <li>Peinture</li>
                                <li>Réparation des impacts</li>
                                <li>Rénovation</li>
                            </ul>
                        </td>
                        <td>
                            <form action="add-prestations-logic.php" method="post">
                                <div class="form-group">
                                    <label for="nom_prestation">Nom de la prestation :</label>
                                    <input type="text" class="form-control" id="nom_prestation" name="nom_prestation" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </form>
                            <!-- Bouton "Supprimer une prestation" avec modal -->
                            <button style=" margin-top: 20px;" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalPrestations<?= $service['id']; ?>">
                                Supprimer une prestation
                            </button>

                            <!-- Modal pour afficher la liste des prestations à cocher -->
                            <div class="modal fade" id="modalPrestations" tabindex="-1" role="dialog" aria-labelledby="modalPrestationsLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalPrestationsLabel">Supprimer une prestation
                                                dans: Réparation mécanique</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="delete-prestation.php" method="post">
                                                <input type="hidden" name="id_service" value="id_service">
                                                <div class="form-group">
                                                    <label>Sélectionnez les prestations à supprimer :</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="operations[]" value="nom_operation; ?>">
                                                        <label class="form-check-label">Niveau</label>
                                                        <input class="form-check-input" type="checkbox" name="operations[]" value="nom_operation; ?>">
                                                        <label class="form-check-label">Vidange</label>
                                                        <input class="form-check-input" type="checkbox" name="operations[]" value="nom_operation; ?>">
                                                        <label class="form-check-label">Frein</label>

                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <!-- Bouton "Editer le service" -->
                            <a style=" margin-bottom: 10px;" href="#" class="btn btn-success btn-sm">Editer</a>
                            <!-- Bouton "Supprimer le service" -->
                            <a style=" margin-bottom: 10px;" href="delete-service.php?id=<?php echo $service['id']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
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