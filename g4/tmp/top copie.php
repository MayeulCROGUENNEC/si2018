<?php
include "src/functions/functions.php";
$connection = connect();
$cat1_data = getTopData($connection, "hostels");
$cat2_data = getTopData($connection, "restaurants");
$cat3_data = getTopData($connection, "spas");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/top100.css">
    <title></title>
</head>
<header class="header">
    <div class="headerNavTContainer">
        <div class="headerNavLogoContainer"><img class="headerNavLogo" src="src/components/img/Home/planewhite.png" alt="LogoUneAnneeDeVoyage" class="logo"></div>
        <div class="headerNavBurger"><img class="headerNavTel" src="src/components/img/Home/burger.png" alt="BurgerMenu" class="bugerMenu"></div>
    </div>
    <div class="headerNavContainer">
        <a class="headerNav" href="">Home</a>
        <a class="headerNav" href="">Actualités</a>
        <a class="headerNav" href="">Fiches pratiques</a>
        <a class="headerNav" href="">Boite à image</a>
        <a class="headerNav" href="">Top 100</a>
        <a class="headerNav" href="">Contact</a>
    </div>
    <div class="headerTitleContainer">
        <h1 class="headerTitle">TOP 100</h1>
        <h1 class="headerSubTitle">Découvrez notre top 100 des bars/restaurants/hôtels</h1>
    </div>
</header>
<!--
<body>
    <h1>Top 100 destinations</h1>
    <section class="top top_cat1">
        <h2>Category: hostels</h2>
        <?php displayTopContent($cat1_data) ?>
    </section>
    <section class="top top_cat2">
        <h2>Category: restaurants</h2>
        <?php displayTopContent($cat2_data) ?>
    </section>
    <section class="top top_cat3">
        <h2>Category: spas</h2>
        <?php displayTopContent($cat3_data) ?>
    </section>
</body>-->
<body>

    <h1 class="categorieTitle">TOP 100 DES</h1>
    <section class="categorieContainer">
    <section class="categorieContain">
        <h2 class="categorieSubTitle" >Hotels</h2>
        <?php displayTopContent($cat1_data) ?>
    </section>
    <section class="categorieContain">
        <h2 class="categorieSubTitle">Restaurants</h2>
        <?php displayTopContent($cat2_data) ?>
    </section>
    <section class="categorieContain">
        <h2 class="categorieSubTitle">Spas</h2>
        <?php displayTopContent($cat3_data) ?>
    </section>
</section>
<footer class="footer">
    <h1 class="footerPartenaire">PARTENAIRES</h1>
    <div class="footerPartImgContainer">
        <img class="footerPartImg" src="src/components/img/Accueil/adp-logo2.png" alt="">
        <img class="footerPartImg" src="src/components/img/Accueil/Fujifilm_logo_logotype.png" alt="">
        <img class="footerPartImg" src="src/components/img/Accueil/nikon-logo.png" alt="">
    </div>
    <div class="footerBotomContainer">
        <div class="footerBotomCopyContainer">
            <h1 class="footerBotomCopyContainerNav">Homepage</h1>
            <h1 class="footerBotomCopyContainerNav">About</h1>
            <h1 class="footerBotomCopyContainerNav">US contact</h1>
        </div>
        <div class="footerBotomCopyright">Tous droits réservés Une Année De Voyages ©2018-2020</div>
    </div>
</footer>

</body>
</html>
