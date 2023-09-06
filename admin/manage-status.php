<?php
include 'partials/header.php';
?>
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
<?php
include 'partials/footer.php';
?>