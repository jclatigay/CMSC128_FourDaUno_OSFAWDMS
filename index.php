<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/index_style.css">
   
</head>

<header class ="header">
    <div class ="flex">
        <a href ="index.php" class="logo">Office of Scholarship and Financial Assistance</a>

        <nav class ="navbar">
            <ul>
                <li><a href="#" class="fas fa-user-circle"> a c c o u n t</a>
                    <ul>
                        <li><a href="pages/admin_login.php">Admin Login</a></li>
                        <li><a href="pages/user_login.php">User Login</a></li>
                        <li><a href="pages/registration.php">register</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

<body>
    <section class="home">
           <div class="content">
                <h3>University of the Philippines</h3>
                <h4>Office of Scholarship and Financial Assistance</h4>
                <a href = "pages/view-page.php" class="btn">Discover More</a>
            </div>
    </section>

    <section class="home-contact">
        <div class="content">
            <h3>have any questions?</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio officia aliquam quis saepe? Quia, libero.</p>
            <a href="about.php" class="btn">contact us</a>
        </div>

    </section>

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

    <div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>OSFA Website</span> </div>

    </section>

    <script src ="js/script.js"></script>
</body>
</html>