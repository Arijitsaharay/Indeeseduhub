<head>
  <!-- Favicon -->
  <link href="img/icons/icon.jpg" rel="shortcut icon"/>
</head>
<?php
session_start();
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

if(isset($_SESSION['uid'])){
  include_once('dbclass.php');
  $db=new db;

  $res=$db->getUserData();
  $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
}
else{
  header("location:login.php");
  exit;
}
?>
<?php
$id=$_SESSION['uid'];
$u_name=$row['u_name'];
$name=$row['name'];
$phone=$row['phone'];
$email=$row['email'];
$radio=$row['radio'];
?>

<?php
  if($radio =='recruiter'){
    header("location:form1.php");
  exit;
    }
  else
  {
  	echo "<script>alert('You are Signed In as a Student. Please Sign In as a Teacher !!')</script>";
      echo "<script>location.href='dashboard_check.php'</script>";
    
  }
?>