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
  if($radio =='applicant'){
    header("location:form_stud.php");
  exit;
    }
  else
  {
  	echo "<script>alert('Please Sign In as an Applicant to continue !!')</script>";
      echo "<script>location.href='resume_builder.php'</script>";
    
  }
?>