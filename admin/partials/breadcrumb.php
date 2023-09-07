<ol class="breadcrumb">
    <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
    <?php
    $url_path = $_SERVER['REQUEST_URI'];
    $url_parts = explode('/', $url_path);

    // Boucle pour générer les liens du breadcrumb
    $breadcrumb = '';
    $url_segment = ROOT_URL;
    foreach ($url_parts as $index => $part) {
        if ($part !== '') {
            $url_segment .= $part . '/';
            $page_title = ucwords(str_replace(array('-', '.php', '?id='), ' ', $part));

            // Modifier l'affichage du lien si c'est la page add-car-images.php
            if ($part === 'add-car-images.php' && isset($_GET['id'])) {
                $breadcrumb .= '<li><a href="' . ROOT_URL . 'admin/add-car-images.php">Ajouter des images</a></li>';
            } else {
                if ($index === count($url_parts) - 1) {
                    // Dernière partie de l'URL (lien actif)
                    $breadcrumb .= '<li class="active">' . $page_title . '</li>';
                } else {
                    $breadcrumb .= '<li><a href="' . $url_segment . '">' . $page_title . '</a></li>';
                }
            }
        }
    }
    echo $breadcrumb;
    ?>
</ol>