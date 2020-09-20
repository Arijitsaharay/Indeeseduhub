<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<meta charset="utf-8">
<body>
<?php
include_once('dbclass.php');		
$db= new db;
session_start();

if (isset($_SESSION['uid'])) {
	header("Location:welcome.php");
	echo "<center>";
	echo "<h2>Home Page</h2><br/><br/><br/>";
	echo "<a href='profile.php'>View User Details</a><br/><br/>";
	echo "<a href='order.php'>My Order</a><br/><br/>";

	echo "<form method='post'><input type='submit' value='Logout' name='logout'></form>";
	echo "</center>";

	if(isset($_POST['logout'])){
		$db->logOut();
	}
}
else if(isset($_POST["uname"]) & isset($_POST["pwd"])){
	
	$res=$db->getUser($_POST["uname"],$_POST["pwd"]);
	$count=mysqli_num_rows($res);
	if($count>0){

		$row=mysqli_fetch_array($res,MYSQLI_ASSOC);

		$_SESSION['uid']=$row['user_id'];

		//echo "<script>location.href='home.php'</script>";
		header("location:home.php");
		exit;
		
	}
	else{
		echo "<script>alert('username or password incorrect!')</script>";
		echo "<script>location.href='login.php'</script>";
		
		
	}

}
else{
	//echo "<script>location.href='index.php'</script>";
	header("location:login.php");
	exit;	
}


?>	
</body>
</html>