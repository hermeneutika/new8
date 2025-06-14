<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
<link rel="stylesheet" type="text/css" href="css/smartpagination.css" />
</head>
<body>
<?php
include 'smartpagination.php';

//open database
$host="localhost";
$user="root";
$password="";
$db="rev";

// open database
$link =  mysqli_connect($host,$user,$password,$db);

// Check connection
if (mysqli_connect_errno()){

  printf ("Failed to connect: %s\n",mysqli_connect_error());
	exit();
  }
//echo "connected successfully";

$query = new SP_QUERY();		
$query->query("*","seiss","",0,1,100,"asc","blue");

//$query = new SP_QUERY();
//$query->query("*","seiss");

echo "$query->pages"; 

//$query->queryarr

//while($arr = mysql_fetch_assoc($query->queryarr)){echo "$arr[id]";}


?>

