<?php
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?= template_header('Home') ?>

<div class="featured">
    
</div>
<div class="recentlyadded content-wrapper">
    <h2>Recently Added Events</h2>
    <div class="events">
        <?php foreach ($recently_added_products as $product): ?>
            <a href="router.php?page=product&id=<?= $product['id'] ?>" class="product">
                <span class="price">&#8377;<?= number_format($product['price'], 2) ?></span>                 
                <?php if ($product['rrp'] > 0): ?>
                    <span class="rrp">&#8377;<?= number_format($product['rrp'], 2) ?></span>
                <?php endif; ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<?= template_footer() ?>
