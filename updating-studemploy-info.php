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
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/home_style.css">
    
</head>
<body>

    <?php @include 'header.php'; ?>

    <section class="heading">
    <h3>update information</h3 >
    <h4>RS Student Scholarship</h4> 
    </section>

    <section class="update-content">
    <div class="update-container">

        <div class="update-left">
            <img class="up" src="images/oblation.png"/>
        </div>

        <?php 
        if(isset($_GET['edit'])){
            $id = $_GET['edit'];
        }
        $query = "SELECT scholar_basic_info.Student_ID, last_name, given_name, middle_name,
                employ_status, occupation, shift_length,  stud_annual_gross_salary, employer_name,
                company_name, work_address
                FROM `scholar_basic_info`
                JOIN `stud_employ_status` ON scholar_basic_info.Student_ID = stud_employ_status.Student_ID
                WHERE scholar_basic_info.Student_ID = '$id'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        while($rows = mysqli_fetch_array($result)){
            $s_id = $rows['Student_ID'];
            $lastname = $rows['last_name'];
            $givenname = $rows['given_name'];
            $middlename = $rows['middle_name'];
            $employ_status = $rows['employ_status'];
            $occupation = $rows['occupation'];
            $shift_length = $rows['shift_length'];
            $stud_annual_gross_salary = $rows['stud_annual_gross_salary'];
            $employer_name = $rows['employer_name'];
            $company_name = $rows['company_name'];
            $work_address= $rows['work_address'];
        }    
  ?>
        <div class="update-right">
        <h1 class="edit-info">EDIT RECORDS</h1>
        <form method="POST" action="updated-studemploy-info.php">
        
        <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $s_id;?>">
        </div>

        <div class="form-group">
        <input class="box" value="<?php echo $lastname. ', '. $givenname. ', '. $middlename;?>" disabled>
        </div>

        <div class="form-group">
        <input placeholder="Employment Status" name="employ_status" class="box" value="<?php echo $employ_status;?>">
        </div>

        <div class="form-group">
        <input placeholder="Student's Occupation" name="occupation" class="box" value="<?php echo $occupation;?>">
        </div>

        <div class="form-group">
        <input placeholder="Shift Length" name="shift_length" class="box" value="<?php echo $shift_length;?>">
        </div>

        <div class="form-group">
        <input  placeholder="Student's Annual Gross Salary" name="stud_annual_gross_salary" class="box" value="<?php echo $stud_annual_gross_salary;?>">
        </div>

        <div class="form-group">
        <input placeholder="Employer Name" name="employer_name" class="box" value="<?php echo $employer_name;?>">
        </div>

        <div class="form-group">
        <input placeholder="Company Name" name="company_name" class="box" value="<?php echo $company_name;?>">
        </div>

        <div class="form-group">
        <input  placeholder="Work Address" name="work_address" class="box" value="<?php echo $work_address;?>">
        </div>
        
        <div class="form-group">
        <button type="button" class="button" onclick = "cancel()">Cancel</button>
        <input type="reset" class="button" value="Reset"> 
        <input type="submit" name="submit" class="button" value="Submit">
        </div>
        </form>
        </div>
    </div>
    </section>

    
<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>
