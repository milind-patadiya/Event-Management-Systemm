<?php
// Start the session
session_start();

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "event_management_system"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $cardname = $_POST['cardname'];
    $ccnumber = $_POST['ccnumber'];
    $expirymonth = $_POST['expirymonth'];
    $expiryyear = $_POST['expiryyear'];
    $cvv = $_POST['cvv'];

    $stmt = $conn->prepare("INSERT INTO payment_detail(Fullname, Email, Address, City, State, Zipcode, Cardname, ccnumber, Expirymonth, Expiryyear, cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $fullname, $email, $address, $city, $state, $zipcode, $cardname, $ccnumber, $expirymonth, $expiryyear, $cvv);

    if($stmt->execute()) {
        echo "<script>alert('Payment successful')</script>";

        // Ending the session
        session_unset();
        session_destroy();
    }
    else {
        echo "<script>alert('Invalid details')</script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Payment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="email"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Payment Form</h2>
        <form action="#" method="post">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>

            <div style="display: flex; justify-content: space-between;">
                <div style="flex: 0 0 48%;">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div style="flex: 0 0 48%;">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" required>
                </div>
            </div>

            <label for="zipcode">Zip Code</label>
            <input type="text" id="zipcode" name="zipcode" required>

            <label for="cardname">Name on Card</label>
            <input type="text" id="cardname" name="cardname" required>

            <label for="ccnumber">Credit Card Number</label>
            <input type="text" id="ccnumber" name="ccnumber" required>

            <div style="display: flex; justify-content: space-between;">
                <div style="flex: 0 0 48%;">
                    <label for="expirymonth">Expiry Month</label>
                    <input type="text" id="expirymonth" name="expirymonth" required>
                </div>
                <div style="flex: 0 0 48%;">
                    <label for="expiryyear">Expiry Year</label>
                    <input type="text" id="expiryyear" name="expiryyear" required>
                </div>
            </div>

            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" required>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
