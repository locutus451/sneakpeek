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

/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */
$sender_email = $_POST['sender_email'];
$sender_name = $_POST['sender_name'];
$to_email = "mikeflynn4@gmail.com,kevtennis@aol.com";
/* $to_email = "mikeflynn4@gmail.com"; */
$from = "contactus@tx10isofficials.com";
$subject = $_POST['subject'];
$message = "$sender_name had the following inquiry:";
$message .= "<br><br>";
$message .= $_POST['message'];
$message .= "<br><br>";
$break = "Reply to the following email address:";
$break .= "<br><br>";
$message = $message.$break.$sender_email;
$reply = "Thank you for contacting us.  We will reply to your question/comment as soon as possible.";

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
