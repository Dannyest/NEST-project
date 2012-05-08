<div id ="wwo">
 <?php
 include("config.php");
  include("con_db.php");
  $query = "SELECT * FROM gen_info WHERE site_id=2 ORDER BY article_id DESC"; 
  $queryResult = mysql_query($query);
  
  $rowCount = mysql_numrows($queryResult);
  
    for($i = 0; $i < $rowCount; $i++) 
    { 
   	$header = mysql_result($queryResult, $i, "header"); 
	$content = mysql_result($queryResult, $i, "content"); 
	$img = mysql_result($queryResult, $i, "image_name");
    
  	  echo '<div>';
  	  echo "<img src=http://bubble.ipt.oamk.fi/NEST/images/$img>";
  	  echo $header;
  	  echo $content;
  	  echo '</div>';
  	}
    ?>
</div>