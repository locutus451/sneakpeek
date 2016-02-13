<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=violation.csv");
$tid = $_POST[tid];
echo "  ,Code Violation Report,,,,, \n";
echo "\n";
echo ",Tournament ID,Tournament Name,Referee Email,Offending Player,Violation,Penalty,Official's Name,Official's Email,Official's Phone,Opponent's Name,Division,Description \n";
if ($tid == "all") { 
    $squery = "SELECT * FROM violations";
}else{
    $squery = "SELECT * FROM violations where tid = $tid";
}
mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
mysql_select_db("tx10isofficials") or die(mysql_error());
$rownum = 1;
 $result = mysql_query("$squery");
 while($row = mysql_fetch_array($result, MYSQL_ASSOC))
 {
	echo    "$rownum,";
        echo    "\"{$row['tid']}\",";
        echo    "\"{$row['tname']}\",";
	echo    "\"{$row['ref_email']}\",";
	echo    "\"{$row['player']}\",";
        switch ({$row['violation']}) {
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
                echo "\code not found";
        }
	echo    "\"{$row['violation']}\",";
	echo    "\"{$row['penalty']}\",";
	echo    "\"{$row['oname']}\",";
	echo    "\"{$row['oemail']}\",";
	echo    "\"{$row['ophone']}\",";
        echo    "\"{$row['opponent']}\",";
        echo    "\"{$row['division']}\",";
        echo    "\"{$row['description']}\",";
	$rownum = $rownum + 1;
}
?>
