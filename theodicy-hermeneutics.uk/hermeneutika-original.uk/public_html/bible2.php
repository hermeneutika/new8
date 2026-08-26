<!DOCTYPE html>
<html>
<head>
<style>
</style>
<link href="menu.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include ("menu-main.php"); ?>
<?php include ("link.php"); ?>

<h1>The Bible</h1>
<h1>Pure eternal existentialism.v1</h1>



<?php

$up1= $_POST["book"];
$up2= $_POST["chapt"];
$up3= $_POST["verse"];
$up4= $_POST["search"];
echo "book.$up1";
echo "chapt.$up2";
echo "verse.$up3";
echo "search.$up4";
$sql = "SELECT book, chapt,verse, text  FROM bible where text LIKE'%$up4%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> book: ". $row["book"]. " - chapt: ". $row["chapt"]. " " . $row["verse"] .   $row["text"];
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>

