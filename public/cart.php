<?php
require_once __DIR__ . "/config/init.php";
require_once __DIR__ . "/config/cart_logic.php";
include "./includes/header.php";
include "./includes/nav.php";

if (isset($_POST['remove_from_cart']) && isset($_POST['remove_item'])) {
    removeFromCart($_POST['remove_item']);
} $cart = getCart();

?>
<main>
    <section class="section" id="cart_section">
        <div class="content_wrapper" id="cart_inner">
            <div id="cart_items">
                <?php 
                if (empty($cart['items'])){?>
                    <div id="empty_cart" class="cart_properties">
                        <p>Je winkelwagen is leeg</p>
                        <a href="productspage.php" class="button" id="continue_shopping_btn">Verder winkelen</a>
                    </div>
                    <?} else {
                    foreach ($cart['items'] as $item): ?>
                        <div class="cart_item cart_properties">
                            <img src="<?= $item['image'] ?>">
                            <div class="cart_item_info">
                                <h4><?= $item['name'] ?></h4>
                                <p>Maat: <?= $item['size'] ?></p>
                                <p>Aantal: <?= $item['quantity'] ?></p>
                                <p>Prijs: €<?= $item['price'] ?></p>
                                <form method="POST" action="" style="display: inline;">
                                    <input type="hidden" name="remove_item" value="<?= $item['cart_key'] ?>">
                                    <button type="submit" name="remove_from_cart" class="button remove-btn">Verwijder</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; }?>
                </div>
                <div id="cart_summary">
                    <h2>Samenvatting</h2>
                    <div class="summary_row total">
                        <span>Totaal:</span>
                        <span>
                            <?php 
                                if (empty($cart['total'])){
                                    echo '€0';
                                } else {
                                    echo '€' . $cart['total'];
                                } 
                            ?>
                        </span>
                    </div>
                <a href="checkout.php" class="button" id="checkout_btn">Afrekenen</a>
            </div>
        </div>
    </section>
</main>
<?php include "./includes/footer.php"; ?>
