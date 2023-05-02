<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:admin_login.php');  
}

if(isset($_POST['Student_ID'])){
    $Student_ID = $_POST['Student_ID'];
} else {
    $Student_ID = "";
}

if(isset($_POST['college'])){
    $college = $_POST['college'];
} else {
    $college = "";
}

if(isset($_POST['course'])){
    $course = $_POST['course'];
} else {
    $course = "";
}

if(isset($_POST['year_level'])){
    $year_level = $_POST['year_level'];
} else {
    $year_level = "";
}


if(isset($_POST['last_name'])){
    $last_name = $_POST['last_name'];
} else {
    $last_name = "";
}

if(isset($_POST['given_name'])){
    $given_name = $_POST['given_name'];
} else {
    $given_name = "";
}

if(isset($_POST['middle_name'])){
    $middle_name = $_POST['middle_name'];
} else {
    $middle_name = "";
}

if(isset($_POST['sex'])){
    $sex = $_POST['sex'];
} else {
    $sex = "";
}

if(isset($_POST['birthdate'])){
    $birthdate = $_POST['birthdate'];
} else {
    $birthdate = "";
}

if(isset($_POST['citizenship'])){
    $citizenship = $_POST['citizenship'];
} else {
    $citizenship = "";
}

if(isset($_POST['civil_status'])){
    $civil_status = $_POST['civil_status'];
} else {
    $civil_status = "";
}

if(isset($_POST['permanent_address'])){
    $permanent_address = $_POST['permanent_address'];
} else {
    $permanent_address = "";
}

if(isset($_POST['present_address'])){
    $present_address = $_POST['present_address'];
} else {
    $present_address = $_POST['permanent_address'];
}

if(isset($_POST['email_address'])){
    $email_address = $_POST['email_address'];
} else {
    $email_address = "";
}

if(isset($_POST['mobile_number'])){
    $mobile_number = $_POST['mobile_number'];
} else {
    $mobile_number = "";
}

if(isset($_POST['father_name'])){
    $father_name = $_POST['father_name'];
} else {
    $father_name = "";
}

if(isset($_POST['father_occupation'])){
    $father_occupation = $_POST['father_occupation'];
} else {
    $father_occupation = "";
}

if(isset($_POST['mother_name'])){
    $mother_name = $_POST['mother_name'];
} else {
    $mother_name = "";
}

if(isset($_POST['mother_occupation'])){
    $mother_occupation = $_POST['mother_occupation'];
} else {
    $mother_occupation = "";
}

if(isset($_POST['annual_gross_salary'])){
    $annual_gross_salary = $_POST['annual_gross_salary'];
} else {
    $annual_gross_salary = "";
}


if(isset($_POST['parent_dependent'])){
    $parent_dependent = $_POST['parent_dependent'];
} else {
    $parent_dependent = "";
}

if(isset($_POST['relative_dependent'])){
    $relative_dependent = $_POST['relative_dependent'];
} else {
    $relative_dependent = "";
}

if(isset($_POST['employment_dependent'])){
    $employment_dependent = $_POST['employment_dependent'];
} else {
    $employment_dependent = "";
}


if(isset($_POST['relative_name'])){
    $relative_name = $_POST['relative_name'];
} else {
    $relative_name = "";
}

if(isset($_POST['relative_occupation'])){
    $relative_occupation = $_POST['relative_occupation'];
} else {
    $relative_occupation = "";
}

if(isset($_POST['rel_annual_gross_salary'])){
    $rel_annual_gross_salary = $_POST['rel_annual_gross_salary'];
} else {
    $rel_annual_gross_salary = "";
}


if(isset($_POST['employ_status'])){
    $employ_status = $_POST['employ_status'];
} else {
    $employ_status = "";
}

if(isset($_POST['occupation'])){
    $occupation = $_POST['occupation'];
} else {
    $occupation = "";
}

if(isset($_POST['shift_length'])){
    $shift_length = $_POST['shift_length'];
} else {
    $shift_length = "";
}

if(isset($_POST['stud_annual_gross_salary'])){
    $stud_annual_gross_salary = $_POST['stud_annual_gross_salary'];
} else {
    $stud_annual_gross_salary = "";
}

if(isset($_POST['employer_name'])){
    $employer_name = $_POST['employer_name'];
} else {
    $employer_name = "";
}

if(isset($_POST['company_name'])){
    $company_name = $_POST['company_name'];
} else {
    $company_name = "";
}

if(isset($_POST['work_address'])){
    $work_address = $_POST['work_address'];
} else {
    $work_address = "";
}


if(isset($_POST['scholarship_source'])){
    $scholarship_source = $_POST['scholarship_source'];
} else {
    $scholarship_source = "";
}

if(isset($_POST['scholarship_type'])){
    $scholarship_type = $_POST['scholarship_type'];
} else {
    $scholarship_type = "";
}

if(isset($_POST['release_period'])){
    $release_period = $_POST['release_period'];
} else {
    $release_period = "";
}

if(isset($_POST['period_start'])){
    $period_start = $_POST['period_start'];
} else {
    $period_start = "";
}

if(isset($_POST['period_end'])){
    $period_end = $_POST['period_end'];
} else {
    $period_end = "";
}


if(isset($_POST['other_grant_source'])){
    $other_grant_source = $_POST['other_grant_source'];
} else {
    $other_grant_source = "";
}
if(isset($_POST['other_grant_type'])){
    $other_grant_type = $_POST['other_grant_type'];
} else {
    $other_grant_type = "";
}

if(isset($_POST['other_grant_relperiod'])){
    $other_grant_relperiod = $_POST['other_grant_relperiod'];
} else {
    $other_grant_relperiod = "";
}

if(isset($_POST['other_grant_start'])){
    $other_grant_start = $_POST['other_grant_start'];
} else {
    $other_grant_start = "";
}

if(isset($_POST['other_grant_end'])){
    $other_grant_end = $_POST['other_grant_end'];
} else {
    $other_grant_end = "";
}

$sql1 =  "INSERT INTO course_info (Student_ID, college, course, year_level) VALUES ('$Student_ID', '$college', '$course', '$year_level')";
    if(mysqli_query($conn, $sql1)){
        echo ("<script type='text/javascript'> alert('Data stored in course_info successfully. 
            Please browse your localhost php my admin to view the updated data\n 
            Student ID: $Student_ID, College: $college, Course: $course, Year Level: $year_level\n ')</script>");
    } else{
        echo "ERROR: Error in $sql1. "
        . mysqli_error($conn);
    }   
$sql2 =  "INSERT INTO other_grants (Student_ID, other_grant_source, other_grant_type, other_grant_relperiod, other_grant_start, other_grant_end) 
            VALUES ('$Student_ID', '$other_grant_source', '$other_grant_type', 
            '$other_grant_relperiod', '$other_grant_start', '$other_grant_end')";
    if(mysqli_query($conn, $sql2)){
        echo ("<script type='text/javascript'> alert('Data stored in other_grants successfully. 
            Please browse your localhost php my admin to view the updated data\n 
            Student ID: $Student_ID, Other Grant Source: $other_grant_source, Other Grant Type: $other_grant_type, 
            Other Grand Release Period: $other_grant_relperiod, Other Grant Start: $other_grant_start, Other Grant End: $other_grant_end\n ')</script>");
    } else{
        echo "ERROR: Error in $sql2. "
        . mysqli_error($conn);
    }   
$sql3 =  "INSERT INTO relative_dependent_occupation (Student_ID, relative_name, relative_occupation, rel_annual_gross_salary) 
            VALUES ('$Student_ID', '$relative_name', 
            '$relative_occupation', '$rel_annual_gross_salary')";
    if(mysqli_query($conn, $sql3)){
        echo ("<script type='text/javascript'> alert('Data stored in relative_dependent_occupation successfully. 
            Please browse your localhost php my admin to view the updated data\n 
            Student ID: $Student_ID, Relative Name: $relative_name, 
            Relative Occupation: $relative_occupation\n Relative Annual Salary: $rel_annual_gross_salary\n ')</script>");
    } else{
        echo "ERROR: Error in $sql3. "
        . mysqli_error($conn);
    }   
$sql4 =  "INSERT INTO scholarship_info (Student_ID, scholarship_source, scholarship_type, release_period, period_start, period_end)
            VALUES ('$Student_ID', '$scholarship_source', '$scholarship_type', 
            '$release_period', '$period_start', '$period_end')";
    if(mysqli_query($conn, $sql4)){
        echo ("<script type='text/javascript'> alert('Data stored in scholarship_info successfully. 
            Please browse your localhost php my admin to view the updated data\n 
            Student ID: $Student_ID, Scholarship Source: $scholarship_source, Scholarship Type: $scholarship_type, 
            Release Period: $release_period, Period Start: $period_start, Period End:$period_end\n ')</script>");
    } else{
        echo "ERROR: Error in $sql4. "
        . mysqli_error($conn);
    }   
$sql5 =  "INSERT INTO scholar_basic_info (Student_ID, last_name, given_name, middle_name, sex, birthdate, citizenship, civil_status, 
            permanent_address, present_address, email_address, mobile_number)
            VALUES ('$Student_ID', '$last_name', '$given_name', '$middle_name', 
            '$sex', '$birthdate', '$citizenship', '$civil_status', '$permanent_address', 
            '$present_address', '$email_address', '$mobile_number')";
    if(mysqli_query($conn, $sql5)){
        echo ("<script type='text/javascript'> alert('Data stored in scholar_basic_info successfully. 
            Please browse your localhost php my admin to view the updated data\n 
            Student ID: $Student_ID, Last Name: $last_name, Given Name: $given_name, Middle Name: $middle_name, Sex: $sex, Birthdate: $birthdate, 
            Citizenship: $citizenship, Civil Status: $civil_status, Permanent Address: $permanent_address, Present Address: $present_address, 
            Email Address: $email_address, Mobile Number: $mobile_number\n ')</script>");
    } else{
        echo "ERROR: Error in $sql5. "
        . mysqli_error($conn);
    }   
$sql6 =  "INSERT INTO studparents_occupation (Student_ID, father_name, father_occupation, mother_name, mother_occupation, annual_gross_salary)
            VALUES ('$Student_ID', '$father_name', '$father_occupation', 
            '$mother_name', '$mother_occupation', '$annual_gross_salary')";
    if(mysqli_query($conn, $sql6)){
        echo ("<script type='text/javascript'> alert('Data stored in studparents_occupation successfully. 
            Please browse your localhost php my admin to view the updated data\n 
            Student ID: $Student_ID, Father Name: $father_name, Father Occupation: $father_occupation, 
            Mother Name: $mother_name, Mother Occupation: $mother_occupation, Combined Annual Gross Salary: $annual_gross_salary\n ')</script>");
    } else{
        echo "ERROR: Error in $sql6. "
        . mysqli_error($conn);
    }   
$sql7 =  "INSERT INTO stud_allowance_dependency (Student_ID, parent_dependent, relative_dependent, employment_dependent)
            VALUES ('$Student_ID', '$parent_dependent', 
            '$relative_dependent', '$employment_dependent')";
    if(mysqli_query($conn, $sql7)){
        echo ("<script type='text/javascript'> alert('Data stored in stud_allowance_dependency successfully. 
            Please browse your localhost php my admin to view the updated data
            Student ID: $Student_ID, Parent-Dependent: $parent_dependent, Relative-Dependent: $relative_dependent, 
            Employment-Dependent: $employment_dependent\n ')</script>");
    } else{
        echo "ERROR: Error in $sql7. "
        . mysqli_error($conn);
    }   
$sql8 =  "INSERT INTO stud_employ_status (Student_ID, employ_status, occupation, shift_length, stud_annual_gross_salary, employer_name, company_name, work_address) 
            VALUES ('$Student_ID', '$employ_status', '$occupation', '$shift_length', 
            '$stud_annual_gross_salary', '$employer_name', '$company_name', '$work_address')";
    if(mysqli_query($conn, $sql8)){
        echo ("<script type='text/javascript'> alert('Data stored in stud_employ_status successfully. 
            Please browse your localhost php my admin to view the updated data\n
            Student ID: $Student_ID, Employment Status: $employ_status, Occupation: $occupation, Shift-Length: $shift_length, 
            Student Annual Gross Salary: $stud_annual_gross_salary, Employer Name: $employer_name, Company Name: $company_name, 
            Work Address: $work_address\n ')</script>");
    } else{
        echo "ERROR: Error in $sql8. "
        . mysqli_error($conn);
    }   

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Insert Form</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="../css/home_style.css">
   
</head>
<body>

    <?php @include 'admin_header.php'; ?>

    <section class="heading">
    <h3>Insert Details</h3>
    <h4>RS Student Scholarship</h4> 
    </section>

   <section class="function">
        <div class="function-bar">
                <div class="funbar"><a  class="function-box" href="admin_insert.php">INSERT</a></div>
                <div class="funbar"><a  class="function-box" href="update-page.php">UPDATE</a></div>
                <div class="funbar"><a  class="function-box" href="delete.php">DELETE</a></div>
                <div class="funbar"><a  class="function-box" href="view-page.php">VIEW ALL</a></div>
        </div>
    </section>

    <section class="update-content1">
    <div class="update-container1">
            <form>
            <div class="update-left1">
                <div class="form-group">
                <h1>Scholar's Course Information</h1></br>
                    <label>Student_ID:</label></br>
                    <input class="box"  type="number" name="Student_ID" value="<?php echo $Student_ID; ?>" disabled>

                    </br><label for="college">College:</label></br>
                    <input class="box"  type="text" name="college" value="<?php echo $college; ?>"disabled>

                    </br><label for="course">Course</label></br>
                    <input class="box" type="text"  id="course" name="course" value="<?php echo $course;?>" disabled>

                    </br><label for="year_level">Year Level</label></br>
                    <input class="box" type="text" id="year_level" name="year_level" value="<?php echo $year_level;?>" disabled>
                </div>
            </br>
            </br>
                <div class="form-group">
                <h1>Scholar's Basic Information</h1>
                
                    </br><label for="last_name">Last Name:</label></br>
                    <input class="box"  type="text" name="last_name"  value="<?php echo $last_name;?>" disabled>

                    </br><label for="given_name">Given Name:</label></br>
                    <input class="box" type="text" name="given_name"  value="<?php echo $given_name;?>" disabled>

                    </br><label for="middle_name">Middle Name:</label></br>
                    <input class="box"  type="text" name="middle_name" value="<?php echo $middle_name;?>" disabled>

                    </br><label for="sex">Sex by birth:</label></br>
                    <input class="box"  id="sex" name="sex" value="<?php echo $sex;?>" disabled>

                    </br><label for="birthdate">Birthday:</label></br>
                    <input class="box"  id="birthdate" name="birthdate" value="<?php echo $birthdate;?>" disabled>

                    </br><label for="citizenship">Citizenship by birth:</label></br>
                    <input class="box" id="citizenship" name="citizenship" value="<?php echo $citizenship;?>" disabled>

                    </br><label for="civil_status">Civil Status</label></br>
                    <input class="box" id="civil_status" name="civil_status" value="<?php echo $civil_status;?>" disabled>

                    </br><label for="permanent_address">Permanent Address:</label></br>
                    <input class="box" name="permanent_address" id="permanent_address" value="<?php echo $permanent_address;?>" disabled>

                    </br><label for="present_address">Present Address:</label></br>
                    <input class="box"  name="present_address" id="present_address" value="<?php echo $present_address;?>" disabled>

                    </br><label for="email_address">Email:</label></br>
                    <input class="box" name="email_address" value="<?php echo $email_address;?>" disabled>

                    </br><label for="mobile_number">Enter phone number:</label></br>
                    <input class="box"  id="mobile_number" name="mobile_number"value="<?php echo $mobile_number;?>" disabled>

                </div>
            </br>
            </br>

                <div class="form-group">
                <h1>Scholar's Parents Information</h1>
                    </br><label for="father_name">Father's Name:</label></br>
                    <input class="box" type="text" name="father_name" value="<?php echo $father_name;?>" disabled>

                    </br><label for="father_occupation">Father Occupation:</label></br>
                    <input class="box" type="text" name="father_occupation" value="<?php echo $father_occupation;?>" disabled>

                    </br><label for="mother_name">Mother's Name:</label></br>
                    <input class="box" type="text" name="mother_name" value="<?php echo $mother_name;?>" disabled>

                    </br><label for="mother_occupation">Mother Occupation:</label></br>
                    <input class="box" type="text" name="mother_occupation" value="<?php echo $mother_occupation;?>" disabled>

                    </br><label for="annual_gross_salary">Combined Annual Gross Salary:</label></br>
                    <input class="box" name="annual_gross_salary"value="<?php echo $annual_gross_salary;?>" disabled>
                    </br>
                </div>
            </br>
            </br>

                <div class="form-group">
                <h1>Scholar's Allowance Dependency Information</h1>
        
                    </br><label>Parent-Dependent?</label></br>
                    <input class="box"  name="parent_dependent" id="parent_dependent" value="<?php echo $parent_dependent;?>" disabled>
                    
                    </br><label>Relative-Dependent?</label></br>
                    <input class="box" name="relative_dependent" id="relative_dependent" value="<?php echo $relative_dependent;?>" disabled>
                    
            
                    </br><label>Employment-Dependent?</label></br>
                    <input class="box" name="employment_dependent" id="employment_dependent" value="<?php echo $employment_dependent;?>" disabled>
                    </br>
                </div>
            </div>

            <div class="update-right1">

                <div class="form-group">
                <h1>Scholar's Relative Information</h1><h2> (For Relative-Dependent Scholars)</h2>
                
                    </br><label for="relative_name">Relative Name:</label></br>
                    <input class="box" type="text" name="relative_name" value="<?php echo $relative_name;?>" disabled>

                    </br><label for="relative_occupation">Relative Occupation:</label></br>
                    <input class="box" type="text" name="relative_occupation" value="<?php echo $relative_occupation;?>" disabled>
            
                    </br><label for="rel_annual_gross_salary">Relative Annual Gross Salary:</label></br>
                    <input class="box"  name="rel_annual_gross_salary" value="<?php echo $rel_annual_gross_salary;?>" disabled>
                    </br>
                </div>
                </br>
                </br>

                <div class="form-group">
                <h1>Scholar's Employment Information</h1>
               
                    </br><label for="employ_status">Employment Status</label></br>
                    <input class="box" id="employ_status" name="employ_status" value="<?php echo $employ_status;?>" disabled>

                    </br><label for="occupation">Occupation:</label></br>
                    <input class="box" type="text" name="occupation" value="<?php echo $occupation;?>" disabled>

                    </br><label for="shift_length">Shift Length:</label></br>
                    <input class="box" id="shift_length" name="shift_length" value="<?php echo $shift_length;?>" disabled>
                    </select>
            
                    </br><label for="stud_annual_gross_salary">Scholar's Annual Gross Salary:</label></br>
                    <input class="box" name="stud_annual_gross_salary" value="<?php echo $stud_annual_gross_salary;?>" disabled>
                
                    </br><label for="employer_name">Employer Name:</label></br>
                    <input class="box" type="text" name="employer_name" value="<?php echo $employer_name;?>" disabled>

                    </br><label for="company_name">Company Name:</label></br>
                    <input class="box" type="text" name="company_name" value="<?php echo $company_name;?>" disabled>

                    </br><label for="work_address">Work Address:</label></br>
                    <input class="box" name="work_address" id="work_address" value="<?php echo $work_address;?>" disabled>
              
                    </br>
                </div>
                </br>
                </br>

                <div class="form-group">
                <h1>Scholar's Scholarship Information</h1>
                
                    </br><label for="scholarship_source">Scholarship Source:</label></br>
                    <input class="box" type="text" name="scholarship_source" value="<?php echo $scholarship_source;?>" disabled>
                    
                    </br><label for="scholarship_type">Scholarship Type:</label></br>
                    <input class="box" id="scholarship_type" name="scholarship_type"value="<?php echo $scholarship_type;?>" disabled>
                   
                    </br><label for="release_period">Release Period:</label></br>
                    <input class="box" id="release_period" name="release_period" value="<?php echo $release_period;?>" disabled>

                    </br><label for="period_start">Period Start:</label></br>
                    <input class="box" name="period_start" value="<?php echo $period_start;?>" disabled>

                    </br><label for="period_end">Period End:</label></br>
                    <input class="box"  name="period_end" value="<?php echo $period_end;?>" disabled>
                    </br>
                </div>
                </br>
                </br>

                <div class="form-group">
                <h1>Scholar's Other Grants Information (Optional)</h1>
                
                    </br><label for="other_grant_source">Other Grants Source:</label></br>
                    <input class="box" type="text" name="other_grant_source" value="<?php echo $other_grant_source;?>" disabled>
                    
                    </br><label for="other_grant_type">Other Grants Type:</label></br>
                    <input class="box" id="other_grant_type" name="other_grant_type" value="<?php echo $other_grant_type;?>" disabled>
                    
                    </br><label for="other_grant_relperiod">Other Grants Release Period:</label></br>
                    <input class="box" id="other_grant_relperiod" name="other_grant_relperiod" value="<?php echo $other_grant_relperiod;?>" disabled>

                    </br><label for="other_grant_start">Other Grants Period Start:</label></br>
                    <input class="box" name="other_grant_start" value="<?php echo $other_grant_start;?>" disabled>

                    </br><label for="other_grant_end">Other Grants Period End:</label></br>
                    <input class="box" name="other_grant_end" value="<?php echo $other_grant_end;?>" disabled>
                </div>
                    </br></br></br></br>
                    <button type="button" class="button5" onclick = "back()"><i class="fa fa-arrow-circle-left" style="font-size:18px"></i> To Dashboard</button>
                    <button type="button" class="button5" onclick = "insert()">Insert New <i class="fa fa-arrow-circle-right" style="font-size:18px"></i></button>
                </div>
            </form>
        
    </div>
    </section>  

    <?php @include 'footer.php'; ?>

    <script src="../js/script.js"></script>
</body>
</html>