<?php  
mysql_connect("localhost","root","");
mysql_select_db("BRM");


?>
<table border="1">
	<tr>
		<td>TITLE</td>
		<td>AUTHER</td>
		<td>PRICE</td>
		<td>DATE</td>
		<td>DELETE</td>
		<td>UPDATE</td>
	</tr>

<?php
$query="select * from book ";
$run=mysql_query($query);
while ($row=mysql_fetch_array($run)) {

	
	echo "
     <tr>
     <td>$row[1]</td>
     <td>$row[3]</td>
     <td>$row[2]</td>
     <td>$row[4]</td>
     <td><a href='delete.php?id=$row[0]'><center><img src='delete.png'></center></a></td>
      <td><a href='update.php?id1=$row[0]'><input type='button' name='update' value='UPDATE'></a></td>
     </tr>
	";
}




?>



</table>
