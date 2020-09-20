
<?php include_once('connection.php');
      include_once('header.php');
 ?>

<?php
	if(!isset($_GET['mode']) && $_GET['mode']!="edit" && !isset($_GET['user_id']) && empty($_GET['user_id'])){
		header('Location:index.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
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
  /*background-color: rgb(195, 195, 195);*/
}
input[type=file], select, textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
  /*background-color: rgb(195, 195, 195);*/
}

input[type=date], select, textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
  /*background-color: rgb(195, 195, 195);*/
}

input[type=number], select, textarea {
  width: 250px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
 /* background-color: rgb(195, 195, 195);*/
}

textarea[type=textarea], select, textarea {
  width: 500px;
  height: 200px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  resize: vertical;
  margin-left: 0px;
  /*background-color: rgb(195, 195, 195);*/
}

input[type=phone], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  /*background-color: rgb(195, 195, 195);*/
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
	<br>
	<h3><u>Update Form</u></h3>
	<form name="" action="allfunction1.php" method="post" style="padding-left: 50px;">
		<table border="1">
	<?php 
			$sql = "SELECT *, count(*) as usercount FROM user where user_id='".$_GET['user_id']."'";
			$result = $conn->query($sql);
			?>
			<input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
			<?php
			while($row = $result->fetch_assoc()){
				if($row['usercount']<=0){
					header('Location:index.php');
					exit();
				}
				?>
				<?php 
                 $radio=$row['radio'];
                 if ($radio=='recruiter') {
                     $radio="Teacher";
                   }
                   else
                   {
                     $radio="Student";
                   }
				?>
				<tr>
					<td>UserName: </td>
					<td><input type="text" name="u_name" value="<?php echo $row['u_name']; ?>"></td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
				</tr>
				<tr>
					<td>Email ID: </td>
					<td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
				</tr>
				<tr>
					<td>Phone Number: </td>
					<td><input type="text" name="phone" value="<?php echo $row['phone']; ?>"></td>
				</tr>
				<tr>
					<td>Person's Role: </td>
					<td><input type="text" name="radio" value="<?php echo $radio; ?>" readonly=""></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="text" name="password" value="<?php echo $row['password']; ?>"></td>
				</tr>
				
				<?php
			} 
		?>
			<tr>
				<td></td>
				<td><input type="submit" name="updatebn"></td>
			</tr>
		</table>
	</form>
<br>
</body>
</html>
<?php include_once('footer.php'); ?>
