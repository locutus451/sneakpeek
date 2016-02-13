<?PHP
$post_date = $_GET['date'];
mysql_connect("localhost", "root", "sql4root") or die(mysql_error());

mysql_select_db("tx10isofficials") or die(mysql_error());
$sql = "Select location as city, cfirst as firstname, clast as lastname, cemail as email, cphone as phone,info, active as active from coordinators where schooldate ='" .$post_date. "' order by location";
$result = mysql_query($sql);
$dummyData = array();
$i=0;
while($row = mysql_fetch_assoc($result))
{
$tmp = array();
$tmp['city'] = $row["city"];
$tmp['firstname'] = $row["firstname"];
$tmp['lastname'] = $row["lastname"];
$tmp['email'] = $row["email"];
$tmp['phone'] = $row["phone"];
$tmp['info'] = $row["info"];
$tmp['active'] = $row["active"];
$dummyData[$i] = $tmp;
 $i++;
}
mysql_free_result($result);
$jsonData = json_encode($dummyData);
header('Content-type: application/json');
echo $jsonData;
?>
