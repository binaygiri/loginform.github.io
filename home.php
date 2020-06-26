<?php
session_start();
if(!$_SESSION['username']){
	header('location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    	<h2 class="text-center text-danger"> welcome <?php echo $_SESSION['username'];     ?></h2>
    </div>
    <h5 style="text-align: right; padding: 20px;"><a href="logout.php">LogOut</a></h5> 
</body>
</html>