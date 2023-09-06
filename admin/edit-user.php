<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Modification utilisateur</title>
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
                    <li><a href="index.html">Gérer les horaires </a></li>
                </ul></li>
                <li class="active"><a href="#">Se déconnecter</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <ol class="breadcrumb">
			<li><a href="index.html">Accueil</a></li>
			<li class="active">Modifier l'utilisateur</li>
		</ol>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>