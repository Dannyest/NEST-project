<div id ="wos">
 <?php
 include("config.php");
  include("con_db.php");
  $query = "SELECT * FROM gen_info WHERE site_id=1 ORDER BY article_id DESC"; 
  $queryResult = mysql_query($query);
  
  $rowCount = mysql_numrows($queryResult);
  
    for($i = 0; $i < $rowCount; $i++) 
    { 
  		$header = mysql_result($queryResult, $i, "header"); 
		$content = mysql_result($queryResult, $i, "content"); 
		$img = mysql_result($queryResult, $i, "img"); 
		$author = mysql_result($queryResult, $i, "status"); 
    
    echo '<div>';
    echo $img;
    echo $author;
    echo $header;
    echo $content;
    echo '</div>';
  	}
    ?>
</div>