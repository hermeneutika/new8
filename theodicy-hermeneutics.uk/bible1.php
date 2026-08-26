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
$sql2="Select * from michael ";
$sql3="select * from govett";
$result=mysqli_query($conn,$sql);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);
if (mysqli_num_rows($result) and (mysqli_num_rows($result2))> 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result) and ($row2 = mysqli_fetch_assoc($result2)) and ($row3 = mysqli_fetch_assoc($result3)))   {
      echo "book:Bible " .$row["n"]."chapter".$row["chapt"]."<br>" ."text: " . $row["text"]. "<br>";
      echo "book:micha " .$row2["n"]."chapter".$row["chapt"]."<br>" ."text: " . $row2["text"]. "<br>";
      echo "book:govett " .$row3["n"] ."<br>" ."text: " . $row3["text"]. "<br>";
      
    }
    
  } else {
    echo "0 results";
  }
  
  mysqli_close($conn);

?>


</body>
</html>