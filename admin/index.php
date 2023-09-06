<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css>">
    <title>Document</title>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top headroom">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Garage Parrot"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="index.html">services-prestations </a></li>
                <li class="active"><a href="admin-index.html">Gérer les voitures</a></li>
                <li class="active"><a href="messages.html">Messages</a></li>
                <li class="dropdown"><a href="#">Espace Admin</a>
                    <ul>
                        <li><a href="admin-index.html">Gérer les utilisateurs </a></li>
                        <li><a href="services-prestations.html">Gérer les services </a></li>
                        <li><a href="avis-clients.html">Gérer les témoignages</a></li>
                        <li><a href="statut-garage.html">Gérer les horaires </a></li>
                    </ul>
                </li>
                <li class="active"><a href="#">Se déconnecter</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Right Sidebar</li>
		</ol>
        <div class="row">
            <div class="col-md-12">
                <h2>Gestion des voitures</h2>
                <div class="car-manage">
                    <a href="index.html" class="btn btn-primary">Ajouter une voiture</a> 
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Miniature</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Année</th>
                                <th>Kilométrage</th>
                                <th>Publié par</th>
                                <th>Date d'ajout</th>
                                <th>Options</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="images/gallery-img-2.jpg" alt="Image de voiture" style="max-height: 40px;"></td>
                                <td>Golf VII</td>
                                <td>4500 €</td>
                                <td>2015</td>
                                <td>120000 km</td>
                                <td>Sly</td>
                                <td>27/05/2023</td>
                                <td> <a href="index.html" class="btn btn-primary">Ajouter une option</a> </td>
                                <td>
                                    <a href="index.html" class="btn btn-primary"><i class="fa-solid fa-pen-to-square" style="color: #2d2e2f;"></i></a>
                                    <a href="index.html" class="btn btn-primary"><i class="fa-regular fa-images" style="margin-left: 10px;"></i></a>
                                    <a href="index.html" class="btn btn-primary"> <i class="fa-solid fa-trash-can" style="color: #434446;"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="images/gallery-img-2.jpg" alt="Image de voiture" style="max-height: 40px;"></td>
                                <td>Golf VII</td>
                                <td>4500 €</td>
                                <td>2015</td>
                                <td>120000 km</td>
                                <td>Sly</td>
                                <td>27/05/2023</td>
                                <td> <a href="index.html" class="btn btn-primary">Ajouter une option</a> </td>
                                <td>
                                    <a href="index.html" class="btn btn-primary"><i class="fa-solid fa-pen-to-square" style="color: #2d2e2f;"></i></a>
                                    <a href="index.html" class="btn btn-primary"><i class="fa-regular fa-images" style="margin-left: 10px;"></i></a>
                                    <a href="index.html" class="btn btn-primary"> <i class="fa-solid fa-trash-can" style="color: #434446;"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="images/gallery-img-2.jpg" alt="Image de voiture" style="max-height: 40px;"></td>
                                <td>Golf VII</td>
                                <td>4500 €</td>
                                <td>2015</td>
                                <td>120000 km</td>
                                <td>Sly</td>
                                <td>27/05/2023</td>
                                <td> <a href="index.html" class="btn btn-primary">Ajouter une option</a> </td>
                                <td>
                                    <a href="index.html" class="btn btn-primary"><i class="fa-solid fa-pen-to-square" style="color: #2d2e2f;"></i></a>
                                    <a href="index.html" class="btn btn-primary"><i class="fa-regular fa-images" style="margin-left: 10px;"></i></a>
                                    <a href="index.html" class="btn btn-primary"> <i class="fa-solid fa-trash-can" style="color: #434446;"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="images/gallery-img-2.jpg" alt="Image de voiture" style="max-height: 40px;"></td>
                                <td>Golf VII</td>
                                <td>4500 €</td>
                                <td>2015</td>
                                <td>120000 km</td>
                                <td>Sly</td>
                                <td>27/05/2023</td>
                                <td> <a href="index.html" class="btn btn-primary">Ajouter une option</a> </td>
                                <td>
                                    <a href="index.html" class="btn btn-primary"><i class="fa-solid fa-pen-to-square" style="color: #2d2e2f;"></i></a>
                                    <a href="index.html" class="btn btn-primary"><i class="fa-regular fa-images" style="margin-left: 10px;"></i></a>
                                    <a href="index.html" class="btn btn-primary"> <i class="fa-solid fa-trash-can" style="color: #434446;"></i> </a>
                                </td>
                            </tr>
                        </tbody>
                   </table>
                </div>
            </div>
        </div>        
    </div>
    <footer id="footer" class="top-space">
        <div class="footer2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav"> 
                                <a href="index.html">Accuei</a> |
                                <a href="services.html>">Préstations</a> |
                                <a href="ventes.html">Voitures d'occasions</a> |
                                <a href="contact.html">Contact</a> 
                        </div>
                    </div>
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">&copy; 2023 Garage V-Parrot. Tous droits réservés.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="js/headroom.min.js"></script>
    <script src="js/jQuery.headroom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>