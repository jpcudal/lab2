<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Form input fields from index.html
$Fullname = $_POST["Fullname"];
$Nickname = $_POST["Nickname"];
$hobbies = $_POST["hobbies"];
$birthday = $_POST["birthday"];
$comments = $_POST["comments"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO form (Fullname , Nickname , birthday, hobies, interest, comments)
VALUES ('$Fullname ', '$Nickname', '$hobbies', '$birthday', '$comments')";

if ($conn->query($sql) === false) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 