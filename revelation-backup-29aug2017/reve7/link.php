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
$limit = 10; #item per page
// open database
$link =  mysqli_connect($host,$user,$password,$db);

// Check connection
if (mysqli_connect_errno()){

  printf ("Failed to connect: %s\n",mysqli_connect_error());
	exit();
  }
	echo "connected successfully";

?>


</body>
</html>