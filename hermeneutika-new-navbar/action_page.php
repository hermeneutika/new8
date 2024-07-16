<?php
$value =  $_POST['fname'];
echo $value;
  
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
$sql="SELECT bible.text, ylt.text FROM bible, ylt WHERE bible.text like '%wisdom%'";
//$sql="(Select  n, book, chapt,verse,text FROM bible where text like '%wisdom%')
//union all
//(select Book,Chapter,text,verse from ylt where text like '%wisdom%')";
//$sql = "SELECT n, book, chapt,verse,text FROM bible ";
//$sql = "SELECT ylt.Book,ukjv.Book,ylt.Text,ukjv.Text FROM ylt,Ukjv  WHERE Text like '%wisdom%'";
//$sql="select n,chapt,verse,text from bible where text like '%wisdom%' union all select Book,Chapter,text,verse from ylt where text like '%wisdom%'";
//$sql = "SELECT n,chapt,verse,text FROM bible WHERE text like '%wisdom%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "book: " . $row["n"]. " - Name: " . $row["chapt"]. " " . $row["verse"]. $row["text"]. "<br>";
    echo "book: " . $row["Book"]. " - Name: " . $row["Chapter"]. " " . $row[".Verse"]. $row["text"]. "<br>";
  
  }
  
}
 else {
  echo "0 results";
}
$conn->close();







