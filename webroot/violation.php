<html>
<?php
include 'header.html';
include 'ext_functions.php';
?>
<br>
<script type="text/javascript">
<?php
    $return_arr = array();
    mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
    mysql_select_db("tx10isofficials") or die(mysql_error());
    $result = mysql_query("select id, site, city, name, ref_email from tournament");
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $row_array['id'] = $row['id'];
        $row_array['site'] = $row['site'];
        $row_array['city'] = $row['city'];
        $row_array['name'] = $row['name'];
        $row_array['ref_email'] = $row['ref_email'];
        $return_arr[$row['id']] = $row_array;
    }

echo "tournaments = " .json_encode($return_arr);  
?>
    
   $(document).ready(function()
   {
        //Creates the item
        $.each(tournaments, function(i, item) {
            var itemval= '<option value="' + tournaments[i].id + '">' + tournaments[i].id + '</option>';
            //Appends it within your select element
            $("#id_dropdown").append(itemval);
        });
         $("#id_dropdown").live('change', function(){
             var tidSelected = $("#id_dropdown").val();
             
             $('#tournamentname').val(tournaments[tidSelected].name);
             $('#tournamentcity').val(tournaments[tidSelected].city);
             $('#tournamentsite').val(tournaments[tidSelected].site);
             $('#tournamentref_email').val(tournaments[tidSelected].ref_email);
         });
    });
</script>
    <div class="wrapper">
	<?php
		include 'left_menu.html';
	?>
                <div class="center">
		<br>
		<form name="violation" action="report_violation.php" method="POST"> 
		Code Violation Report<br><br>
		<font face="courier new">
                Tournament City:  &nbsp<input type="text" name="tcity" id="tournamentcity" /><br><br>
                Tournament ID:   &nbsp;&nbsp
                <select name="id_dropdown" id="id_dropdown">
                    <option value="0"> --select one-- </option>
                </select>
                <br><br>
		Referee Email: &nbsp;&nbsp;&nbsp<input type="text" name="ref_email" id="tournamentref_email"/><br><br>
		Tournament Name: &nbsp<input type="text" name="tournament" id="tournamentname" /><br><br>
		Site: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="site" id="tournamentsite" /><br><br>
		Official's Name:      &nbsp<input type="text" name="name" /><br><br>
		Official's Email:          <input type="text" name="email" /><br><br>
		Official's Phone:          <input type="text" name="phone" /><br><br>
		Date:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="date" /><br><br>
		Round:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="round" id="round"/><br><br>
		Offending Player:     <input type="text" name="player" /><br><br>
		Opponent:       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="" name="opponent" /><br><br>
		Division:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="division" maxlength=25 /><br><br>
                <table>
                    <tr>
                        <td>
                            Code Abr:        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                                            <select name="code" id="code">
                                                <option value="DEL">DEL - Unreasonable Delays</option>
                                                <option value="AOB">AOB - Audible Obscenity</option>
                                                <option value="VOB">VOB - Visible Obscenity</option>
                                                <option value="BA">BA - Ball Abuse</option>
                                                <option value="RA">RA - Racquet Abuse</option>
                                                <option value="VA">VA - Verbal Abuse</option>
                                                <option value="PHA">PHA - Physical Abuse</option>
                                                <option value="CC">CC - Coaching, Coaches</option>
                                                <option value="UNC">UNC - Unsportsmanlike Conduct</option>
                                            </select><br><br>
                            Penalty:        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                                           <select name="penalty" id="penalty">
                                            <option value="point">Point</option>
                                            <option value="game">Game</option>
                                            <option value="default">Default</option>
                                          </select><br><br>
                            Court #:        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="court" /><br><br>
                            <br><b>Description:</b><br>
                 		<textarea cols=60 rows=10 name="description"></textarea><br><br>
                        	<input type="submit" value=" Submit ">
                            </font>
                        </td>
                    </tr>
                </table>
                </form>
                </div>  
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
