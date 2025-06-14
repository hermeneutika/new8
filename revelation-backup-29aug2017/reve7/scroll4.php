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
$db="test1";
$limit = 10; #item per page
// open database
$link =  mysqli_connect($host,$user,$password,$db);

// Check connection
if (mysqli_connect_errno()){

  printf ("Failed to connect: %s\n",mysqli_connect_error());
	exit();
  }
//echo "connected successfully";



$result = mysqli_query($link,"SELECT firstname,lastname,email FROM myguests");
$arrayofrows=mysqli_fetch_all($result);
//value1=$result[0];
//echo $value1;

    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        printf("Firstname: %s  lastName: %s", $row[0], $row[2]);  
				echo $arrayofrows[0];
    }
?>


