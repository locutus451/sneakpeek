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

if ( $_POST[All] == "on" ) {
$sql_query = "Select first, last, email from officials where email not in (select email from class)";
}

if ( $_POST[Paid] == "on" ) {
$sql_query = "Select first, last, email from officials where paid = 1";
}
if ( $_POST[Unpaid] == "on" ) {
$sql_query = "Select first, last, email from officials where paid = 0";
}
$from_email = $_POST[from];


$coordinator = "mflynn@austin.rr.com";
//$from_email = "schoolscoordinator@austintennisofficials.org";
$subject = "$_POST[subject]";
$smessage = "$_POST[message]";
$connect = dbconnection();
//$sql_query = "select first, last, email from officials where email not in (select email from class)";

$result = mysql_query($sql_query);
while ($row = mysql_fetch_assoc($result)) {

	$to_email = $row['email'];

	$first = $row['first'];
	$last = $row['last'];

	$message = "$first,";
	$message .= "<br><br>";
	$message .= $smessage;
	$sendemail = emailer1($to_email,$from_email,$message,$subject,$reply,$coordinator);

	echo "$first<br>";
	echo "$last<br>";
	echo "$smessage<br>";
	echo "$sql_query";
}
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
