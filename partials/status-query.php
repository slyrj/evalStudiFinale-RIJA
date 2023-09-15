<?php
$garageStatus = "<i class='fa-solid fa-door-closed'></i>  fermé"; // Par défaut

$garage_query = "SELECT is_opened FROM garages";

$garage_result = mysqli_query($connection, $garage_query);

if ($garage_result && mysqli_num_rows($garage_result) > 0) {
    $garage_data = mysqli_fetch_assoc($garage_result);
    if ($garage_data['is_opened'] == 1) {
        $garageStatus = "<i class='fa-solid fa-door-open' style='color:#90ee90'></i>  ouvert";
    }
}
echo "<p>Le garage est actuellement</p><br><br><p>$garageStatus</p>";
