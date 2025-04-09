<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dreamspace";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form values
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Message sent successfully!'); window.location.href='contact.html';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
