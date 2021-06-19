<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: red;}
.success {color: green;}
</style>
</head>
<body>

<?php

$nameErr = $emailErr = $unameErr = $dobErr = $genderErr = $passwordErr = $cpasswordErr = $error = "";
$name = $email = $uname = $dob = $gender = $password = $cpassword = $success = "";



if (isset($_POST['submit'])) 
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

	if (empty($_POST["uname"])) 
	{
		$unameErr = "Username is required";
	} 
	else 
	{
		$uname = $_POST["uname"];
		if (preg_match("/^[a-z-_0-9]*$/",$uname)) 
		{
			if(strlen($uname) >= 2)
			{
			}
			else
			{
				$unameErr = "Username must contain atleast 2 charecters";
				$uname="";
			}
		}
		else
		{
			$unameErr = "Only a-z, 0-9, Dash(-) and Underscore(_) are allowed";
			$uname="";
		}
	}

	if (empty($_POST["password"])) 
	{
		$passwordErr = "Password is required";
	} 
	else 
	{
		$password = $_POST["password"];
		if (strlen($password >= 8)) 
		{
		}
		else
		{
			$passwordErr = "Password  must contain atleast 8 charecters";
			$password = "";
		}
	}

	if (empty($_POST["cpassword"])) 
	{
		$cpasswordErr = "Confirm password is required";
	} 
	else 
	{
		$cpassword = $_POST["cpassword"];
		if ($cpassword == $_POST["password"]) 
		{
		}
		else
		{
			$cpasswordErr = "Password and confirm passward did not match";
			$password = "";
			$cpassword= "";
		}
	}

	if (empty($_POST["gender"])) 
	{
		$genderErr = "Gender is required";
	} 
	else 
	{
		$gender = $_POST["gender"];
	}

	if (empty($_POST["dob"])) 
	{
		$dobErr = "Date of birth is required";
	} 
	else 
	{
		$dob = $_POST["dob"];
	}

	if(file_exists('data.json'))  
	{  
    	if(empty($name))  
  		{  
      		$error = "Failed";  
 		}
  		else if(empty($email))  
  		{  
       		$error = "Failed";   
  		}  
  		else if(empty($uname)) 
  		{  
      	 	$error = "Failed";  
  		}  
  		else if(empty($password))  
  		{  
       		$error = "Failed"; 
  		}
  		else if(empty($cpassword))  
  		{  
       		$error = "Failed"; 
  		} 
  		else if(empty($gender))  
  		{  
       		$error = "Failed"; 
  		} 

        else
        {
        	$current_data = file_get_contents('data.json');  
        	$array_data = json_decode($current_data, true);  
        	$extra = array('name'               =>     $name,  
                 		   'e-mail'          =>     $email,  
                 		   'username'     =>     $uname,
                 		   'password'  =>     $password, 
                 		   'gender' =>     $gender,  
                           'dob' =>     $dob);  
        	$array_data[] = $extra;  
        	$final_data = json_encode($array_data);  
        	if(file_put_contents('data.json', $final_data))  
        	{  
            	$success = "Registration successful";  
            }    
       		else  
       		{  
            	$error = "JSON File doesn't exits";  
       		}
        }
    }
}
?>



<form method="post">
<fieldset>

	<legend>REGISTRATION</legend>

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
	    <legend>USER NAME</legend>
		<input type="text" name="uname" value="<?php echo $uname;?>">
		<span class="error">* <?php echo $unameErr;?></span>
	</fieldset><br>

	<fieldset style="width: 40%;">
    	<legend>PASSWORD</legend>
		<input type="password" name="password" value="<?php echo $password;?>">
		<span class="error">* <?php echo $passwordErr;?></span>
	</fieldset><br>

	<fieldset style="width: 40%;">
    	<legend>CONFIRM PASSWORD</legend>
		<input type="password" name="cpassword" value="<?php echo $cpassword;?>">
		<span class="error">* <?php echo $cpasswordErr;?></span>
	</fieldset><br>

	<fieldset style="width: 40%;">
    	<legend>GENDER</legend>
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other
		<span class="error">* <?php echo $genderErr;?></span>
	</fieldset><br>

	<fieldset style="width: 40%;">
    	<legend>DATE OF BIRTH</legend>
		<input type="date" name="dob" value="<?php echo $dob;?>">
		<span class="error">* <?php echo $dobErr;?></span>
	</fieldset><br>

	<span class="error"><?php echo $error;?></span>
	<span class="success"><?php echo $success;?></span><br>


	<input type="submit" name="submit" value="Submit">
	<input type="reset" name="Reset">

</fieldset>
</form>
</body>
</html>