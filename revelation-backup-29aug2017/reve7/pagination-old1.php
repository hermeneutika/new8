<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
</head>
<body>
<?php


//open database
$host="localhost";
$user="root";
$password="";
$db="rev";
//$limit = 10; #item per page
// open database
$conn =  mysqli_connect($host,$user,$password,$db);

// Check connection
if (mysqli_connect_errno()){

  printf ("Failed to connect: %s\n",mysqli_connect_error());
	exit();
  }
//ech<?php

//require_once "config.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagination</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table style="border: 1px #000000 solid;" width="400" cellspacing="2" cellpadding="2" align="center">
<?php

$perpage = 5;

if(isset($_GET["page"])){
$page = intval($_GET["page"]);
}
else {
$page = 1;
}
$calc = $perpage * $page;
$start = $calc - $perpage;
$result = mysqli_query($conn, "select * from seiss where text!='' Limit $start, $perpage");
//result = mysqli_query($conn, "select * from swaggert where text<>'' Limit $start, $perpage");
echo "calc=".$calc."start=".$start."perpage=".$perpage;
$rows = mysqli_num_rows($result);
echo "row num=".$rows;
if($rows){
$i = 0;
while($post = mysqli_fetch_assoc($result)) {
?>
<tbody>
<tr style="background-color: #cccccc;">

<td style="font-weight: bold;font-family: arial;"><?php echo $post["text"]; ?></td>

</tr>

<tr>

<td style="font-family: arial;padding-left: 20px;"><?php echo $post["n"]; ?></td>

</tr>
<?php
}
}
?>

</tbody>
</table>


?>


<table width="400" cellspacing="2" cellpadding="2" align="center">
<tbody>
<tr>
<td align="center">

<?php

if(isset($page))

{

$result = mysqli_query($conn,"select Count(*) As Total from seiss");

$rows = mysqli_num_rows($result);

if($rows)

{

$rs = mysqli_fetch_assoc($result);

$total = $rs["Total"];

}

$totalPages = ceil($total / $perpage);
echo "total=".$total."totalpages=".$totalpages;
if($page <=1 ){

echo "<span id='page_links' style='font-weight: bold;'>Prev</span>";

}

else

{

$j = $page - 1;

echo "<span><a id='page_a_link' href='pagination.php?page=$j'>< Prev</a></span>";

}

for($i=1; $i <= $totalPages; $i++)

{

if($i<>$page)

{

echo "<span><a id='page_a_link' href='pagination.php?page=$i'>$i</a></span>";

}

else

{

echo "<span id='page_links' style='font-weight: bold;'>$i</span>";

}

}

if($page == $totalPages )

{

echo "<span id='page_links' style='font-weight: bold;'>Next ></span>";

}

else

{

$j = $page + 1;

echo "<span><a id='page_a_link' href='pagination.php?page=$j'>Next</a></span>";

}

}

?></td>
<td></td>
</tr>
</tbody>
</table>

</body>
</html>
</body>
</html>
