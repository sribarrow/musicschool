<?php
include("./includes/db.php");
session_start();

    include('./header.php');
?>  

<body>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <?php
        include('./navi.php')
    ?>
</nav>
<div class="jumbotron" id = "banner">
    <?php
        include('./banner.php')
    ?>
</div>
<div class="container">               
  <ol class="breadcrumb">
    <li class="active"><a href="./fees.php">Fees</a></li>       
  </ol>
    <div id="pagecontent"> 
        <div id="mesg">
            
        
        </div>
        <p>
        <dl class="dl-vertical">
                        <dt>LIVE ONLINE VEENA  LESSONS (Skype Carnatic classes from basic to advanced level)</dt>
                        <dd>Start learning a new instrument or refresh your veena lessons this Year! Classes are conducted during certain Weekdays and Saturdays and all classes are taught on One on One basis. Lessons are customized to suit the student’s age, level, interest and culture and also prepare students for grade exams through Annamallai University. </dd></p>
                       <p> <dt>FEE STRUCTURE</dt>
                        <dd>$150 per month for 4 classes (50 minutes each).</dd>
                    </dl></p>
             
</div>
    </div>

    <script src="./assets/js/jquery.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




                    