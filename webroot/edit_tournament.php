<?php
include 'header.html';
include 'ext_functions.php';
?>
<br>
<div class="index_wrapper">
	<?php
		include 'left_menu.html';
	?>
	<form name="referee" action="update_tournament.php" method="post">
                <div class="index_center">
               <br> Please enter your USTA number and the tournament id to find the tournament you need to edit:  <br>
<?php
                    echo "Referee USTA Number:&nbsp;&nbsp;<input type='text' name='refnum' id='refnum' size='10' ><br>";
                    echo "Tournament ID Number:&nbsp;&nbsp;<input type='text' name='tid' id='tid' size='10' ><br><br>";
?>
                <input type="submit" name="search" id="search" value="submit"/>
		</div> 
                <div class="center" id="infodiv">

                </div> 
	</form>
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
