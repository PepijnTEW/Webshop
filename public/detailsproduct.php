<?php
include "./includes/header.php";
include "./includes/nav.php";
require_once __DIR__ . "/config/db_products.php";
$row = $result->fetch_assoc();
?>
<main>
    <section class="section" id="product">
        <div class="content_wrapper" id="product_inner">
            <img id="product_item_img" src="<?= htmlspecialchars($row["img"]) ?>" alt="test">
            <div id="product_info">
                <p id="product_item_title"><?= htmlspecialchars($row["name"]) ?></p>
                <p id="product_item_description"><?= htmlspecialchars($row["description"]) ?></p>
                <p id="product_item_price">Price: <?= htmlspecialchars($row["price"]) ?></p>
                <form id="product_item_form" action="detailsproduct.php" method="get">
                    <p>Size</p>
                    <div>
                        <label for="xs">
                            <input type="radio" id="xs" name="size" value="xs">
                            <span>XS</span>
                        </label>
                        <label for="s">
                            <input type="radio" id="s" name="size" value="s">
                            <span>S</span>
                        </label>
                        <label for="m">
                            <input type="radio" id="m" name="size" value="m">
                            <span>M</span>
                        </label>
                        <label for="l">
                            <input type="radio" id="l" name="size" value="l">
                            <span>L</span>
                        </label>
                    </div>
                    <input class="button" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
</main>
<?php include "./includes/footer.php"; ?>