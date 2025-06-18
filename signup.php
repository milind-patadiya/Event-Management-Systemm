<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.4/dist/tailwind.min.css">
    <style>
        body {
            background: linear-gradient(to bottom, #ff7e5f, #feb47b, #ffdfa0, #ffecc2);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
</head>
<body class="font-sans leading-normal tracking-normal">
    <?php
    $host = 'localhost';
    $dbname = 'event_management_system';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        if (isset($_POST['submit'])) {
            
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            
            $stmt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?,?,?)');
            $result = $stmt->execute([$username, $email, $password]);
            
            if ($result) {
                header('location: /Event%20Management%20Systemm/index.php');
            } else {
                header('location: /Event%20Management%20Systemm/signup.php');
            }
        }

    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
    ?>
    <div class="sm:w-96 sm:m-auto p-8 bg-white bg-opacity-75 rounded-lg">
        <h2 class="font-bold text-2xl text-gray-800 text-center mb-6">EventSpark: Igniting Event Excellence - Sign Up</h2>
        <form method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="username">Username</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="Enter your username" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password">Password</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Enter your password" required>
            </div>
            <div class="flex justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit">Sign Up</button>
            </div>
        </form>
        <div class="text-center mt-4">
            <a class="inline-block font-bold text-blue-500 hover:text-blue-800" href="/Event%20Management%20Systemm/login.php">Already have an account? Sign in!</a>
        </div>
    </div>
</body>
</html>
