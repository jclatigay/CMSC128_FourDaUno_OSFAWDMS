<?php
@include 'config.php';
session_start();

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

<section class="footer">

    <div class="box-container">

        <div class="boxer">
            <h3>quick links</h3>
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="insert.php">Insert</a>
            <a href="dashboard.php">Dashboard</a>
        </div>

        <div class="boxer">
            <h3>extra links</h3>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="search.php">Search</a>
            <a href="logout.php">Logout</a>
        </div>

        <div class="boxer">
            <h3>contact info</h3>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
            <p> <i class="fas fa-phone"></i> +111-222-3333 </p>
            <p> <i class="fas fa-envelope"></i> rsscholarship@up.edu.ph </p>
            <p> <i class="fas fa-map-marker-alt"></i> UP Baguio, Baguio City, 2600 </p>
        </div>

        <div class="boxer">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>

    </div>

    <div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>RS Guaranthreed</span> </div>

</section>

</html>