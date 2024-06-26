<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
<link href="site.css" rel="stylesheet" type="text/css" />
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'rev'; // Database Name
 
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}
$bible="bible";
 $table1="seiss";
 $table2="govett";
 $table3="swaggert";
 $table4="michael";
 $table5="andrew";
 
 

$sql1 = "SELECT * FROM seiss where text<>'' limit 2";
$sql2 = "SELECT * FROM govett where text<>'' limit 2";
$sql3 = "SELECT * FROM swaggert where text<>'' limit 2";
$sql4 = "SELECT * FROM michael where text<>'' limit 2";
$sql5 = "SELECT * FROM andrew where text<>''  limit 2";
$sql="select seiss.text,bible.text,michael.text,govett.text,andrew.text from bible,seiss,michael,govett,andrew where seiss.text<>'' limit 2 ";
//$sql6 = "Select * from bible where seiss.full=bible.full and seiss.text<>'';




$resultset=mysqli_query($conn,$sql);        
$resultset1 = mysqli_query($conn, $sql1);
$resultset2 = mysqli_query($conn, $sql2);
$resultset3 = mysqli_query($conn, $sql3);
$resultset4 = mysqli_query($conn, $sql4);
$resultset5 = mysqli_query($conn, $sql5);
$numberofrows=mysqli_num_rows($resultset);
//echo $numberofrows;
//echo $resultset1;
$row=mysqli_fetch_array($resultset);
$row1=mysqli_fetch_array($resultset1);
$row2=mysqli_fetch_array($resultset2);
$row3=mysqli_fetch_array($resultset3);
$row4=mysqli_fetch_array($resultset4);
$row5=mysqli_fetch_array($resultset5);
?>


<?php include ("menu.php"); ?>

</head>
<body>
<?php echo $table1.$table2.$table3.$table4.$table5;?>
<div id="div1">
<?php
//$sql="select seiss.text,bible.text,michael.text,govett.text,andrew.text from bible,seiss,michael,govett,andrew where seiss.text<>'' limit 2 ";
$book='66';
$chapt='17';
$verse='10';
$x="2";
$sql="select * from $table1 where text<>''";
$resultset=mysqli_query($conn,$sql);   
$row=mysqli_fetch_array($resultset,MYSQLI_BOTH);
mysqli_data_seek($resultset, $x);
while ($row = $resultset->fetch_array(MYSQLI_BOTH)) {
echo " ";
echo "<br>";
echo "Commentary by Seiss";
echo $row["text"];


?>

<?php
$x++;
}
 ?>
 </div>
