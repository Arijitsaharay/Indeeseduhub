<?php
include('connection.php');
class db{
	public $conn;
	function __construct(){
		$this->conn=mysqli_connect("127.0.0.1:49691","azure","6#vWHD_$");
		if(mysqli_connect_errno()){
			echo "failed to connect";
			mysqli_connect_error();
			exit();
		}
		mysqli_select_db($this->conn,"localdb");
	}
	public function getUser($uname,$pwd){

		
		$sql="SELECT user_id,u_name,password from user where u_name='$uname' and password='$pwd' LIMIT 1";
		$result=mysqli_query($this->conn,$sql); 
		return $result;
	}
	public function getUserData(){
		//session_start();
		$sql="SELECT u_name,name,phone,email,radio from user where user_id = ".$_SESSION['uid']."";
		$result=mysqli_query($this->conn,$sql); 
		return $result;
	}
	public function getOrder(){
		$sql="SELECT * from job_table where user_id=".$_SESSION['uid']."";
		$result=mysqli_query($this->conn,$sql); 
		return $result;
	}
	public function logOut(){
		
		unset($_SESSION["uid"]);
		//echo "<script>location.href='index.php'</script>";
		header("location:index.php");
		exit;
	}

	function __destruct(){
		mysqli_close($this->conn);
	}
}
?>