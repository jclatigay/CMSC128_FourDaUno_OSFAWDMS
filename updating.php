<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');  
}

if(isset($_POST['submit'])){
    $update = $_POST['update'];
}

$sql = mysqli_query($conn, "SELECT scholar_basic_info.Student_ID, 
    scholar_basic_info.last_name, scholar_basic_info.given_name, scholar_basic_info.middle_name, 
    scholar_basic_info.sex, scholar_basic_info.birthdate, scholar_basic_info.citizenship, 
    scholar_basic_info.civil_status, scholar_basic_info.permanent_address, scholar_basic_info.present_address, 
    scholar_basic_info.email_address, scholar_basic_info.mobile_number, course_info.college, course_info.course, 
    course_info.year_level, scholarship_info.scholarship_source, scholarship_info.scholarship_type, 
    scholarship_info.release_period, scholarship_info.period_start, scholarship_info.period_end, 
    other_grants.other_grant_source, other_grants.other_grant_type, other_grants.other_grant_relperiod, 
    other_grants.other_grant_start, other_grants.other_grant_end, stud_allowance_dependency.parent_dependent, 
    stud_allowance_dependency.relative_dependent, stud_allowance_dependency.employment_dependent, 
    studparents_occupation.father_name, studparents_occupation.father_occupation, studparents_occupation.mother_name, 
    studparents_occupation.mother_occupation, studparents_occupation.annual_gross_salary, 
    relative_dependent_occupation.relative_name, relative_dependent_occupation.relative_occupation, 
    relative_dependent_occupation.rel_annual_gross_salary, stud_employ_status.employ_status, 
    stud_employ_status.occupation, stud_employ_status.shift_length, stud_employ_status.stud_annual_gross_salary, 
    stud_employ_status.employer_name, stud_employ_status.company_name, stud_employ_status.work_address

    FROM `scholar_basic_info` 
    LEFT JOIN `course_info`on scholar_basic_info.Student_ID = course_info.Student_ID
    LEFT JOIN `scholarship_info`on scholar_basic_info.Student_ID = scholarship_info.Student_ID
    LEFT JOIN `stud_allowance_dependency` on scholar_basic_info.Student_ID = stud_allowance_dependency.Student_ID
    LEFT JOIN `studparents_occupation`on scholar_basic_info.Student_ID = studparents_occupation.Student_ID 
    LEFT JOIN `stud_employ_status` on scholar_basic_info.Student_ID = stud_employ_status.Student_ID
    LEFT JOIN `relative_dependent_occupation`on scholar_basic_info.Student_ID = relative_dependent_occupation.Student_ID
    LEFT JOIN `other_grants` on scholar_basic_info.Student_ID = other_grants.Student_ID" );

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
    <h3>update information</h3>
    <h4>RS Student Scholarship</h4> 
    </section>

    <section class="update-content">
        <div class="update-container">
            <div class="update-left">
                <img class="up" src="images/oblation.png"/>
            </div>

            <div class="update-right">
            <form>
                <input type="text" class = "box" value="<?php print $update;?>" disabled>
			    <input name="Name" class = "box" type="hidden" value="<?php print $update;?>">
                <button type="button" class="button" onclick = "cancel()"><i class="fa fa-arrow-circle-left" style="font-size:18px"></i> Back</button>
            </form>

            <?php
            if($update == "Scholar Basic Information"){
            ?>  <section class ="view-all1">
                <div class="scrollmenu1">
                <table class ="view1">
                    <tr>
                        <th>Update</th>
                        <th>Student ID</th>     
                        <th>Lastname</th>
                        <th>Firstname</th>
                        <th>Middleame</th>
                        <th>Sex</th>
                        <th>Birthdate</th>     
                        <th>Citizenship</th>
                        <th>Civil Status</th>     
                        <th>Permanent Address</th>
                        <th>Present Address</th>
                        <th>Email Address</th>
                        <th>Mobile Number</th>
                        
                    </tr>
                        
                <?php while($rows = $sql ->fetch_assoc()){
                ?>
                    <tr>
                        <td><span><a class="button1" href="updating-basic-info.php?edit=<?php echo $rows['Student_ID'];?> ">Update</a></span></td>
                        <td><?php echo $rows['Student_ID'];?></td>
                        <td><?php echo $rows['last_name'];?></td>
                        <td><?php echo $rows['given_name'];?></td>
                        <td><?php echo $rows['middle_name'];?></td>
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
                <?php    }
            else if($update == "Course Information"){
        ?>      <section class ="view-all1">
                <div class="scrollmenu1">
                <table class ="view1">
                    <tr>
                        <th>Update</th>
                        <th>Student ID</th>     
                        <th>Name</th>
                        <th>College</th>
                        <th>Course</th>     
                        <th>Year Level</th>
                    </tr>
                <?php while($rows = $sql ->fetch_assoc()){
                ?>
                    <tr>
                        <td><span><a class="button1" href="updating-course-info.php?edit=<?php echo $rows['Student_ID'];?> ">Update</a></span></td>
                        <td><?php echo $rows['Student_ID'];?></td>
                        <td><?php echo $rows['last_name'].", ". $rows['given_name'].", ". $rows['middle_name'];?></td>
                        <td><?php echo $rows['college'];?></td>
                        <td><?php echo $rows['course'];?></td>
                        <td><?php echo $rows['year_level'];?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
                </div>
                </section>
                <?php
                }
            else if($update == "Scholarship Information"){
            ?>  <section class ="view-all1">
                <div class="scrollmenu1">
                <table class ="view1">
                    <tr>
                        <th>Update</th>
                        <th>Student ID</th>     
                        <th>Name</th>
                        <th>Scholarship Source</th>
                        <th>Scholarship Type</th>     
                        <th>Release Period</th>
                        <th>Period Start</th>
                        <th>Period End</th>     
                    </tr>
                <?php while($rows = $sql ->fetch_assoc()){
                ?>
                    <tr>
                    <td><span><a class="button1" href="updating-scholarship-info.php?edit=<?php echo $rows['Student_ID'];?> ">Update</a></span></td>
                        <td><?php echo $rows['Student_ID'];?></td>
                        <td><?php echo $rows['last_name'].", ". $rows['given_name'].", ". $rows['middle_name'];?></td>
                        <td><?php echo $rows['scholarship_source'];?></td>
                        <td><?php echo $rows['scholarship_type'];?></td>
                        <td><?php echo $rows['release_period'];?></td>
                        <td><?php echo $rows['period_start'];?></td>
                        <td><?php echo $rows['period_end'];?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                </div>
                </section>
                <?php
                }
            else if($update == "Other Grants Information"){
            ?>  <section class ="view-all1">
                <div class="scrollmenu1">
                <table class ="view1">
                    <tr>
                        <th>Update</th>
                        <th>Student ID</th>     
                        <th>Name</th>
                        <th>Other Grant Source</th>
                        <th>Other Grant Type</th>     
                        <th>Release Period</th>
                        <th>Period Start</th>
                        <th>Period End</th>     
                    </tr>
                <?php while($rows = $sql ->fetch_assoc()){
                ?>
                    <tr>
                        <td><span><a class="button1" href="updating-other-grants.php?edit=<?php echo $rows['Student_ID'];?> ">Update</a></span></td>
                        <td><?php echo $rows['Student_ID'];?></td>
                        <td><?php echo $rows['last_name'].", ". $rows['given_name'].", ". $rows['middle_name'];?></td>
                        <td><?php echo $rows['other_grant_source'];?></td>
                        <td><?php echo $rows['other_grant_type'];?></td>
                        <td><?php echo $rows['other_grant_relperiod'];?></td>
                        <td><?php echo $rows['other_grant_start'];?></td>
                        <td><?php echo $rows['other_grant_end'];?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
                </div>
                </section>

                <?php
                }
            else if($update == "Parents Information"){
            ?>  <section class ="view-all1">
                <div class="scrollmenu1">
                <table class ="view1">
                    <tr>
                        <th>Update</th>
                        <th>Student ID</th>     
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Father Occupation</th>     
                        <th>Mother Name</th>
                        <th>Mother Occupation</th>
                        <th>Annual Gross Salary</th>     
                    </tr>
                <?php while($rows = $sql ->fetch_assoc()){
                ?>
                    <tr>
                        <td><span><a class="button1" href="updating-parents-info.php?edit=<?php echo $rows['Student_ID'];?> ">Update</a></span></td>
                        <td><?php echo $rows['Student_ID'];?></td>
                        <td><?php echo $rows['last_name'].", ". $rows['given_name'].", ". $rows['middle_name'];?></td>
                        <td><?php echo $rows['father_name'];?></td>
                        <td><?php echo $rows['father_occupation'];?></td>
                        <td><?php echo $rows['mother_name'];?></td>
                        <td><?php echo $rows['mother_occupation'];?></td>
                        <td><?php echo $rows['annual_gross_salary'];?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
                </div>
                </section>
    
                <?php
                }
            else if($update == "Relative Information"){
            ?>  <section class ="view-all1">
                <div class="scrollmenu1">
                <table class ="view1">
                    <tr>
                        <th>Update</th>
                        <th>Student ID</th>     
                        <th>Name</th>
                        <th>Relative Name</th>
                        <th>Relative Occupation</th>     
                        <th>Annual Gross Salary</th>     
                    </tr>
                <?php while($rows = $sql ->fetch_assoc()){
                ?>
                    <tr>
                        <td><span><a class="button1" href="updating-relative-info.php?edit=<?php echo $rows['Student_ID'];?> ">Update</a></span></td>
                        <td><?php echo $rows['Student_ID'];?></td>
                        <td><?php echo $rows['last_name'].", ". $rows['given_name'].", ". $rows['middle_name'];?></td>
                        <td><?php echo $rows['relative_name'];?></td>
                        <td><?php echo $rows['relative_occupation'];?></td>
                        <td><?php echo $rows['rel_annual_gross_salary'];?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
                </div>
                </section>
        
                <?php
                }
            else if($update == "Student Employment Information"){
            ?>  <section class ="view-all1">
                <div class="scrollmenu1">
                <table class ="view1">
                    <tr>
                        <th>Update</th>
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
                <?php while($rows = $sql ->fetch_assoc()){
                ?>
                    <tr>
                        <td><span><a class="button1" href="updating-studemploy-info.php?edit=<?php echo $rows['Student_ID'];?> ">Update</a></span></td>
                        <td><?php echo $rows['Student_ID'];?></td>
                        <td><?php echo $rows['last_name'].", ". $rows['given_name'].", ". $rows['middle_name'];?></td>
                        <td><?php echo $rows['employ_status'];?></td>
                        <td><?php echo $rows['occupation'];?></td>
                        <td><?php echo $rows['shift_length'];?></td>
                        <td><?php echo $rows['stud_annual_gross_salary'];?></td>
                        <td><?php echo $rows['employer_name'];?></td>
                        <td><?php echo $rows['company_name'];?></td>
                        <td><?php echo $rows['work_address'];?></td>                        
                    </tr>
                <?php 
                }
                ?>
                </table>
                </div>
                </section>
                <?php
                }
            else if($update == "Student Dependency Information"){
                ?>  <section class ="view-all1">
                    <div class="scrollmenu1">
                    <table class ="view1">
                        <tr>
                            <th>Update</th>
                            <th>Student ID</th>     
                            <th>Name</th>
                            <th>Parent Dependent</th>
                            <th>Relative Dependent</th>     
                            <th>Employment Dependent</th>         
                        </tr>
                    <?php while($rows = $sql ->fetch_assoc()){
                    ?>
                        <tr>
                            <td><span><a class="button1" href="updating-stud-dependency.php?edit=<?php echo $rows['Student_ID'];?> ">Update</a></span></td>
                            <td><?php echo $rows['Student_ID'];?></td>
                            <td><?php echo $rows['last_name'].", ". $rows['given_name'].", ". $rows['middle_name'];?></td>
                            <td><?php echo $rows['parent_dependent'];?></td>
                            <td><?php echo $rows['relative_dependent'];?></td>
                            <td><?php echo $rows['employment_dependent'];?></td>                        
                        </tr>
                    <?php
                    }
                    ?>
                    </table>
                    </div>
                    </section>
                    <?php
                    }
                    ?>

            </div>
        </div>
    </section>

    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>



