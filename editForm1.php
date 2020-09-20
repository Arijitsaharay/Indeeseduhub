<!-- USER -->
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
$user_id=$_SESSION['uid'];
?>


<?php include_once('header.php'); ?>
<?php include_once('connection.php'); ?>
<style>
* {
  box-sizing: border-box;
  
  margin: 0px;
  padding:0px;
}

input[type=text], select, textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
  background-color: rgb(195, 195, 195);
}
input[type=file], select, textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
  background-color: rgb(195, 195, 195);
}

input[type=date], select, textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
  background-color: rgb(195, 195, 195);
}

input[type=number], select, textarea {
  width: 250px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
  background-color: rgb(195, 195, 195);
}

textarea[type=textarea], select, textarea {
  width: 500px;
  height: 200px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
  background-color: rgb(195, 195, 195);
}

input[type=phone], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: rgb(195, 195, 195);
}

.form.label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.form.container {
  border-radius: 0px;
  background-color: #f2f2f2;
  padding: 50px;
}

.form.col-25 {
  float: left;
  width: 25%;
  margin-top: 56px;
}

.form.col-75 {
  float: left;
  width: 75%;
  margin-top: 56px;
}

/* Clear floats after the columns */
.form.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<?php
	if(!isset($_GET['mode']) && $_GET['mode']!="edit" && !isset($_GET['job_id']) && empty($_GET['job_id'])){
		header('Location:index.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Database Crud Operation</title>
</head>
<body>
	<section class="form" style="margin-left: 0px; background-image: url(img/background.jpg);width: 100%; height: auto; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <br>
    <div class="container" >

	<form name="" action="allfunction1.php" method="post">
		<table border="1">
	<?php 
			$sql = "SELECT *, count(*) as usercount FROM job_table where job_id='".$_GET['job_id']."'";
			$result = $conn->query($sql);
			?>
			<input type="hidden" name="job_id" value="<?php echo $_GET['job_id']; ?>">
			<?php
			while($row = $result->fetch_assoc()){
				if($row['usercount']<=0){
					header('Location:index.php');
					exit();
				}
				?>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
				</tr>
				
				<tr>
					<td>Phone: </td>
					<td><input type="text" name="phone" value="<?php echo $row['phone']; ?>"></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
				</tr>
                  
   <div class="row">
    <div class="col-25">
      <label for="name"><h3 style="color: white;">Credential Form</h3></label>
      
    </div>
</div>
  
  <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Teacher's Name</label>
      <div class="col-25">
         <input type="text" id="name" name="name" required="" placeholder="Name" value="<?php echo $row['name']; ?>">
      </div>
    </div>
</div>
<br>
<div class="row">

    <div class="col-75">
      <label for="text" style="color: white;">Email Id</label>
      <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Email-id" required=""value="<?php echo $row['email']; ?>">
      </div>
    </div>
</div>
<br>
<div class="row">

    <div class="col-50">
      <label for="phone" style="color: white;">Phone Number</label>
    
       <div class="col-50">
         <input type="text" id="phone" name="phone" placeholder="Enter phone number" value="<?php echo $row['phone']; ?>"required="">
       </div>
    </div>
</div>
  <br>

  <!-- <div class="row">
    <div class="col-75">
      <label for="name" style="color: white;">Today's Agenda</label>
      <div class="col-75">
         <textarea id="name" type="textarea" required="" name="agenda" placeholder="About today's class" ></textarea>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Subject</label>
      <div class="col-75" text-align="left">
         <input type="text" required=""align="left" id="subject" name="subject" placeholder="Enter subject name">
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-25">
      <label for="name" ><h3 style="color: white;">Docomentations</h3></label><br>
      <label for="name" style="color: white;">Video Link</label>
      <div class="col-75" text-align="left">
         <input type="text" align="left" id="video" name="video" placeholder="https://" required="">
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Presentation Link</label>
      <div class="col-75" text-align="left">
         <input type="text" required=""align="left" id="presentation" name="presentation" placeholder="https://">
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-25">
      <label for="name" ><h3 style="color: white;">Meetings Credencials</h3></label><br>
      <label for="name" style="color: white;">Meeting Date</label>
      <div class="col-75" text-align="left">
         <input type="date"  align="left" id="date" name="date" placeholder="" required="">
      </div>
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Joining ID</label>
      <div class="col-75" text-align="left">
         <input type="text" required=""align="left" id="join_id" name="join_id" placeholder="Enter ID">
      </div>
    </div>
  </div>
  <br>
  <div class="row">  
    <div class="col-25">
      <label for="name" style="color: white;">Joining Password</label>
      <div class="col-75" style="color: white;">
      <input type="text"required="" id="pwd" name="pwd" placeholder="Enter Password" >
      </div>
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Joining Link</label>
      <div class="col-75" text-align="left">
         <input type="text" required=""align="left" id="apply" name="apply" placeholder="https://">
      </div>
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col-25">
      <label for="name" ><h3 style="color: white;">Course Images</h3></label><br>
      <label for="name" style="color: white;">Image 1</label>
      <div class="col-75" text-align="left">
         <input type="file"required="" align="left" id="img1" name="img1" placeholder="">
      </div>
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Image 2</label>
      <div class="col-75" text-align="left">
         <input type="file"  align="left" id="img2" name="img2" placeholder="">
      </div>
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Image 3</label>
      <div class="col-75" text-align="left">
         <input type="file"  align="left" id="img3" name="img3" placeholder="">
      </div>
    </div>
  </div> -->
  <br>
   
 </div> 

 </div>
  </div>
				<?php
			} 
		?>
			<tr>
				<td></td>
				<td><input type="submit" name="updatedatabn"></td>
				<input type="submit" style="margin-left: 200px" name="updatedatabn" >
			</tr>
			<br>
   <div class="row">
    <input type="submit" style="margin-left: 200px" name="updatedatabn" value="Submit">
  </div><br><br>
		</table>
	</form>
</div>
</body>
</html>


<style>

 *{margin:0px; padding:0px;}
 #container{width:50%; padding:2%; box-shadow:0px 0px 10px #; margin:10px auto;}
 #image1{width:96% ; padding:2%; border:1px dashed green;}
 #header{background:#405570; color:white;text-align:center; padding:2%;}
 #view-image{border-radius:5px; overflow:hidden;align-content: center;}
 #preview-image{padding:1%; border:1px solid #efefef; width: 490px; height:100%;}
</style>

<?php include_once('footer.php'); ?>
