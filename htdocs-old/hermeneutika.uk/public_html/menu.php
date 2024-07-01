<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<meta http-equiv="Cache-Control" content="no-store" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hermeneutika's Home Page</title>
 
 <style>
</style>
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

<div class="nav">
	<a href="index.php">Home</a>
	<a href="philo.php">Philosopy</a>
	<a href="theo.php">Theology</a>
	<a href="science.php">Science</a>
	<a href="great_courses.php">Great Courses</a>
	<a href="notes.php">notes</a> 
  <a href="comp.php">Computer</a>
  <a href="covid.php">Covid</a>
	</div>
	
	
    


</body>

    
</html>
