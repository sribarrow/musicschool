<?php
include("includes/db.php");
session_start();

    include('header.php');
?>  

<body>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <?php
        include('student/snavi.php')
    ?>
</nav>
<div class="jumbotron" id = "banner">
    <?php
        include('banner.php')
    ?>
</div>
<div class="container">               
  <ol class="breadcrumb">
    <li class="active"><a href="login.php">Login</a></li>       
  </ol>
    <div id="pagecontent"> 
        <div id="mesg">
        <?php
//                echo $_SESSION['username'];
//                echo $_SESSION['password'];
            ?>
        
        </div>
        <p>This is the student page</p>
</div>
    </div>

 <script src="assets/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
