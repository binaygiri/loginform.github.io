<?php
session_start();
include('dbcon.php');
if(isset($_SESSION['username'])){
  header('location:home.php');
}

if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];

$qry = "select * from registration where email='$email'";
$run = mysqli_query($con,$qry);

$email_count = mysqli_num_rows($run);

if($email_count){

$email_pass = mysqli_fetch_assoc($run);
$db_pass = $email_pass['password'];

$_SESSION['username'] = $email_pass['username'];
$pass_decode = password_verify($password, $db_pass);

if($pass_decode){

	echo"login succecs";
	?>
     <script type="text/javascript">
     	window.location = 'home.php';
     </script>

	<?php
}else{
	echo"password incorrect";
}

}else{

	echo"invalid email ";
}




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
     	  <div class="col-lg-6 m-auto">
     	  	   
     	  	   <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>" method="post">
     	  	   	<div class="card">
     	  	   	   <div class="card-header bg-dark">
     	  	   	   	  <h1 class="text-center text-white">Login Form</h1>
     	  	   	   </div>
     	  	   </div>
     	  	   	 
		 	  <div class="form-group">
		 	 	  <label>Email</label>
		 	 	  <input type="text" name="email" class="form-control" id="email">
		 	 	  <span id="emailid" class="font-weight-bold"> </span>
		 	 </div>

		 	  <div class="form-group">
		 	 	  <label>Password</label>
		 	 	  <input type="text" name="password" class="form-control" id="pass">
		 	 	  <span id="passwords"></span>
		 	 </div>
		 	 <button type="submit" name="submit" class="btn btn-success">Submit</button>
		 	 <p><strong>Are you not register yet? if No please</strong>
				<a href="index.php" class="font-weight-bold">Register</a>
     	  	   </form>
     	  </div>
     </div>
</body>
</html>