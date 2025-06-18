<?= template_header('Events') ?>

<div class="products content-wrapper">
    <h1>Sports Events</h1>
    <?php
    $num_products_on_each_page = 4;
    $current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int) $_GET['p'] : 1;
    $stmt = $pdo->prepare('SELECT * FROM products WHERE category = "Sports" ORDER BY date_added DESC LIMIT ?,?');
    $stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
    $stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total_products = $pdo->query('SELECT * FROM products WHERE category = "Comedy"')->rowCount();
    ?>
    <p>
        <?= $total_products ?> Events
    </p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
            <a href="router.php?page=product&id=<?= $product['id'] ?>" class="product">
                <img src="imgs/<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>">
                <span class="name">
                    <?= $product['name'] ?>
                </span>
                <span class="price">
                    ₹
                    <?= $product['price'] ?>
                    <?php if ($product['rrp'] > 0): ?>
                        <span class="rrp">₹
                            <?= $product['rrp'] ?>
                        </span>
                    <?php endif; ?>
                </span>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
            <a href="router.php?page=products&p=<?= $current_page - 1 ?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
            <a href="router.php?page=products&p=<?= $current_page + 1 ?>">Next</a>
        <?php endif; ?>
    </div>
</div>

<div class="products content-wrapper">
    <h1>Comedy Shows</h1>
    <?php
    $num_products_on_each_page = 4;
    $current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int) $_GET['p'] : 1;
    $stmt = $pdo->prepare('SELECT * FROM products WHERE category = "Comedy" ORDER BY date_added DESC LIMIT ?,?');
    $stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
    $stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total_products = $pdo->query('SELECT * FROM products WHERE category = "Comedy"')->rowCount();
    ?>
    <p>
        <?= $total_products ?> Events
    </p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
            <a href="router.php?page=product&id=<?= $product['id'] ?>" class="product">
                <img src="imgs/<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>">
                <span class="name">
                    <?= $product['name'] ?>
                </span>
                <span class="price">
                    ₹
                    <?= $product['price'] ?>
                    <?php if ($product['rrp'] > 0): ?>
                        <span class="rrp">₹
                            <?= $product['rrp'] ?>
                        </span>
                    <?php endif; ?>
                </span>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
            <a href="router.php?page=products&p=<?= $current_page - 1 ?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
            <a href="router.php?page=products&p=<?= $current_page + 1 ?>">Next</a>
        <?php endif; ?>
    </div>
</div>


<div class="products content-wrapper">
    <h1>Concert Shows</h1>
    <?php
    $num_products_on_each_page = 4;
    $current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int) $_GET['p'] : 1;
    $stmt = $pdo->prepare('SELECT * FROM products WHERE category = "Concert" ORDER BY date_added DESC LIMIT ?,?');
    $stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
    $stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total_products = $pdo->query('SELECT * FROM products WHERE category = "Concert"')->rowCount();
    ?>
    <p>
        <?= $total_products ?> Events
    </p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
            <a href="router.php?page=product&id=<?= $product['id'] ?>" class="product">
                <img src="imgs/<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>">
                <span class="name">
                    <?= $product['name'] ?>
                </span>
                <span class="price">
                    ₹
                    <?= $product['price'] ?>
                    <?php if ($product['rrp'] > 0): ?>
                        <span class="rrp">₹
                            <?= $product['rrp'] ?>
                        </span>
                    <?php endif; ?>
                </span>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
            <a href="router.php?page=products&p=<?= $current_page - 1 ?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
            <a href="router.php?page=products&p=<?= $current_page + 1 ?>">Next</a>
        <?php endif; ?>
    </div>
</div>

<div class="products content-wrapper">
    <h1>Wedding</h1>
    <?php
    $num_products_on_each_page = 4;
    $current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
    $stmt = $pdo->prepare('SELECT * FROM products WHERE category = "Wedding" ORDER BY date_added DESC LIMIT ?,?');
    $stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
    $stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total_products = $pdo->query('SELECT * FROM products WHERE category = "Wedding"')->rowCount();
    ?>
    <p>
        <?= $total_products ?> Events
    </p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
            <div class="product">
                <a href="router.php?page=product&id=<?= $product['id'] ?>">
                    <img src="imgs/<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>">
                    <span class="name">
                        <?= $product['name'] ?>
                    </span>
                    <span class="price">
                        ₹
                        <?= $product['price'] ?>
                        <?php if ($product['rrp'] > 0): ?>
                            <span class="rrp">₹
                                <?= $product['rrp'] ?>
                            </span>
                        <?php endif; ?>
                    </span>
                </a>
                <div class="party-booking">
                    <label for="party">Enter a date and time for your party booking:</label>
                    <input id="party" type="datetime-local" name="partydate" value="2017-06-01T08:30" />
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
            <a href="router.php?page=products&p=<?= $current_page - 1 ?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
            <a href="router.php?page=products&p=<?= $current_page + 1 ?>">Next</a>
        <?php endif; ?>
    </div>
</div>


<div class="products content-wrapper">
    <h1>Workshops</h1>
    <?php
    $num_products_on_each_page = 4;
    $current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int) $_GET['p'] : 1;
    $stmt = $pdo->prepare('SELECT * FROM products WHERE category = "Workshop" ORDER BY date_added DESC LIMIT ?,?');
    $stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
    $stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total_products = $pdo->query('SELECT * FROM products WHERE category = "Workshop"')->rowCount();
    ?>
    <p>
        <?= $total_products ?> Events
    </p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
            <a href="router.php?page=product&id=<?= $product['id'] ?>" class="product">
                <img src="imgs/<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>">
                <span class="name">
                    <?= $product['name'] ?>
                </span>
                <span class="price">
                    ₹
                    <?= $product['price'] ?>
                    <?php if ($product['rrp'] > 0): ?>
                        <span class="rrp">₹
                            <?= $product['rrp'] ?>
                        </span>
                    <?php endif; ?>
                </span>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
            <a href="router.php?page=products&p=<?= $current_page - 1 ?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
            <a href="router.php?page=products&p=<?= $current_page + 1 ?>">Next</a>
        <?php endif; ?>
    </div>
</div>

<?= template_footer() ?>