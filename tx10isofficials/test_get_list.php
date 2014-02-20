<html>
<body>
<form name="classlist" action="get_list_csv.php" method="post">
	<table border=1>
		<tr>
			<td align="left">First name</td>
			<td align="left">Last name</td>
			<td align="center">Email Address</td>
			<td align="center">Phone number</td>
			<td align="left">Street</td>
			<td align="left">City</td>
			<td align="left">State</td>
			<td align="left">Zip</td>
			<td align="left">New</td>
			<td align="left">Under 3</td>
			<td align="left">ITA</td>
			<td align="left">Referee</td>
		</tr>

<?php
echo "</table><br><br>";
?> 

<input type="submit" value="Export to Excel">
</form>
</body>
