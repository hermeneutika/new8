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

<!DOCTYPE html><html>
<head>
<title>PHP Pagination</title>
</head>
<body>
<?php
// Establish Connection to the Database
//$con = mysqli_connect(‘localhost’,’root’,”,’mytest’);//Records per page
// my db connection will be provided by link.php which was working in scroll.php no problems
$per_page=5;

if (isset($_GET[“page”])) {

$page = $_GET[“page”];

}

else {

$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;
$query="select * from student  limit $start_from,$per_page";
//Selecting the data from table but with limit
//$query = “SELECT * FROM student LIMIT $start_from, $per_page”;
//$result = mysqli_query ($con, $query);
close_mysqli( $link);
?>
<table align=”center” border=”2? cellpadding=”3?>
<tr><th>Name</th><th>Phone</th><th>Country</th></tr>
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr align=”center”>
<td><?php echo $row[‘name’]; ?></td>
<td><?php echo $row[‘number’]; ?></td>
<td><?php echo $row[‘country’]; ?></td>
</tr>
<?php
};
?>
</table>

<div>

<?php
include ("link.php");
//Now select all from table
$query = “select * from student”;
$result = mysqli_query($link, $query);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo “<center><a href=’pagination-trial.php?page=1'>”.’First Page’.”</a> “;

for ($i=1; $i<=$total_pages; $i++) {

echo “<a href=’pagination-trial.php?page=”.$i.”‘>”.$i.”</a> “;
};
// Going to last page
echo “<a href=’pagination_trial.php?page=$total_pages’>”.’Last Page’.”</a></center> “;
?>

</div>

</body>
</html>



