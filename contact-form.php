<?php
$host = 'localhost';
$dbname = 'event_management_system';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $pdo->prepare('INSERT INTO queries (name, email, message) VALUES (?,?,?)');
    $result = $stmt->execute([$name, $email, $password]);
    if ($result) {
        ?>
        <script>window.alert("Submitted successfully")</script>
        <?php
        header('location: /Event%20Management%20Systemm/contact.php');
    } else {
        ?>
        <script>window.alert("There's some problem!")</script>
        <?php
        header('location: /Event%20Management%20Systemm/contact.php');
    }
}

?>