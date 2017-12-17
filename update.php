<?php
mysql_connect("localhost","root","");
mysql_select_db("BRM");
$query="select * from book where BRM_ID=".$_GET['id1'];
$run=mysql_query($query);
$run1=mysql_fetch_array($run);
echo '<form method="POST">
	<lable>TITLE</label><input type="text" name="title1" value="'.$run1[1].'"><br><br>
	<lable>PRICE</label><input type="text" name="price1" value="'.$run1[2].'"><br><br>
	<lable>AUTHER</label><input type="text" name="auther1" value="'.$run1[3].'"><br><br>
	<input type="text" name="id1" value='.$run1[0].'  style="display:none">
	<input type="submit" name="save" value="update">
</form>';
if(isset($_POST['save']))
{
$title1=$_POST['title1'];
$price1=$_POST['price1'];
$auther1=$_POST['auther1'];
$update1=mysql_query("update book set BRM_TITLE='".$title1."',BRM_PRICE='".$price1."',BRM_AUTHER='".$auther1."' where BRM_ID=".$_GET['id1']);
if($update1){
	echo'<script>window.location.href="view.php";
alert("zal re update");
</script>';
}
}


?>
