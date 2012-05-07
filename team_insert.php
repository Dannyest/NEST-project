<?php
  include("config.php");	
  include("con_db.php");
  	$name = $_POST['person_name'];
	$desc = $_POST['person_desc'];
	$status = $_POST['status'];

	  if(isset($_FILES['imagefile']))
	{
		
				$imgData = addslashes(file_get_contents($_FILES['imagefile']['tmp_name']));
				$size = getimagesize($_FILES['imagefile']['tmp_name']);
				$imageSql = "INSERT INTO team (person_name, person_desc, status, person_img) VALUES ('$name', '$desc', '$status', '$imgData')";
				

        if(!mysql_query($imageSql))
				{
					echo 'Upload failed';
				}
				
	}
else   {
      		     		$imageSql = "INSERT INTO team (person_name, person_desc, status) VALUES ('$name', '$desc', '$status')";

      		}			
	header("Location: index.php?id=10");
?>