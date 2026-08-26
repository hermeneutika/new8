<!DOCTYPE html>
<html>
<head>
<style>
</style>
<link href="menu.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include ("menu-main.php"); ?>
<h1>The Bible</h1>
<h1>Pure eternal existentialism.v1</h1>

<br />
<br />

<form action="bible2.php" method="post">
  <label for="book">book:</label>
  <input type="text" id="book" name="book"><br><br>
  <label for="chapter">chapter:</label>
  <input type="text" id="chapt" name="chapt"><br><br>
  <label for="verse">verse:</label>
  <input type="text" id="verse" name="verse"><br><br>
  <input type="text">search term:</label>
  <input type="text" id="search" name="search"><br><br>

  <input type="submit" value="Submit">
</form>

</body>
</html>

