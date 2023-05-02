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
        header("location:user_home.php");
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

    <title>OSFA Website User Login</title>

    <link rel="stylesheet" type="text/css" href="../css/login_style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="../images/wave.png">
    <div class = container>
        <div class = img>
            <img src="../images/bg.png" />
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

            <form action="" method ="post">
                <h2 class="title">UPB Baguio OSFA</h2>
                <img src ="../images/uplogo.png" class ="logo"/>
                <h2 class="title">Welcome Student</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <input type="username" name ="username" placeholder="Enter Registered Username" required>
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i"> 
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <input type="password" name ="password" placeholder="Enter Registered Password" required>
                        </div>
                    </div>
            </br>
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" name ="submit" value="Login">
                <a href="registration.php">Do not have an account? Register Here!</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>