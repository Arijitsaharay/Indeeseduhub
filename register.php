<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style_login1.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link href="img/icons/icon.jpg" rel="shortcut icon"/>
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
      <?php
  session_start();
  if(isset($_SESSION['uid'])){
    header("location:home.php");
    exit;
  }
?>
			<form action="allfunction1.php" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="u_name" required="">
           		   </div>
           		</div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password</h5>
                    <input type="password" name="password" class="input" required="">
                 </div>
              </div>

              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Name</h5>
                    <input type="text" class="input" name="name" required="">
                 </div>
              </div>
              <div class="input-div one" >
                 <div class="i">
                    <i class="fas fa-phone"></i>
                 </div>
                 <div class="div" >
                    <h5>Phone</h5>
                    <input type="text" class="input" name="phone" required="">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-envelope"></i>
                 </div>
                 <div class="div" data-validate = "Valid email is required: ex@abc.xyz">
                    <h5>Email</h5>
                    <input type="email" class="input" name="email" required="">
                 </div>
              </div>

              <div class="input-div one">

                 <div class="i">
                    <input type="radio" class="" name="radio" value="applicant">
                 </div>
                 <div class="" >
                    <h5>Student</h5>
                 </div>

                 <div class="i">
                    <input type="radio" class="" name="radio" value="recruiter">
                 </div>
                 <div class="" >
                    <h5>Teacher</h5>
                 </div>
              </div>

              
              
           		
            	<a href="login.php">Login to your Account </a>
            	<input type="submit" class="btn" name="register" value="Register">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main_login.js"></script>
</body>
</html>
