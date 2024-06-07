<?php
session_start();
include("connections.php");

$first_name = $middle_name = $last_name = $gender = $email ="";
$first_nameErr = $middle_nameErr = $last_nameErr = $genderErr = $emailErr ="";

if (isset($_POST["btnRegister"])){
	if (empty($_POST["first_name"])){
		$first_nameErr = "First name must not be empty!";
	}else{
		$first_name = $_POST["first_name"];
	}
	if (empty($_POST["middle_name"])){
		$middle_nameErr = "Middle name must not be empty!";
	}else{
		$middle_name = $_POST["middle_name"];
	}
	if (empty($_POST["last_name"])){
		$last_nameErr = "Last name must not be empty!";
	}else{
		$last_name = $_POST["last_name"];
	}
	if (empty($_POST["gender"])){
		$genderErr = "Gender must not be empty!";
	}else{
		$gender = $_POST["gender"];
	}
	if (empty($_POST["email"])){
		$emailErr = "Email must not be empty!";
	}else{
		$email = $_POST["email"];
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$emailErr = "Invalid email format";
    }else{
	mysqli_query($connections,"INSERT INTO user(
		first_name,middle_name,last_name,gender,email)VALUES('$first_name','$middle_name','$last_name','$gender','$email')");
	header("Location: index.php");
}


}

?>



<!DOCTYPE html>
<html>
<head>
	<title> Case Study#2 </title>
    <link rel="Stylesheet" href="CSS/Styles.css">
</head>
<body>

	<style>
		.error{color: red;}
	</style>

	<form method="POST">
		<input type="text" name="first_name" placeholder="First name" value="">
		<span class = "error"><?php echo $first_nameErr ?>
	</span><br>
		<input type="text" name="middle_name" placeholder="Middle Name" value="">
		<span class = "error"><?php echo $middle_nameErr ?>
	</span><br>
		<input type="text" name="last_name" placeholder="Last name" value="">
		<span class = "error"><?php echo $last_nameErr ?>
	</span><br>

		<select name="gender"  >
			<option name = "gender"></option>
			<option name = "gender" <?php if($gender == "male"){echo "selected"; } ?> value = "">Male</option>
			<option name = "gender" <?php if($gender == "female"){echo "selected"; } ?> value = "">Female</option>
		</select><span class = "error"><?php echo $genderErr ?></span><br>

		<input type="text" name = "email" placeholder="Email" value = ""><span class = "error"><?php echo $emailErr ?>
	</span><br>

	<input class = "submit" type = "submit" name = "btnRegister" value = "Register">
</form>

</body>
</html>
