<!DOCTYPE html>
<html>
	<head>
		<title>
			Nest New York
		</title>
	</head>
	<body>
		<div id="wrapper">
			<?php include("header.php"); ?>
			<?php include("nav.php"); ?>
			<?php switch($_GET['id']) 
				{
					default: include("main.php");
						break;
					case  "1":include("about_us.php");
						break;
					case  "2":include("biz_ny.php");
						break;
					case  "3":include("wwo.php");
						break;
					case  "4":include("wos.php");
						break;
					case  "5":include("team.php");
						break;
					case  "6":include("payment.php");
						break;
					case  "7":include("contact.php");
						break;
					case  "10":include("team_cms.php");
						break;
					case  "11":include("wos_cms.php");
						break;
					case  "12":include("wwo_cms.php");
				}
			?>
			<?php include("footer.php"); ?>
		</div>