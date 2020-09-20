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
$user_id=$id;
if ($radio=='recruiter') {
  $radio="Teacher";
}
else
{
  $radio="Student";
}
?>
<?php include_once('header.php'); ?>
<!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/profile.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span><h6>Username</h6></span>
                            <h3><?php echo $u_name ?></h3>
                            <br>
                            <span><h6>Name</h6></span>
                            <h3><?php echo $name ?></h3>
                            <br>
                            <span><h6>Email Id</h6></span>
                            <h3><?php echo $email ?></h3>
                            <br>
                            <span><h6>Phone Number</h6></span>
                            <h3><?php echo $phone ?></h3>
                            <br>
                            <span><h6>Person's Role</h6></span>
                            <h3><?php echo $radio ?></h3>
                            <br><br>
                            <a class="site-btn" href="editForm_user.php?mode=edit&user_id=<?php echo $_SESSION['uid']; ?>" style="color: white">EDIT</a>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </section>
    <!-- Hero section end -->
    <?php include_once('footer.php'); ?>