<?php
include 'header.html';
include 'ext_functions.php';

?>
<br>
<div class="index_wrapper">
	<?php
		include 'left_menu.html';
	?>
	<form name="register" action="register1.php" method="post">
                <div class="index_center">
               <br> Welcome to the online Texas Tennis Officials class registration page.  <br>
               
If you have any questions, suggestions or concerns about any of these schools,  please do not hesitate to contact your local
Coordinator or contact:
Kevin Foster, Schools Coordinator, KevTennis@aol.com, 254 709 3058
		<br><br>
                <strong>Are you ready for 2015?</strong><br>
                All officials must complete the SafePlay Training and resubmit for the background check after October 1, 2014.  If you have not resubmitted for the background screening, you will not be recertified for January 1, 2015.
                <br>
                <a href="http://click.icptrack.com/icp/relay.php?r=3319568&msgid=411472&act=OVRN&c=783713&destination=http%3A%2F%2Ftraining.teamusa.org%2F" target="_blank">Click here</a> to complete the SafePlay training.<br>
                <a href="http://click.icptrack.com/icp/relay.php?r=3319568&msgid=411472&act=OVRN&c=783713&destination=https%3A%2F%2Fwww.ncsisafe.com%2Fmembers%2FselfreglandingUSTA.aspx" target="_blank">Click here</a> to apply for the background screening.<br>
                <a href="http://click.icptrack.com/icp/relay.php?r=3319568&msgid=411472&act=OVRN&c=783713&destination=http%3A%2F%2Fwww.icontact-archive.com%2FXij92lifAFNPq4bGCBEkev_qgiCXndN2%3Fw%3D3" target="_blank">Click here</a> to read the original recertification announcement.<br>
                <a href="http://click.icptrack.com/icp/relay.php?r=3319568&msgid=411472&act=OVRN&c=783713&destination=http%3A%2F%2Fwww.icontact-archive.com%2FXij92lifAFNPq4bGCBEkettatfH0tngN%3Fw%3D3" target="_blank">Click here</a> to read the recertification FAQ.<br>
                <a href="https://www.honigs.com/browse.asp?Sub=150" target="_blank">Click here</a> to order Officials clothing.<br><br>
		 <strong>Vision Forms</strong><br>
                Vision forms are due for 2016 certification starting January 2015. About Mid-January we will be sending instructions for submitting vision forms. We would appreciate it if you DO NOT submit vision forms for 2016 until you receive the instructions.<br><br>
                <strong>TDM (Tournament Data Manager)</strong><br>
                New for 2015, there will be a 10 question quiz about TDM.  All Referees will be required to submit proof of passing this quiz as well as the Referee test in order to attend Referee class. All the answers you would need to complete the quiz can be learned from watching webinar available <a href="">here</a>.  While this webinar was recorded during TDM on the web launch and some information has been updated, the answers to any questions are contained within the presentation.<br><br>
                <strong>Officiating Website</strong><br><br>
                <a href="http://click.icptrack.com/icp/relay.php?r=3319568&msgid=411472&act=OVRN&c=783713&destination=http%3A%2F%2Fwww.usta.com%2FAbout-USTA%2FOfficials%2FOfficials%2F%3Fintloc%3Dheadernavsub" target="_blank">Click here</a> to check out the new USTA Officiating Website that was launched this month.<br><br>
                <br>
                Here are the links to the various tests:<br>
                <a href="http://www.proprofs.com/quiz-school/story.php?title=2015-usta-test_2" target="_blank">USTA Test</a><br>
                <a href="http://www.proprofs.com/quiz-school/story.php?title=2015-ita-test" target="_blank">ITA Test</a><br>
                <a href="http://www.proprofs.com/quiz-school/story.php?title=2015-referee-test" target="_blank">Referee Test</a><br>
                <a href="http://www.proprofs.com/quiz-school/story.php?title=untitled-quiz_1164" target="_blank">TDM Referee Test</a><br>        
                <br>Here is a link to a Drop Box account where you can download all of these exams and print them out:<br>
                <a href="https://www.dropbox.com/sh/qacqqx1vn9ffr7p/AAD1rMPpSw4IwvVaZkTwgj_1a?dl=0" target="_blank">PDF Files</a><br>
                <br>
                And finally, a link to the 2015 Friend at Court:<br>
                <a href="https://dl.dropboxusercontent.com/u/7054931/2015%20Friend%20at%20Court/2015FAC.pdf" target="_blank">2015 Friend at Court</a><br>

		<?php
                mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
                mysql_select_db("tx10isofficials") or die(mysql_error());
                $result1 = mysql_query("select cfirst, clast, cemail, cphone, location, schooldate from coordinators where active = 1 order by location");
                echo "<br>Below is the information about the specific schools.<br><br>";
                echo "<TABLE border=1 class='sortable'>";
                echo "<TR>";
                echo "<TD>School</TD><TD>Date</TD><TD>Coordinator</TD><TD>Email</TD><TD>Phone</TD></TR>";
                while($row = mysql_fetch_array($result1, MYSQL_ASSOC))
                {
                    $first = $row['cfirst'];
                    $last = $row['clast'];
                    $email = $row['cemail'];
                    $phone = $row['cphone'];
                    $location = $row['location'];
                    $schooldate = $row['schooldate'];
                    $name = $first." ".$last;
                    echo "<tr><td>$location</td><td>$schooldate</td><td>$name</td><td>$email</td><td>$phone</td></tr>";
                }
                echo "</table><br>**National schools require veteran officials (3 years or more) come Saturday, along with Referee and ITA; Newer officials (0 – 3 years) come Sunday for half day.<br>";
                echo "<br>Please select the school from the list below to begin your registration process.  If you do not see a location listed that class is already in the past, full, or the registration cut off date has passed. <br><br>";    
                    
                echo "<select name='location' id='location'>";
                $result = mysql_query("select distinct location, schooldate from coordinators where active = 1 order by location");
                while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                {
                    $schooldate = $row['schooldate'];
                    $location = $row['location'];
#                    $school = $location." - ".$schooldate;
                  echo "<option value=\"";
#                  echo "{$location}";
                  echo "{$row['location']}";
                  echo "\"";
                  echo ">";
                  echo "{$row['location']}";
#                  echo "{$school}";
                  echo "</option>";

                }
                echo "</select>";
#echo "<input type='hidden' name='location' value='" .$location. "' />";
#echo "<input type='hidden' name='schooldate' value='" .$schooldate. "' />";
                ?>
                
		<input type="hidden" name="pagerefer" id="pagerefer" value="indexpage"/>
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
