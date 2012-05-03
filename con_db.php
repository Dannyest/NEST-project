<?php
  $con = mysql_connect($host, $user,$password);
  
  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
  
  mysql_select_db("$database")or die("cannot select DB");
?>