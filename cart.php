<?php
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    $removeProductId = $_GET['remove'];
    unset($_SESSION['cart'][$removeProductId]);
    header('Location: router.php?page=cart');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
        $productId = (int)$_POST['product_id'];
        $quantity = (int)$_POST['quantity'];

        $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
        $stmt->execute([$productId]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($product && $quantity > 0) {
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                $_SESSION['cart'][$productId] = ($_SESSION['cart'][$productId] ?? 0) + $quantity;
            } else {
                $_SESSION['cart'] = [$productId => $quantity];
            }
        }
        header('Location: router.php?page=cart');
        exit;
    }

    if (isset($_POST['update']) && isset($_SESSION['cart'])) {
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'quantity') !== false && is_numeric($value)) {
                $id = str_replace('quantity-', '', $key);
                $quantity = (int)$value;
                if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                    $_SESSION['cart'][$id] = $quantity;
                }
            }
        }
        header('Location: router.php?page=cart');
        exit;
    }

    if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        header('Location: placeorder.php');
        exit;
    }
}

$productsInCart = $_SESSION['cart'] ?? [];
$products = [];
$subtotal = 0.00;

if ($productsInCart) {
    $placeholders = implode(',', array_fill(0, count($productsInCart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $placeholders . ')');
    $stmt->execute(array_keys($productsInCart));
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$productsInCart[$product['id']];
    }
}
?>

<?= template_header('Cart') ?>

<div class="cart content-wrapper">
    <h1>Booking</h1>
    <form action="router.php?page=cart" method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Events</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                    <tr>
                        <td colspan="5" style="text-align:center;">You have no event added in your Cart</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td class="img">
                                <a href="router.php?page=product&id=<?= $product['id'] ?>">
                                    <img src="imgs/<?= $product['img'] ?>" width="50" height="50" alt="<?= $product['name'] ?>">
                                </a>
                            </td>
                            <td>
                                <a href="router.php?page=product&id=<?= $product['id'] ?>">
                                    <?= $product['name'] ?>
                                </a>
                                <br>
                                <a href="router.php?page=cart&remove=<?= $product['id'] ?>" class="remove">Remove</a>
                            </td>
                            <td class="price">&#8377;<?= $product['price'] ?></td>
                            <td class="quantity">
                                <input type="number" name="quantity-<?= $product['id'] ?>"
                                    value="<?= $productsInCart[$product['id']] ?? 0 ?>" min="1" max="<?= $product['quantity'] ?>"
                                    placeholder="Quantity" required>
                            </td>
                            <td class="price">&#8377;<?= $product['price'] * ($productsInCart[$product['id']] ?? 0) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Subtotal</span>
            <span class="price">&#8377;<?= $subtotal ?></span>
        </div>
        <div class="buttons">
            <input type="submit" value="Update" name="update">
            <input type="submit" value="Book" name="placeorder">
        </div>
    </form>
</div>

<?= template_footer() ?>
