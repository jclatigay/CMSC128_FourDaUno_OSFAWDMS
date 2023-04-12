<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');  
}
if(isset($_POST['submit'])){
    $s_id = $_POST['id'];
    $lastname = $_POST['last_name'];
    $givenname = $_POST['given_name'];
    $middlename = $_POST['middle_name'];
    $Sex = $_POST['sex'];
    $Birthdate = $_POST['birthdate'];
    $Citizenship = $_POST['citizenship'];
    $Civil_status = $_POST['civil_status'];
    $Permanent_address = $_POST['permanent_address'];
    $Present_address = $_POST['present_address'];
    $Email_address = $_POST['email_address'];
    $Mobile_number = $_POST['mobile_number'];

$sql = "UPDATE `scholar_basic_info` SET last_name='{$lastname}',
        given_name='{$givenname}', middle_name='{$middlename}',
        sex='{$Sex}',birthdate='{$Birthdate}',citizenship='{$Citizenship}',
        civil_status='{$Civil_status}',permanent_address='{$Permanent_address}',
        present_address='{$Present_address}',email_address='{$Email_address}',
        mobile_number='{$Mobile_number}' WHERE Student_ID =$s_id";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
echo "<script type='text/javascript'>alert('Scholar data updated successfully!')</script>";
}

$query = mysqli_query($conn, "SELECT * FROM `scholar_basic_info`");

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
                        <th>Sex</th>
                        <th>Birthdate</th>     
                        <th>Citizenship</th>
                        <th>Civil Status</th>     
                        <th>Permanent Address</th>
                        <th>Present Address</th>
                        <th>Email Address</th>
                        <th>Mobile Number</th>
                    </tr>
                <?php while($rows = $query ->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $rows['Student_ID'];?></td>
                        <td><?php echo $rows['last_name'].", ". $rows['given_name'].", ". $rows['middle_name'];?></td>
                        <td><?php echo $rows['sex'];?></td>
                        <td><?php echo $rows['birthdate'];?></td>
                        <td><?php echo $rows['citizenship'];?></td>
                        <td><?php echo $rows['civil_status'];?></td>
                        <td><?php echo $rows['permanent_address'];?></td>                            
                        <td><?php echo $rows['present_address'];?></td>
                        <td><?php echo $rows['email_address'];?></td>
                        <td><?php echo $rows['mobile_number'];?></td>
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