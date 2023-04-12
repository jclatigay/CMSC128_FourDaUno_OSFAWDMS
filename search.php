<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Search Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/home_style.css">

</head>
<body>
    <?php @include 'header.php'; ?>

    <section class="search-page">

    <section class="search">
        <form method="POST" action="search2.php">
            <select class="box" name="category" id="category" required>
                <option value="" disabled selected hidden>--Select a category to search--</option>
                <option value="Year Level">Year Level</option>
                <option value="College">College</option>
                <option value="Course">Course</option>
                <option value="Scholarship">Scholarship Type</option> 
            </select>

            <input type="submit"  name ="submit" class="button" value="enter">
        </form>
    </section>

    
    </section>


<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>