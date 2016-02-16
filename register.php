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
		<?php

include 'ext_functions.php';

$coordinator = "mikeflynn4@gmail.com";
$state = strtoupper($_POST[state]);
$first = ucwords($_POST[first]);
$last = ucwords($_POST[last]);
$street1 = ucwords($_POST[street1]);
$street2 = ucwords($_POST[street2]);
$city = ucwords($_POST[city]);

mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
mysql_select_db("tx10isofficials") or die(mysql_error());
$result = mysql_query("Insert into class values(null,'$first','$last','$street1','$street2','$city',upper('$_POST[state]'),'$_POST[postcode]','$_POST[phone]','$_POST[location]','$_POST[date_dropdown]','$_POST[new_official]','$_POST[three]','$_POST[ita]','$_POST[referee]','$_POST[email]','$_POST[USTA]','$_POST[roving]','$_POST[line]','$_POST[chair]','$_POST[refereenum]','$_POST[itachair]')");

$result = mysql_query("select cfirst, clast, cemail, cphone,info from coordinators where location = '".$_POST[location]."'");
while ($row = mysql_fetch_assoc($result)) {
	$cfirst = $row['cfirst'];
	$clast = $row['clast'];
	$cemail = $row['cemail'];
	$info = $row['info'];
}

		?>		
		<br>

		<?php
$newdate = date('F d, Y', strtotime($_POST['date_dropdown']));
$to_email = $_POST['email'];
$from_email = "class_registration@tx10isofficials.com";
$subject = "Confirmation of registration for Officials class in $_POST[location]";
$message = "$_POST[first],";
$message .= "<br><br>";
$message .= "This is to confirm you have registered for the following classes at the $_POST[location] officials school on $newdate:";
$message .= "<br><br>";
$message .= "The coordinator for this class is $cfirst $clast. ";
$message .= "$info";
$message .= "<br><br>";
if ( $_POST[new_official] == "on" ) {
	$message .= "USTA for New Officials (0-3 years) - 8:00am to 10:00am<br><br>";
}
if ( $_POST[three] == "on" ) {
	$message .= "USTA for ALL Officials, including new officials - 10:00am to 12:00pm.  For the National Schools, EVERYONE must show up at 8:00.<br><br>";
}
if ( $_POST[ita] == "on" ) {
	$message .= "ITA (must attend the 10-12pm class) - 1:00pm - 3:00pm<br><br>";
}
if ( $_POST[referee] == "on" ) {
	$message .= "Referee (must attend the 10-12pm class) - 3:00pm - 4:00pm<br>";
}
$message .= "<br>The tests will be based on the 2013 Friend At Court.";
$message .= "<br><br>";
$message .= "If you need to cancel, please email me at $cemail and let me know.";
$reply = "Thank you for registering.  You should receive an email confirmation shortly.  If you do not receive an email, please email mikeflynn4@gmail.com and to confirm your registration.";

$sendemail = emailer1($to_email,$from_email,$message,$subject,$reply,$cemail);
$message = "$cfirst,<br><br>";
$message .= "$_POST[first] $_POST[last] has just registered for the following USTA official's class on $newdate in $_POST[location]:<br><br>";
if ( $_POST[new_official] == "on" ) {
	$message .= "USTA for New Officials<br><br>";
}
if ( $_POST[three] == "on" ) {
	$message .= "USTA for New Officials less than 3 years<br><br>";
}
if ( $_POST[ita] == "on" ) {
	$message .= "ITA class<br><br>";
}
if ( $_POST[referee] == "on" ) {
	$message .= "Referee class<br><br>";
}
$reply = " ";
#$sendemail = emailer1($to_email,$from_email,$message,$subject,$reply,$cemail);
$sendemail = emailer1('mikeflynn4@gmail.com',$from_email,$message,$subject,$reply,$cemail);



?>




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
