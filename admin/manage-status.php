<?php
include 'partials/header.php';
if (!isset($_SESSION['user_is_admin']) || !$_SESSION['user_is_admin']) {
    // Rediriger vers une page d'erreur ou de refus d'accès
    header('Location: ' . ROOT_URL . 'admin/unauthorized.php');
    exit();
}

// Récup del'ID de l'administrateur connecté
$admin_id = $_SESSION['user_id'];

// Récup de l'ID du garage depuis le lien
$garage_id = $_GET['id'];

// Requête pour récupérer l'ID du garage associé à l'administrateur connecté
$garage_id_query = "SELECT id FROM garages WHERE users_id = ?";
$stmt_garage_id = $pdo->prepare($garage_id_query);
$stmt_garage_id->execute([$admin_id]);
$garage_id_row = $stmt_garage_id->fetch(PDO::FETCH_ASSOC);
//$garage_id = $garage_id_row['id'];

?>
<header id="head" class="secondary">
    <!--  Pour Futur Mise à jour de  la page -->
</header>

<div class="jumbotron top-space">
    <div class="container">

        <h3>Gérer les horaires</h3>

        <?php
        if (isset($_SESSION['garage-status'])) :
            echo '<p class="text-center text-muted msg-alert"><font color="green">' . $_SESSION['garage-status'] . '</font></p>';
            unset($_SESSION['garage-status']);
            echo '<hr>';
        elseif (isset($_SESSION['garage-status-error'])) :
            echo '<p class="text-center text-muted msg-alert"><font color="red">' . $_SESSION['garage-status-error'] . '</font></p>';
            unset($_SESSION['garage-status-error']);
            echo '<hr>';
        endif;
        ?>
        <div class="col-md-6 widget">
            <h3 class="widget-title">Statut</h3>
            <div class="widget-body">
                <form action="logic/manage-status.php" method="post">
                    <input type="hidden" name="garages_id" value="<?= $garage_id ?>">

                    <label for="garage_status">Statut :</label>
                    <select name="garage_status" id="garage_status">
                        <option value="1" <?= isset($garage['is_opened']) && $garage['is_opened'] == 1 ? 'selected' : '' ?>>Ouvert
                        </option>
                        <option value="0" <?= isset($garage['is_opened']) && $garage['is_opened'] == 0 ? 'selected' : '' ?>>Fermé
                        </option>
                    </select>
                    <button type="submit">Enregistrer</button>
                </form>
            </div>
        </div>
        <div class="col-md-6 widget">
            <h3 class="widget-title">Horaires hebdomadaire</h3>
            <div class="widget-body">
                <?php if (isset($_SESSION['user_is_admin'])) : ?>
                    <form action="logic/manage-opening-hours.php" method="post">
                        <input type="hidden" name="garage_id" value="<?= $garage_id ?>">
                        <div class="checkbox-group">
                            <?php
                            $days = array(
                                1 => "Lundi",
                                2 => "Mardi",
                                3 => "Mercredi",
                                4 => "Jeudi",
                                5 => "Vendredi",
                                6 => "Samedi",
                            );
                            ?>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Jour</th>
                                    <th>Ouverture</th>
                                    <th>Fermeture</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($days as $day => $dayName) : ?>
                                    <?php
                                    // Récupération des horaires d'ouverture et de fermeture à partir de la base de données
                                    $query = "SELECT opening_time, closing_time FROM opening_hours WHERE day = ?";
                                    $stmt = $pdo->prepare($query);
                                    $stmt->execute([$dayName]);
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                    $opening_time = $row['opening_time'];
                                    $closing_time = $row['closing_time'];
                                    ?>
                                    <tr>
                                        <td>
                                            <label for='selected_days_<?= $day ?>'>
                                                <input type='checkbox' name='selected_days[]' value='<?= $day ?>' id='selected_days_<?= $day ?>'>
                                                <?= $dayName ?>
                                            </label>
                                        </td>
                                        <td>
                                            <input type='time' name='opening_time_<?= $day ?>' value='<?= $opening_time ?>' placeholder='Ouverture'>
                                        </td>
                                        <td>
                                            <input type='time' name='closing_time_<?= $day ?>' value='<?= $closing_time ?>' placeholder='Fermeture'>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button type="submit">Enregistrer</button>
                    </form>
                <?php else : ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php
include 'partials/footer.php';
?>