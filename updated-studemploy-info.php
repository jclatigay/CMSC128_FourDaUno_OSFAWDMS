<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');  
}

if(isset($_POST['submit'])){
    $s_id = $_POST['id'];
    $employ_status = $_POST['employ_status'];
    $occupation = $_POST['occupation'];
    $shift_length = $_POST['shift_length'];
    $stud_annual_gross_salary = $_POST['stud_annual_gross_salary'];
    $employer_name = $_POST['employer_name'];
    $company_name = $_POST['company_name'];
    $work_address = $_POST['work_address'];

$sql = "UPDATE `stud_employ_status` SET
        employ_status='{$employ_status}',occupation='{$occupation}', shift_length='{$shift_length}',
        stud_annual_gross_salary ='{$stud_annual_gross_salary}', employer_name='{$employer_name}',company_name='{$company_name}',
        work_address ='{$work_address}'
        WHERE Student_ID =$s_id";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
}

$query = mysqli_query($conn, "SELECT scholar_basic_info.Student_ID, CONCAT(last_name, ', ', given_name, ', ', middle_name) AS Name,
                employ_status, occupation, shift_length, stud_annual_gross_salary, employer_name,
                company_name, work_address
                FROM `scholar_basic_info`
                JOIN `stud_employ_status` ON scholar_basic_info.Student_ID =stud_employ_status.Student_ID");
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
                        <th>Employment Status</th>
                        <th>Occupation</th>     
                        <th>Shift Length</th>
                        <th>Annual Gross Salary</th>     
                        <th>Employer Name</th>
                        <th>Company Name</th>
                        <th>Work Address</th>     
                    </tr>
                <?php while($rows = $query ->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $rows['Student_ID'];?></td>
                        <td><?php echo $rows['Name'];?></td>
                        <td><?php echo $rows['employ_status'];?></td>
                        <td><?php echo $rows['occupation'];?></td>
                        <td><?php echo $rows['shift_length'];?></td>
                        <td><?php echo $rows['stud_annual_gross_salary'];?></td>
                        <td><?php echo $rows['employer_name'];?></td>
                        <td><?php echo $rows['company_name'];?></td>
                        <td><?php echo $rows['work_address'];?></td>
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