<div id="register">
<?php
include("config.php");
include("con_db.php");
?>
<h2>User Information</h2>
<br>
<form name="register_info" action="" method="POST">
Company username: <input type="text" name="user" class="">
<br>
Company password: <input type="password" name="pass" class="">
<br>
First Name: <input type="text" name="fname" class="">
<br>
Last Name: <input type="text" name="lname" class="">
<br>
Title: <input type="text" name="title" class="">
<br>
Phone Number: <input type="text" name="phone" class="">
<br>
Contact E-mail: <input type="text" name="e-mail" class="">
<br>
<h2> Company Information </h2>
<br>
Company name: <input type="text" name="company_name" class="">
<br>
Company address: <input type="text" name="address" class="">
<br>
Company phone: <input type="text" name="company_phone" class="">
<br>
Fax Address: <input type="text" name="fax" class="">
<br>
Billing Address: <input type="text" name="billing_address" class="">
<br>
Credit Card number: <input type="text" name="credit_card" class="">
<br>
Company description: 
<br> 
<textarea rows="13" cols="38" name="company_desc" class=""></textarea>
</div>