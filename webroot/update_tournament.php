<?php
include 'header.html';
include 'ext_functions.php';
$refnum = $_POST[refnum];
$tid = $_POST[tid];
?>
<br>
<div class="index_wrapper">
	<?php
		include 'left_menu.html';
	?>
	<form name="referee" action="create_tournament.php" method="post">
                <div class="index_center">
               <br> Below is the information you have input.  If you need to make changes, please update here.  <br>
               
If you have any questions,  please email Mike Flynn at mikeflynn4@gmail.com.
		<br><br>
		<?php
                mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
                mysql_select_db("tx10isofficials") or die(mysql_error());
                $result1 = mysql_query("select * from tour_official where tid = $tid and refnum=$refnum");
                while($row = mysql_fetch_array($result1, MYSQL_ASSOC))
                {
                    $tid = $row['tid'];
                    $refnum = $row['refum'];
                    $date1 = $row['date1'];
                    $date2 = $row['date2'];
                    $date3 = $row['date3'];
                    $date4 = $row['date4'];
                    $date5 = $row['date5'];
                    $date6 = $row['date6'];
                    $date7 = $row['date7'];
                    $date8 = $row['date8'];
                    $date9 = $row['date9'];
                    $date10 = $row['date10'];
                    $site1 = $row['site1'];
                    $site2 = $row['site2'];
                    $site3 = $row['site3'];
                    $site4 = $row['site4'];
                    $site5 = $row['site5'];
                    $site6 = $row['site6'];
                    $site7 = $row['site7'];
                    $site8 = $row['site8'];
                    $site9 = $row['site9'];
                    $site10 = $row['site10'];
                    $emails = $row['emails'];
                }
                $tournamentnamequery="select * from tournament where id = $tid";
                $result2 = mysql_query($tournamentnamequery);
                while($row = mysql_fetch_array($result2, MYSQL_ASSOC))
                {
                    $name = $row['name'];
                }
                echo "The tournament ID you entered was: $tid <br> which is the $name tournament";
                ?>
                <br><br>
                
                Update and/or add dates and sites to your tournament:<br><br>
                <div class="registration">
<?php
                    echo "Date  1:&nbsp;&nbsp;<input type='text' name='date1' id='date1' size='8' value=$date1>&nbsp;Site  1:&nbsp;&nbsp;<input type='text' name='site1' id='site1' size='10' value=$site1><br>";
                    echo "Date  2:&nbsp;&nbsp;<input type='text' name='date2' id='date2' size='8' value=$date2>&nbsp;Site  2:&nbsp;&nbsp;<input type='text' name='site2' id='site2' size='10' value=$site2><br>";
                    echo "Date  3:&nbsp;&nbsp;<input type='text' name='date3' id='date3' size='8' value=$date3>&nbsp;Site  3:&nbsp;&nbsp;<input type='text' name='site3' id='site3' size='10' value=$site3><br>";
                    echo "Date  4:&nbsp;&nbsp;<input type='text' name='date4' id='date4' size='8' value=$date4>&nbsp;Site  4:&nbsp;&nbsp;<input type='text' name='site4' id='site4' size='10' value=$site4><br>";
                    echo "Date  5:&nbsp;&nbsp;<input type='text' name='date5' id='date5' size='8' value=$date5>&nbsp;Site  5:&nbsp;&nbsp;<input type='text' name='site5' id='site5' size='10' value=$site5><br>";
                    echo "Date  6:&nbsp;&nbsp;<input type='text' name='date6' id='date6' size='8' value=$date6>&nbsp;Site  6:&nbsp;&nbsp;<input type='text' name='site6' id='site6' size='10' value=$site6><br>";
                    echo "Date  7:&nbsp;&nbsp;<input type='text' name='date7' id='date7' size='8' value=$date7>&nbsp;Site  7:&nbsp;&nbsp;<input type='text' name='site7' id='site7' size='10' value=$site7><br>";
                    echo "Date  8:&nbsp;&nbsp;<input type='text' name='date8' id='date8' size='8' value=$date8>&nbsp;Site  8:&nbsp;&nbsp;<input type='text' name='site9' id='site8' size='10' value=$site8><br>";
                    echo "Date  9:&nbsp;&nbsp;<input type='text' name='date9' id='date9' size='8' value=$date9>&nbsp;Site  9:&nbsp;&nbsp;<input type='text' name='site9' id='site9' size='10' value=$site9><br>";
                    echo "Date 10:&nbsp;<input type='text' name='date10' id='date10' size='8' value=$date10>&nbsp;Site 10:&nbsp;<input type='text' name='site10' id='site10' size='10' value=$site10><br><br>";
                    echo "Email addresses that you entered:<br>";
                    echo "<textarea name='emails' id='emails' rows='10' cols='50' readonly>$emails</textarea><br><br>";
?>
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
