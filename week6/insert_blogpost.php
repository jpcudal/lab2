<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalproject";

// Form input fields from index.html
$title = $_POST["title"];
$content = $_POST["content"];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO blog_post (title,content)
VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>