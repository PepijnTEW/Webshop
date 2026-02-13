<?php
require_once __DIR__ . "/config/init.php";
include "./includes/header.php";
include "./includes/nav.php";
?>
<main>
    <section class="section" id="cart_section">
        <div class="content_wrapper" id="cart_inner">
            <div id="empty_cart">
                <p>Je winkelwagen is leeg</p>
                <a href="productspage.php" class="button" id="continue_shopping_btn">Verder winkelen</a>
            </div>
            <div id="cart_container">
                <div id="cart_items">
                    
                </div>
                <div id="cart_summary">
                    <h2>Samenvatting</h2>
                    <div class="summary_row">
                        <span>Subtotaal:</span>
                        <span>€109,97</span>
                    </div>
                    <div class="summary_row">
                        <span>Verzendkosten:</span>
                        <span>€5,95</span>
                    </div>
                    <div class="summary_row total">
                        <span>Totaal:</span>
                        <span>€115,92</span>
                    </div>
                    <a href="checkout.php" class="button" id="checkout_btn">Afrekenen</a>
                    <a href="productspage.php" id="continue_shopping_link">Verder winkelen</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "./includes/footer.php"; ?>
