<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Hermeneutika's Home Page</title>
 <link href="menu.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
// javascript from https://webdesignerhut.com/active-class-navigation-menu/ it works!! 30/7/16
?>
<script>
    function setActive() {
      aObj = document.getElementById('nav').getElementsByTagName('a');
      for(i=0;i<aObj.length;i++) { 
        if(document.location.href.indexOf(aObj[i].href)>=0) {
          aObj[i].className='active';
        }
      }
    }
    window.onload = setActive;
		</script>
		<h1>Hermeneutika's Home Page</h1>
<h2>This is what I am interested in<h2>
    <menu id="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="sf1.php">Science-Fiction</a></li>
            <li><a href="philo.php">Philosophy</a></li>
            <li><a href="theo.php">Theology</a></li>
						<li><a href="bible-link-input.php">Sociology</a></li>
						<li><a href="change-table.php">Music</a></li>
						<li><a href="cv.htm">Work CV</a></li>
						<li><a href="false.php">Church</a></li>
						<li><a href="daniel.php">University</a></li>
        </ul>
    </menu>



</body>

    
</html>
