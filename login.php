<head>
  <!-- Favicon -->
  <link href="img/icons/icon.jpg" rel="shortcut icon"/>
</head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body onLoad="popUp()">
<script>
  function popUp(){

    swal({
  title: "Welcome",
  text: "Please login/register to proceed",
  icon: "",
  button:"OK",
});
  }
</script>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style_login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
			<form action="home.php" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="uname" required="">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="pwd" class="input" required="">
            	   </div>
            	</div>
            	<a href="register.php">Create your Account</a>
            	<input type="submit" class="btn" name="login" value="login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main_login.js"></script>
</body>
</html>
