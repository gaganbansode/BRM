<form action="insert.php" method="POST">
	
		<input type="text" name="title" placeholder="title" ><br><br>
		<input type="text" name="price" placeholder="price" ><br><br>
		<input type="text" name="auther" placeholder="auther" ><br><br>
		<input type="date" name="date1"><br><br>
		<input type="submit" name="insert" value="insert">
		



	



</form>


<?php


mysql_connect("localhost","root","");
mysql_select_db("BRM");
   
if (isset($_POST['insert'])) {
	# code...


   $title1=$_POST['title'];
    $price1=$_POST['price'];
     $auther1=$_POST['auther'];
     $date1=$_POST['date1'];


     $query="insert into book values('','".$title1."','".$price1."','". $auther1."','".$date1."')";
     $run=mysql_query($query);
     if ( $run) {
     	# code..
     	echo "<script>
                     alert('inserted');
                     window.location.href='insert.php';
               </script>";
     }
     }
?>