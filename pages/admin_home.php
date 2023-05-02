<?php
@include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="../css/home_style.css">
   
</head>
<body>
    <img class="home-bg" src="../images/upbaguio.jpg">
    <?php @include 'admin_header.php'; ?>
    <section class="home">
           <div class="content">
                <h3>University of the Philippines</h3>
                <h4>Office of Scholarship and Financial Assistance</h4>
                <a href = "view-page.php" class="btn">Discover More</a>
            </div>
    </section>

    <section class="home-contact">
        <div class="content">
            <h3>have any questions?</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio officia aliquam quis saepe? Quia, libero.</p>
            <a href="about.php" class="btn">contact us</a>
        </div>

    </section>

    <?php @include 'footer.php'; ?>
    <script src ="../js/script.js"></script>
</body>
</html>