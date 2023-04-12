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
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

        <div class = left_login>
           <img class = up src="images/UP2.jpg" />
        </div>

        <div class = right_login>
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

        <section class="form_container">
            <form action="" method="post">
                <img src ="images/fm.png" class ="logo"/>
                <h3>REGISTER NOW</h3>
                <input type="text" name="lastname" class="box1" placeholder="enter your last name" required>
                <input type="text" name="givenname" class="box1" placeholder="enter your given name" required>
                <input type="text" name="middlename" class="box1" placeholder="enter your middle name" required>
                <input type="username" name="username" class="box1" placeholder="enter your username" required>
                <input type="password" name="password" class="box1" placeholder="enter your password" required>
                <input type="password" name="cpassword" class="box1" placeholder="confirm your password" required>
                <input type="submit" class="btn1" name="submit" value="REGISTER">
                <p class="reg">already have an account? <a href="login.php">login now</a></p>
            </form>
            </section>
        </div>
</body>
</html>
  