<?php
	include_once "connect.php";
	echo $id =$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" >EDIT</div>
      <div class="card-body">
      	<?php 
 
      		$sql = "SELECT * FROM `user` WHERE `id`='$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result); 
			
         	?>
        <form action="save_edit.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" value="<?php echo $row['user_name'];?>" name="user">
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputPassword" class="form-control" placeholder="Password" required="required" value="<?php echo $row['password'];?>" name="pass">
              <input type="hidden" class="form-control" value="<?php echo $row['id']?>" name="id">
            </div>
          </div>
          <div class="form-group">
          </div>
          <!-- <a class="btn btn-primary btn-block" href="index.html">Login</a> -->
          <input class="btn btn-primary btn-block" type="submit" name="submit" value="Save">
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
