<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css" />
  <link rel="stylesheet" href="main.css" />
  <title>Document</title>
</head>
<body>
  <div class="gallery">
  <?php
$images = glob("media/*.*");
$countimages=count($images);
$imagesperrow=5;
echo "no of files=",$countimages;
//for ($i = 0; $i < count($images); $i++) {
  //  $image = $images[$i];
   // echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
   //echo '<img class="test1" src="' . $image . '" alt="Random image" />' . "<br /><br />";

//}

for ($i = 0 ; $i < $countimages; $i++) {
  //display image here
  $image = $images[$i] ;
  echo "<img src='$image'>" ;

  if ($i % $imagesperrow == 0) {
      //have displayed an entire row
      echo "line break" ."/r/n". '<br>'. PHP_EOL ;
  }
}
?>



</div>



</body>
</html>