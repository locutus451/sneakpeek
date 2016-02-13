<?php
include 'header.html';
include 'ext_functions.php';

?>
<br>
<script type="text/javascript">
    function isNumeric(string) {
var regex = /^\d+/;;
return regex.test(string);
}
    function validateForm() {
        var x = document.forms["referee"]["refnum"].value;
        if(!isNumeric(x)){
            alert('Referee USTA number must be a valid whole number');
            return false;
        }
        var x = document.forms["referee"]["refemail"].value;
        if (x == null || x == "") {
            alert("Referee's Email address must be filled out");
            return false;
        }
        var x = document.forms["referee"]["rfirst"].value;
        if (x == null || x == "") {
            alert("Referee's first name must be filled out");
            return false;
        }
        var x = document.forms["referee"]["rlast"].value;
        if (x == null || x == "") {
            alert("Referee's last name must be filled out");
            return false;
        }
        var x = document.forms["referee"]["date1"].value;
        if (x == null || x == "") {
            alert("Date 1 must be filled out");
            return false;
        }
        var x = document.forms["referee"]["site1"].value;
        if (x == null || x == "") {
            alert("Site 1 must be filled out");
            return false;
        }
        var x = document.forms["referee"]["emails"].value;
        if (x == null || x == "") {
            alert("Email field must be filled out");
            return false;
        }
}
</script>

<div class="index_wrapper">
	<?php
		include 'left_menu.html';
	?>
	<form name="referee" action="create_tournament.php" onsubmit="return validateForm();" method="post">
                <div class="index_center">
               <br> Welcome to the online Tournament Officials Management site.  <br>
               
If you have any questions or suggestions,  please email Mike Flynn at mikeflynn4@gmail.com.
		<br><br>
                <div class="registration">
                To start, please input your USTA#&nbsp;<input type="text" name="refnum" id="refnum" size="15"><br>
                Please input your email address&nbsp;&nbsp;&nbsp;<input type="text" name="refemail" id="refemail" size="15"><br>
                Please input your first name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="rfirst" id="rfirst" size="15"><br>
                Please input your last name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="rlast" id="rlast" size="15"><br>
		<?php
                mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
                mysql_select_db("tx10isofficials") or die(mysql_error());
                echo "<br>Select the Tournament id&nbsp;<select name='tid' id='tid'>";
                $result1 = mysql_query("select id from tournament_2014 order by id");
                while($row = mysql_fetch_array($result1, MYSQL_ASSOC))
                {
                    $tid = $row['id'];
                  echo "<option value=\"";
                  echo "{$tid}";
                  echo "\"";
                  echo ">";
                  echo "{$tid}";
                  echo "</option>";

                }
                echo "</select>";
                ?>
                </div>
                <br><br>
                Please input the dates and sites for the tournament.  Dates should be formatted like MM-DD-YY and sites should be abbreviated using the same abbreviations used on the USTA tournament site.<br><br>
                <div class="registration">
                    Date  1:&nbsp;&nbsp;<input type="text" name="date1" id="date1" size="8">&nbsp;Site  1:&nbsp;&nbsp;<input type="text" name="site1" id="site1" size="10"><br>
                    Date  2:&nbsp;&nbsp;<input type="text" name="date2" id="date2" size="8">&nbsp;Site  2:&nbsp;&nbsp;<input type="text" name="site2" id="site2" size="10"><br>
                    Date  3:&nbsp;&nbsp;<input type="text" name="date3" id="date3" size="8">&nbsp;Site  3:&nbsp;&nbsp;<input type="text" name="site3" id="site3" size="10"><br>
                    Date  4:&nbsp;&nbsp;<input type="text" name="date4" id="date4" size="8">&nbsp;Site  4:&nbsp;&nbsp;<input type="text" name="site4" id="site4" size="10"><br>
                    Date  5:&nbsp;&nbsp;<input type="text" name="date5" id="date5" size="8">&nbsp;Site  5:&nbsp;&nbsp;<input type="text" name="site5" id="site5" size="10"><br>
                    Date  6:&nbsp;&nbsp;<input type="text" name="date6" id="date6" size="8">&nbsp;Site  6:&nbsp;&nbsp;<input type="text" name="site6" id="site6" size="10"><br>
                    Date  7:&nbsp;&nbsp;<input type="text" name="date7" id="date7" size="8">&nbsp;Site  7:&nbsp;&nbsp;<input type="text" name="site7" id="site7" size="10"><br>
                    Date  8:&nbsp;&nbsp;<input type="text" name="date8" id="date8" size="8">&nbsp;Site  8:&nbsp;&nbsp;<input type="text" name="site9" id="site8" size="10"><br>
                    Date  9:&nbsp;&nbsp;<input type="text" name="date9" id="date9" size="8">&nbsp;Site  9:&nbsp;&nbsp;<input type="text" name="site9" id="site9" size="10"><br>
                    Date 10:&nbsp;<input type="text" name="date10" id="date10" size="8">&nbsp;Site 10:&nbsp;<input type="text" name="site10" id="site10" size="10"><br><br>
		</div> 
                    Input the email addresses of the officials that you want to send this tournament information to, separated by a comma:<br><br>
                    <textarea name="emails" id="emails" rows="10" cols="50"></textarea><br><br>
                    Please input any additional information you would like to send to the officials:<br><br>
                    <textarea name="refinfo" id="refinfo" rows="10" cols="50"></textarea><br><br>
                <input type="submit" name="submit" id="submit" value="submit"/>
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
