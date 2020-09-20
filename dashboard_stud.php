<?php  
include_once('header.php');
include_once('connection.php');
 ?>


<!-- USER -->
<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  session_start();

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
/*$name=$row['name'];
$phone=$row['phone'];
$email=$row['email'];*/

?>
<br>
<h3>&nbsp;&nbsp;CREATE YOUR RESUME'S</h3><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="site-btn" href="form_stud.php" style="color: white">Create</a>
<!-- RESUME -->
<br>
<section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h3>YOUR RESUME'S</h3>
            </div>
            <div class="row">
               
<?php
/*if (isset($_GET['job_id'])) {
  $id=$_GET['job_id'];
  
}
else
{
  echo "Not done";
}*/
$db=$conn;
  global $db;
  $get_product="SELECT * FROM stud_table WHERE user_id='$id' ";
  $run_products=mysqli_query($db,$get_product);
   if (mysqli_num_rows($run_products)>0) 
   {
    while ($row_product=mysqli_fetch_array($run_products)) {
    $stud_id=$row_product['stud_id'];
    $user_id = $row_product['user_id'];
    $name = $row_product['name'];
    $address = $row_product['address'];
    $email = $row_product['email'];
    $phone = $row_product['phone'];
    $profession = $row_product['profession'];
    $objective = $row_product['objective'];
    $education = $row_product['education'];
    $experience = $row_product['experience'];
    $skill = $row_product['skill'];
    $language = $row_product['language'];
    $links = $row_product['links'];
    $img1 = $row_product['img1'];
          
        echo "<div class='col-lg-3 col-sm-6'>
                    <div class='product-item'>
                        <div class='pi-pic'>
                            <a href='resume.php?stud_id=$stud_id'><img src='./img/form_img/$img1' alt='' height='250px' width='400px'></a>
                            <div class='pi-links'>
                                <a href='resume.php?stud_id=$stud_id' class='add-card'><i class='flaticon-bag'></i><span>OPEN RESUME</span></a>
                                <!--<a href='#' class='wishlist-btn'><i class='flaticon-heart'></i></a>-->
                            </div>
                        </div>
                        <div class='pi-text'>
                            <h6>$profession</h6>
                            <p>$name</p>
                        </div>
                    </div>
                </div>";
        
      }
   }
  else
   {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;<h4>You Have not created any Resume's</h4>";
   }
?>
</div>
</div>
</section>
<!-- NORMAL JOB ADDS -->
<br>

<?php include_once('footer.php') ?>