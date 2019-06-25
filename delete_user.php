<?php
	include_once "connect.php";
	 $id = $_GET['id'];

	 if(isset($id)){
		 $sql="UPDATE `user` SET `flag`='0' WHERE `id`=$id";
		 $result = mysqli_query($conn, $sql);
		 echo "DELETE complete";
		 header("Refresh:2; url=index.php");
	 }else{
	 	echo "that bai";
	 }
 
?>