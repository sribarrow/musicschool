<?php

include("../includes/db.php");
session_start();

    include('../header.php');
?>  

<body>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <?php
        include('../admin/anavi.php')
    ?>
</nav>
<div class="jumbotron" id = "banner">
    <?php
        include('../banner.php')
    ?>
</div>
<div class="container">               
  <ol class="breadcrumb">
    <li class="active"><a href="../uploadFile.php">Upload File</a></li>       
  </ol>
    <div id="pagecontent"> 
        <div id="mesg">            
            <?php
              if($_POST){
                  echo $_POST['count'];
              }
            ?>
        </div>
        
        <div class="col-md-offset-1 col-md-6">
            <form action="upload.php" method="post" enctype="multipart/form-data" class="form-signin">
                <label for='upload'>Add Attachments:</label>
            <input  class="form-control"  id='upload' name="upload[]" type="file" multiple="multiple" />
                <input class="btn btn-success" type="submit" name="submit" value="Upload File">
            </form>
<!--             <p></p>-->
        </div>
    </div>
</div>

    <script src="../assets/js/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
