
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
		<form name="violation" 
#			onclick='return formValidation()'
			action="report_violation.php" method="POST"> 
		Code Violation Report<br><br>
		<font face="courier new">
		Referee Email: &nbsp&nbsp&nbsp<input type="text" name="ref_email" /><br><br>
		Tournament Name: &nbsp<input type="text" name="tournament" /><br><br>
                Tournament ID:   &nbsp;&nbsp;&nbsp<input type="text" name="tid" /><br><br>
                Tournament City:  &nbsp<input type="text" name="tcity" /><br><br>
		Site: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="site" /><br><br>
		Official's Name:      &nbsp<input type="text" name="name" /><br><br>
		Official's Email:          <input type="text" name="email" /><br><br>
		Official's Phone:          <input type="text" name="phone" /><br><br>
		Date:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="date" /><br><br>
		Time:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="time" /><br><br>
		Offending Player:     <input type="text" name="player" /><br><br>
		Opponent:       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="" name="opponent" /><br><br>
		Division:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="division" maxlength=25 /><br><br>
		Code Abbr:        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="code" /><br><br>
		Penalty:        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="penalty" /><br><br>
		Court #:        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="court" /><br><br>
     		<br><b>Description:</b><br>
     		<textarea cols=40 rows=10 name="description"></textarea>
     		<input type= "button" 
                     onclick='return formValidation()'
                     value="Submit">
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
