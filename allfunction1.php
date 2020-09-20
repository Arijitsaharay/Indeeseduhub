<?php
	
	include_once('connection.php');
   //form filling up data 
	if(isset($_POST['registrationbn'])){
        
        $dob=$_POST['date'];
        $result=explode('-',$dob);
        $date1=$result[2];
        $month=$result[1];
        $year=$result[0];
        $new=$date1.'-'.$month.'-'.$year;

		$user_id = $_POST['user_id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
        $agenda = $_POST['agenda'];
        $class = $_POST['class'];
		$subject = $_POST['subject'];
        $video = $_POST['video'];
        $presentation = $_POST['presentation'];
        $date = $new;
        $join_id = $_POST['join_id'];
        $pwd = $_POST['pwd'];
        $apply = $_POST['apply'];
        $img1 = $_FILES['img1']['name'];
        $img2 = $_FILES['img2']['name'];
        $img3 = $_FILES['img3']['name'];

        $temp_name1=$_FILES['img1']['tmp_name'];
        $temp_name2=$_FILES['img2']['tmp_name'];
        $temp_name3=$_FILES['img3']['tmp_name'];
        
        move_uploaded_file($temp_name1, "img/form_img/$img1");
        move_uploaded_file($temp_name2, "img/form_img/$img2");
        move_uploaded_file($temp_name3, "img/form_img/$img3");

		$sql = "INSERT INTO job_table (`user_id`,`name`,`email`,`phone`,`agenda`,`class`,`subject`,`video`,`presentation`,`date`,`join_id`,`pwd`,`apply`,`img1`,`img2`,`img3`) VALUES ('".$user_id."','".$name."','".$email."','".$phone."','".$agenda."','".$class."','".$subject."','".$video."','".$presentation."','".$date."','".$join_id."','".$pwd."','".$apply."','".$img1."','".$img2."','".$img3."')";
		/*$r = "INSERT INTO images (`unique_id`,`image`) VALUES ('".$unique_id."','".$image."')";
*/
		if($conn->query($sql)){
			header('Location:dashboard.php');
			exit();
		}else{
			header('Location:form1.php');
			exit();
		}	
	}
    
  //STUDENT RESUME
    if(isset($_POST['studbn'])){
		$user_id = $_POST['user_id'];
		$name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $profession = $_POST['profession'];
        $objective = $_POST['objective'];
        $education = $_POST['education'];
        $experience = $_POST['experience'];
        $skill = $_POST['skill'];
        $language = $_POST['language'];
        $links = $_POST['links'];
        $img1 = $_FILES['img1']['name'];
        $temp_name1=$_FILES['img1']['tmp_name'];
        
        move_uploaded_file($temp_name1, "img/form_img/$img1");

		$sql = "INSERT INTO stud_table (`user_id`,`name`,`address`,`email`,`phone`,`profession`,`objective`,`education`,`experience`,`skill`,`language`,`links`,`img1`) VALUES ('".$user_id."','".$name."','".$address."','".$email."','".$phone."','".$profession."','".$objective."','".$education."','".$experience."','".$skill."','".$language."','".$links."','".$img1."')";
if($conn->query($sql)){
			header('Location:dashboard_stud.php');
			exit();
		}else{
			header('Location:form_stud.php');
			exit();
		}	
	}


   //STUDENT RESUME
    if(isset($_POST['submitbn'])){
		$user_id = $_POST['user_id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
        $description = $_POST['description'];
		$requirement = $_POST['requirement'];
        $skill = $_POST['skill'];
        $location = $_POST['location'];
        $experience = $_POST['experience'];
        $salary = $_POST['salary'];
        $apply = $_POST['apply'];
        $img1 = $_FILES['img1']['name'];
        $img2 = $_FILES['img2']['name'];
        $img3 = $_FILES['img3']['name'];

        $temp_name1=$_FILES['img1']['tmp_name'];
        $temp_name2=$_FILES['img2']['tmp_name'];
        $temp_name3=$_FILES['img3']['tmp_name'];
        
        move_uploaded_file($temp_name1, "img/form_img/$img1");
        move_uploaded_file($temp_name2, "img/form_img/$img2");
        move_uploaded_file($temp_name3, "img/form_img/$img3");

		$sql = "INSERT INTO premium_table (`user_id`,`name`,`email`,`phone`,`description`,`requirement`,`skill`,`location`,`experience`,`salary`,`apply`,`img1`,`img2`,`img3`) VALUES ('".$user_id."','".$name."','".$email."','".$phone."','".$description."','".$requirement."','".$skill."','".$location."','".$experience."','".$salary."','".$apply."','".$img1."','".$img2."','".$img3."')";

		if($conn->query($sql)){
			header('Location:dashboard.php');
			exit();
		}else{
			header('Location:form_premium.php');
			exit();
		}	
	}

    // for user registration
    if(isset($_POST['register'])){
		$username = $_POST['u_name'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$radio = $_POST['radio'];


		$sql = "INSERT INTO user (`u_name`,`password`,`name`,`phone`,`email`,`radio`) VALUES ('".$username."','".$password."','".$name."','".$phone."','".$email."','".$radio."')";

		if($conn->query($sql)){
			echo "<script>alert('Registered Successfully!!')</script>";
			echo "<script>location.href='login.php'</script>";
			
		}else{
			echo "<script>alert('Registration Error !!')</script>";
			echo "<script>location.href='register.php'</script>";
			
			
		
		}	
	}

	if(isset($_POST['updatedatabn'])){
        
        $dob=$_POST['date'];
        $result=explode('-',$dob);
        $date1=$result[2];
        $month=$result[1];
        $year=$result[0];
        $new=$date1.'-'.$month.'-'.$year;

		$name = $_POST['name'];
		$phone = $_POST['phone'];		
		$email = $_POST['email'];
		$agenda = $_POST['agenda'];
		$class = $_POST['class'];
		$subject = $_POST['subject'];
		$video = $_POST['video'];
        $presentation = $_POST['presentation'];
        $date = $new;
        $join_id = $_POST['join_id'];
        $pwd = $_POST['pwd'];
        $apply = $_POST['apply'];
        $img1 = $_POST['img1'];
        $img2 = $_POST['img2'];
        $img3 = $_POST['img3'];
		$job_id = $_POST['job_id'];

		/*if(isset($_FILES['img1']['name']) &&($_FILES['img1']['name']!="")){
			$size=$FILES['img1']['size'];
			$temp=$FILES['img1']['tmp_name'];
			$type=$FILES['img1']['type'];
			$profile_name=$_FILES['img1']['name'];
			//delete old file
			unlink("img/form_img/$old_image");
			//new image
			move_uploaded_file($temp,"img/form_img/$profile_name");
		}else{
			$profile_name=$old_image;
		}
   */    
   if (($img1=="")&&($date=="--")) {

   	 $sql = "UPDATE job_table SET name='".$name."',  email='".$email."',phone='".$phone."',agenda='".$agenda."',class='".$class."',subject='".$subject."',video='".$video."',presentation='".$presentation."',join_id='".$join_id."',pwd='".$pwd."',apply='".$apply."' WHERE job_id='".$job_id."'";
   }else
    if (($img1=="")&&($date!="--")) 
    {
   	 $sql = "UPDATE job_table SET name='".$name."',  email='".$email."',phone='".$phone."',agenda='".$agenda."',class='".$class."',subject='".$subject."',video='".$video."',presentation='".$presentation."',date='".$date."',join_id='".$join_id."',pwd='".$pwd."',apply='".$apply."' WHERE job_id='".$job_id."'";
   }
   else
   	if (($img1!="")&&($date=="--")) {
   		$sql = "UPDATE job_table SET name='".$name."',  email='".$email."',phone='".$phone."',agenda='".$agenda."',class='".$class."',subject='".$subject."',video='".$video."',presentation='".$presentation."',join_id='".$join_id."',pwd='".$pwd."',apply='".$apply."',img1='".$img1."' WHERE job_id='".$job_id."'";
   		
   	}
   	else
   	{
   		$sql = "UPDATE job_table SET name='".$name."',  email='".$email."',phone='".$phone."',agenda='".$agenda."',class='".$class."',subject='".$subject."',video='".$video."',presentation='".$presentation."',date='".$date."',join_id='".$join_id."',pwd='".$pwd."',apply='".$apply."',img1='".$img1."' WHERE job_id='".$job_id."'";
   	}

		
		

		if($conn->query($sql)){
			header('Location:dashboard.php');
			exit();
		}else{
			header('Location:dashboard.php');
			exit();
		}	
	}
    
    if(isset($_POST['updatebn'])){
    	$u_name = $_POST['u_name'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$radio = $_POST['radio'];
		$email = $_POST['email'];
		$user_id = $_POST['user_id'];


		$sql = "UPDATE user SET u_name='".$u_name."',name='".$name."',password='".$password."', radio='".$radio."', email='".$email."', phone='".$phone."' WHERE user_id='".$user_id."'";
	
		if($conn->query($sql)){
			header('Location:profile.php');
			exit();
		}else{
			header('Location:profile.php');
			exit();
		}	
	}
	
	if(isset($_GET['mode']) && $_GET['mode']=="delete"){

		$job_id = $_GET['job_id'];
	
		$sql = "DELETE FROM job_table WHERE job_id='".$job_id."'";
	
		if($conn->query($sql)){
			header('Location:index.php');
			exit();
		}
	}

	if(isset($_GET['mode']) && $_GET['mode']=="delete_premium"){

		$job_id = $_GET['job_id'];
	
		$sql = "DELETE FROM premium_table WHERE job_id='".$job_id."'";
	
		if($conn->query($sql)){
			header('Location:index.php');
			exit();
		}
	}



	?>

