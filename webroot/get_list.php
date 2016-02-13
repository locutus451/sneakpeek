<html>
<body>
<form name="classlist" action="get_list_csv.php" method="post">
	<table border=1>
		<tr>
			<td align="left">First name</td>
			<td align="left">Last name</td>
			<td align="left">USTA Number</td>
			<td align="center">Email Address</td>
			<td align="center">Phone number</td>
			<td align="left">Street</td>
			<td align="left">City</td>
			<td align="left">State</td>
			<td align="left">Zip</td>
			<td align="left">USTA</td>
			<td align="left">ITA</td>
			<td align="left">Referee</td>
			<td align="left">Roving Days</td>
			<td align="left">Line Days</td>
			<td align="left">USTA Chairs</td>
			<td align="left">Referee Days</td>
			<td align="left">ITA Chairs</td>
#			<td align="left">Under 18?</td>
		</tr>

<?php
mysql_connect("localhost", "root", "sql4root") or die(mysql_error());

mysql_select_db("tx10isofficials") or die(mysql_error());
$sqlstatement = "SELECT * FROM class where location = '" .$_POST['classlocation']. "' order by last";
$result = mysql_query($sqlstatement);
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
 {
	echo "<tr>";
	echo 	"<td align=left>{$row['first']}</td>";
	echo    "<td align=left>{$row['last']}</td>";
	echo	"<td aligh=left>{$row['USTA']}</td>";
	echo    "<td align=right>{$row['email']}</td>";
	echo    "<td align=right>{$row['phone']}</td>";
	echo    "<td align=left>{$row['street1']}</td>";
	echo    "<td align=left>{$row['city']}</td>";
	echo    "<td align=right>{$row['state']}</td>";
	echo    "<td align=left>{$row['postcode']}</td>";
	echo	"<td align=left>{$row['three']}</td>";
	echo	"<td align=left>{$row['ita']}</td>";
	echo 	"<td align=left>{$row['referee']}</td>";
	echo    "<td align=left>{$row['roving']}</td>";
	echo    "<td align=left>{$row['line']}</td>";
	echo    "<td align=left>{$row['chair']}</td>";
	echo    "<td align=left>{$row['refereenum']}</td>";
	echo    "<td align=left>{$row['itachair']}</td>";
#	echo    "<td align=left>{$row['under18']}</td>";
	echo "</tr>";
 } 
echo "</table><br><br>";
$classlocation = $_POST['classlocation'];
echo "<input type='hidden' name='classlocation' value='" .$classlocation. "' />";

$sqlstatement = "select * from coordinators where location='" .$classlocation. "'";
$result = mysql_query($sqlstatement);
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
 {
	$firstname=$row['cfirst'];
	$lastname=$row['clast'];
 }

$classdate = $_POST['class_date'];
echo "<input type='hidden' name='classdate' value='" .$classdate. "' />";
echo "<input type='hidden' name='firstname' value='" .$firstname. "' />";
echo "<input type='hidden' name='lastname' value='" .$lastname. "' />";
?> 
<input type="submit" value="Export to Excel">
</form>
</body>
