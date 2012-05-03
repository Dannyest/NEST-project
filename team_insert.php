<?php
  include("con_db.php");
  	$name = $_POST['person_name'];
	$desc = $_POST['person_desc'];
	$status = $_POST['status'];
	$sql = "INSERT INTO team (person_name, person_desc, status) VALUES ('$name', '$desc', '$status')";
	$result = mysql_query($sql);
	
  if(isset($_FILES['imagefile']))
	{
		try
			{
				$imgData = addslashes(file_get_contents($_FILES['imagefile']['tmp_name']));
				$size = getimagesize($_FILES['imagefile']['tmp_name']);
				$imageSql = "INSERT INTO team (person_img) VALUES ('{$_FILES['imagefile']['name']}')";
				
        if(!mysql_query($imageSql))
				{
					echo 'Upload failed';
				}
				
			
      catch(Exception $e) 
			{
				echo $e->getMessage();
				echo "Problem loading the file";
			}
  }
	
  if($result)
	{
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php=?id=10\">";
	}

	else 
	{
		echo "ERROR";
	}	
?>