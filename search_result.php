<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');  
}
if(isset($_POST['submit'])){
    $searchfor = $_POST['searchfor'];
    
    switch($searchfor){
        case "1":
            $searching = 1;
            break;
        case "2":
            $searching = 2;
            break;
        case "3":
            $searching = 3;
            break;
        case "4":
            $searching = 4;
            break;
        case "cac":
            $searching = "College of Arts and Communication";
            break;
        case "css":
            $searching = "College of Social Science";
            break;
        case "cs":
            $searching = "College of Science";
            break;
        case "journ":
            $searching = "Journalism";
            break;
        case "speech":
            $searching = "Speech";
            break;
        case "eng":
            $searching = "English";
            break;
        case "fil":
            $searching ="Filipino";
            break;
        case "fine":
            $searching ="Fine";
            break;
        case "econ":
            $searching ="Management";
            break;
        case "ssecon":
            $searching ="BA in Social Sciences major in Economics";
            break;
        case "anthro":
            $searching ="Anthropology";
            break;
        case "hist":
            $searching ="History";
            break;
        case "math":
            $searching ="Mathematics";
            break;
        case "comsci":
            $searching ="Computer";
            break;
        case "bio":
            $searching ="Biology";
            break;
        case "physics":
            $searching ="Physics";
            break;
        case "gov":
            $searching = "Government";
            break;
        case "pri":
            $searching ="Private";
            break;   
    }

    $query = mysqli_query($conn, "SELECT scholar_basic_info.Student_ID, CONCAT(last_name, ', ', given_name, ', ', middle_name) AS Name,   
            course_info.college, course_info.course, course_info.year_level, scholarship_info.scholarship_source, scholarship_info.scholarship_type, other_grants.other_grant_source
            FROM `scholar_basic_info`
            LEFT JOIN `course_info` ON course_info.Student_ID = scholar_basic_info.Student_ID
            LEFT JOIN `scholarship_info` ON scholarship_info.Student_ID = course_info.Student_ID
            LEFT JOIN `other_grants` ON other_grants.Student_ID = scholarship_info.Student_ID 
            LEFT JOIN `stud_allowance_dependency` ON stud_allowance_dependency.Student_ID = other_grants.Student_ID
            WHERE CONCAT(course_info.year_level, course_info.college, course_info.course, scholarship_info.scholarship_type) 
            LIKE '%".$searching."%'");
    }

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
    <h3>view search result</h3>
    <h4>RS Student Scholarship</h4> 
    </section>

    <section class ="view-all">
    <div class="scrollmenu">
    <table class ="view">
        <tr>
            <th>Student ID</th>     
            <th>Name</th>
            <th>College</th>
            <th>Course</th>     
            <th>Year Level</th>
            <th>Scholarship Source</th>     
            <th>Other Grants</th>
            <th>Main Scholarship Type</th>
        </tr>
            <?php while($rows = $query ->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $rows['Student_ID'];?></td>
                    <td><?php echo $rows['Name'];?></td>
                    <td><?php echo $rows['college'];?></td>
                    <td><?php echo $rows['course'];?></td>
                    <td><?php echo $rows['year_level'];?></td>
                    <td><?php echo $rows['scholarship_source'];?></td>
                    <td><?php echo $rows['other_grant_source'];?></td>
                    <td><?php echo $rows['scholarship_type'];?></td>
                </tr>
            <?php
            }
            ?>
            </table>
        </div>
        </section>

    <?php @include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>