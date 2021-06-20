<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php

$nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bloodGroupErr = "";
$name = $email = $dob = $gender = $comment = $degree[] = $bloodGroup = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if (empty($_POST["name"])) 
	{
		$nameErr = "Name is required";
	} 
	else 
	{
		$name = $_POST["name"];
		if (preg_match("/^[a-zA-Z -]*$/",$name)) 
		{
			if (str_word_count($name) >= 2) 
			{
			}
			else
			{
				$nameErr = "Atleast two word needed";
				$name="";
			}
		}
		else
		{
			$nameErr = "Only A-Z, a-z, Dash(-) and Period( ) are allowed";
			$name="";
		}
	}

	if (empty($_POST["email"])) 
	{
		$emailErr = "Email is required";
	} 
	else 
	{
		$email = $_POST["email"];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$emailErr = "Invalid email format";
			$email ="";
		}
	}

	if (empty($_POST["dob"])) 
	{
		$dobErr = "Date of birth is required";
	} 
	else 
	{
		$dob = $_POST["dob"];
	}

	if (empty($_POST["gender"])) 
	{
		$genderErr = "Gender is required";
	} 
	else 
	{
		$gender = $_POST["gender"];
	}

	if (empty($_POST["degree"])) 
	{
		$degreeErr = "Degree is required";
	} 
	else 
	{
		$degree = $_POST["degree"];
		if (count($degree) >= 2) 
		{
		}
		else
		{
			$degreeErr = "Atleast two degree required";
		}
	}

	if (empty($_POST["bloodGroup"])) 
	{
		$bloodGroupErr = "Blood group is required";
	} 
	else 
	{
		$bloodGroup = $_POST["bloodGroup"];
	}
}
?>


<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<fieldset style="width: 40%;">
    <legend>NAME</legend>
	<input type="text" name="name" value="<?php echo $name;?>">
	<span class="error">* <?php echo $nameErr;?></span>
</fieldset><br>

<fieldset style="width: 40%;">
    <legend>EMAIL</legend>
	<input type="text" name="email" value="<?php echo $email;?>">
	<span class="error">* <?php echo $emailErr;?></span>
</fieldset><br>

<fieldset style="width: 40%;">
    <legend>DATE OF BIRTH</legend>
	<input type="date" name="dob" value="<?php echo $dob;?>">
	<span class="error">* <?php echo $dobErr;?></span>
</fieldset><br>

<fieldset style="width: 40%;">
    <legend>GENDER</legend>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other
	<span class="error">* <?php echo $genderErr;?></span>
</fieldset><br>

<fieldset style="width: 40%;">
    <legend>DEGREE</legend>
    <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="SSC") echo "checked";?> value="SSC">SSC
    <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="HSC") echo "checked";?> value="HSC">HSC
    <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="BSc") echo "checked";?> value="BSc">BSc
    <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="MSc") echo "checked";?> value="MSc">MSc
    <span class="error">* <?php echo $degreeErr;?></span>
</fieldset><br>

<fieldset style="width: 40%;">
    <legend>BLOOD GROUP</legend>
	<select id="bloodGroup" name="bloodGroup" >
		<option disabled="" selected="" value="Select a blood group">Select a blood group</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select><span class="error">* <?php echo $bloodGroupErr;?></span>
</fieldset><br>

<input type="submit" name="submit" value="Submit">
</form>


<style>
	table
	{
		border-collapse: collapse;
		width: 40%;
	}

	td, th 
	{
		text-align: left;
		padding: 8px;
		border: 1px solid #ffffff;
		background-color: #dddddd;
	}
</style>

<table>
	<h2>Your Input:</h2>
	<tr>
		<td><b>Name: </b></td>
		<td><?php echo $name;?></td>
	</tr>

	<tr>
		<td><b>Email: </b></td>
		<td><?php echo $email;?></td>
	</tr>

	<tr>
		<td><b>Date of Birth: </b></td>
		<td><?php echo $dob;?></td>
	</tr>

	<tr>
		<td><b>Gender: </b></td>
		<td><?php echo $gender;?></td>
	</tr>

	<tr>
		<td><b>Degree: </b></td>
		<td>
			<?php 
			if (count($degree) == 0 || count($degree) == 1) 
			{
				echo " ";
			}
			else
			{
				$arrlength = count($degree);

				for($x = 0; $x < $arrlength; $x++)
				{
  					echo $degree[$x];
  					echo " ";
				}
			}
			?>
		</td>
	</tr>

	<tr>
		<td><b>Blood Group: </b></td>
		<td><?php echo $bloodGroup;?></td>
	</tr>

</table>

</body>
</html>