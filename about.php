<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/home_style.css">
   
</head>
<body>

    <?php @include 'header.php'; ?>

    <section class="heading">
    <h3>a b o u t</h3>
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
                <img class="oblation" src="images/oblation.png"/>
            </div>

            <div class="update-right">

                <div class="about-container">
                    <img class="up_name" src="images/name.png"/>
                    <h1 class="about">ABOUT RS SCHOLARSHIP</h1>
                    <p align="justify" class="about-content">RS Student Scholarship (RSS) 
                        is a semester-long project assigned to the group Guaranthreed 
                        in CMSC 127 RS 2022 of UP Baguio. RSS has a database of UP Baguio students 
                        and their scholarships (ex. DOST, CHED) awarded to these students including 
                        personal scholars (alumni/faculty, sponsor student/students).
                    </p>
                    <div class="credit1">&copy; copyright @ <?php echo date('Y'); ?> by <b class="guaranthreed">RS Guaranthreed </b> </div>
                </div>
            </div>

            </br></br></br>
            <section class="home-contact">
                <div class="content">
                    <h3>have any questions?</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio officia aliquam quis saepe? Quia, libero.</p>
                    <a href="about.php" class="btn">contact us</a>
                </div>
            </section>
        </div>

    </section>


    <?php @include 'footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>