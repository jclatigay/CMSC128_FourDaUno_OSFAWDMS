<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $filter_lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
   $lastname = mysqli_real_escape_string($conn, $filter_lastname);
   $filter_givenname = filter_var($_POST['givenname'], FILTER_SANITIZE_STRING);
   $givenname = mysqli_real_escape_string($conn, $filter_givenname);
   $filter_middlename = filter_var($_POST['middlename'], FILTER_SANITIZE_STRING);
   $middlename = mysqli_real_escape_string($conn, $filter_middlename);
   $filter_username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
   $username = mysqli_real_escape_string($conn, $filter_username);
   $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
   $password = mysqli_real_escape_string($conn, $filter_password);
   $filter_cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
   $cpassword = mysqli_real_escape_string($conn, $filter_cpassword);

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE username = '$username'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($password != $cpassword){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(lastname, givenname, middlename, username, password) VALUES('$lastname', '$givenname', '$middlename', '$username', '$password')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:login.php');
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>OSFA Website Register</title>
   <link rel="stylesheet" type="text/css" href="css/login_style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <img class="wave" src="images/wave.png">
   <div class = container>
      <div class = img>
         <img src="images/bg.png" />
      </div>

      <div class = login-content>
         <?php
            if(isset($message)){
               foreach($message as $message){
                     echo '
                     <div class="message">
                     <span>'.$message.'</span>
                     <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                     </div>
                     ';
               }
            }
         ?>

         <form action="" method="post">
            <h2 class="title">UPB Baguio OSFA</h2>
            <img src ="images/uplogo.png" class ="logo"/>
            <h2 class="title">Registration Form</h2>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <input type="text" name="lastname" placeholder="Enter your Last Name" required>
               </div>
            </div>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <input type="text" name="givenname" placeholder="Enter your Given Name" required>
               </div>
            </div>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <input type="text" name="middlename" placeholder="Enter your Middle Name" required>
               </div>
            </div>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <input type="username" name ="username" placeholder="Enter desired Username" required>
               </div>
            </div>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <input type="upmail" name ="upmail" placeholder="Enter UPB-issued UPMail" required>
               </div>
            </div>
            <p>Enter desired answers when retrieving OSFA Website account password.</p>
            <p>(Enter in UPPER CASE)</p>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <input type="EDIT" name ="EDIT" placeholder="Enter secret word/s" required>
               </div>
            </div>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <input type="EDIT" name ="EDIT" placeholder="What is your favorite thing?" required>
               </div>
            </div>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <input type="EDIT" name ="EDIT" placeholder="Who is your favorite person?" required>
               </div>
            </div>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <input type="EDIT" name ="EDIT" placeholder="When is your favorite (mm/dd/yyyy)?" required>
               </div>
            </div>

            <div class="input-div pass">
               <div class="i"> 
                     <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                     <input type="password" name ="password" placeholder="Enter desired Password" required>
               </div>
            </div>

            <div class="input-div pass">
               <div class="i"> 
                     <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                     <input type="password" name ="cpassword" placeholder="Confirm desired Password" required>
               </div>
            </div>
            <input type="submit" class="btn" name ="submit" value="Register">
            <a href="login.php">Already have an account?</a>
         </form>
      </div>
   </div>
   <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
  
