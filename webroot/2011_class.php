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
                <?php
mysql_connect("localhost", "root", "sql4root") or die(mysql_error());

mysql_select_db("tennisofficials") or die(mysql_error());

 $result = mysql_query("SELECT * from textfields where page = '2011_class'");
 while($row = mysql_fetch_array($result, MYSQL_ASSOC))
 {
        echo    "{$row['page_text']}";
}


		?>
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
