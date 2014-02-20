<?php
function dbconnection()	
{
	mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
	mysql_select_db("tx10isofficials") or die(mysql_error());
}

function emailer($to_email,$from_email,$message,$subject,$reply)	
{
	/* PHP form validation: the script checks that the Email field contains a valid email address and the Subject field isn't empty. preg_match performs a regular expression match. It's a very powerful PHP function to validate form fields and other strings - see PHP manual for details. */
	if (!preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $to_email)) {
	  echo "<h4>Invalid email address</h4>";
	  echo "<a href='javascript:history.back(1);'>Back</a>";
	} elseif ($subject == "") {
	  echo "<h4>No subject</h4>";
	  echo "<a href='javascript:history.back(1);'>Back</a>";
	}

	/* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
	elseif (mail($to_email,$subject,$message,"From: $from_email\nContent-Type: text/html; charset=iso-8859-1")) {
	  echo "<h4>$reply</h4>";
	} else {
	  echo "<h4>Can't send email to $to_email.</h4>";
	}

}
function emailer1($to_email,$from_email,$message,$subject,$reply,$coordinator)
{
        /* PHP form validation: the script checks that the Email field contains a valid email address and the Subject field isn't empty. preg_match performs a regular expression match. It's a very powerful PHP function to validate form fields and other strings - see PHP manual for details. */
        if (!preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $to_email)) {
          echo "<h4>Invalid email address</h4>";
          echo "<a href='javascript:history.back(1);'>Back</a>";
        } elseif ($subject == "") {
          echo "<h4>No subject</h4>";
          echo "<a href='javascript:history.back(1);'>Back</a>";
        }       

        /* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
        
	$headers = "From: $from_email\r\n";
	$headers .= "Reply-To: no-reply@austintennisofficials.org\r\n";
	$headers .= "Return-Path: no-reply@austintennisofficials.org\r\n";
	$headers .= "Content-Type: text/html; charset=iso-8859-1";

if ( mail($to_email,$subject,$message,$headers)){
	echo "<h4>$reply</h4>";
	} else {
	echo "<h4>Can't send email to $to_email.</h4>";
	}
}
# PHP Calendar (version 2.3), written by Keith Devens
# http://keithdevens.com/software/php_calendar
#  see example at http://keithdevens.com/weblog
# License: http://keithdevens.com/software/license

function generate_calendar($year, $month, $days = array(), $day_name_length = 3, $month_href = NULL, $first_day = 0, $pn = array()){
	$first_of_month = gmmktime(0,0,0,$month,1,$year);
	#remember that mktime will automatically correct if invalid dates are entered
	# for instance, mktime(0,0,0,12,32,1997) will be the date for Jan 1, 1998
	# this provides a built in "rounding" feature to generate_calendar()

	$day_names = array(); #generate all the day names according to the current locale
	for($n=0,$t=(3+$first_day)*86400; $n<7; $n++,$t+=86400) #January 4, 1970 was a Sunday
		$day_names[$n] = ucfirst(gmstrftime('%A',$t)); #%A means full textual day name

	list($month, $year, $month_name, $weekday) = explode(',',gmstrftime('%m,%Y,%B,%w',$first_of_month));
	$weekday = ($weekday + 7 - $first_day) % 7; #adjust for $first_day
	$title   = htmlentities(ucfirst($month_name)).'&nbsp;'.$year;  #note that some locales don't capitalize month and day names

	#Begin calendar. Uses a real <caption>. See http://diveintomark.org/archives/2002/07/03
	@list($p, $pl) = each($pn); @list($n, $nl) = each($pn); #previous and next links, if applicable
	if($p) $p = '<span class="calendar-prev">'.($pl ? '<a href="'.htmlspecialchars($pl).'">'.$p.'</a>' : $p).'</span>&nbsp;';
	if($n) $n = '&nbsp;<span class="calendar-next">'.($nl ? '<a href="'.htmlspecialchars($nl).'">'.$n.'</a>' : $n).'</span>';
	$calendar = '<table class="calendar">'."\n".
		'<caption class="calendar-month">'.$p.($month_href ? '<a href="'.htmlspecialchars($month_href).'">'.$title.'</a>' : $title).$n."</caption>\n<tr>";

	if($day_name_length){ #if the day names should be shown ($day_name_length > 0)
		#if day_name_length is >3, the full name of the day will be printed
		foreach($day_names as $d)
			$calendar .= '<th abbr="'.htmlentities($d).'">'.htmlentities($day_name_length < 4 ? substr($d,0,$day_name_length) : $d).'</th>';
		$calendar .= "</tr>\n<tr>";
	}

	if($weekday > 0) $calendar .= '<td colspan="'.$weekday.'">&nbsp;</td>'; #initial 'empty' days
	for($day=1,$days_in_month=gmdate('t',$first_of_month); $day<=$days_in_month; $day++,$weekday++){
		if($weekday == 7){
			$weekday   = 0; #start a new week
			$calendar .= "</tr>\n<tr>";
		}
		if(isset($days[$day]) and is_array($days[$day])){
			@list($link, $classes, $content) = $days[$day];
			if(is_null($content))  $content  = $day;
			$calendar .= '<td'.($classes ? ' class="'.htmlspecialchars($classes).'">' : '>').
				($link ? '<a href="'.htmlspecialchars($link).'">'.$content.'</a>' : $content).'</td>';
		}
		else $calendar .= "<td>$day</td>";
	}
	if($weekday != 7) $calendar .= '<td colspan="'.(7-$weekday).'">&nbsp;</td>'; #remaining "empty" days

	return $calendar."</tr>\n</table>\n";
}
function convertDate2String($inputDate) {
	return date('F d, Y', strtotime($inputDate));
}


?>
