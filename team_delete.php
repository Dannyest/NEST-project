<?php

//kesken vielä
  include("con_db.php");
    if($_POST["poista"][$i] != "")  
  		{  
				$query = "DELETE FROM $dbtable WHERE id='".$_POST["poista"][$i]."' ";  
				$result = mysql_query($query);
			}    		
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=team.php\">";	
?>