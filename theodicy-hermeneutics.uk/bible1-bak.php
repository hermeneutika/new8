<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'nav.php'; ?>

    <?php


//open database
$servername="localhost";
$username="michael";
$password="A7ndromeda!1";
$db="rev";
// open database
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
    $search1=$_POST['search1'];
    echo "search1=".$search1;
$sql="select * from bible where text like '%$search1%'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "book: " .$row["n"] ."<br>" ."text: " . $row["text"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  
  mysqli_close($conn);

?>


</body>
</html>