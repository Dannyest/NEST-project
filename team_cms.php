<div id="team_cms">
    
 <?php 
 	include("cms_menu.php");
 	include("config.php");
 	include("con_db.php");
 	
	$query = "SELECT * FROM team ORDER BY person_id DESC"; 
	$queryResult = mysql_query($query);

	$rowCount = mysql_numrows($queryResult);
	  
	for($i = 0; $i < $rowCount; $i++) 
	  	{ 
			$name = mysql_result($queryResult, $i, "person_name"); 
			$desc = mysql_result($queryResult, $i, "person_desc"); 
			$img = mysql_result($queryResult, $i, "person_img"); 
			$status = mysql_result($queryResult, $i, "status"); 
			$id = mysql_result($queryResult, $i, "person_id"); 
			echo '<div>';
			echo $name;
			echo $status;
			echo $desc;
			echo $img;
			echo "<a href='index.php?id=10&action=edit&ud_id=$id'>Edit</a>";
			echo "<a href='index.php?id=10&action=delete&ud_id=$id'>Delete</a>";
			echo '</div>';
	  	}
	
	echo '<a href="index.php?id=10&action=insert">Insert</a>';
	    
	    
	    $action = $_GET['action']; 
	    $ud_id = $_GET['ud_id'];
	
		if($action == "edit")
	  	  { 	    	
	    
	 		   $selectPost = @mysql_fetch_array(@mysql_query("SELECT * FROM team WHERE id='$ud_id'"));

		     ?>
		     	<input name="person_id" type="hidden" value="<?php echo $selectPost['person_id'];?>">
		 	<form action="index.php?id=10" method="post" name="post">
			<p>Post Name:<br />
			<input name="person_name" type="text"value="<?php echo $selectPost['person_name'];?>" size="45" />
		  	</p>
		   	<p>Post Status:<br />
			<input name="status" type="text"value="<?php echo $selectPost['status'];?>" size="45" />
		  	</p>
		  	<p>Post Content:<br />
			<textarea name="person_desc" cols="40" rows="15"><?php echo $selectPost['person_desc'];?></textarea>
		    	</p>
		    	<input name="update" type="submit" value="Update" />
		    	</form>
	
	
	 	  <?php 
		    }
	   
		if($action == "insert")
		   { 
		   ?>
			<form enctype="multipart/form-data" action="team_insert.php" method="POST">
			<div>
			<div>Name</div>
			<div><input type="text" size="40" name="person_name" value="" /></div>
			</div>
		
			<div>
			<div>Status</div>
			<div><input type="text" size="40" name="status" value="" /></div>
			<div>
				<div>Image</div>
				<div><input name="imagefile" type="file" /></div>
			</div>
			</div>
			<div>
			<textarea cols="40" rows="15" name="person_desc" ></textarea>
			</div>
			<input type="submit" value="Submit" />
			</form>	
			<?php }?>
		

		if($action == "delete")
		{
			
			$data = @mysql_query("DELETE FROM team WHERE person_id = $ud_id") 
			or die(@mysql_error());
	
			if($data)
			{
				echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?id=10\">";	
			}
		}
   
    



</div>