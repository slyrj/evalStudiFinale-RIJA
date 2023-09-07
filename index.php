<?php
include 'partials/header.php';
?>
<section class="home" id="home">
    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">Garage-V-Parrot</span>
        <h4 data-aos="fade-up" data-aos-delay="300">Bienvenue sur notre site Web</h4>
        <p data-aos="fade-up" data-aos-delay="450">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quia illum quod perspiciatis harum in possimus? Totam consequuntur officia quia?</p>
        <a data-aos="fade-up" data-aos-delay="600" href="#" class="btn">book now</a>
    </div>
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
        <h4>Garage Vincentt Parrot</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde fugit repellat error deserunt nam aperiam odit libero quos provident. Nostrum?</p>
        <!-- <a href="#" class="btn">read more</a> -->
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde fugit repellat<br>error deserunt nam aperiam odit libero quos provident. Nostrum?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br> Unde fugit repellat error deserunt nam aperiam odit libero quos provident. Nostrum? Unde fugit repellat error deserunt nam aperiam odit libero quos provident. </p>
    </div>
</section>
<section class="review">
    <div class="content" data-aos="fade-right" data-aos-delay="300">
        <span>témognages</span>
        <h3>Quelques avis de nos clients</h3>
        <p>Négatifs ou positifs, lorem ipsum consectetur adipisicing elit. Assumenda laudantium corporis fugiat quae unde perspiciatis similique ab modi enim consequatur aperiam cumque distinctio facilis sit, debitis possimus asperiores non harum.</p>
    </div>
    <div class="box-container" data-aos="fade-left" data-aos-delay="600">
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <div class="info">
                    <h3>john deo</h3>
                    <span>★☆☆☆☆</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <div class="info">
                    <h3>john deo</h3>
                    <span>★★★☆☆</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <div class="info">
                    <h3>john deo</h3>
                    <span>★★★★★</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <div class="info">
                    <h3>john deo</h3>
                    <span>★★★★☆</span>
                </div>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <p>Ajouter un avis</p>
            <form action="">
                <input type="text" name="" placeholder="votre nom" class="noom" id="">
                <select name="rating" class="form-control" required>
                    <option value="" disabled selected>Sélectionnez une évaluation</option>
                    <option value="1">★☆☆☆☆</option>
                    <option value="2">★★☆☆☆</option>
                    <option value="3">★★★☆☆</option>
                    <option value="4">★★★★☆</option>
                    <option value="5">★★★★★</option>
                </select>
                <textarea name="content" class="form-control" rows="4" required></textarea>
                <input name="submit" type="submit" value="envoyer" class="btn">
            </form>
        </div>
    </div>
</section>

<?php
include 'partials/footer.php';
?>