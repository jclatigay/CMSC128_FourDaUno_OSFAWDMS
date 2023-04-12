<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');  
}

if(isset($_POST['submit'])){
    $s_id = $_POST['id'];
    $relative_name = $_POST['relative_name'];
    $relative_occupation = $_POST['relative_occupation'];
    $rel_annual_gross_salary = $_POST['rel_annual_gross_salary'];

$sql = "UPDATE `relative_dependent_occupation` SET
        relative_name='{$relative_name}',relative_occupation='{$relative_occupation}',
        rel_annual_gross_salary ='{$rel_annual_gross_salary}'
        WHERE Student_ID =$s_id";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
}

$query = mysqli_query($conn, "SELECT scholar_basic_info.Student_ID, CONCAT(last_name, ', ', given_name, ', ', middle_name) AS Name,
                relative_name, relative_occupation, rel_annual_gross_salary
                FROM `scholar_basic_info`
                JOIN `relative_dependent_occupation` ON scholar_basic_info.Student_ID =relative_dependent_occupation.Student_ID");
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
    <h3>updated information</h3 >
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

    <section class="update-content">
    <div class="update-container">

        <div class="update-left">
            <img class="up" src="images/oblation.png"/>
        </div>

        <div class="update-right">

        <div class="right-left">
            <button type="button" class="button2" onclick = "cancel()"><i class="fa fa-arrow-circle-left" style="font-size:18px"></i>  To Update Page</button>
        </div>

        <div class="right-right">
            <button type="button" class="button2" onclick = "view()">To View All  <i class="fa fa-arrow-circle-right" style="font-size:18px"></i></button>   
        </div>
        
        <section class ="view-all1">
                <div class="scrollmenu1">
                <table class ="view1">
                    <tr>
                        <th>Student ID</th>     
                        <th>Name</th>
                        <th>Relative Name</th>
                        <th>Relative Occupation</th>     
                        <th>Annual Gross Salary</th>     
                    </tr>
                <?php while($rows = $query ->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $rows['Student_ID'];?></td>
                        <td><?php echo $rows['Name'];?></td>
                        <td><?php echo $rows['relative_name'];?></td>
                        <td><?php echo $rows['relative_occupation'];?></td>
                        <td><?php echo $rows['rel_annual_gross_salary'];?></td>
                    </tr> 
                    </tr>
                <?php
                }
                ?>
                </table>
                </div>
                </section>
        </div>
    </div>
    </section>

    <?php @include 'footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>