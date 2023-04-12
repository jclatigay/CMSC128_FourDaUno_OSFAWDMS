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
   <title>Update Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/home_style.css">
   
</head>
<body>

    <?php @include 'header.php'; ?>

    <section class="heading">
    <h3>update information</h3>
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
            <form method="POST" action="updating.php">
            <select class="box" name="update" id="update" required>
                <option value="" disabled selected hidden>--Select a category to update--</option>
                <option value="Scholar Basic Information">Scholar Basic Information</option>
                <option value="Course Information">Course Information</option>
                <option value="Scholarship Information">Scholarship Information</option>
                <option value="Other Grants Information">Other Grants Information</option>
                <option value="Parents Information">Parents Information</option>
                <option value="Relative Information">Relative Information</option>
                <option value="Student Employment Information">Student Employment Information</option>
                <option value="Student Dependency Information">Student Dependency Information</option>
            </select>
            <input type="submit"  name ="submit" class="button" value="Enter">
            <button type="button" class="button" onclick = "back()"><i class="fa fa-arrow-circle-left" style="font-size:18px"></i> Back</button>
            </form>  
        </div>

        <div class="table-list">
            <h1 class="table-head">T a b l e   L i s t</h1>
            <form>
            <div class="table-left">
                <label class="form-label">Personal Information</label></br>
                <input type="text"class="form-box" value="Scholar's Personal Records" readonly></br>

                <label class="form-label">Course Information</label></br>
                <input type="text"class="form-box" value="Scholar's Course Records" readonly></br>

                <label class="form-label">Scholarship Information</label></br>
                <input type="text"class="form-box" value="Scholar's Scholarship Records" readonly></br>

                <label class="form-label">Other Grants Infomation</label></br>
                <input type="text"class="form-box" value="Scholar's Other Grants Records" readonly></br>

            </div>
            <div class="table-right">
                <label class="form-label">Parents Information</label></br>
                <input type="text"class="form-box" value="Scholar's Parents Records" readonly></br>

                <label class="form-label">Relative Information</label></br>
                <input type="text"class="form-box" value="Scholar's Relative Records" readonly></br>

                <label class="form-label">Student Employment Infomation</label></br>
                <input type="text"class="form-box" value="Scholar's Student Employment Records" readonly></br>

                <label class="form-label">Student Dependency Information</label></br>
                <input type="text"class="form-box" value="Scholar's Student Dependency Records" readonly></br>
            </div>
            </form>
            <div class="credit1">&copy; copyright @ <?php echo date('Y'); ?> by <b class="guaranthreed">RS Guaranthreed </b> </div>
        </div>

        
    </div>
    </section>

    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>