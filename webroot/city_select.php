<?php
include 'header.html';
include 'ext_functions.php';
$schooldate = $_POST[schooldate];

?>
<br>
<div class="wrapper">
	<?php
		include 'left_menu.html';
	?>
	<form name="register" action="register1.php" method="post">
                <div class="center">
               <br> Welcome to the online Texas Tennis Officials class registration page.  Please select a date from the list below to begin your registration process.  If you do not see a location listed that class is already in the past, full, or the registration cut off date has passed. <br>
               <!-- For the schools for 2015, you will be required to do a background check.  In order to do this check, you must first watch the video located here: <a href="http://training.teamusa.org/" target="_blank">Safeplay </a> -->
If you have any questions, suggestions or concerns about any of these schools,  please do not hesitate to contact your local
Coordinator or contact:
Kevin Foster, Schools Coordinator, KevTennis@aol.com, 254 709 3058
<br>
<br>
<?php
$querystring = "select location from coordinators where active = 1 and schooldate = '$schooldate'";
?>
                <select name="city" id="city">
		  <option value="none" selected="selected">none</option>
                <?php
                mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
                mysql_select_db("tx10isofficials") or die(mysql_error());
                $result = mysql_query($querystring);
                while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                {
                  echo "<option value=\"";
                  echo "{$row['location']}";
                  echo "\"";
                  echo ">";
                  echo "{$row['location']}";
                  echo "</option>";

                }
                ?>


                </select>
		
                <br><br>
                <br>
                <input type="submit" name="submit" id="submit" value="submit"/>
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
