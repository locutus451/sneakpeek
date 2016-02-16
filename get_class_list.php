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

        <form name="get_list" action="get_list.php" method="post">
                <div class="center">
                Please select a date below:
                <br><br>
                <select name="class_date" id="class_date">
                  <option value="none" selected="selected">none</option>
                <?php
                mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
                mysql_select_db("tx10isofficials") or die(mysql_error());
                $result = mysql_query("select distinct schooldate from coordinators order by schooldate");
                while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                {
                  echo "<option value=\"";
                  echo "{$row['schooldate']}";
                  echo "\"";
                  echo "id=\"getclass\">";
                  echo "{$row['schooldate']}";
                  echo "</option>";
                }
                ?>


                </select>
		<br><br>
                <br>
                </div> 
                <div class="center" id="infodiv">

                </div> 
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
