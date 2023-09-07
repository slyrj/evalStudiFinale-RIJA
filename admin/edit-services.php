<?php

include 'partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM services WHERE id=:id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $service = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$service) {
        header('Location: manage-service.php');
        die();
    }
} else {
    header('Location: manage-service.php');
    die();
}
?>

<header id="head" class="secondary"></header>

<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Registration</li>
    </ol>

    <div class="row">

        <article class="col-xs-12 maincontent">

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Modifier le service</h3>
                        <p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signin.php">Login</a>
                            adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis
                            odio. </p>

                        <?php
                        if (isset($_SESSION['edit-service'])) : ?>
                            <p class="text-center text-muted msg-alert">
                                <font color="red">
                                    <?= $_SESSION['edit-service']; ?> </font>
                            </p>
                            <hr>
                        <?php endif ?>
                        <form action="logic/edit-services.php" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" value="<?= $service['id'] ?>">
                            <div class="top-margin">
                                <label>Nom</label>
                                <input type="text" value="<?= $service['name'] ?>" name="name" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>Image <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="image_service" name="image" accept="image/*" required>
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
<?php
include 'partials/footer.php'; ?>