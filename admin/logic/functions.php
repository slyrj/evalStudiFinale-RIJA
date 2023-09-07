<?php
// Récupérer les étoiles pour affichage
function getStars($rating)
{
    $stars = '';
    for ($i = 1; $i <= 5; $i++) {
        $stars .= ($i <= $rating) ? '★' : '☆';
    }
    return $stars;
}
?>
<!-- Si $i est inférieur ou égal à $rating, alors l'étoile est pleine ("★").
Sinon, si $i est supérieur à $rating, alors l'étoile est vide ("☆"). -->