<?php
include 'partials/header.php';

$is_admin = true;

if (!$is_admin) {
    header("Location: signin.php");
    exit();
}
// Récupération des témoignages depuis la base de données
$get_reviews_query = "SELECT * FROM reviews";
$reviews_statement = $pdo->query($get_reviews_query);
?>
<header id="head" class="secondary">
</header>

<!-- Contenu de la page d'administration des témoignages -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Gestion des Témoignages</h2>
            <?php if (isset($_SESSION['review-validation'])) : ?>
                <p class="alert alert-success"><?= $_SESSION['review-validation']; ?></p>
                <?php unset($_SESSION['review-validation']); ?>
            <?php endif; ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Évaluation</th>
                        <th>Témoignage</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($review = $reviews_statement->fetch(PDO::FETCH_ASSOC)) : ?>
                        <tr>
                            <td><?= $review['name']; ?></td>
                            <td><?= $review['rating']; ?> étoiles</td>
                            <td><?= $review['content']; ?></td>
                            <td><?= $review['is_published'] ? 'Publié' : 'En attente'; ?></td>
                            <td>
                                <?php if (!$review['is_published']) : ?>
                                    <a href="logic/validate-review.php?id=<?= $review['id']; ?>" class="btn btn-success">Valider</a>
                                <?php endif; ?>
                                <a href="logic/delete-review.php?id=<?= $review['id']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'partials/footer.php'; ?>