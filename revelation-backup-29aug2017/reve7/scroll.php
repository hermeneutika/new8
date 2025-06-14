<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
 <link href="menu.css" rel="stylesheet" type="text/css" />
 <link href="site.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php include ("menu.php"); ?>
<?php include ("link.php"); ?>
<?php
$query="select * from govett where text<>'' order by text limit 20";
//$query2="select * from seiss where text<>'' order by text limit 20";

//$total_record_count=mysqli_num_rows($query);
//$query .="select * from michael where text<>''";
//$query="select count(*) AS 'ROWS', 'text' FROM 'seiss' GROUP BY 'text' ORDER BY 'text'";

//if ($result = mysqli_query($link, $query))

$result = mysqli_query($link, $query);


$num=mysqli_num_rows($result);
mysqli_data_seek($result,0);
while ($row = mysqli_fetch_array($result))
//while ($row<=$num)

//echo $row[1];
{
//printf ("%s (%s)\n", $row[0], $row["text"]);
//$row=mysqli_fetch_row($result);
//echo "data seek".$row=mysqli_data_seek($result,3);
echo "no of hits".$num;
echo "row0". $row[0];
//echo "Book ".$row["n"]." Chapt ".$row["chapt"]." verse ".$row["verse"];
echo " ";
echo "<br>";
printf ("City: %s  Countrycode: %s\n", $row[0], $row[5]);

//echo $row["text"];
//echo $row["text"].$row['chapt'];
echo "<br>";
}

?>
</body>
</html>
