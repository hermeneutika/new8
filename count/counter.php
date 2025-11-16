
<link rel="stylesheet" href="style.css">
  </head>
<div class="count">

<?php

/* counter */

//opens countlog.txt to read the number of hits
$datei = fopen("countlog.txt","r");
$count = fgets($datei,1000);

//echo  "hits since 15 oct 2025";
fclose($datei);
$count = $count + 1 ;
$text="hits since 15 oct 25";
echo  $text. "=".$count;
// this seems to have done the trick

//echo $count;
echo "\n" ;
// '<p style="color: red; text-align: center">
//      Request has been sent. Please wait for my reply!
//      </p>'; sample code line 
// opens countlog.txt to change new hit number
$datei = fopen("countlog.txt","w");
fwrite($datei, $count);
fclose($datei);
//echo $count;
?>

</div>