<?php
include 'header.html';
include 'ext_functions.php';

?>
<br>
<div class="wrapper">
	<?php
		include 'left_menu.html';
	?>
	<form name="register" action="register.php" method="post">
                <div class="center">
               <br> Welcome to the online Texas Tennis Officials class registration page.  Please select a date from the list below to begin your registration process.  If you do not see a location listed that class is already in the past, full, or the registration cut off date has passed. <br>
               <!-- For the schools for 2015, you will be required to do a background check.  In order to do this check, you must first watch the video located here: <a href="http://training.teamusa.org/" target="_blank">Safeplay </a> -->
               <strong>Please note:</strong> MOST schools are scheduled for Saturday only, HOWEVER, depending on the number of officials in the
area/class, the coordinator and instructor may extend the school into Sunday. National schools and larger schools will utilize
both days. Tentative school schedule is as follows:<br><br>
Saturday:<br> USTA for officials with less then 3 years - 8:00 am to 10:00 am
<br>
USTA for all officials - 10:00 am to 12:00 pm
<br>
ITA - 12:00 pm to 2:00 pm
<br>
Referee - 2:00 pm to 4:00 pm<br><br> Sunday:<br> those officials with less than three years of experience for USTA
Certification only 8:00 am to 12:00 pm<br><br>
If you have any questions, suggestions or concerns about any of these schools,  please do not hesitate to contact your local
Coordinator or contact:
Kevin Foster, Schools Coordinator, KevTennis@aol.com, 254 709 3058
		<br><br>
                <select name="date_dropdown" id="date_dropdown">
		  <option value="none" selected="selected">none</option>
                <?php
                mysql_connect("localhost", $username, $password) or die(mysql_error());
                mysql_select_db($dbname) or die(mysql_error());
                 $result = mysql_query("select distinct schooldate from coordinators where active = 1 order by schooldate");
                 while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                 {
                  echo "<option value=\"";
                  echo "{$row['schooldate']}";
                  echo "\"";
                  echo ">";
                  echo "{$row['schooldate']}";
                  echo "</option>";

                 }
                ?>


                </select>
		<input type="hidden" name="pagerefer" id="pagerefer" value="indexpage"/>
                <br><br>
                <br>
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
