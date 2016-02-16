<html>
<?php
include 'edit_header.html';
?>
<br>
<div class="wrapper">
<?php 
	include 'left_menu.html';
?>
	<div class="center">
	<br>
	<form name="coord_up" background="white" action="coord_up_new.php" method="POST">
	Update  coordinator(s):<br>
	<font face="courier new">
<table border=1 background=white>
	<tr>
		<td align="left">ID</td>
		<td align="left">Location</td>
		<td align="left">School Date</td>
		<td align="left">First Name</td>
		<td align="left">Last Name</td>
		<td align="left">Email Address</td>
		<td align="left">Phone Number</td>
		<td align="left">Info</td>
		<td align="left">Active</td>
	</tr>

<?php
	$rowcount = 0;
	include 'ext_functions.php';
	mysql_connect("localhost","root","sql4root") or die(mysql_error());
	mysql_select_db("tx10isofficials") or die(mysql_error());
	$result = mysql_query("select * from test_coordinators");
	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
	 {
		$rowcount++;
        	echo "<tr>";
		echo 	"<td align=left>$rowcount</td>";
		echo    "<td align=left><input type=text name=location_$rowcount value='{$row['location']}' /></td>";
		echo    "<td align=left><input type=text name=schooldate_$rowcount value='{$row['schooldate']}' /></td>";
        	echo    "<td align=left><input type=text name=first_$rowcount value='{$row['cfirst']}' /></td>";
        	echo    "<td align=left><input type=text name=last_$rowcount value='{$row['clast']}' /></td>";
		echo    "<td align=left><input type=text name=cemail_$rowcount value='{$row['cemail']}' /></td>";
		echo    "<td align=left><input type=text name=cphone_$rowcount value='{$row['cphone']}' /></td>";
		echo    "<td align=left><input type=text name=info_$rowcount value='{$row['info']}' /></td>";
		echo    "<td align=left><input type=text name=active_$rowcount value='{$row['active']}' /></td>";
		echo    "<td ";
		echo "</tr>";
	}
?>
</table>


	</font>
		<br>
		<br>
		<input type="submit" value="Update">
	</form>
	</div>
<div class="clear">
</div>
<?php
include 'footer.html';
?>
</body>
</html>
