<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
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
		<h1>The Book of Revelation</h1>
<h2>Scripture interpreted by Scripture<h2>
    <menu id="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="bible-input.php">Bible</a></li>
            <li><a href="bible-enter-data1.php">Enter</a></li>
            <li><a href="comm-read.php">Commentary</a></li>
						<li><a href="bible-link-input.php">Bible links</a></li>
						<li><a href="change-table.php">change table</a></li>
						<li><a href="history.php">History</a></li>
						<li><a href="false.php">False Prophets</a></li>
						<li><a href="daniel.php">Daniel</a></li>
					<!--	<li><a href="scroll.php">Scroll</a></li>
						<li><a href="scroll3.php">test</a></li>
						<li><a href="scroll4.php">test2</a></li>
						<li><a href="scroll5.php">scroll5</a></li>
						<li><a href="scroll6.php">scroll6</a></li>
						<li><a href="pagination.php">pagination</a></li>
						<li><a href="pagination2.php">pagination2</a></li>
						<li><a href="pagination3.php">pagination3</a></li>
						<li><a href="pagination4.php">pagination4</a></li>
						<li><a href="pagination-trial.php">paginationtrial</a></li>-->
						<li><a href="pagination.php">display1</a></li>
						<li><a href="jquery1.php">jquery</a>
        </ul>
    </menu>



</body>

    
</html>
