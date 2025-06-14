 <?php
$servername = "localhost";
$username = "michael";
$password = "A7ndromeda!1";
$dbname = "rev";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "SELECT n, book, chapt,verse,text FROM bible where text %like $value";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "book: " . $row["n"]. " - Name: " . $row["chapt"]. " " . $row["verse"]. $row["text"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

?> 