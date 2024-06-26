<?php
$host="localhost";
$user="root";
$password="";
$db="rev";

// open database
$link =  mysqli_connect($host,$user,$password,$db);

// Check connection
if (mysqli_connect_errno()){

  printf ("Failed to connect: %s\n",mysqli_connect_error());
	exit();
  }
echo "testing!";
if (! class_exists('SP_QUERY')) {
class SP_QUERY{
public function query($cells,$table,$select,$rowsPerPage=2,$pageNum=1,$range=2,$order="ASC",$style="grey") {
function SP_QUERY_SANI($string){     
$string = str_replace(';', '', $string);
$string = strip_tags($string); 
$string = htmlspecialchars($string); 
$string = trim(rtrim(ltrim($string)));
$string = str_replace(array('\\', "\0", "\n", "\r", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', '\\"', '\\Z'), $string);  
return $string;
}
$table = SP_QUERY_SANI($table);
echo "table=".$table;
$cells = SP_QUERY_SANI($cells);
$select = SP_QUERY_SANI($select);
if($select != ""){$select = "WHERE $select";}
$sqlfind = "SELECT $cells FROM `$table` $select ";
echo "sql=".$sqlfind;
if(!is_numeric($pageNum)||(!is_numeric($rowsPerPage))||(!is_numeric($range))||(($order != "ASC")&&($order != "DESC"))){die();}
if(isset($_GET['page'])){ $pageNum = $_GET['page'];} 
$offset = ($pageNum - 1) * $rowsPerPage;
$sql = mysqli_query($link,"$sqlfind ORDER BY `id` $order LIMIT $offset, $rowsPerPage");
$sql1total = mysqli_query($link,"$sqlfind ORDER BY `id` $order");
$numrows = mysqli_num_rows($sql1total);
$maxPage = ceil($numrows /$rowsPerPage);
if($_SERVER['QUERY_STRING'] != ""){$selfget = "$_SERVER[QUERY_STRING]&";}else{$selfget = "";}
if(strstr($_SERVER['QUERY_STRING'], 'page=')){$pageexist = strstr($_SERVER['QUERY_STRING'], 'page=');
$selfget = str_replace("$pageexist", "", "$_SERVER[QUERY_STRING]"); 
}
$self = $_SERVER['PHP_SELF']."?$selfget";
$nav  = '';if ($numrows > 0){ $first = "<span class=\"pages $style active\">Page: $pageNum of $maxPage</span>"; }
if($pageNum > $range+1){$min5 = $pageNum-$range;}else{$min5 = 1;}
if($pageNum > 1){for($page = $min5; $page < $pageNum; $page++){$nav .= "&nbsp;<a class=\"pages $style ahref\" href=\"$self"."page=$page\">$page</a>";}}
$max5 = $pageNum+$range; if($max5 > $maxPage){$max5 = $maxPage;}
for($page = $pageNum; $page <= $max5; $page++){
if ($page == $pageNum){ $nav .= " <span class=\"pages $style active\">$page</span>"; }else{$nav .= "&nbsp;<a class=\"pages $style ahref\"  href=\"$self"."page=$page\">$page</a>"; }}
if($maxPage == 1){$nav = "";}
if ($pageNum > 1){$page  = $pageNum - $range-1; if($page < 1){$page = 1;} $prev  = " <a class=\"pages $style ahref\"  href=\"$self"."page=$page\"><</a> "; $first .= " <a class=\"pages $style ahref\" href=\"$self"."page=1\">First</a> ";
}else{$prev  = '&nbsp;';$first .= '&nbsp;'; }
if ($pageNum < $maxPage){$page = $pageNum + $range+1; if($page > $maxPage){$page = $maxPage;} $next = " <a class=\"pages $style ahref\" href=\"$self"."page=$page\">></a> ";$last = " <a class=\"pages $style ahref\" href=\"$self"."page=$maxPage\">Last</a> ";}else{$next = '&nbsp;';$last = '&nbsp;';}
$this->pages = "<div id=\"pagination\">$first $prev $nav $next $last</div>"; 
$this->queryarr = $sql;
}
}
}
?>