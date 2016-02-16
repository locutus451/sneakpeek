<html>
<?php
include 'header.html';
?>
<br>
<?php
include 'left_menu.html';
?>
                <div style="background: white"> 
                </div>  
<br>
<font color=gold>
<form action="mail.php" method="POST">
<b>Name</b><br>
<input type="text" name="sender_name" size=40>
<p><b>Your Email Address</b><br>
<input type="text" name="sender_email" size=40>
<p><b>Subject</b><br>
<input type="text" name="subject" size=40>
<p><b>Message</b><br>
<textarea cols=40 rows=10 name="message"></textarea>
<p><input type="submit" value=" Send ">
</form>
</font>




	</body>
<div class="clear">
</div>
<?php
include 'footer.html';
?>
</html>
