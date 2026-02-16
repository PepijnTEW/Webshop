<?php
require_once __DIR__ . "/config/db_products.php";
include "./includes/header.php";
include "./includes/nav.php";

function isChecked($name, $value = null) {
    if (!isset($_GET[$name])) {
        return false;
    }
    
    if (is_array($_GET[$name])) {
        return in_array($value, $_GET[$name]);
    } else {
        return $value ? ($_GET[$name] == $value) : true;
    }
}
?>
<main>
    <section class="section" id="shop">
        <div class="content_wrapper" id="shop_inner">
            <form id="shop_sidebar">
                <div>
                    <h3>Type</h3>
                    <label for="male1">
                        <input type="checkbox" id="male1" name="type[]" value="male"
                        <?= isChecked('type', 'male') ? 'checked' : '' ?>>
                        <span>Man</span>
                    </label>
                    <label for="female1">
                        <input type="checkbox" id="female1" name="type[]" value="female"
                        <?= isChecked('type', 'female') ? 'checked' : '' ?>>
                        <span>Woman</span>
                    </label>
                    <label for="children1">
                        <input type="checkbox" id="children1" name="type[]" value="children"
                        <?= isChecked('type', 'children') ? 'checked' : '' ?>>
                        <span>Kids</span>
                    </label>
                </div>
                <button class="button">Go</button>
            </form>
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
