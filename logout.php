<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body onload="myFunction()">
<?php
include_once('dbclass.php');		
$db= new db;
session_start();

if (isset($_SESSION['uid'])) {
	$db->logOut();
	echo "<center>";
	echo "<h2>Home Page</h2><br/><br/><br/>";
	echo "<a href='about.php'>View User Details</a><br/><br/>";
	echo "<a href='order.php'>My Order</a><br/><br/>";

	echo "<form method='post'><input type='submit' value='Logout' name='logout'></form>";
	echo "</center>";

	if(isset($_POST['logout'])){
		$db->logOut();
		header("location:index.php");
	}
}
/*else if(isset($_POST["uname"]) & isset($_POST["pwd"])){
	
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
		echo "<script>location.href='index.php'</script>";
		
		
	}

}
else{
	//echo "<script>location.href='index.php'</script>";
	header("location:index.php");
	exit;	
}

*/
?>
<script>
function myFunction() {
  setTimeout(function(){ location.href='index.php' }, 500);
}
</script>	
</body>
</html>