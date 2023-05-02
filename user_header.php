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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="../css/home_style.css">

</head>

<header class ="header">
    <div class ="flex">
        <a href ="user_home.php" class="user">Hello, <?php echo $_SESSION['user_givenname']; ?> <?php echo $_SESSION['user_lastname']; ?>!</a>

        <nav class ="navbar">
            <ul>
                <li><a href="user_home.php">home</a></li>
                <li><a href="services.php">services</a></li>
                <li><a href="user_tracker.php">tracker</a></li>
                <li><a href="news.php">news</a></li>
                <li><a href="about.php">about</a></li>
            </ul>
        </nav>

        <div class="icons">
            <a href="search.php" class="fas fa-search"></a>
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