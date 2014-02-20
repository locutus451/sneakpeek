<script type='text/javascript'>

function forValidation() {
        var ref_email = document.getElementById('ref_email');
        var tournament = document.getElementById('tournament');
        var tid = document.getElementById('tid');
        var site = document.getElementById('site');
        var name = document.getElementById('name');
        var email = document.getElementById('email');
        var phone = document.getElementById('phone');
        var date = document.getElementById('date');
        var time = document.getElementById('time');
        var player = document.getElementById('playet');
        var opponent  = document.getElementById('opponent');
        var division  = document.getElementById('divisiion');
        var code = document.getElementById('code');
        var penalty = document.getElementById('penalty');
        var court = document.getElementById('court');
        var description = document.getElementById('description');
	
	if(notEmpty(ref_email, "Please enter the referee's email address")){
	  if(notEmpty(tournament, "Please enter the tournament name")){
            if(notEmpty(tid,"Please enter the tournament id")){
             if(notEmpty(site,"Please enter the site name")){
	       if(notEmpty(name,"Please enter your name")){
                 if(notEmpty(email,"Please enter your email address")){
                   if(notEmpty(phone,"Please enter your phone number")){
                     if(notEmpty(date,"Please enter the date of the offense")){
                       if(notEmpty(time,"Please enter the time of the offense")){
                         if(notEmpty(player,"Please enter the name of the player committing the offense")){
                           if(notEmpty(opponent,"Please enter the name of the opposing plaer")){
                             if(notEmpty(division,"Please enter the division")){
                               if(notEmpty(code,"Please enter the code violation")){
                                 if(notEmpty(penalty,"Please enter the penalty")){
                                   if(notEmpty(court,"Please enter the court number")){
                                     if(notEmpty(description,"Please enter the description of the offense")){
                                       return true;{
                                     }
                                   } 
                                 }
                               }
                             }
                           }
                         }
	               }
                     }
                   }
                 }
               }
             }
            }
          }
        } 

        return false;
}

function notEmpty(elem, helperMsg){

	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus();
		return false;
	}
	document.violation.submit.submit();
}



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
