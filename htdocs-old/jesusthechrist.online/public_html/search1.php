<!DOCTYPE html>

<html>
<head>
<title>main search</title><link href="menu.css" rel="stylesheet" type="text/css" />
 <link href="site.css" rel="stylesheet" type="text/css" />
 <?php include ("menu.php"); ?>
<?php include ("link.php"); ?>
</head>
<body>
<div class="display">
<?php
$st=$_POST['st'];

echo $st;


$sql="select * from bible where text like '%$st%';";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0)
$no=mysqli_num_rows($result);
{

 while($row = mysqli_fetch_array($result)){
 echo $row['text'];
echo $no;
echo " ";
echo "<br>";
echo "<br>";
 }
 }
 }
 



?>

</div>

</body>
</html>
