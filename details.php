<?php
session_start();
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

if(isset($_SESSION['uid'])){
  include_once('dbclass.php');
  $db=new db;

  $res=$db->getUserData();
  $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $radio=$row['radio'];
 
}
else{
  /*header("location:login.php");
  exit;*/
}
?>
<?php
include_once('header.php');
include('connection.php');

if (isset($_GET['job_id'])) {
	$id=$_GET['job_id'];
	
}
else
{
	echo "Not done";
}
$db=$conn;
	global $db;
	$get_product="SELECT * FROM job_table WHERE job_id='$id' ";
	$run_products=mysqli_query($db,$get_product);
	 if (mysqli_num_rows($run_products)>0) 
	 {
	 	while ($row_product=mysqli_fetch_array($run_products)) {
		$job_id=$row_product['job_id'];
		$user_id = $row_product['user_id'];
        $name = $row_product['name'];
		$email = $row_product['email'];
		$phone = $row_product['phone'];
        $agenda = $row_product['agenda'];
        $class = $row_product['class'];
		$subject = $row_product['subject'];
        $video = $row_product['video'];
        $presentation = $row_product['presentation'];
        $date = $row_product['date'];
        $join_id = $row_product['join_id'];
        $pwd = $row_product['pwd'];
        $apply = $row_product['apply'];
        $job_img1=$row_product['img1'];
        $job_img2=$row_product['img2'];
        $job_img3=$row_product['img3'];
        
      }
	 }
	else
	 {
	 	echo "No Data Available";
	 }
?>

<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Class Details</h4>
			<div class="site-pagination">
				<!--a href="">Home</a> /
				<a href="">Shop</a-->
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="index.php"> &lt;&lt; Back to Homepage</a><br>
				<p>  Class Date:- <?php echo $date ?> </p>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="img/form_img/<?php echo $job_img1 ?>" alt="">
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<div class="pt active" data-imgbigurl="img/form_img/<?php echo $job_img1 ?>"><img src="img/form_img/<?php echo $job_img1 ?>" alt=""></div>
							<div class="pt" data-imgbigurl="img/form_img/<?php echo $job_img2 ?>"><img src="img/form_img/<?php echo $job_img2 ?>" alt=""></div>
							<div class="pt" data-imgbigurl="img/form_img/<?php echo $job_img3 ?>"><img src="img/form_img/<?php echo $job_img3 ?>" alt=""></div>
							
						</div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title">Teacher's Name</h2>
					<p><?php echo $name ?></p>
					<h2 class="p-title">Class</h2>
					<p><?php echo $class ?></p>
					<h2 class="p-title">Subject</h2>
					<p><?php echo $subject ?></p>

					
					
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Today's Agenda</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
                                    
									<p><?php echo $agenda ?></p>																		
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Documentations </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<h6>Video Link</h6>
									<p><a href="<?php echo $video ?>" target="blank"><?php echo $video ?></a></p>
									
									<h6>Presentation Link</h6>
									<p><a href="<?php echo $presentation ?>" target="blank"><?php echo $presentation ?></a></p>
									
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Meeting Details</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div>
									<h6>Class ID</h6>
									<p><?php echo $join_id ?></p>
									
									<h6>Class Password</h6>
									<p><?php echo $pwd ?></p>
									
								</div>
							</div>
						</div>
					</div><br><br>
					

                <?php 
                  error_reporting(E_ERROR | E_WARNING | E_PARSE);
                  $id=$_SESSION['uid'];
                  /*echo $id;
                  echo $user_id;*/
                  if ($id!=$user_id) {
                  	 if($radio == 'recruiter')
                  	 {      echo "<div><a href='warning.php' class='site-btn' target='blank'>JOIN CLASS</a></div><br>";
                     }
                    else
                     {
                            echo "<div><a href='$apply' class='site-btn' target='blank'>JOIN CLASS</a></div><br>";
                  	 }

                        }else{
                            echo "<div><a href='editForm.php?mode=edit&job_id=$job_id' class='site-btn'>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='allfunction1.php?mode=delete&job_id=$job_id' class='site-btn'>Delete</a></div>";
                        }  
                ?>


					
					
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->


	




<?php include_once('footer.php'); ?>


<!-- src="img/form_img/<?php echo $job_img1 ?>" -->