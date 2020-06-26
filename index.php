<?php
session_start();

include('dbcon.php');

if(isset($_POST['insert'])){

$username =mysqli_real_escape_string($con,$_POST['username']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$mobile = mysqli_real_escape_string($con,$_POST['mobile']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

$pass = password_hash($password, PASSWORD_BCRYPT);
$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

$emailquery = "select * from registration where email='$email' ";
$query = mysqli_query($con,$emailquery);

$emailcount = mysqli_num_rows($query);

if($emailcount > 0){
        ?>         
          <script type="text/javascript">
          	alert('emali already exists');
          </script>
        <?php 
}else{
 
       $insertquery = "INSERT INTO `registration`(`username`, `email`, `mobile`, `password`, `cpassword`) VALUES ('$username','$email','$mobile','$pass','$cpass')";

       $iquery = mysqli_query($con,$insertquery);

       if($iquery){
          ?>         
          <script type="text/javascript">
          	alert('insert Successfull');
          </script>
         <?php 
       }else{
           
            ?>         
          <script type="text/javascript">
          	alert('Connection failled');
          </script>
         <?php 

       }
      	
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
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" onsubmit="return validation()">
		 <div class="col-lg-6 m-auto">
		 	<div class="card bg-dark">
		 	  <div class="card-header">
		 	  	   <h1 class="text-white text-center">Registration Form</h1>
		 	  </div>
		 </div>
		 	 <div class="form-group">
		 	 	  <label>Username</label>
		 	 	  <input type="text" name="username" class="form-control" id="user">
		 	 	  <span id="users" class="font-weight-bold"></span>
		 	 </div>
		 	  <div class="form-group">
		 	 	  <label>Email</label>
		 	 	  <input type="text" name="email" class="form-control" id="email">
		 	 	  <span id="emailid" class="font-weight-bold"> </span>
		 	 </div>
		 	  <div class="form-group">
		 	 	  <label>Mobile</label>
		 	 	  <input type="text" name="mobile" class="form-control" id="mobileNumber">
		 	 	  <span id="mobiles" class="font-weight-bold"></span>
		 	 </div>
		 	  <div class="form-group">
		 	 	  <label>Password</label>
		 	 	  <input type="text" name="password" class="form-control" id="pass">
		 	 	  <span id="passwords" class="font-weight-bold"></span>
		 	 </div>
		 	  <div class="form-group">
		 	 	  <label>Confirm Password</label>
		 	 	  <input type="text" name="cpassword" class="form-control" id="conpass">
		 	 	  <span id="confrmpass" class="font-weight-bold"></span>
		 	 </div>
		 	 <button type="submit" name="insert" class="btn btn-primary">Submit</button>
		 	 <div class="form-group">
		 	 <strong>Have an account? <a href="login.php">Login</a></strong>
		 	 </div>
		 </div>
       </form> 
	</div>

</body>
</html>

<script type="text/javascript">
	function validation(){
    var user = document.getElementById('user').value;
    var emails = document.getElementById('email').value;
    var mobileNumber = document.getElementById('mobileNumber').value;
    var pass = document.getElementById('pass').value;
	var confirmpass = document.getElementById('conpass').value;




			if(user == ""){
				document.getElementById('users').innerHTML =" ** Please fill the username field";
				return false;
			}
			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('users').innerHTML =" ** Username lenght must be between 2 and 20";
				return false;	
			}

         
			if(emails == ""){
				document.getElementById('emailid').innerHTML =" ** Please fill the email idx` field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailid').innerHTML =" ** @ Invalid Position";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailid').innerHTML =" ** . Invalid Position";
				return false;
			}
			if(mobileNumber == ""){
				document.getElementById('mobiles').innerHTML =" ** Please fill the mobile Number field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('mobiles').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			if(mobileNumber.length!=10){
				document.getElementById('mobiles').innerHTML =" ** Mobile Number must be 10 digits only";
				return false;
			}


			if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;	
			}


			if(pass!=confirmpass){
				document.getElementById('confrmpass').innerHTML =" ** Password does not match the confirm password";
				return false;
			}



			if(confirmpass == ""){
				document.getElementById('confrmpass').innerHTML =" ** Please fill the confirmpassword field";
				return false;
			}


	}
</script>