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
	<br>
	<form name="inst_up" action="inst_up.php" method="POST">
	Update  instructor(s):<br>
	<font face="courier new">
<table border=1>
	<tr>
		<td align="left">ID</td>
		<td align="left">First Name</td>
		<td align="left">Last Name</td>
	</tr>

<?php
	$rowcount = 0;
	include 'ext_functions.php';
	mysql_connect("localhost","root","sql4root") or die(mysql_error());
	mysql_select_db("tx10isofficials") or die(mysql_error());
	$result = mysql_query("select * from test_instructors");
	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
	 {
		$rowcount++;
        	echo "<tr>";
		echo 	"<td align=left>$rowcount</td>";
        	echo    "<td align=left><input type=text name=first_$rowcount value='{$row['first']}' /></td>";
        	echo    "<td align=left><input type=text name=last_$rowcount value='{$row['last']}' /></td>";
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
