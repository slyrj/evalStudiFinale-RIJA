<?php
include 'partials/header.php';

$name = $_SESSION['signup-data']['name'] ?? '';
$email = $_SESSION['signup-data']['email'] ?? '';
$roles = $_SESSION['signup-data']['roles'] ?? 0;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? '';
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? '';

unset($_SESSION['signup-data']);
?>
<header id="head" class="secondary"></header>

<div class="container">
    <div class="row">
        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Ajouter un utilisateur</h3>
                        <p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signin.php">Login</a>
                            adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis
                            odio. </p>
                        <?php if (isset($_SESSION['signup'])) : ?>
                            <p class="text-center text-muted msg-alert">
                                <font color="red"><?= $_SESSION['signup']; ?></font>
                            </p>
                            <hr>
                        <?php endif; ?>
                        <form action="logic/add-user.php" method="POST">
                            <div class="top-margin">
                                <label>Nom</label>
                                <input type="text" value="<?= htmlspecialchars($name) ?>" name="name" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" value="<?= htmlspecialchars($email) ?>" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label>Rôle</label>
                                <select name="roles" class="form-control">
                                    <option value="0" <?= $roles == 0 ? 'selected' : '' ?>>Employé</option>
                                    <option value="1" <?= $roles == 1 ? 'selected' : '' ?>>Admin</option>
                                </select>
                            </div>

                            <div class="row top-margin">
                                <div class="col-sm-6">
                                    <label>Mot de passe <span class="text-danger">*</span></label>
                                    <input type="password" name="createpassword" value="<?= htmlspecialchars($createpassword) ?>" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label>Confirmer le mot de passe <span class="text-danger">*</span></label>
                                    <input type="password" name="confirmpassword" value="<?= htmlspecialchars($confirmpassword) ?>" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action" name="submit" type="submit">Enregistrer</button>
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