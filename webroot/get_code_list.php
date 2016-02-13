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

        <form name="get_list" action="get_list1.php" method="post">
                <div class="center">
                Please select a tournament id below:
                <br><br>
                <select name="tid" id="tid">
                  <option value="all" selected="selected">all</option>
                <?php
                mysql_connect("localhost", "root", "sql4root") or die(mysql_error());
                mysql_select_db("tx10isofficials") or die(mysql_error());
                $result = mysql_query("select tid from violations order by tid");
                while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                {
                  echo "<option value=\"";
                  echo "{$row['tid']}";
                  echo "\"";
                  echo "id=\"tid\">";
                  echo "{$row['tid']}";
                  echo "</option>";
                }
                ?>


                </select>
                <br>
                <br>
                <br>
                <input type="submit" value=" Submit ">
                <br>
                <br>
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
