<!DOCTYPE html>  
<html>  
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../CSS/storeOfficerRegistration.css">
     <link rel="stylesheet" href="../CSS/storeOfficer.css">
     <script> 
          function checkName() 
          {
               if (document.getElementById("name").value == "") 
               {
                    document.getElementById("nameErr").innerHTML = "Name can't be blank";
                    document.getElementById("nameErr").style.color = "red";
                    document.getElementById("name").style.borderColor = "red";
               }
               else
               {
                    document.getElementById("nameErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";
               }    
          }

          function checkEmail() 
          {
               if (document.getElementById("email").value == "") 
               {
                    document.getElementById("emailErr").innerHTML = "Email can't be blank";
                    document.getElementById("emailErr").style.color = "red";
                    document.getElementById("email").style.borderColor = "red";
               }
               else
               {
                    document.getElementById("emailErr").innerHTML = "";
                    document.getElementById("email").style.borderColor = "black";
               }    
          }

          function checkUserName() 
          {
               if (document.getElementById("uname").value == "") 
               {
                    document.getElementById("unameErr").innerHTML = "User name can't be blank";
                    document.getElementById("unameErr").style.color = "red";
                    document.getElementById("uname").style.borderColor = "red";
               }
               else
               {
                    document.getElementById("unameErr").innerHTML = "";
                    document.getElementById("uname").style.borderColor = "black";
               }    
          }

          function checkPhoneNumber()
          {
               if (document.getElementById("phoneNumber").value == "") 
               {
                    document.getElementById("phoneNumberErr").innerHTML = "Phone number can't be blank";
                    document.getElementById("phoneNumberErr").style.color = "red";
                    document.getElementById("phoneNumber").style.borderColor = "red";
               }
               else
               {
                    document.getElementById("phoneNumberErr").innerHTML = "";
                    document.getElementById("phoneNumber").style.borderColor = "black";
               }
          }

          function checkDateOfBirth()
          {
               if (document.getElementById("dob").value == "") 
               {
                    document.getElementById("dobErr").innerHTML = "Date of birth can't be blank";
                    document.getElementById("dobErr").style.color = "red";
                    document.getElementById("dob").style.borderColor = "red";
               }
               else
               {
                    document.getElementById("dobErr").innerHTML = "";
                    document.getElementById("dob").style.borderColor = "black";
               }
          }
     </script>
</head>

<body>
     <div class="header">
          <?php 
          include 'Head.php';
          require '../Controller/EditProfileValidation.php'
          ?>
     </div>

     <div class="row">
          <div class="col-3 menu">
               <?php include 'Account.php';?>
          </div>
          <div class="col-6">
               <form method="post">
                    <h1>Edit Here</h1>
                    <div class="inset">
                         <p>
                              <label for="name">NAME</label>
                              <input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()" value="<?php require '../Controller/ViewName.php';?>">
                         </p>
                         <span id="nameErr"></span><span class="error"><?php echo $nameErr;?></span>

                         <p>
                              <label for="email">EMAIL</label>
                              <input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" value="<?php require '../Controller/ViewEmail.php';?>">
                         </p>
                         <span id="emailErr"></span><span class="error"><?php echo $emailErr;?></span>


                         <p>
                              <label for="gender">GENDER</label>
                              <?php require '../Controller/EditGender.php';?>
                              <input type="radio" name="gender" <?php if ($g=="Female") echo "checked";?> value="Female">Female
                              <input type="radio" name="gender" <?php if ($g=="Male") echo "checked";?> value="Male">Male
                              <input type="radio" name="gender" <?php if ($g=="Other") echo "checked";?> value="Other">Other
                         </p>
                         <span class="error"><?php echo $genderErr;?></span>


                         <p>
                              <label for="phoneNumber">PHONE NUMBER</label> 
                              <input type="text" name="phoneNumber" id="phoneNumber" onkeyup="checkPhoneNumber()" onblur="checkPhoneNumber()" value="<?php require '../Controller/ViewpNumber.php';?>">
                         </p>
                         <span id="phoneNumberErr"></span><span class="error"><?php echo $phoneNumberErr;?></span>

                         <p>
                              <label for="dob">DATE OF BIRTH</label>
                              <input type="date" name="dob" id="dob" onkeyup="checkDateOfBirth()" onblur="checkDateOfBirth()" value="<?php require '../Controller/ViewDob.php';?>">
                         </p>
                         <span id="dobErr"></span><span class="error"><?php echo $dobErr;?></span>
                    </div>
                    <p class="p-container">
                         <input type="submit" name="submit" value="Submit">
                    </p>
               </form>
          </div>
     </div>
<div class="footer">
     <?php include 'Foot.php';?> <br>
</div>
</body>
</html>