<div id ="team">
  <?php
  include("config.php");
  include("con_db.php");
  ?>
  <?php
  $query = "SELECT * FROM team ORDER BY person_id DESC"; 
  $queryResult = mysql_query($query);
  
  $rowCount = mysql_numrows($queryResult);
  
    for($i = 0; $i < $rowCount; $i++) 
  	{ 
		$name = mysql_result($queryResult, $i, "person_name"); 
		$desc = mysql_result($queryResult, $i, "person_desc"); 
		$img = mysql_result($queryResult, $i, "image_name");
		$status = mysql_result($queryResult, $i, "status"); 
		echo '<div>';
		echo $name;
		echo $status;
		echo $desc;
		echo "<img src=http://bubble.ipt.oamk.fi/NEST/images/$img>";
		echo '</div>';
  	}
  ?>
  
</div>