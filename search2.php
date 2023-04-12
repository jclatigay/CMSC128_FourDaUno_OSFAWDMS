<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');  
}

if(isset($_POST['submit'])){
    $category = $_POST['category'];
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
        <form>
            <input type="text" class = "box" value="<?php echo $category;?>" readonly>
			<input name="Name" class = "box" type="hidden" value="<?php echo $category;?>">
            <button type="button" class="button" onclick = "search_back()"><i class="fa fa-arrow-circle-left" style="font-size:18px"></i> Back</button>
        </form>
    </section>

    <section class="search">
        <?php
            switch($category){
                case "Year Level":
            ?>  <form action="search_result.php" method="POST">
                        <select class="box" name="searchfor" id="searchfor" required>
                            <option value="" disabled selected hidden>--Select year level--</option>
                            <option value="1">First Years</option>
                            <option value="2">Second Years</option>
                            <option value="3">Third Years</option>
                            <option value="4">Fourth Years</option>
                        </select>
                        <input type="submit"  name ="submit" class="button" value="enter">
                    </form>
            <?php
                break;
                case "College": 
            ?>  <form action="search_result.php" method="POST">
                    <select class="box" name="searchfor" id="searchfor" required>
                        <option value="" disabled selected hidden>--Select college--</option>
                        <option value="cac">College of Arts and Communication</option>
                        <option value="css">College of Social Sciences</option>
                        <option value="cs">College of Science</option>
                    </select>
                    <input type="submit"  name ="submit" class="button" value="enter">
                </form>
                <?php
                break;
                case "Course": 
            ?>  <form action="search_result.php" method="POST">
                    <select class="box" name="searchfor" id="searchfor" required>
                        <option value="" disabled selected hidden>--Select course--</option>
                            <option value="journ">BA in Communication major in Journalism</option>
                            <option value="speech">BA in Communication major in Speech Communication</option>
                            <option value="eng">BA in Language and Literature (English)</option>
                            <option value="fil">BA in Language and Literature (Filipino)</option>
                            <option value="fine">Bachelo of Fine Arts</option>
                            <option value="econ">BS in Management Economics</option>
                            <option value="ssecon">BA in Social Sciences major in Economics</option>
                            <option value="anthro">BA in Social Sciences major in Social Anthropology</option>
                            <option value="hist">BA in Social Sciences major in History</option>
                            <option value="math">BS in Mathematics</option>
                            <option value="comsci">BS in Computer Science</option>
                            <option value="bio">BS in Biology</option>
                            <option value="physics">BS in Physics</option>
                    </select>
                    <input type="submit"  name ="submit" class="button" value="enter">
                </form>
            <?php
                break;
                case "Scholarship":
            ?>  <form action="search_result.php" method="POST">
                    <select class="box" name="searchfor" id="searchfor" required>
                        <option value="" disabled selected hidden>--Select Scholarship Type--</option>
                        <option value="gov">Government</option>
                        <option value="pri">Private</option>
                    </select>
                    <input type="submit"  name ="submit" class="button" value="enter">
                </form>
            <?php
                break;
        }
        ?>
        </section>
        </section>


    <?php @include 'footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>