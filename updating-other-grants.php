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
                other_grant_source, other_grant_type, other_grant_relperiod, other_grant_start,other_grant_end
                FROM `scholar_basic_info`
                JOIN `other_grants` ON scholar_basic_info.Student_ID = other_grants.Student_ID
                WHERE scholar_basic_info.Student_ID = '$id'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        while($rows = mysqli_fetch_array($result)){
            $s_id = $rows['Student_ID'];
            $lastname = $rows['last_name'];
            $givenname = $rows['given_name'];
            $middlename = $rows['middle_name'];
            $other_grant_source = $rows['other_grant_source'];
            $other_grant_type = $rows['other_grant_type'];
            $other_grant_relperiod = $rows['other_grant_relperiod'];
            $other_grant_start = $rows['other_grant_start'];
            $other_grant_end = $rows['other_grant_end'];
        }    
  ?>
        <div class="update-right">
        <h1 class="edit-info">EDIT RECORDS</h1>
        <form method="POST" action="updated-other-grants.php">
        
        <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $s_id;?>">
        </div>

        <div class="form-group">
        <input class="box" value="<?php echo $lastname. ', '. $givenname. ', '. $middlename;?>" disabled>
        </div>

        <div class="form-group">
        <input placeholder="Other Grant Source" name="other_grant_source" class="box" value="<?php echo $other_grant_source;?>">
        </div>

        <div class="form-group">
        <input placeholder="Other GrantType" name="other_grant_type" class="box" value="<?php echo $other_grant_type;?>">
        </div>

        <div class="form-group">
        <input  placeholder="Other Grant Release Period" name="other_grant_relperiod" class="box" value="<?php echo $other_grant_relperiod;?>">
        </div>

        <div class="form-group">
        <input placeholder="Other Grant Start" name="other_grant_start" class="box" value="<?php echo $other_grant_start;?>">
        </div>

        <div class="form-group">
        <input  placeholder="Other Grant End" name="other_grant_end" class="box" value="<?php echo $other_grant_end;?>">
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
