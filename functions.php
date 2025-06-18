<?php
function pdo_connect_mysql()
{
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'event_management_system';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        exit('Failed to connect to database!');
    }
}
function template_header($title)
{
    $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
    echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>
            <div class="content-wrapper">
                <h1>EventSpark:
                Igniting Event Excellence</h1>
                <nav>
                    <a href="router.php">Home</a>
                    <a href="router.php?page=products">Events</a>
                    <a href="router.php?page=about">About Us</a>
                    <a href="router.php?page=contact">Contact Us</a>
                    <a href="router.php?page=feedback">Feedback</a>
                    <a href="router.php?page=logout">Logout</a>
                </nav>
                <div class="link-icons">
                    <a href="router.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
                        <span>$num_items_in_cart</span>
					</a>
                </div>
            </div>
        </header>
        <main>
EOT;
}
function template_footer()
{
    $year = date('Y');
    echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, EventSpark:
                Igniting Event Excellence. Developed by Our Team with ❤️</p>
            </div>
        </footer>
    </body>
</html>
EOT;
}
?>