<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://css/bootstrap.min.css" >
    <title>Statut - Garage</title>
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
                    </ul>
                 </li>
                <li class="active"><a href="#">Se déconnecter</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <ol class="breadcrumb">
			<li><a href="index.html">Accueil</a></li>
			<li class="active">Statut - garage </li>
		</ol>
        <div class="row">
            <div class="col-md-6 widget">
                <h3 class="widget-title">Statut</h3>
                <div class="widget-body">
                    <form action="manage-status-logic.php" method="post">
                        <input type="hidden" name="garages_id" value="">
            
                        <label for="garage-status">Statut :</label>
                        <select name="garage_status" id="garage_status">
                            <option value="1">Ouvert</option>
                            <option value="0">Fermé</option>
                        </select>
                        <button type="submit">Enregistrer</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 widget">
                <h3 class="widget-title">Horaires d'ouverture</h3>
                <div class="widget-body">
                    <form action="manage-opening-hours-logic.php" method="post">
                        <input type="hidden" name="garage_id" value="">
                        <table>
                            <thead>
                                <tr>
                                    <th>Jour</th>
                                    <th>Ouverture</th>
                                    <th>Fermeture</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lundi</td>
                                    <td><input type="time" name="opening_time_1" value="" placeholder="Ouverture"></td>
                                    <td><input type="time" name="closing_time_1" value="" placeholder="Fermeture"></td>
                                </tr>
                                <tr>
                                    <td>Mardi</td>
                                    <td><input type="time" name="opening_time_1" value="" placeholder="Ouverture"></td>
                                    <td><input type="time" name="closing_time_1" value="" placeholder="Fermeture"></td>
                                </tr>
                                <tr>
                                    <td>Mercredi</td>
                                    <td><input type="time" name="opening_time_1" value="" placeholder="Ouverture"></td>
                                    <td><input type="time" name="closing_time_1" value="" placeholder="Fermeture"></td>
                                </tr>
                                <tr>
                                    <td>Jeudi</td>
                                    <td><input type="time" name="opening_time_1" value="" placeholder="Ouverture"></td>
                                    <td><input type="time" name="closing_time_1" value="" placeholder="Fermeture"></td>
                                </tr>
                                <tr>
                                    <td>Vendrefi</td>
                                    <td><input type="time" name="opening_time_1" value="" placeholder="Ouverture"></td>
                                    <td><input type="time" name="closing_time_1" value="" placeholder="Fermeture"></td>
                                </tr>
                                <tr>
                                    <td>Samedi</td>
                                    <td><input type="time" name="opening_time_1" value="" placeholder="Ouverture"></td>
                                    <td><input type="time" name="closing_time_1" value="" placeholder="Fermeture"></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit">Enregistrer</button>
                    </form>
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
</body>
</html>