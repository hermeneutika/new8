<div class="count1">

<?php

/* counter */

//opens countlog.txt to read the number of hits
$datei = fopen("countlog.txt","r");
$count = fgets($datei,1000);

fclose($datei);
$count = $count + 1 ;
echo $count;
// this seems to have done the trick

echo '<p style="color: white;> "$count"</p>' ;
echo "  since 27 May 2025 hits ".$count;
echo "\n" ;
// '<p style="color: red; text-align: center">
//      Request has been sent. Please wait for my reply!
//      </p>'; sample code line 
// opens countlog.txt to change new hit number
$datei = fopen("countlog.txt","w");
fwrite($datei, $count);
fclose($datei);
?>
</div>