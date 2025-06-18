<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.4/dist/tailwind.min.css">
    <style>
        body {
            background: linear-gradient(to bottom, #4b6cb7, #182848, #5c3b78, #191970);
            height: 100vh; /* Set the body height to fill the viewport */
            display: flex; /* Use flexbox to center content vertically */
            align-items: center; /* Center content vertically */
            justify-content: center; /* Center content horizontally */
        }
    </style>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
</head>
<body class="font-sans leading-normal tracking-normal">
    <?php
    session_start();

    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        header('Location: /Event%20Management%20Systemm/router.php');
        exit;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $host = 'localhost';
        $dbname = 'event_management_system';
        $username = 'root';
        $password = '';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
                $stmt->execute([$username]);

                if ($row = $stmt->fetch()) {
                    if (strcmp($password, $row['password']) == 0) {
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] = $username;

                        header('Location: /Event%20Management%20Systemm/router.php');
                        exit;
                    } else {
                        $error = "Invalid username or password";
                    }
                } else {
                    $error = "Username not existing";
                }
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    session_destroy();
    ?>

    <div class="sm:w-96 sm:m-auto p-8 bg-white bg-opacity-75 rounded-lg">
        <h2 class="font-bold text-2xl text-gray-800 text-center mb-6">EventSpark: Igniting Event Excellence - Login</h2>
        <?php if(isset($error) && !empty($error)): ?>
            <p class="text-red-500 text-center"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="username">Username</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="Enter your username" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password">Password</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Enter your password" required>
            </div>
            <div class="flex justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit">Sign In</button>
            </div>
        </form>
        <div class="text-center mt-4">
            <a class="inline-block font-bold text-blue-500 hover:text-blue-800" href="/Event%20Management%20Systemm/signup.php">New user? Sign up!</a>
        </div>
    </div>
</body>
</html>
