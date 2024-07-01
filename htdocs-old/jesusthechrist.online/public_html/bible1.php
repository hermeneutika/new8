<!DOCTYPE html>

<html>
<head>
<title>bible</title>
<link href="menu.css" rel="stylesheet" type="text/css" />
 <link href="site.css" rel="stylesheet" type="text/css" />
</head>
<body>

// ok test
<?php include ("menu.php"); ?>
<?php include ("link.php"); ?>

<h1>Enter Bible verse</h1>
<form action="action.php" method="post">
<label for "Book">Book</label>
<input type="text" name="book" id="book">
<label for "Book">chapt</label>
<input type="text" name="chapt" id="chapt">
<label for "Book">verse</label>
<input type="text" name="verse" id="verse">
<input type="submit" value="Submit1">
<input type ="reset" value="Reset1">

</body>
</html>
