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
		<form name="sendmail" action="send_email.php" method="post"> 
		Send emails<br><br>
		<font face="courier new">
		From email: <input type="text" name="from" size="45"/><br>
                (this is where "reply" emails will go to)<br><br>
		Subject: <input type="text" name="subject" size="50"/><br><br>
		Message: <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="message" rows="4" cols="40"></textarea><br><br>
		</font>
		<font name="verdana">
		Please check the recipients:<br><br>
		
		All<input type="checkbox" name="All"/>&nbsp;&nbsp;Paid<input type="checkbox" name="Paid"/>&nbsp;&nbsp;Unpaid<input type="checkbox" name="Unpaid"/><br><br>
		<input type=submit value="Send"/>
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
