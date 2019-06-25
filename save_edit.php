<?php
	include_once "connect.php";
	 $user =$_POST['user'];
	 $pass =$_POST['pass'];
	 $id   =$_POST['id'];

	 if(isset($user)||$pass||$id ){
	 	$sql="UPDATE `user` SET `user_name`='$user',`password`='$pass' WHERE `id`=$id";
	 $result = mysqli_query($conn, $sql);
	 echo "OK";
	 header("Refresh:2; url=index.php");
	 }else{
	 	echo "that bai";
	 }
 
?>