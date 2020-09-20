<?php include_once('header.php') ?>
<?php include_once('connection.php'); ?>


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
$user_id=$_SESSION['uid'];

?>

   <!--  <table align="center" border="2">
    <tr>
      <th colspan=2>User Details</th>
    </tr>
    <tr>
      <td>User Id:</td>
      <td><?php echo $user_id;?></td>
    </tr>
    <tr>
      <td>Name:</td>
      <td><?php echo $row['name'];?></td>
    </tr>
    <tr>
      <td>Phone:</td>
      <td><?php echo $row['phone'];?></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><?php echo $row['email'];?></td>
    </tr>
  </table> -->





<?php
$id=$_SESSION['uid'];
$name=$row['name'];
$phone=$row['phone'];
$email=$row['email'];

?>



<head>
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
</head>
<body>

<section class="form" style="margin-left: 0px; background-image: url(img/background.jpg);width: 100%; height: auto; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <br>
    <div class="container" >
        <form name="" action="allfunction1.php" method="post" enctype="multipart/form-data">

   <div class="row">
    <div class="col-25">
      <label for="name"><h3 style="color: white;">Resume Builder</h3></label>
      
    </div>
</div>
  <div class="row">
    <div class="col-25">
      <div class="col-25">
         <input type="hidden" id="user_id" name="user_id" placeholder="Id" value="<?php echo $user_id ?>" readonly="" required="">
      </div>
    </div>
</div>

  <br>
  <div class="row">
    <div class="col-25">
     <label for="name" style="color: white;">Name of the applicant</label>
      <div class="col-25">
         <input type="text" id="name" name="name" required="" placeholder="Name" value="<?php echo $name ?>">
      </div>
    </div>
</div>
<br>
<h4><font color='white'> Contact Info</font> </h4>
<div class="row">

    <div class="col-75">
      <label for="text" style="color: white;">Address</label>
      <div class="col-75">
      <input type="text" id="address" name="address" placeholder="Address" required=""value="<?php echo $address ?>">
      </div>
    </div>
</div>
<br>
<div class="row">

    <div class="col-75">
      <label for="text" style="color: white;">Email Id</label>
      <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Email-id" required=""value="<?php echo $email ?>">
      </div>
    </div>
</div>
<br>
<div class="row">

    <div class="col-50">
      <label for="phone" style="color: white;">Phone Number</label>
    
       <div class="col-50">
         <input type="text" id="phone" name="phone" placeholder="Enter phone number" value="<?php echo $phone ?>"required="">
       </div>
    </div>
</div>
  <br>
  <div class="row">
  <div class="col-50">
      <label for="profession" style="color: white;">Profession</label>
    
       <div class="col-50">
         <input type="text" id="profession" name="profession" placeholder="Enter your profession" value="<?php echo $profession ?>"required="">
       </div>
    </div>
</div>
  <br>

  <div class="row">
    <div class="col-75">
      <label for="name" style="color: white;">About</label>
      <div class="col-75">
         <textarea id="name" type="textarea" required="" name="objective" placeholder="About" ></textarea>
      </div>
    </div>
  </div>
  <br>

    <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Education</label>
      <div class="col-75">
         <textarea type="textarea" id="education" required="" name="education" placeholder="education"></textarea>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-75">
      <label for="name" style="color: white;">Work Experience</label>
      <div class="col-75">
         <textarea type="textarea" id="experience" required=""name="experience" placeholder="experience"></textarea>
      </div>
    </div>
  </div>
<br>
  <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Necessary skills</label>
      <div class="col-75">
         <textarea type="textarea" id="skill" required="" name="skill" placeholder="skill"></textarea>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Languages</label>
      <div class="col-75">
         <textarea type="textarea" id="language" required="" name="language" placeholder="language"></textarea>
      </div>
    </div>
  </div>
  <br>
 
    <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Links</label>
      <div class="col-75" text-align="left">
         <input type="text" required=""align="left" id="links" name="links" placeholder="https://">
      </div>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-25">
      <label for="name" style="color: white;">Your Image 1</label>
      <div class="col-75" text-align="left">
         <input type="file" required="" align="left" id="img1" name="img1" placeholder="">
      </div>
    </div>
  </div>

 
  

  <br>
   <div class="row">
    <input type="submit" style="margin-left: 200px" name="studbn" value="Submit">
  </div><br><br>
  </form>
</div>

</body>
</html>

<!-- IMAGE DATA -->

<!-- <!doctype html>
<html> -->
<style>

 *{margin:0px; padding:0px;}
 #container{width:50%; padding:2%; box-shadow:0px 0px 10px #; margin:10px auto;}
 #image1{width:96% ; padding:2%; border:1px dashed green;}
 #header{background:#405570; color:white;text-align:center; padding:2%;}
 #view-image{border-radius:5px; overflow:hidden;align-content: center;}
 #preview-image{padding:1%; border:1px solid #efefef; width: 490px; height:100%;}
</style>

<!-- <body>

 <div id="container"> 
  <form method="post" action="upload_file.php" enctype="multipart/form-data">
  <input type="file" id="image" />
  </form>
  <br>

  <div id="view-image">
   <h3 id="header">Preview Image</h3>
   
   <div id="preview-image">
   image will show right here
   </div>
   
  </div>

 </div> -->

 <!--script src="jquery-3.5.1.min.js"></script>
 <script>
   $(document).ready(function(){
   $('#image').change(function(){ 
       var data = new FormData() ; 
       data.append('file', $( '#image' )[0].files[0]) ; 
       $.ajax({
       url: 'upload_file.php',
       type: 'POST',
       data: data,
       processData: false,
       contentType: false,
        beforeSend: function(){
         $('#preview-image').html('Loading...');
        },
        success: function(data){ 
         // alert(data);            
                   $('#preview-image').html('<img  src="'+data+'" style="width:100%"/>');  
       
        }
       });
      return false;
   });
  });

 </script-->
      
<!-- </body>
</html> -->

<!-- <img src="2.png">
 --><!-- CONNECTION -->
 <?php include_once('footer.php') ?>