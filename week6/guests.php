<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb05";
$port =3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // display table heading
  echo" <table>";
  echo"<tr>";
  echo"  <th>ID</th>";
  echo"  <th>Name</th>";
  echo"  <th>Email</th>";
  echo"  <th>Reg Date</th>";
  echo"</tr>";
 
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>"."<td>" . $row["id"]. "<td>" . $row["firstname"]. " " . $row["lastname"]."<td>" . $row["email"]. "<td>" . $row["reg_date"]. "</tr>";
  }
  echo"</table>";
} else {
  echo "0 results";
}
$conn->close();
?>