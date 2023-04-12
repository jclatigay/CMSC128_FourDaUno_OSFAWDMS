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
   <title>Insert Form</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/home_style.css">
   
</head>
<body>

    <?php @include 'header.php'; ?>

    <section class="heading">
    <h3>INSERT NEW SCHOLAR FORM</h3>
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

    <section class="update-content1">
    <div class="update-container1">
            <form action="index_insert.php" method="post">
            <div class="update-left1">
                <div class="form-group">
                <h1>Scholar's Course Information</h1></br>
                    <label for="Student_ID">Student_ID:</label></br>
                    <input class="box"  type="number" name="Student_ID" placeholder="202XXXXXX" id="Student_ID" required>
                    </br><label for="college">College:</label></br>
                    <select class="box"  id="college" name="college" required>
                        <option value="" disabled selected hidden>--Select college--</option>
                        <option value="College of Arts and Communication">College of Arts and Communication</option>
                        <option value="College of Social Sciences">College of Social Sciences</option>
                        <option value="College of Science">College of Science</option>
                    </select>
                    </br><label for="course">Course</label></br>
                    <select class="box"  id="course" name="course" required>
                        <option value="" disabled selected hidden>--Select course--</option>
                        <option value="BA in Communication major in Journalism">[CAC] BA in Communication major in Journalism</option>
                        <option value="BA in Communication major in Speech Communication">[CAC] BA in Communication major in Speech Communication</option>
                        <option value="BA in Language and Literature (English)">[CAC] BA in Language and Literature (English)</option>
                        <option value="BA in Language and Literature (Filipino)">[CAC] BA in Language and Literature (Filipino)</option>
                        <option value="Bachelor of Fine Arts">[CAC] Bachelor of Fine Arts</option>
                        <option value="BS in Management Economics">[CSS] BS in Management Economics</option>
                        <option value="BA in Social Sciences major in Economics">[CSS] BA in Social Sciences major in Economics</option>
                        <option value="BA in Social Sciences major in Social Anthropology">[CSS] BA in Social Sciences major in Social Anthropology</option>
                        <option value="BA in Social Sciences major in History">[CSS] BA in Social Sciences major in History</option>
                        <option value="BS in Mathematics">[CS] BS in Mathematics</option>
                        <option value="BS in Computer Science">[CS] BS in Computer Science</option>
                        <option value="BS in Biology">[CS] BS in Biology</option>
                        <option value="BS in Physics">[CS] BS in Physics</option>
                    </select>

                    </br><label for="year_level">Year Level</label></br>
                    <select class="box" id="year_level" name="year_level" required>
                        <option class="box" value="" disabled selected hidden>--Select year level--</option>
                        <option value="1">First Years</option>
                        <option value="2">Second Years</option>
                        <option value="3">Third Years</option>
                        <option value="4">Fourth Years</option>
                        <option value="5 or more">Fifth and above Years</option>
                    </select>
                </br>
            </div>

            </br>
            </br>
            <div class="form-group">
                <h1>Scholar's Basic Information</h1>
                
                    </br><label for="last_name">Last Name:</label></br>
                    <input class="box"  type="text" name="last_name" placeholder="Enter Last Name" id="last_name" required>

                    </br><label for="given_name">Given Name:</label></br>
                    <input class="box" type="text" name="given_name" placeholder="Enter Given Name" id="given_name" required>

                    </br><label for="middle_name">Middle Name:</label></br>
                    <input class="box"  type="text" name="middle_name" placeholder="Enter Middle Name" id="middle_name" required>

                    </br><label for="sex">Sex by birth:</label></br>
                    <select class="box"  id="sex" name="sex" required>
                        <option value="" disabled selected hidden>--Select Sex--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                
                    </br><label for="birthdate">Birthday:</label></br>
                    <input class="box"  type="date" id="birthdate" name="birthdate" required>

                    </br><label for="citizenship">Citizenship by birth:</label></br>
                    <select class="box" id="citizenship" name="citizenship" required>
                        <option value="" disabled selected hidden>--Select Citizenship--</option>
                        <option value="Filipino">Filipino</option>
                        <option value="Non-Fillipino">Non-Filipino</option>
                    </select>

                    </br><label for="civil_status">Civil Status</label></br>
                    <select class="box" id="civil_status" name="civil_status" required>
                        <option value="" disabled selected hidden>--Select Civil Status--</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                    </select>

                    </br><label for="permanent_address">Permanent Address:</label></br>
                    <textarea class="box" rows="3" name="permanent_address" id="permanent_address" placeholder="Enter Permanent Address"  required></textarea>
                    </br><label for="present_address">Present Address:</label></br>
                    <textarea class="box"  rows="3" name="present_address" id="present_address" placeholder="Enter Present Address" required></textarea>

                    </br><label for="email_address">Email:</label></br>
                    <input class="box" type="email" name="email_address" placeholder="youremail@email.com" id="email_address" required>

                    </br><label for="mobile_number">Enter phone number:</label></br>
                    <input class="box" type="tel" id="mobile_number" name="mobile_number" placeholder="09xxxxxxx" pattern="[0-9]{11}" required>
                
                    </br>
                </div>
            </br>
            </br>

                <div class="form-group">
                <h1>Scholar's Parents Information</h1>
                    </br><label for="father_name">Father's Name:</label></br>
                    <input class="box" type="text" name="father_name" placeholder="Enter Father Name" id="father_name" required>

                    </br><label for="father_occupation">Father Occupation:</label></br>
                    <input class="box" type="text" name="father_occupation" placeholder="Enter Father Occupation" id="father_occupation" required>

                    </br><label for="mother_name">Mother's Name:</label></br>
                    <input class="box" type="text" name="mother_name" placeholder="Enter Mother Name" id="mother_name" required>
                    </br><label for="mother_occupation">Mother Occupation:</label></br>
                    <input class="box" type="text" name="mother_occupation" placeholder="Enter Mother Occupation" id="mother_occupation" required>

                    </br><label for="annual_gross_salary">Combined Annual Gross Salary:</label></br>
                    <input class="box" type="number" min="1" step="any" name="annual_gross_salary" placeholder="Enter Combined Annual Gross Salary" id="annual_gross_salary" required>

                    </br>
            </div>
            </br>
            </br>
                <div class="form-group">
                <h1>Scholar's Allowance Dependency Information</h1>
        
                    </br><label for="parent_dependent">Parent-Dependent?</label></br>
                    <input class="circle" type="radio" name="parent_dependent" id="parent_dependent" value="Yes" required><label> Yes</label></input>
                    <input class="circle" type="radio" name="parent_dependent" id="parent_dependent" value="No"><label> No</label></input>
           
                    </br><label for="relative_dependent">Relative-Dependent?</label></br>
                    <input class="circle" type="radio" name="relative_dependent" id="relative_dependent" value="Yes" required><label> Yes</label></input>
                    <input class="circle" type="radio" name="relative_dependent" id="relative_dependent" value="No"><label> No</label></input>
            
                    </br><label for="relative_dependent">Employment-Dependent?</label></br>
                    <input class="circle" type="radio" name="employment_dependent" id="employment_dependent" value="Yes" required><label> Yes</label></input>
                    <input class="circle" type="radio" name="employment_dependent" id="employment_dependent" value="No"><label> No</label></input>
                    </br>
                </div>
            </div>

            <div class="update-right1">

                <div class="form-group">
                <h1>Scholar's Relative Information</h1><h2> (For Relative-Dependent Scholars)</h2>
                
                    </br><label for="relative_name">Relative Name:</label></br>
                    <input class="box" type="text" name="relative_name" placeholder="Enter Relative Name" id="relative_name">

                    </br><label for="relative_occupation">Relative Occupation:</label></br>
                    <input class="box" type="text" name="relative_occupation" placeholder="Enter Relative Occupation" id="relative_occupation">
            
                    </br><label for="rel_annual_gross_salary">Relative Annual Gross Salary:</label></br>
                    <input class="box" type="number" min="1" step="any" name="rel_annual_gross_salary" placeholder="Enter Relative's Annual Gross Salary" id="rel_annual_gross_salary">
                    </br>
</div>
                </br>
                </br>

                <div class="form-group">
                <h1>Scholar's Employment Information</h1>
               
                    </br><label for="employ_status">Employment Status</label></br>
                    <select class="box" id="employ_status" name="employ_status" required>
                            <option value="" disabled selected hidden>--Select Employment Status--</option>
                            <option value="Employed">Employed</option>
                            <option value="Unemployed">Unemployed</option>
                    </select>
                    </br><label for="occupation">Occupation:</label></br>
                    <input class="box" type="text" name="occupation" placeholder="Enter Occupation (Student if Unemployed)" id="occupation" required>

                    </br><label for="shift_length">Shift Length:</label></br>
                    <select class="box" id="shift_length" name="shift_length" required>
                        <option value="" disabled selected hidden>--Select Shift Length--</option>
                        <option value="Part-time">Part-time</option>
                        <option value="Full-time">Full-time</option>
                    </select>
            
                    </br><label for="stud_annual_gross_salary">Scholar's Annual Gross Salary:</label></br>
                    <input class="box" type="number" min="0" step="any" name="stud_annual_gross_salary" placeholder="0 if Unemployed" id="stud_annual_gross_salary" required>
                
                    </br><label for="employer_name">Employer Name:</label></br>
                    <input class="box" type="text" name="employer_name" placeholder="Leave blank if unemployed" id="employer_name">
                    </br><label for="company_name">Company Name:</label></br>
                    <input class="box" type="text" name="company_name" placeholder="Leave blank if unemployed" id="company_name">

                    </br><label for="work_address">Work Address:</label></br>
                    <textarea class="box" rows="3" name="work_address" id="work_address" placeholder="Leave blank if unemployed"></textarea>
              
                    </br>
                </div>
                </br>
                </br>

                <div class="form-group">
                <h1>Scholar's Scholarship Information</h1>
                
                    </br><label for="scholarship_source">Scholarship Source:</label></br>
                    <input class="box" type="text" name="scholarship_source" placeholder="Scholarship Source Name" id="scholarship_source" required>
                    
                    </br><label for="scholarship_type">Scholarship Type:</label></br>
                    <select class="box" id="scholarship_type" name="scholarship_type" required>
                            <option value="" disabled selected hidden>--Select Scholarship Type--</option>
                            <option value="Government">Government</option>
                            <option value="Private">Private</option>
                    </select>
                   
                    </br><label for="release_period">Release Period:</label></br>
                    <select class="box" id="release_period" name="release_period" required>
                            <option value="" disabled selected hidden>--Select Release Period--</option>
                            <option value="Semestral">Semestral</option>
                            <option value="Annual">Annual</option>
                    </select>

                    </br><label for="period_start">Period Start:</label></br>
                    <input class="box" type="number" min="2010" step="any" name="period_start" placeholder="YYYY" id="period_start" required>

                    </br><label for="period_end">Period End:</label></br>
                    <input class="box" type="number" min="2010" step="any" name="period_end" placeholder="YYYY" id="period_end" required>
                    </br>
                </div>
                </br>
                </br>

                <div class="form-group">
                <h1>Scholar's Other Grants Information (Optional)</h1>
                
                    </br><label for="other_grant_source">Other Grants Source:</label></br>
                    <input class="box" type="text" name="other_grant_source" placeholder="Scholarship Source Name" id="other_grant_source">
                    
                    </br><label for="other_grant_type">Other Grants Type:</label></br>
                    <select class="box" id="other_grant_type" name="other_grant_type">
                            <option value="" disabled selected hidden>--Select Other Grants Type--</option>
                            <option value="Government">Government</option>
                            <option value="Private">Private</option>
                    </select>
                    
                    </br><label for="other_grant_relperiod">Other Grants Release Period:</label></br>
                    <select class="box" id="other_grant_relperiod" name="other_grant_relperiod">
                            <option value="" disabled selected hidden>--Select Other Grants Release Period--</option>
                            <option value="Semestral">Semestral</option>
                            <option value="Annual">Annual</option>
                    </select>
                    
                    </br><label for="other_grant_start">Other Grants Period Start:</label></br>
                    <input class="box" type="number" min="2010" step="any" name="other_grant_start" placeholder="YYYY" id="other_grant_start">

                    </br><label for="other_grant_end">Other Grants Period End:</label></br>
                    <input class="box" type="number" min="2010" step="any" name="other_grant_end" placeholder="YYYY" id="other_grant_end">
                    </div>
                    </br></br></br></br>
                    <button type="button" class="button5" onclick = "back()">Cancel</button>
                    <input type="reset" class="button5" value="Reset">
                    <input type="submit"  name ="submit" class="button5" value="Submit">
                </div>
            </form>
        
    </div>
    </section>  
   
    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>