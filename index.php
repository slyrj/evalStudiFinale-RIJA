<?php
include 'partials/header.php';
require 'admin/logic/functions.php';
// Récupération des témoignages publiés depuis la base de données
$get_reviews_query = "SELECT * FROM reviews WHERE is_published = 1 ORDER BY created_at DESC";
$reviews_result = mysqli_query($connection, $get_reviews_query);
?>
<section class="home" id="home">
    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">Garage-V-Parrot</span>
        <h4 data-aos="fade-up" data-aos-delay="300"> Bienvenue sur notre site Web</h4>
        <p data-aos="fade-up" data-aos-delay="450">Nous sommes ravis de vous accueillir sur notre site web. Chez
            Garage-V-Parrot, nous nous engageons à fournir des services automobiles exceptionnels pour répondre à tous
            vos besoins. Que ce soit pour l'entretien, la réparation ou la personnalisation de votre véhicule, notre
            équipe expérimentée est là pour vous accompagner.</p>
        <?php
        if (isset($_SESSION['review-success'])) :
            echo '<p class="text-center text-muted msg-alert"><font color="green">' . $_SESSION['review-success'] . '</font></p>';
            unset($_SESSION['review-success']);
            echo '<hr>';
        endif;
        ?>
    </div>
</section>
<section class="about" id="about">

    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
        <video src="images/about-vid-1.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
            <span class="control-btn" data-src="images/about-vid-2.mp4"></span>
            <span class="control-btn" data-src="images/about-vid-3.mp4"></span>
        </div>
    </div>
    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>A propos de nous</span>
        <p>Le Garage V. Parrot est une entreprise familiale fondée en 1972 par Vincent Parrot. Passionné de mécanique
            depuis son plus jeune âge, Vincent a appris le métier auprès de son père. Il a ensuite ouvert son propre
            garage en 1995, et depuis, il n'a cessé de se perfectionner et de s'équiper des dernières technologies.</p>
        <p>L'équipe du Garage V. Parrot est composée de mécaniciens qualifiés et expérimentés. Ils sont tous passionnés
            par leur métier et ils sont toujours à la recherche des meilleures solutions pour leurs clients.</p>
    </div>
</section>
<section class="review">
    <div class="content" data-aos="fade-right" data-aos-delay="300">
        <span>témoignages</span>
        <h3>Quelques avis de nos clients</h3>
        <p>Négatifs ou positifs, les avis de nos clients sont essentiels et comptent beaucoup pour nous.</p>
    </div>
    <div class="box-container" data-aos="fade-left" data-aos-delay="600">
        <?php while ($row = mysqli_fetch_assoc($reviews_result)) { ?>
            <div class="box">
                <p><?= $row['content'] ?></p>
                <div class="user">
                    <div class="info">
                        <h3 style="color:  #90ee90;"><?= $row['name'] ?></h3>
                        <span style="color: #fdc939;"><?= getStars($row['rating']) ?></span>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <p>Ajouter un avis</p>
            <form action="logic/submit-review.php" method="post">
                <input type="text" name="name" placeholder="votre nom" class="nom" id="">
                <select name="rating" class="form-control" required>
                    <option value="" disabled selected>Sélectionnez</option>
                    <option value="1">★☆☆☆☆</option>
                    <option value="2">★★☆☆☆</option>
                    <option value="3">★★★☆☆</option>
                    <option value="4">★★★★☆</option>
                    <option value="5">★★★★★</option>
                </select>
                <textarea name="content" class="form-control" rows="4" required></textarea>
                <input name="submit" type="submit" value="envoyer" class="btn" />
            </form>
        </div>
    </div>
</section>
<?php include 'partials/footer.php'; ?>