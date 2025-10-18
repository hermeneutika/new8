<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/index.css" />
</head>
<body1>
<div class="count">
    
<?php
$count_my_page = ("hitcounter.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);

 $text="since oct 2025    ";
//$new = implode (", ", $hits) ;
// 15 oct 25 had to use implode otherwise i got the  array conversion error
//echo 
$text1 =  implode( ", ",$hits);

 //print  "hits since 15 oct 25=$text1" ; 
echo  "website "."hits since 18/10/25="  .$text1;
?>


</div>
</body1>
</html>