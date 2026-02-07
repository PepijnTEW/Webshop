<?php
include "./includes/header.php";
include "./includes/nav.php";
?>
<main>

    <img id="hero_img" src="./img/site/hero.jpg" alt="test">
    <section class="section" id="promotion">
        <div class="content_wrapper" id="promotion_inner">
            <p class="subtitle">subtitle</p>
            <h2 class="title">title</h2>
            <p class="description">description</p>
            <a class="button" id="collection_button" href="./productspage.php?promotion=true">Shop</a>
        </div>
    </section>
    <section class="section" id="soon_available">
        <div>
            <img class="soon_available_img" src="./img/site/hero.jpg" alt="test">
            <img class="soon_available_img" src="./img/site/hero.jpg" alt="test">
        </div>
        <div class="content_wrapper" id="soon_available_inner">
            <p class="subtitle">Binnenkort verkijgbaar</p>
            <h2 id="soon_available_title">Collection Name</h2>
        </div>
    </section>
    <section class="section" id="featured">
        <div class="content_wrapper" id="featured_inner">
            <p>Featured now</p>
            <div id="featured_photos">
                <img class="featured_img" src="./img/site/hero.jpg" alt="test">
                <img class="featured_img" src="./img/site/hero.jpg" alt="test">
                <img class="featured_img" src="./img/site/hero.jpg" alt="test">
            </div>
        </div>
    </section>
    <section class="section" id="products">
        <div class="content_wrapper" id="products_inner"></div>
    </section>
</main>
<?php include "./includes/footer.php"; ?>
