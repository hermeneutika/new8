<?php

  if(isset($_POST['getresult']))
  {
    $link=mysqli_connect('localhost','root','A7ndromeda','rev');
    //mysql_select_db('demo');

    $no = $_POST['getresult'];
    $select = mysql_query("select comment from sample_comment limit $no,10");
    while($row = mysql_fetch_array($select))
    {
      echo "<p class='rows'>".$row['comment']."</p>";
    }
    exit();
  }
  
?>