<footer id="footer" class="top-space">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 widget">
                    <h3 class="widget-title">Horaires d'ouverture</h3>
                    <div class="widget-body">
                        <?php
                        $days = array(
                            "Lundi" => 1,
                            "Mardi" => 2,
                            "Mercredi" => 3,
                            "Jeudi" => 4,
                            "Vendredi" => 5,
                            "Samedi" => 6,
                        );

                        $horaire_query = "SELECT day, opening_time, closing_time FROM opening_hours";
                        $horaire_stmt = $pdo->query($horaire_query);

                        if ($horaire_stmt) {
                            $horaire_result = $horaire_stmt->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($horaire_result as $row) {
                                $day = $row['day'];
                                $opening_time = date("H:i", strtotime($row['opening_time']));
                                $closing_time = date("H:i", strtotime($row['closing_time']));

                                if (isset($days[$day])) {
                                    echo "<p>{$day} : $opening_time - $closing_time </p>";
                                }
                            }
                        } else {
                            echo "<p>Les horaires d'ouverture ne sont pas disponibles.</p>";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <h3 class="widget-title">Statut</h3>
                    <div class="widget-body">
                        <?php
                        $garageStatus = "<i class='fa-solid fa-shop-lock fa-2xl' style='color:#fdc939'></i> Fermé"; // Par défaut

                        // Récup du statut du garage depuis la base de données
                        $garage_query = "SELECT is_opened FROM garages";
                        $garage_stmt = $pdo->query($garage_query);

                        if ($garage_stmt) {
                            $garage_data = $garage_stmt->fetch(PDO::FETCH_ASSOC);
                            if ($garage_data['is_opened'] == 1) {
                                $garageStatus = "<i class='fa-solid fa-door-open fa-2xl' style='color:#90ee90'></i>  ouvert";
                            }
                        }
                        echo "<p>Le garage est actuellement</p><br><br><p>$garageStatus</p>";
                        ?>
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Contact</h3>
                    <div class="widget-body">
                        <p>05 23 45 67 89<br>
                            <a href="mailto:#">gparrot@gmail.com</a><br>
                            <br>
                            3 rue de la saucisse, 31123 - Toulouse
                        </p>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <h3 class="widget-title">Nous suivre</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="simplenav">
                            <a href="<?= ROOT_URL . 'index.php' ?>">Accueil</a> |
                            <a href="<?= ROOT_URL . 'services.php' ?>">Nos services</a> |
                            <a href="<?= ROOT_URL . 'vents.php' ?>">Voitures d'occasions</a> |
                            <a href="<?= ROOT_URL . 'contact.php' ?>">Contact</a> |
                        </p>
                    </div>
                </div>
                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">&copy; 2023 Garage V-Parrot. Tous droits réservés.</p>
                    </div>
                </div>
            </div>
        </div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</body>

</html>