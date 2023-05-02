<?php
@include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:user_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="../css/home_style.css">
   
</head>
<body>
    <img class="home-bg" src="../images/cover3.jpg">
    <?php @include 'user_header.php'; ?>
    <section class="home">
           <div class="content">
                <a href = "user_tracker.php" class="btn">Hi <?php echo $_SESSION['user_givenname']; ?>, you are currently under ...</a>
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