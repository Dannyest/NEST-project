<div id="team_cms">
    
    <?php include("cms_menu.php"); ?>
    <?php include("config.php"); ?>
    <?php include("con_db.php"); ?>
<?php    
    $selectPosts = @mysql_query("SELECT * FROM team ORDER BY person_id DESC");
    
    while($showpost = @mysql_fetch_array($selectPosts))
    {  

    <?php echo $showpost['person_name'];?> - <a href="index.php?id=10&action=edit&ud_id=<?php echo $showpost['person_id'];?>">Edit</a> 
    - <a href="index.php?id=10&action=remove&ud_id=<?php echo $showpost['person_id'];?>">Remove</a> <br /><br />
    <?php }?>
    <a href='index.php?id=10'>Back</a>
    <?php
    if(isset($_POST['person_id']))
    { 
    	$name = $_POST['person_name']; 
		$desc = $_POST['person_desc']; 
		$status = $_POST['status'];
		$id = $_POST['person_id']; 
		$img = $_POST['person_img'];

		$data = @mysql_query("UPDATE team SET person_name='$name', person_desc='$desc', status='$status' WHERE person_id='$id'") 
		or die(@mysql_error());

		if($data){echo "    Updated <a href='index.php?id=10'>Back</a>";}
	}
    
    $action = $_GET['action']; 
    $ud_id = $_GET['ud_id'];

     if($action == "edit")
 { 
         $selectPost = @mysql_fetch_array(@mysql_query("SELECT * FROM team WHERE person_id='$ud_id'"));
	     ?>
	 	<h2> <?php echo $selectPost['person_name'];?> </h2>
	 	<form action="index.php?id=10" method="post" name="post">
		<p>Post Name:<br />
		<input name="name" type="text"value="<?php echo $selectPost['person_name'];?>" size="45" />
	  	</p>
	   	<p>Post Status:<br />
		<input name="status" type="text"value="<?php echo $selectPost['status'];?>" size="45" />
	  	</p>
	  	<p>Post Content:<br />
		<textarea name="desc" cols="40" rows="15"><?php echo $selectPost['person_desc'];?></textarea>
	    	</p>
	    	<input name="update" type="submit" value="Update" />
	    	</form>


   <?php }?>
    



</div>