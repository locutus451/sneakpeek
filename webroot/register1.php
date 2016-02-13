<html>
<?php
include 'header.html';
$location = $_POST[location];
mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
mysql_select_db("tx10isofficials") or die(mysql_error());
$querystring = "select schooldate from coordinators where active = 1 and location = '".$location."'";
echo "$querystring";
$result1 = mysql_query($querystring);
    while($row = mysql_fetch_array($result1, MYSQL_ASSOC))
        {
            $schooldate = $row['schooldate'];
        }

?>
<script type="text/javascript">
    function isNumeric(string) {
var regex = /^\d+/;;
return regex.test(string);
}
    function validateForm() {
        var x = document.forms["registerme"]["first"].value;
        if (x == null || x == "") {
            alert("First name must be filled out");
            return false;
        }
        var x = document.forms["registerme"]["last"].value;
        if (x == null || x == "") {
            alert("Last name must be filled out");
            return false;
        }
        var x = document.forms["registerme"]["USTA"].value;
        if (x == null || x == "") {
            alert("USTA Number must be filled out");
            return false;
        }
        var x = document.forms["registerme"]["email"].value;
        if (x == null || x == "") {
            alert("Email must be filled out");
            return false;
        }
        var x = document.forms["registerme"]["phone"].value;
        if (x == null || x == "") {
            alert("Phone number must be filled out");
            return false;
        }
        var x = document.forms["registerme"]["roving"].value;
        if(!isNumeric(x)){
            alert('Number of roving days must be a valid whole number');
            return false;
        }
        var x = document.forms["registerme"]["line"].value;
        if(!isNumeric(x)){
            alert('Number of line days must be a valid whole number');
            return false;
        }
        var x = document.forms["registerme"]["chair"].value;
        if(!isNumeric(x)){
            alert('Number of USTA chair days must be a valid whole number');
            return false;
        }
        var x = document.forms["registerme"]["itachair"].value;
        if(!isNumeric(x)){
            alert('Number of ITA chairs must be a valid whole number');
            return false;
        }
        var x = document.forms["registerme"]["refereenum"].value;
        if(!isNumeric(x)){
            alert('Number of Referee days must be a valid whole number');
            return false;
        }
        
}
</script>
<br>
<div class="wrapper">
	<?php
		include 'left_menu.html';
	?>
                <div class="center" id="infodiv">
<form name="registerme" action="register.php" onsubmit="return validateForm();" method="POST"> 

<div id="registration" class="registration"><br><br>
<?php
echo "Class location selected is $location<br><br>";
echo "Date selected is $schooldate<br><br>";
echo "<input type=\"hidden\" name=\"location\" value=\"$location\">";
echo "<input type=\"hidden\" name=\"schooldate\" value=\"$schooldate\">";
?>
First Name: <input type="text" name="first" /><br><br>
Last Name: &nbsp<input type="text" name="last" /><br><br>
USTA #:     &nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="USTA" /><br><br>
Email:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="email" /><br><br>
Phone:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="phone" /><br><br>
Address:    &nbsp;&nbsp;&nbsp<input type="text" name="street1" /><br><br>
Line 2:     &nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="street2" /><br><br>
City:       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="city" /><br><br>
State:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="state" maxlength=2 /><br><br>
Zip:        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="postcode" /><br><br>
Please check the class(es) you will be attending:<br><br>
<input type="checkbox" name="three"/>USTA<br>
<input type="checkbox" name="ita"/>ITA (Must attend USTA class)<br>
<input type="checkbox" name="referee"/>Referee (Must attend USTA class)<br><br>
<br>Please indicate the approximate number of Officiating days or number of chairs you work in each category - in a calendar year:<br><br>
USTA Roving:  &nbsp;&nbsp;&nbsp<input type="text" name="roving" maxlength=3 value="0"/><br><br>
USTA Line:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="line" maxlength=3  value="0"/><br><br>
USTA Chair:  &nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="chair" maxlength=3  value="0"/><br><br>
USTA Referee: &nbsp;&nbsp<input type="text" name="refereenum" maxlength=3  value="0"/><br><br>
ITA Chair: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="itachair" maxlength=3  value="0"/><br><br>
<input type=submit value="Register" />
</div>
<div class="clear">
</div>                    
<?php
include 'footer.html';
?>
</body>
</html>
