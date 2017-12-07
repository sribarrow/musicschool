<?php
include("./includes/db.php");
session_start();

    include('./header.php');
?>  

<body>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <?php
        include('./admin/anavi.php')
    ?>
</nav>
<div class="jumbotron" id = "banner">
    <?php
        include('./banner.php')
    ?>
</div>
<div class="container">               
  <ol class="breadcrumb">
    <li class="active"><a href="./admin.php">Admin</a></li>       
  </ol>
    <div id="pagecontent"> 
        <div id="mesg">
            
        
        </div>
        
        <p>This is the admin page</p>
</div>
    </div>

   <?php
        include('footer.php');
?>
    
</body>
</html>
