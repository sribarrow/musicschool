<?php
session_start();
//echo basename("/");
 //$homedir = "/";

include("../includes/db.php");


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
    <li class="active"><a href="announcements.php">Announcements</a></li>       
  </ol>
    <div id="pagecontent"> 
        <div id="mesg">            
        
        </div>
        <div class="col-md-offset-3 col-md-5">
        <div><ul class="list-inline">
            <li><a href="#">Add Announcements</a></li>
            <li><a href="#">View Announcements</a></li>
            </ul>
            </div> 
        <hr>
        <form>
        <div class="form-group">            
        <label for="heading">Heading *:</label>
            <input type="text" class="form-control" id="heading">
        </div>   
          <div class="form-group">            
        <label for="description">Annoucement *:</label>
              <textarea cols="10" rows="5" class="form-control" id="description"></textarea>
        </div>
        <div class="form-group"> 
            <label for="dispuntil">Display Until *:</label>
            <input type="text" id="dispuntil" name="dispuntil" placeholder="dd/mm/yyyy">
            </div>
         <div class="form-group">           
            <button type="submit" class="btn btn-success">Add</button>
        </div>  
        </form>
        </div>
</div>
    </div>

 <?php
        include($homedir . 'footer.php');
?>
</body>
</html>
