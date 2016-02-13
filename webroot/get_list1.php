<html>
<body>
<form name="violationlist" action="get_codelist_csv.php" method="post">
    
	<table border=1>
		<tr>
			<td align="left">Tournament ID</td>
			<td align="left">Tournament Name</td>
			<td align="left">Referee Email</td>
			<td align="center">Player</td>
			<td align="center">Code Violation</td>
			<td align="left">Penalty</td>
			<td align="left">Official's Name</td>
			<td align="left">Official's Email</td>
			<td align="left">Official's Phone Number</td>
			<td align="left">Opponent</td>
			<td align="left">Division</td>
                        <td align="left">Description</td>
		</tr>

<?php
$tid = $_POST[tid];
mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
mysql_select_db("tx10isofficials") or die(mysql_error());
if ($tid == "all") { 
    $squery = "SELECT * FROM violations";
}else{
    $squery = "SELECT * FROM violations where tid = $tid";
}


$result = mysql_query($squery);
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
 {
	echo "<tr>";
	echo 	"<td align=left>{$row['tid']}</td>";
	echo    "<td align=left>{$row['tname']}</td>";
	echo	"<td aligh=left>{$row['ref_email']}</td>";
	echo    "<td align=right>{$row['player']}</td>";
	echo    "<td align=right>{$row['violation']}</td>";
       switch ($row['violation']) {
            case "DEL":
                echo "\"Unreasonable Delays";
                break;
            case "AOB":
                echo "\"Audible Obscenity";
                break;
            case "VOB":
                echo "\"Visible Obscenity";
                break;
            case "BA":
                echo "\"Ball Abuse";
                break;
            case "RA":
                echo "\"Racquet Abuse";
                break;
            case "VA":
                echo "\"Verbal Abuse";
                break;
            case "PHA":
                echo "\"Physical Abuse";
                break;
            case "CC":
                echo "\"Coaching, Coaches";
                break;
            case "UNC":
                echo "\"Unsportsmanlike Conduct";
                break;
            default:
                echo "\"code not found";
        }
        
        echo    "<td align=left>{$row['penalty']}</td>";
	echo    "<td align=left>{$row['oname']}</td>";
	echo    "<td align=right>{$row['oemail']}</td>";
	echo    "<td align=left>{$row['ophone']}</td>";
	echo	"<td align=left>{$row['opponent']}</td>";
	echo	"<td align=left>{$row['division']}</td>";
	echo	"<td align=left>{$row['description']}</td>";
	echo "</tr>";
 } 
echo "</table><br><br>";
echo "<input type='hidden' name='tid' id='tid' value='" .$tid. "' />";
?> 
<input type="submit" value="Export to Excel">
</form>
</body>
