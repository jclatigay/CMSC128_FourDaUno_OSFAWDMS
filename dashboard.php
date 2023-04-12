<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');  
}

if(isset($_POST['submit'])){
    $category = $_POST['category'];

    switch($category){
        case "year_level":
            header('location: year_level.php');
            break;
        case "college":
            header('location: college.php');
            break;
        case "course":
            header('location: course.php');
            break;
        case "dependency":
            header('location: dependency.php');
            break;
        case "student_id":
            header('location: student_id.php');
            break;
    }
}

$total = mysqli_query($conn, "SELECT * FROM `scholar_basic_info` WHERE Student_ID") or die('query failed');
$total_scholar = mysqli_num_rows($total);

$fresh = mysqli_query($conn, "SELECT * FROM `course_info` WHERE year_level = 1") or die('query failed');
$freshmen_scholar = mysqli_num_rows($fresh);

$soph = mysqli_query($conn, "SELECT * FROM `course_info` WHERE year_level = 2") or die('query failed');
$soph_scholar = mysqli_num_rows($soph);

$jr = mysqli_query($conn, "SELECT * FROM `course_info` WHERE year_level = 3") or die('query failed');
$jr_scholar = mysqli_num_rows($jr);

$sr = mysqli_query($conn, "SELECT * FROM `course_info` WHERE year_level = 4") or die('query failed');
$sr_scholar = mysqli_num_rows($sr);

$cac = mysqli_query($conn, "SELECT * FROM `course_info` WHERE college = 'College of Arts and Communication'") or die('query failed');
$cac_scholar = mysqli_num_rows($cac);

$css = mysqli_query($conn, "SELECT * FROM `course_info` WHERE college ='College of Social Science'") or die('query failed');
$css_scholar = mysqli_num_rows($css);

$cs = mysqli_query($conn, "SELECT * FROM `course_info` WHERE college = 'College of Science'") or die('query failed');
$cs_scholar = mysqli_num_rows($cs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/home_style.css">
   
</head>
<body>

    <?php @include 'header.php'; ?>

    <section class="heading">
    <h3>d a s h b o a r d</h3>
    <h4>RS Student Scholarship</h4> 
    </section>

   <section class="function">
        <div class="function-bar">
                <div class="funbar"><a  class="function-box" href="insert.php">INSERT</a></div>
                <div class="funbar"><a  class="function-box" href="update-page.php">UPDATE</a></div>
                <div class="funbar"><a  class="function-box" href="delete.php">DELETE</a></div>
                <div class="funbar"><a  class="function-box" href="view-page.php">VIEW ALL</a></div>
        </div>
    </section>

    <section class="dash-contain">
        <table class="dash">
            <tr>
                <td></td>
                <th colspan="5" class="num">Number of Scholars</th>
            </tr>
            <tr>
                <td rowspan ="5" class="obleImg"><img class="oblation" src = "images/oblation.png"/></td>
                <th rowspan="3" colspan ="3" class="tot">Total (<?php echo $total_scholar; ?>)</th>
            </tr>
            <tr>
                
                <th class="fresh">Freshmen (<?php echo $freshmen_scholar; ?>)</th>
                <th class="soph">Sophomores (<?php echo $soph_scholar; ?>)</th>
            </tr>
            <tr>
                <th class="jr">Juniors (<?php echo $jr_scholar; ?>)</th>
                <th class="sr">Seniors (<?php echo $sr_scholar; ?>)</th>
            </tr>
            <tr>
                <th colspan ="3" class="cac">CAC (<?php echo $cac_scholar; ?>)</th>
                <th class="css">CSS (<?php echo $css_scholar; ?>)</th>
                <th class="cs">CS (<?php echo $cs_scholar; ?>)</th>
            </tr>
        </table>
    </section>  
   
    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>