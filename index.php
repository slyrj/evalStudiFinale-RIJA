<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
<header class="header">   
    <div id="menu-btn" class="fas fa-bars"></div>
    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <img src="images/logo.png
        " alt="" width="150" height="50"></a>
    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="index.html">Accueil</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="services.html">Nos Préstations </a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="ventes.html">Véhicules Occasuions</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="contact.html">Contact</a>
        <!-- <a data-aos="fade-up" data-aos-delay="600" href="login.html" class="btn-nav">S'identifier</a> -->
    </nav>
</header>
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
<section class="review"><div class="content" data-aos="fade-right" data-aos-delay="300">
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
                <input name= "submit" type="submit" value="envoyer" class="btn">
            </form>
        </div>
    </div>
</section>
<section class="footer">
    <div class="box-container">
        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <h3>Statut</h3>
            <p>  <i class="fa-solid fa-door-closed"></i><br><br>
                        Actuellement fermé </p>
                        <!-- <i class="fa-solid fa-door-open"></i> -->
        </div> <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3>Horaires d'ouverture</h3>
            <p><i class="fa-regular fa-clock"></i>Lundi :  06:06 - 22:07s</p>
            <p><i class="fa-regular fa-clock"></i>Mardi : 03:07 - 21:07</p>
            <p><i class="fa-regular fa-clock"></i>Mercredi : 06:45 - 12:00</p>
            <p><i class="fa-regular fa-clock"></i>Jeudi : 05:06 - 20:07</p>
            <p><i class="fa-regular fa-clock"></i>Vendredi : 07:00 - 19:00</p>
            <p><i class="fa-regular fa-clock"></i>Samedi : 06:30 - 17:00</p>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>quick links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="services" class="links"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="ventes" class="links"> <i class="fas fa-arrow-right"></i> destination </a>
            <a href="contact" class="links"> <i class="fas fa-arrow-right"></i> services </a>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="logo"> <i class="fas fa-paper-plane"></i>Garage-V-Parrot </a>
            <p> <i class="fas fa-map"></i> mumbai, india </p>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
            <p> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
    </div>
</section>
<div class="credit"><p>&copy; 2023 Garage V-Parrot. Tous droits réservés.</p></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="js/script.js"></script>
<script>
    AOS.init({
        duration: 800,
        offset:150,
    });
</script>
</body>
</html>