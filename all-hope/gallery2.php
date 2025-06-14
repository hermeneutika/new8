<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="main.css" />
<link rel="stylesheet" href="style1.css" />
    <title>Media Gallery</title>
</head>
<body>

<img class="logo" src="img/hope-logo.jpg" alt="hope-logo" />

<?php include 'nav1.php'; ?>
    
    <h1>Welcome to Hope Media Gallery</h1>

    <?php
        // define the folder where your media files are located
        $media_folder = "media/";

        // open the directory and loop through its contents
        if ($handle = opendir($media_folder)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    // display the media file with a link to its URL
                    echo "<a href=\"" . $media_folder . $entry . "\" target=\"_blank\">";
                    echo "<img src=\"" . $media_folder . $entry . "\" alt=\"" . $entry . "\" style=\"max-width: 200px; margin: 10px;\" />";
                    echo "</a>";
                }
            }
            closedir($handle);
        }
    ?>

<?php include 'footer1.php'; ?>
</body>
</html>
