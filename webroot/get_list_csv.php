<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=classlist.csv");
$classdate = $_POST['classdate'];
$classlocation = $_POST['classlocation'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
echo "  ,School Attendance Report,,,,,School:,$classlocation \n";
echo "  ,,,,,,Instructor: \n";
echo "  ,Date:,$classdate,,,,Instructor: \n";
echo "  ,,,,,,Coordinator:,$firstname $lastname \n";
echo "  ,,,,New and < 3 years,Exp \n";
echo ",First name,Last name,USTA Number,USTA score,Referee Score,ITA Score,NUCULA(y/n),BG Check(y/n),Email address,Street,City,State,Zip,Contact Phone,Roving Days,Line Days,USTA Chairs,Referee Days,ITA Chairs \n";
mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
$classlocation = $_POST['classlocation'];
mysql_select_db("tx10isofficials") or die(mysql_error());
$rownum = 1;
 $result = mysql_query("SELECT * FROM class where location = '" .$classlocation. "' order by last");
 while($row = mysql_fetch_array($result, MYSQL_ASSOC))
 {
	echo    "$rownum,";
        echo    "\"{$row['last']}\",";
        echo    "\"{$row['first']}\",";
	echo    "\"{$row['USTA']}\",";
	echo    "\"{$row['three']}\",";
	echo    "\"{$row['ita']}\",";
	echo    "\"{$row['referee']}\",";
	echo    ",";
	echo    ",";
        echo    "\"{$row['email']}\",";
        echo    "\"{$row['street1']}\",";
        echo    "\"{$row['city']}\",";
        echo    "\"{$row['state']}\",";
        echo    "\"{$row['postcode']}\",";
        echo    "\"{$row['phone']}\",";
	echo    "\"{$row['roving']}\",";
	echo    "\"{$row['line']}\",";
	echo    "\"{$row['chair']}\",";
	echo    "\"{$row['refereenum']}\",";
	echo    "\"{$row['itachair']}\", \n";
	$rownum = $rownum + 1;
}
?>
