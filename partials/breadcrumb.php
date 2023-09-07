<ol class="breadcrumb">
    <li><a href="<?php echo ROOT_URL; ?>">Accueil</a></li>
    <?php
    $url_path = $_SERVER['REQUEST_URI'];
    $url_parts = explode('/', $url_path);

    // Boucle pour générer les liens du breadcrumb
    $breadcrumb = '';
    $url_segment = ROOT_URL;
    foreach ($url_parts as $index => $part) {
        if ($part !== '') {
            $url_segment .= $part . '/';
            $page_title = ucwords(str_replace(array('-', '.php'), ' ', $part));
            if ($index === count($url_parts) - 1) {
                // Dernière partie de l'URL (lien actif)
                $breadcrumb .= '<li class="active">' . $page_title . '</li>';
            } else {
                $breadcrumb .= '<li><a href="' . $url_segment . '">' . $page_title . '</a></li>';
            }
        }
    }
    echo $breadcrumb;
    ?>
</ol>