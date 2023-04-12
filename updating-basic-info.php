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
        $query = "SELECT * FROM `scholar_basic_info` WHERE `Student_ID`= '$id'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        while($rows = mysqli_fetch_array($result)){
            $s_id = $rows['Student_ID'];
            $lastname = $rows['last_name'];
            $givenname = $rows['given_name'];
            $middlename = $rows['middle_name'];
            $Sex = $rows['sex'];
            $Birthdate = $rows['birthdate'];
            $Citizenship = $rows['citizenship'];
            $Civil_status = $rows['civil_status'];
            $Permanent_address = $rows['permanent_address'];
            $Present_address = $rows['present_address'];
            $Email_address = $rows['email_address'];
            $Mobile_number= $rows['mobile_number'];
        }    
  ?>
        <div class="update-right">
        <h1 class="edit-info">EDIT RECORDS</h1>
        <form method="POST" action="updated-basic-info.php">
        
        <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $s_id;?>">
        </div>

        <div class="form-group">
        <input placeholder="Last Name" name="last_name" class="box" value="<?php echo $lastname;?>">
        </div>

        <div class="form-group">
        <input  placeholder="Given Name" name="given_name" class="box" value="<?php echo $givenname;?>">
        </div>

        <div class="form-group">
        <input  placeholder="Middle Name" name="middle_name" class="box" value="<?php echo $middlename;?>">
        </div>

        <div class="form-group">
        <input placeholder="Sex" name="sex" class="box" value="<?php echo $Sex;?>">
        </div>

        <div class="form-group">
        <input type="date" placeholder="Birthdate" name="birthdate" class="box" value="<?php echo $Birthdate;?>">
        </div>

        <div class="form-group">
        <input  placeholder="Citizenship" name="citizenship" class="box" value="<?php echo $Citizenship;?>">
        </div>

        <div class="form-group">
        <input placeholder="Civil Status" name="civil_status" class="box" value="<?php echo $Civil_status;?>">
        </div>

        <div class="form-group">
        <label style="font-size: 15px">Permanent Address</label></br>
        <textarea name="permanent_address" rows ="2" class="box" ><?php echo $Permanent_address;?></textarea>
        </div>

        <div class="form-group">
        <label style="font-size: 15px">Present Address</label></br>
        <textarea name="present_address" rows ="2" class="box" ><?php echo $Present_address;?></textarea>
        </div>

        <div class="form-group">
        <input type="email" placeholder="Email Address" name="email_address" class="box" value="<?php echo $Email_address;?>">
        </div>

        <div class="form-group">
        <input placeholder="Mobile Number" name="mobile_number" class="box" value="<?php echo $Mobile_number;?>">
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
