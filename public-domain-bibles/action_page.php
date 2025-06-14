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
$sql="select text from bible where text like '%wisdom%' union all select text from ylt where text like '%wisdom%'";
//$sql="Select bible.text,ylt.text from bible,ylt where ylt.text  like '%wisdom'";
//$sql = "SELECT n, book, chapt,verse,text FROM bible ";
//$sql = "SELECT book,n,chapt,verse,text FROM bible,ylt WHERE text like '%wisdom%'";
//$sql2="SELECT book,n,chapt,verse,text FROM ylt WHERE text like '%wisdom%'";
//$sql = "SELECT ylt.Book,ukjv.Book,ylt.Text,ukjv.Text FROM ylt,Ukjv  WHERE Text like '%wisdom%'";
$result = $conn->query($sql);
//$result2=$conn2->query($sql2);

if ($result->num_rows > 0) {
  // output data of each row
 // echo "number of rows=".$result;
  while($row = $result->fetch_assoc()) {
    echo "book: " . $row["n"]. " - Name: " . $row["chapt"]. " " . $row["verse"]. $row["text"]. "<br>";
    echo "Book:" . $row["Book"]. "chapter" . $row["Chapter"]. "verse" . $row["verse"];
    //echo "number of rows=".$result;
  }
} else {
  echo "0 results";
}
$conn->close();







