<?php  
include_once('header.php');
include_once('connection.php');
include_once('calendar.php');
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

            <div class="section-title">
                <h2>CLASS CREATED BY YOU</h2>
            </div>

<!-- NORMAL JOB ADDS -->
<br>
<!-- Calendar section -->
    <section class="view-calender" >
        <form action="dashboard_teacher.php" method="post">
            <div class='input-group date' id='datepicker' align="center" style="" >
            <input type='text' id="date" name="class_date" class="form-control"  required="" style="width:30vw;height: 55px; " autocomplete="off">
                            <span class="input-group-addon" style="float: left; height: 55px; width: 45px">
                                <br>
                                <span class="glyphicon glyphicon-calendar" ></span>
                            </span>
                        </div><br>
             <div><center class="center"  ><button class="site-btn" >VIEW</button></center></div> 
                          
        </form>
    </section>
    <!-- Calendar section end -->
    <br>
<section class="product-filter-section">
        <div class="container">
            
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
	$get_product="SELECT * FROM job_table WHERE user_id='$id' ";
	$run_products=mysqli_query($db,$get_product);
	 if (mysqli_num_rows($run_products)>0) 
	 {
	 	while ($row_product=mysqli_fetch_array($run_products)) {
		$job_id=$row_product['job_id'];
		$user_id = $row_product['user_id'];
    $job_name = $row_product['name'];		    
		$subject=$row_product['subject'];
    $date = $row_product['date'];
        $apply = $row_product['apply'];
        $job_img1=$row_product['img1'];
        $job_img2=$row_product['img2'];
        $job_img3=$row_product['img3'];
          
        echo "<div class='col-lg-3 col-sm-6'>
                    <div class='product-item'>
                        <div class='pi-pic'>
                            <a href='details.php?job_id=$job_id'><img src='./img/form_img/$job_img1' alt='' height='250px' width='400px'></a>
                            <div class='pi-links'>
                                <a href='details.php?job_id=$job_id' class='add-card'><i class='flaticon-bag'></i><span>VIEW DETAILS</span></a>
                                <!--<a href='#' class='wishlist-btn'><i class='flaticon-heart'></i></a>-->
                            </div>
                        </div>
                        <div class='pi-text'>
                            <h6>$subject</h6>
                            <p5>$date</p5>
                        </div>
                    </div>
                </div>";
        
      }
	 }
	else
	 {
	 	echo "&nbsp;&nbsp;&nbsp;&nbsp;<h4>You Have not created any Gig</h4>";
	 }
?>
</div>
</div>

</section>
<?php include_once('footer.php') ?>

