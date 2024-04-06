<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="site.css" />
</head>
<body>
<?php include ("conn.php"); ?>
  <?php include ("menu1.php"); ?> 
<?php
  $book = $_POST['book'];
$chapt = $_POST['chapt'];
$verse = $_POST['verse'];
$comment=$_POST['comment'];
echo "book=".$book ." "."chapter=".$chapt." ". "verse="." ".$verse." "."comment=".$comment;
echo "<br>";
$query="select * from $comment where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($conn, $query);
$row= mysqli_fetch_array($result, MYSQLI_BOTH);
$linkamend=$row["text"];
$linklocate=$row["full"];
#echo "linkamend= ".$linkamend;
#echo "linkfull=".$linklocate;
# explode text
$count=0;
$x=0;
#echo "linklocatejjjj=".$linklocate;
#print_r (explode(" ",$linkamend));
$query="Select * from bible where full like '$linklocate'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_BOTH);
$test1=$row["text"];
echo "test1=".$test1;

$test=explode(" ",$linkamend);
$lenofexplode=count($test);
#echo "length of array= ".$lenofexplode;
#echo "test= ".$test[$count];
#echo "new test=";
while ($count < $lenofexplode-1)
{
  #echo "count= ".$count;
  $count++;
$temp=$test[$count];
#echo "temp=".$temp;


#foreach ($test as $value)
#{
 # $count++;
 # echo "$value <br>";
 # $temp=$test[$count];
 echo "temp = ".$temp;
 # echo "count= ".$count;
  #so now we need the query
  $query="select * from bible where full=$temp";
  $result = mysqli_query($conn, $query);
  #echo mysqli_error();
$row= mysqli_fetch_array($result, MYSQLI_BOTH);
?>
<div style="color: red">
<br>
<?php
$linkamend=$row["text"];
$linklocate=$row["full"];
$book1=$row["n"];
$chapt1=$row["chapt"];
$verse1=$row["verse"];
echo $book1." ".$chapt1.":".$verse1." ";

#echo $linklocate;
echo $linkamend;
#echo "linkfull=".$linklocate;
#if ($count<($lenofexplode-1))
#{
 # break;
#}
#}
#echo "out of foreach loop";

}
#else
{
  echo "out of loop";
}
?>
</div>
</body>
</html>