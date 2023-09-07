<?php
include 'partials/header.php';

// Récup des utilisateurs de la base de données
$current_admin_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE NOT id = :current_admin_id";
$usersStatement = $pdo->prepare($query);
$usersStatement->bindParam(':current_admin_id', $current_admin_id, PDO::PARAM_INT);
$usersStatement->execute();
$users = $usersStatement->fetchAll(PDO::FETCH_ASSOC);
?>
<header id="head" class="secondary"></header>

<div class="jumbotron top-space">
    <div class="container">
        <?php if (isset($_SESSION['delete-user-success'])) : ?>
            <p class="text-center text-muted msg-alert">
                <font color="green">
                    <?= $_SESSION['delete-user-success'];
                    unset($_SESSION['delete-user-success']); ?>
                </font>
            </p>
            <hr>
        <?php endif; ?>
        <h3>Liste des admins</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Admin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= htmlspecialchars($user['name']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td><?= $user['roles'] ? 'Oui' : 'Non' ?></td>
                            <td><a href="edit-user.php?id=<?= $user['id'] ?>" class="btn btn-primary">Modifier</a></td>
                            <td><a href="logic/delete-user.php?id=<?= $user['id'] ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <a href="add-user.php" class="btn btn-success">Ajouter un utilisateur</a>
        </div>
    </div>
</div>
<?php include 'partials/footer.php'; ?>