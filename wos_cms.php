<div id="wos_cms">

   <?php 
      	include("cms_menu.php");
      	include("config.php");
    	include("con_db.php");
 	
    	$query = "SELECT * FROM gen_info WHERE site_id=1 ORDER BY article_id DESC"; 
    	$queryResult = mysql_query($query);

    	$rowCount = mysql_numrows($queryResult);

  		$action = $_GET['action']; 
	    	$ud_id = $_GET['ud_id'];


    for($i = 0; $i < $rowCount; $i++) 
	  	{ 
	  		$author = mysql_result($queryResult, $i, "author"); 
		  	$header = mysql_result($queryResult, $i, "header"); 
			$content = mysql_result($queryResult, $i, "content"); 
	  		$id = mysql_result($queryResult, $i, "article_id"); 
		  	echo '<div>';
		  	echo $header;
		  	echo $author;
		  	echo $content;
		  	echo "<img src=http://bubble.ipt.oamk.fi/NEST/images/$img>";
		  	echo "<a href='index.php?id=11&action=edit&ud_id=$id'>Edit</a>";
		  	echo "<a href='index.php?id=11&action=delete&ud_id=$id'>Delete</a>";
		  	echo '</div>';
	  	}

    	echo '<a href="index.php?id=11&action=insert">Insert</a>';

  

  		if($action == "edit")
  	  	  { 	    	

	 	  $selectPost = @mysql_fetch_array(@mysql_query("SELECT * FROM gen_info WHERE article_id='$ud_id'"));

		  ?>
		 	<form action="gen_update.php" method="post" name="post">
		     	<input name="article_id" type="hidden" value="<?php echo $selectPost['article_id'];?>">
			<p>Header:<br />
			<input name="header" type="text"value="<?php echo $selectPost['header'];?>" size="45" />
		  	</p>
		   	<p>Author:<br />
			<input name="author" type="text"value="<?php echo $selectPost['author'];?>" size="45" />
		  	</p>
		  	<p>Content:<br />
			<textarea name="content" cols="40" rows="15"><?php echo $selectPost['content'];?></textarea>
		    	</p>
		    	<input name="update" type="submit" value="Update" />
		    	</form>
	
<?php 
  	    }

		if($action == "insert")
		   { 
		   ?>
			<form enctype="multipart/form-data" action="gen_insert.php" method="POST">
			<div>
			<div>Author</div>
			<div><input type="text" size="40" name="author" value="" /></div>
			</div>
		
			<div>
			<div>Header</div>
			<div><input type="text" size="40" name="header" value="" /></div>
			<div>
				<div>Image</div>
				<div><input name="file" type="file" id="file"/></div>
			</div>
			</div>
			<div>
			<textarea cols="40" rows="15" name="content" ></textarea>
			</div>
			<input type="submit" value="Submit" />
			</form>	
			<?php }
		

		if($action == "delete")
		{
			
			$data = @mysql_query("DELETE FROM gen_info WHERE article_id = $ud_id") 
			or die(@mysql_error());
	
			if($data)
			{
				echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?id=11\">";	
			}
		}?>

</div>