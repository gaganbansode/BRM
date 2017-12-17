<?php
mysql_connect("localhost","root","");
mysql_select_db("BRM");

 $id1=$_GET['id'];
 $query="delete from book where BRM_ID=".$id1;
 $run=mysql_query($query);

echo'<script>window.location.href="view.php";
alert("zal re delete");
</script>';


?>
