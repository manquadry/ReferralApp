<?php
include  ('Function.php');//Include the function file
$Register= new Register();//create Register instance

if(isset($_POST['Register']))
{
      //Generate ReferenceCode this New user using year,,month,date,seconds
      date_default_timezone_set("Africa/Lagos");
      $ReferenceCode=date("Ymdsi");
      //Get ReferenceCode of existing user as ReferralCode for this new user
      $ReferralCode=$_GET['ReferralCode'];

      //Get all user input data from the interface  to the created Register instance
      $result= $Register->Registration($FullName=$_POST['fullName'],$UserEmail=$_POST['email'],$Password=$_POST['password'],$Confirmpassword=$_POST['Confirmpassword'],$ReferenceCode,$ReferralCode);

    if ($result==1) 
    {

      echo"<script> alert('Registration Successful')
      window.location = 'Index.php';
      </script>";
    }
    elseif ($result==10) 
    {
      echo"<script> alert('Email Already Exist')</script>";
    }elseif($result==100) 
    {
      echo"<script> alert('Password does not match')</script>";
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>

      
    a {
        decoration: none;
    }

    .submit{
	display: block;
	width: 100px;
	height: 50px;
	border: none;
	background-color: #85FFBD;
	background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
	border-radius: 5px;
	margin: 40px 0px 0px 130px;
}

.submit:hover
{

  background:green;
  color: #ffffff;
  cursor:pointer;
  
 
}

.itext{
	display: block;
	padding: 7px;
	width: 220px;
	margin: 10px 0px 0px 70px;
}
    </style>
</head>

<body>

    <center>
        <div class="contactForm">
                  <h4>Registration Form</h4>
            <fieldset>
              <form method="post" autocomplete='off'>
                <div class="itext">
                    <label for="fullName">Full Name:</label>
                    <input type="text" name="fullName" id="fullName" placeholder="ex: Lindsey Wilson" required />
                </div>
                
                <div class="itext">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required />
                </div>
                <div class="itext">
                    <label for="Password">Password:</label>
                    <input type="password" name="password" id="password" required />
                </div>
                <div class="itext">
                    <label for="Password">Confirm Password:</label>
                    <input type="password" name="Confirmpassword" id="password" required />
                </div>
                <div class="itext">
                    <input type="checkbox" id="checkbox" name="checkbox" required>
                    <label for="checkbox">By signing up, you agree to the terms
                      
                </div>
                <input type="submit" value="Register" name="Register" class='submit'>
              </form>
            </fieldset>
                <div>

          </div>
       
    </center>


</body>

</html>