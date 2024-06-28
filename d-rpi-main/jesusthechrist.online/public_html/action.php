<!DOCTYPE html>

<html>
<head>
<title>action</title>
<link href="menu.css" rel="stylesheet" type="text/css" />
 <link href="site.css" rel="stylesheet" type="text/css" />
 <?php include ("menu.php"); ?>
<?php include ("link.php"); ?>
</head>
<body>

<?php 


//echo var_dump($_POST);
//echo $_POST['book'];
//print_r($_POST);
$book=$_POST['book'];
$chapt=$_POST['chapt'];
$verse=$_POST['verse'];
echo "book=".$book;
echo "chapt=".$chapt;
echo "verse=".$verse;

$query="select * from bible where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
echo " ";
echo "<br>";
echo $row["text"];

?>




</body>
</html>
