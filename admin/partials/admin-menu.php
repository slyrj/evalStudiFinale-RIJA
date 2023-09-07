<?php
// Menu pour l'administrateur
$superadminMenu = '
<li class="dropdown">
    <a href="" class="dropdown-toggle" data-toggle="dropdown">Espace Admin<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li class="active"><a href="' . ROOT_URL . 'admin/manage-user.php">Gérer les utilisateurs</a></li>
        <li><a href="' . ROOT_URL . 'admin/manage-service.php">Gérer les services</a></li>
        <li><a href="' . ROOT_URL . 'admin/manage-status.php?id=' . $_SESSION['admin_id'] . '">Gérer les horaires</a></li>
    </ul>
</li>
';

echo $superadminMenu; // Affiche le menu pour l'admin'
