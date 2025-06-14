<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
 <link href="menu.css" rel="stylesheet" type="text/css" />
 <link href="site.css" rel="stylesheet" type="text/css" />
</head>
<body>


<?php

//open database
$host="localhost";
$user="root";
$password="";
$db="test1";
$limit = 10; #item per page
// open database
$link =  mysqli_connect($host,$user,$password,$db);

// Check connection
if (mysqli_connect_errno()){

  printf ("Failed to connect: %s\n",mysqli_connect_error());
	exit();
  }
//echo "connected successfully";

// Create a MySQL table in the selected database
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if ($link->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $link->error;
}

echo "Table Created!";
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES 
('John', 'Doe', 'john@example.com'),
('Michael','Falconer','hermeneutika@msn.com'),
('Fred','Bloggs','fred@nowhere.com')



";
if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
$result = mysqli_query($link,"SELECT firstname,lastname FROM myguests");

    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        printf("ID: %s  Name: %s", $row[0], $row[1]);  
    }




mysqli_close($link);
?>
