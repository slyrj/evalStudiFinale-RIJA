<?php
include 'partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM users WHERE id=:id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        header('location: manage-user.php');
        die();
    }
} else {
    header('location: manage-user.php');
    die();
}
?>
<div class="container">
    <div class="row">
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">Modification</h1>
            </header>
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Modifier l'utilisateur</h3>
                        <?php if (isset($_SESSION['edit-user-success'])) : ?>
                            <p class="text-center text-muted msg-alert">
                                <font color="green"><?= $_SESSION['edit-user-success']; ?></font>
                            </p>
                            <hr>
                            <?php unset($_SESSION['edit-user-success']); ?>
                        <?php endif; ?>
                        <form action="logic/edit-user.php" enctype="multipart/form-data" method="POST">
                            <input type="hidden" value="<?= $user['id'] ?>" name="id">
                            <div class="top-margin">
                                <label>Nom</label>
                                <input type="text" value="<?= $user['name'] ?>" name="name" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" value="<?= $user['email'] ?>" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>Rôle</label>
                                <select name="roles" class="form-control">
                                    <option value="0" <?= $user['roles'] == 0 ? 'selected' : '' ?>>Employé</option>
                                    <option value="1" <?= $user['roles'] == 1 ? 'selected' : '' ?>>Admin</option>
                                </select>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action" name="submit" type="submit">Mettre à jour</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
<?php include 'partials/footer.php'; ?>