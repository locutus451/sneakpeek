<html>
<?php
include 'header.html';
?>
<br>
<div class="wrapper">
	<?php
		include 'left_menu.html';
	?>
                <div class="center">
		<br>
		<form name="register" action="register.php" method="post"> 
		Create your sneakpeek profile<br><br>
		<font face="courier new">
		Username<font color=red>*</font>: &nbsp&nbsp<input type="text" name="username" /><br><br>
		Password<font color=red>*</font>: &nbsp&nbsp<input type="text" name="password" /><br><br>
		First Name<font color=red>*</font>: <input type="text" name="first" /><br><br>
		Last Name<font color=red>*</font>: &nbsp<input type="text" name="last" /><br><br>
		Email<font color=red>*</font>:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="email" /><br><br>
		Phone:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="phone" /><br><br>
		Address:    &nbsp;&nbsp;&nbsp<input type="text" name="street1" /><br><br>
		Line 2:     &nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="street2" /><br><br>
		City<font color=red>*</font>:       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="city" /><br><br>
		State<font color=red>*</font>:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="state" maxlength=2 /><br><br>
		Zip<font color=red>*</font>:        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="zip" /><br><br>
		</font>
		<font name="verdana">
		<input type=submit value="Register"/>
		</font>
		</form>
                </div>  
	<br>
</div>
<br>
<br>
<div class="clear">
</div>
<?php
include 'footer.html';
?>
</body>
</html>
