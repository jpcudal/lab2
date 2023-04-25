<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalproject";
$port =3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, content, reg_date FROM blog_post";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // display table heading
  echo" <table>";
  echo"<tr>";
  echo"  <th>ID</th>";
  echo"  <th>title</th>";
  echo"  <th>content</th>";
  echo"  <th>Reg Date</th>";
  echo"</tr>";
 
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>"."<td>" . $row["id"]. "<td>" . $row["title"]. " " . $row["content"]."<td>"  . $row["reg_date"]. "</tr>";
  }
  echo"</table>";
} else {
  echo "0 results";
}
$conn->close();
?>