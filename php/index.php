<?php
$servername = "mysql";
$username = "user";
$password = "password";
$dbname = "myapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Simple query to fetch data
$sql = "SELECT id, name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

