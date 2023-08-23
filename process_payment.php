<?php
// Establish a database connection (replace with your own credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thanhtoan";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the form data
$stmt = $conn->prepare("INSERT INTO payments (full_name, card_number, expiration_date, cvv, package, age) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $full_name, $card_number, $expiration_date, $cvv, $package, $age);

// Get the form data
$full_name = $_POST['full_name'];
$card_number = $_POST['card_number'];
$expiration_date = $_POST['expiration_date'];
$cvv = $_POST['cvv'];
$package = $_POST['package'];
$age = $_POST['age'];

// Execute the statement
if ($stmt->execute()) {
    echo "Payment processed successfully.";
} else {
    echo "Error processing payment: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>