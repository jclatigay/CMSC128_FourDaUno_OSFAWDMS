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
                parent_dependent, relative_dependent, employment_dependent
                FROM `scholar_basic_info`
                JOIN `stud_allowance_dependency` ON scholar_basic_info.Student_ID = stud_allowance_dependency.Student_ID
                WHERE scholar_basic_info.Student_ID = '$id'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        while($rows = mysqli_fetch_array($result)){
            $s_id = $rows['Student_ID'];
            $lastname = $rows['last_name'];
            $givenname = $rows['given_name'];
            $middlename = $rows['middle_name'];
            $parent_dependent = $rows['parent_dependent'];
            $relative_dependent = $rows['relative_dependent'];
            $employment_dependent = $rows['employment_dependent'];
        }    
  ?>
        <div class="update-right">
        <h1 class="edit-info">EDIT RECORDS</h1>
        <form method="POST" action="updated-stud-dependency.php">
        
        <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $s_id;?>">
        </div>

        <div class="form-group">
        <input class="box" value="<?php echo $lastname. ', '. $givenname. ', '. $middlename;?>" disabled>
        </div>

        <div class="form-group">
        <input placeholder="Parent Dependen" name="parent_dependent" class="box" value="<?php echo $parent_dependent;?>">
        </div>

        <div class="form-group">
        <input placeholder="Relative Dependent" name="relative_dependent" class="box" value="<?php echo $relative_dependent;?>">
        </div>

        <div class="form-group">
        <input placeholder="Employment Dependent" name="employment_dependent" class="box" value="<?php echo $employment_dependent;?>">
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
