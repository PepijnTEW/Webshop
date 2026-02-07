<?php
include "./includes/header.php";
include "./includes/nav.php";
require_once __DIR__ . "/config/db_products.php";
?>
<main>
    <section class="section" id="shop">
        <div class="content_wrapper" id="shop_inner">
            <div id="shop_sidebar">Filters</div>
            <div id="shop_content">
                <?php
                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        include "./includes/product.php";
                    }
                } else {
                    echo "<p>Geen producten gevonden</p>";
                }
                ?>
            </div>
        </div>
    </section>
</main>
<?php include "./includes/footer.php"; ?>
