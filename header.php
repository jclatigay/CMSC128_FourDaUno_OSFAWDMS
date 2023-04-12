<?php

@include 'config.php';
session_start();

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

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/home_style.css">

</head>

<header class ="header">
    <div class ="flex">
        <a href ="home.php" class="logo">Scholarship</a>

        <nav class ="navbar">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="dashboard.php">dashboard</a></li>
                <li><a href="insert.php">insert</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="#">account</a>
                    <ul>
                        <li><a href="login.php">login</a></li>
                        <li><a href="registration.php">register</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <a href="search.php" class="fas fa-search"></a>
            <a href="insert.php" class="fas fa-plus-square"></a>
            <a href="update-page.php" class="fas fa-edit"></a>
            <a href="delete.php" class="fas fa-trash-alt"></a>
            <div id="user-btn" class="fas fa-user-circle"></div>
        </div>
        <div class="account-box">
                <p>name: <span><?php echo $_SESSION['user_givenname']; ?></span></p>
                <p>username: <span><?php echo $_SESSION['user_username']; ?></span></p>
                <a href="logout.php" class="detele-btn">logout  <i class="fas fa-sign-out-alt"></i></a>
        </div>
    </div>
</header>

</html>