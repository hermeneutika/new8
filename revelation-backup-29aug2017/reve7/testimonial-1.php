<?php
// Script and tutorial written by Adam Khoury @ developphp.com
// Line by line explanation : youtube.com/watch?v=T2QFNu_mivw
//include_once("mysqli_connection.php");
//open database
$host="localhost";
$user="root";
$password="";
$db="rev";
//$limit = 10; #item per page
// open database
$db_conx =  mysqli_connect($host,$user,$password,$db);

// Check connection
if (mysqli_connect_errno()){

  printf ("Failed to connect: %s\n",mysqli_connect_error());
	exit();
  }
	$table1='seiss';
	$table2='govett';
	$table3='michael';
	$table4='swaggert';
	$table5='andrew';
	
	$field1='full';
	$field2='n';
	$field3='text';
// This first query is just to get the total count of rows
$sql1 = "SELECT COUNT(*) FROM $table1 where text<>''";
$sql2 = "SELECT COUNT(*) FROM $table2 where text<>''";
$sql3 = "SELECT COUNT(*) FROM $table3 where text<>''";
$sql4 = "SELECT COUNT(*) FROM $table4 where text<>''";
$sql5 = "SELECT COUNT(*) FROM $table5 where text<>''";
$query1 = mysqli_query($db_conx, $sql1);
$query2 = mysqli_query($db_conx, $sql2);
$query3 = mysqli_query($db_conx, $sql3);
$query4 = mysqli_query($db_conx, $sql4);
$query5 = mysqli_query($db_conx, $sql5);
$row1 = mysqli_fetch_row($query1);
$row2 = mysqli_fetch_row($query2);
$row3 = mysqli_fetch_row($query3);
$row4 = mysqli_fetch_row($query4);
$row5 = mysqli_fetch_row($query5);
// Here we have the total row count
$rows = $row1[0];
// This is the number of results we want displayed per page
$page_rows = 2;
// This tells us the page number of our last page
$last = ceil($rows/$page_rows);
// This makes sure $last cannot be less than 1
if($last < 1){
	$last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['pn'])){
	$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
// This is your query again, it is for grabbing just one page worth of rows by applying $limit
$sql1 = "SELECT $field1, $field2, $field3 FROM $table1 where text<>'' ORDER BY $field1 DESC $limit";
$sql2 = "SELECT $field1, $field2, $field3 FROM $table2 where text<>'' ORDER BY $field1 DESC $limit";
$sql3 = "SELECT $field1, $field2, $field3 FROM $table3 where text<>'' ORDER BY $field1 DESC $limit";
$sql4 = "SELECT $field1, $field2, $field3 FROM $table4 where text<>'' ORDER BY $field1 DESC $limit";
$sql5 = "SELECT $field1, $field2, $field3 FROM $table5 where text<>'' ORDER BY $field1 DESC $limit";
$query1 = mysqli_query($db_conx, $sql1);
$query2 = mysqli_query($db_conx, $sql2);
$query3 = mysqli_query($db_conx, $sql3);
$query4 = mysqli_query($db_conx, $sql4);
$query5 = mysqli_query($db_conx, $sql5);
// This shows the user what page they are on, and the total number of pages
$textline1 = "Testimonials (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
// Establish the $paginationCtrls variable
$paginationCtrls = '';
// If there is more than 1 page worth of results
if($last != 1){
	/* First we check if we are on page one. If we are then we don't need a link to 
	   the previous page or the first page so we do nothing. If we aren't then we
	   generate links to the first page, and to the previous page. */
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a> &nbsp; &nbsp; ';
		// Render clickable number links that should appear on the left of the target page number
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
			}
	    }
    }
	// Render the target page number, but without it being a link
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
	echo "pagination=".$paginationCtrls;
	echo "pagenum=".$pagenum;
	// Render clickable number links that should appear on the right of the target page number
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
		echo $paginationCtrls;
		if($i >= $pagenum+4){
			break;
		}
	}
	// This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a> ';
    }
}
$list = '';

do 
{
	$id = $row1[$field1];
	$firstname = $row1[$field2].$table1;
	$lastname = $row1[$field3].$table1;
	//$datemade = $row["datemade"];
	//$datemade = strftime("%b %d, %Y", strtotime($datemade));
	$list .= '<p><a href="testimonial.php?id='.$id.'">'.$firstname.' '.$lastname.' '.$table1.' Testimonial</a> - Click the link to view this testimonial<br>Written '.'</p>';
	}
while($row1 = mysqli_fetch_array($query1, MYSQLI_ASSOC));

// Close your database connection
mysqli_close($db_conx);
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body{ font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;}
div#pagination_controls{font-size:21px;}
div#pagination_controls > a{ color:#06F; }
div#pagination_controls > a:visited{ color:#06F; }
</style>
</head>
<body>
<div>
  <h2><?php echo $textline1; ?> Paged</h2>
	<h2><?php echo "table=".$table1 ?>
  <p><?php echo $textline2; ?></p>
  <p><?php echo $list; ?></p>
  <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
</div>
</body>
</html>