<!DOCTYPE html><html>
<head>
<title>PHP Pagination</title>
</head><body><?php
// Establish Connection to the Database
//$con = mysqli_connect(‘localhost’,’root’,'',’test1’);//Records per page
$host="localhost";
$user="root";
$password="";
$db="test1";
$limit = 10; #item per page
// open database
$con =  mysqli_connect($host,$user,$password,$db);
$per_page=5;

if (isset($_GET[“page”])) {

$page = $_GET[“page”];

}

else {

$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;

//Selecting the data from table but with limit
$result = mysqli_query($con, "select * from myguests Limit $start_from, $perpage");
//$query = “SELECT * FROM myguests LIMIT $start_from, $per_page”;
//$result = mysqli_query ($con, $query);

?>
<table align=”center” border=”2? cellpadding=”3?>
<tr><th>firstName</th><th>lastname</th><th>email</th></tr>
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr align=”center”>
<td><?php echo $row[‘firstname’]; ?></td>
<td><?php echo $row[‘lastname’]; ?></td>
<td><?php echo $row[‘email’]; ?></td>
</tr>
<?php
};
?>
</table>

<div>
<?php

//Now select all from table
$result = mysqli_query($con, "select * from myguests");
//$query = “select * from myguests”;
//$result = mysqli_query($con, $query);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo “<center><a href=’pagination2.php?page=1'”.’First Page’.”</a> “;

for ($i=1; $i<=$total_pages; $i++) {

echo “<a href=’pagination2.php?page=”.$i.”‘>”.$i.”</a> “;
};
// Going to last page
echo “<a href=’pagination2.php?page=$total_pages’>”.’Last Page’.”</a></center> “;
?>

</div>

</body>
</html>