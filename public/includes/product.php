
<a class="shop_item" href="./detailsproduct.php?id=<?= htmlspecialchars($row["id"]) ?>">
    <img class="shop_item_img" src="<?= htmlspecialchars($row["img"]) ?>" alt="test">
    <p class="shop_item_title"><?= htmlspecialchars($row["name"]) ?></p>
    <p class="shop_item_description"><?= htmlspecialchars($row["description"]) ?></p>
    <p class="shop_item_price"><?= htmlspecialchars($row["price"]) ?></p>
</a>