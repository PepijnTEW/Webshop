<?php
include "./includes/header.php";
include "./includes/nav.php";
?>
<main>
    <img id="hero_img" src="./img/site/hero.jpg" alt="test">
    <section class="section" id="promotion">
        <div class="content_wrapper" id="promotion_inner">
            <p id="collection_subtitle">subtitle</p>
            <h2 id="collection_title">title</h2>
            <p id="collection_description">description</p>
            <a class="button" id="collection_button" href="#">Shop</a>
        </div>
    </section>
    <section class="section" id="soon_available">
        <div>
            <img class="soon_available_img" src="./img/site/hero.jpg" alt="test">
            <img class="soon_available_img" src="./img/site/hero.jpg" alt="test">
        </div>
        <div class="content_wrapper" id="soon_available_inner">
            <p id="soon_available_subtitle">Binnenkort verkijgbaar</p>
            <h2 id="soon_available_title">Collection Name</h2>
            <a class="button" id="soon_available_button" href="#">Shop</a>
        </div>
    </section>
</main>
<?php include "./includes/footer.php"; ?>
