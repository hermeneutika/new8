<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <title>Document</title>
</head>
<body>
<<<<<<< HEAD
    <?php include 'header-nomiddle.php' ?>
=======
>>>>>>> 21f3a8589c41f190292e35500568fced0fd220d9
<?php
    $files = scandir('media/');
    foreach($files as $file) {
        if($file !== "." && $file !== "..") {
            echo "<img class='testing' src='media/$file' />";
            
        }
    }
?>
  
</body>
</html>