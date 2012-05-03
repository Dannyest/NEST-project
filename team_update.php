<?php
  include("con_db.php");
  $name = $_POST['person_name'];
	$desc = $_POST['person_desc'];
	$status = $_POST['status'];
	$id = $_POST['id'];
	$sql = "UPDATE team SET person_name='$name', person_desc='$desc', status='$status' WHERE id='$id'";
	$result = mysql_query($sql);
	if ($result)
		{
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=cms.php\">";
		}
		
	else 
		{
			echo "ERROR";
		}
	mysql_close($con)
?>