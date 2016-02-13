<?PHP
$post_city = $_GET['city'];
mysql_connect("localhost", $username, $password) or die(mysql_error());

mysql_select_db($dbname) or die(mysql_error());
$sql = "Select location as city, cfirst as firstname, clast as lastname, cemail as email, cphone as phone from coordinators where location ='" .$post_city. "' order by location";
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
$dummyData[$i] = $tmp;
 $i++;
}
mysql_free_result($result);
$jsonData = json_encode($dummyData);
header('Content-type: application/json');
echo $jsonData;
?>
