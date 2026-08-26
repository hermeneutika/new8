
<div class="count";>
    
<?php
$count_my_page = ("hitcounter.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);

$text="hits since 15 oct 25";
//$new = implode (", ", $hits) ;
// 15 oct 25 had to use implode otherwise i got the  array conversion error
//echo 
$text1 =  implode( ", ",$hits);

 //print  "hits since 15 oct 25=$text1" ; 
echo "this is a test".$text1;
?>


</div>