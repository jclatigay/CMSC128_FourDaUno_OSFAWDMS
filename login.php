<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    $filter_username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $username = mysqli_real_escape_string($conn, $filter_username);
    $filter_pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password = mysqli_real_escape_string($conn, $filter_pass);

    $sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password' ";
    $select_users = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($select_users) > 0){

        $row = mysqli_fetch_assoc($select_users);

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_lastname'] = $row['lastname'];
        $_SESSION['user_givenname'] = $row['givenname'];
        $_SESSION['user_middlename'] = $row['middlename'];
        $_SESSION['user_username'] = $row['username'];
        header("location:home.php");
    }
    else
        $message[] = 'incorrect username or password!';
}
?>

<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

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
            <section class ="form_container">
                <form action="" method ="post">
                    <img src ="images/fm.png" class ="logo"/>
                    <h3>SIGN IN</h3>
                    <input type="username" name ="username" class ="box" placeholder ="enter your username" required>
                    <input type="password" name ="password" class="box" placehoolder="enter your password" required>
                    <input type="submit" class="btn" name ="submit" value ="LOGIN NOW">
                    <p>don't have an account? <a href ="registration.php">register now</a></p>
                </form>
            </section>
        </div>
</body>
</html>
