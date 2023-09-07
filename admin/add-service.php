<?php
$name = $_SESSION['add-services-data']['name'] ?? null;
$image = $_SESSION['add-service-data']['image'] ?? null;

unset($_SESSION['add-service-data']);
include 'partials/header.php';
?>

<header id="head" class="secondary"></header>

<div class="container">
	<div class="row">
		<article class="col-xs-12 maincontent">
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="thin text-center">Ajouter un service</h3>
						<p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signin.php">Login</a>
							adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis
							odio. </p>

						<?php
						if (isset($_SESSION['add-service-error'])) : ?>
							<p class="text-center text-muted msg-alert">
								<font color="red">
									<?= $_SESSION['add-service-error']; ?> </font>
							</p>
							<hr>
						<?php endif ?>
						<form action="logic/add-services.php" enctype="multipart/form-data" method="POST">
							<div class="top-margin">
								<label>Nom</label>
								<input type="text" value="<?= $name ?>" name="name" class="form-control">
							</div>

							<div class="top-margin">
								<label>Image <span class="text-danger">*</span></label>
								<input type="file" class="form-control" <?= $image ?> id="image_service" name="image" accept="image/*" required>
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
<?php
include 'partials/footer.php'; ?>