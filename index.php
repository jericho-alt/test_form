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
