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
                scholarship_source, scholarship_type, release_period, period_start,period_end
                FROM `scholar_basic_info`
                JOIN `scholarship_info` ON scholar_basic_info.Student_ID = scholarship_info.Student_ID
                WHERE scholar_basic_info.Student_ID = '$id'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        while($rows = mysqli_fetch_array($result)){
            $s_id = $rows['Student_ID'];
            $lastname = $rows['last_name'];
            $givenname = $rows['given_name'];
            $middlename = $rows['middle_name'];
            $Scholarship_source = $rows['scholarship_source'];
            $Scholarship_type = $rows['scholarship_type'];
            $Release_period = $rows['release_period'];
            $Period_start = $rows['period_start'];
            $Period_end = $rows['period_end'];
        }    
  ?>
        <div class="update-right">
        <h1 class="edit-info">EDIT RECORDS</h1>
        <form method="POST" action="updated-scholarship-info.php">
        
        <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $s_id;?>">
        </div>

        <div class="form-group">
        <input class="box" value="<?php echo $lastname. ', '. $givenname. ', '. $middlename;?>" disabled>
        </div>

        <div class="form-group">
        <input placeholder="Scholarship Source" name="scholarship_source" class="box" value="<?php echo $Scholarship_source;?>">
        </div>

        <div class="form-group">
        <input placeholder="Scholarship Type" name="scholarship_type" class="box" value="<?php echo $Scholarship_type;?>">
        </div>

        <div class="form-group">
        <input  placeholder="Release Period" name="release_period" class="box" value="<?php echo $Release_period;?>">
        </div>

        <div class="form-group">
        <input placeholder="Period Start" name="period_start" class="box" value="<?php echo $Period_start;?>">
        </div>

        <div class="form-group">
        <input  placeholder="Period End" name="period_end" class="box" value="<?php echo $Period_end;?>">
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
