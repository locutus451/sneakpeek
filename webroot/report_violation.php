<html>
<?php
include 'header.html';
?>
<br>
<?php
include 'left_menu.html';
include 'ext_functions.php';
?>
<div class="wrapper">
<div class="center">
<?php
echo $_POST['id_dropdown'];
ini_set('display_errors','1');
/* All form fields are automatically passed to the PHP script through the array $_POST. */
$to_email = $_POST['ref_email'];
$from = "tx10isofficials@tx10isofficials.com";
$subject = $_POST['tournament'];
$subject .= " Code Violation Report.";
$message = "Tournament ID:  ";
$message .= $_POST['id_dropdown'];
$message .= "<br>";
$message .= "Official's name:  ";
$message .= $_POST['name'];
$message .= "<br>";
$message .= "Official's email:  ";
$message .= $_POST['email'];
$message .= "<br>";
$message .= "Official's phone:  ";
$message .= $_POST['phone'];
$message .= "<br>";
$message .= "City: ";
$message .= $_POST['tcity'];
$message .= "<br>";
$message .= "Code Violation Report for (offending player's name):  ";
$message .= $_POST['player'];
$message .= "<br>";
$message .= "Opponent's Name:  ";
$message .= $_POST['opponent'];
$message .= "<br>";
$message .= "Date of violation:  ";
$message .= $_POST['date'];
$message .= "<br>";
$message .= "Round:  ";
$message .= $_POST['round'];
$message .= "<br>";
$message .= "Division:  ";
$message .= $_POST['division'];
$message .= "<br>";
$message .= "Code Violation:  ";
$message .= $_POST['code'];
$message .= "<br>";
$message .= "Penalty:  ";
$message .= $_POST['penalty'];
$message .= "<br>";
$message .= "Court #:  ";
$message .= $_POST['court'];
$message .= "<br>";
$message .= "Code Violation Description:";
$message .= "<br>";
$message .= $_POST['description'];
$reply = "Your report has now been submitted.";

$sentmail = emailer($to_email,$from,$message,$subject,$reply);


?>
</div>
</div>
<div class="clear">
</div>
<?php
include 'footer.html';
?>
</body>
</html>
