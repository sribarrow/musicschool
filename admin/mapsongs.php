<?php
session_start();
include("../includes/db.php");
doDB();
$display = "";
    include('../header.php');

if($_POST){
    echo $_POST['title'] . " :title <br />";
    echo $_POST['description'] . " :description <br />";
    echo $_POST['type'] . " :type <br />";
    echo $_POST['level'] . " :level <br />";
    echo $_POST['lyrics'] . " :lyrics <br />";
    echo $_POST['audio'] . " :audio <br />";
    echo $_POST['links'] . " :links <br />";
    
    /* 1. check if the title exists in the database*/
            $query="insert into schedule(schedule_info) values('" . $schedule ."')";
        $result= mysqli_query($mysqli,$query);
   
        if($result)
        {
//            header("location:viewschedule.php");
	      /* 2. if it does not, add information to the file */
            $display = "<p class='success'>Successfully added.<p>";
        }
        else{
            /* 2. if it does raise error */
            $display ="<p class='danger'>" . mysqli_error($mysqli) . ".<p>";
        }
    
    
}

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
    <li class="active"><a href="mapsongs.php">Map Songs to File</a></li>       
  </ol>
    <div id="pagecontent"> 
        <div id="mesg">            
        
        </div>
        <div class="col-md-offset-3 col-md-5">
            <div><ul class="list-inline">
            <li><a href="#">Add Titles</a></li>
            <li><a href="#">View Titles</a></li>
            </ul>
            </div> 
        <hr>
        <form method="post" name="maptosongs">
        <div class="form-group">            
        <label for="title">Title *:</label>
            <input type="text" id="title" name="title" placeholder="Raagam - Song Title - Taalam" class="form-control" required>
        </div>   
          <div class="form-group">            
        <label for="description">Description *:</label>
              <textarea cols="10" rows="5" class="form-control" id="description" name="description" placeholder="Composed By, Raagam, Taalam, Description."></textarea>
        </div>
        <div class="form-group"> 
            <label for="level">Type*:</label>
            <select class="form-control" id="type" name="type">
              <option value="swarajathi">Swarajathi</option>
              <option value="geetham">Geetham</option>
              <option value="varnam">Varnam</option>
              <option value="keerthana">Keerthana</option>
            </select>
        </div>
        <div class="form-group"> 
            <label for="level">Level *:</label>
            <select class="form-control" id="level" name="level">
              <option value="beginner">Beginner</option>
              <option value="intermediate">Intermediate</option>
              <option value="advanced">Advanced</option>
              <option value="masters">Masters</option>
            </select>
        </div>
        <div class="form-group"> 
            <label for="lyrics">Lyrics (Only jpeg, jpg, gif, png, pdf):</label>
            <select class="form-control" id="lyrics" name="lyrics">
              <option value="1">Select a File</option> 
                <?php
            $dir = "../uploads/";              
            
            $lyrics=glob($dir . "*.*" );
    
            foreach($lyrics as $file){
                $fileinfo=pathinfo($file);
                $extension= strtolower($fileinfo['extension']);
                if($extension == "png" || $extension == "pdf"  || $extension == "gif" ||  $extension == "jpeg" ||  $extension == "jpg" ){
                    echo "<option >" . $fileinfo['basename']. "</option>";
                }
            }
            ?>
            </select>
        </div>
         <div class="form-group"> 
            <label for="audio">Audio (Only mp3, mp4):</label>
            <select class="form-control" id="audio" name="audio">
              <option value="1">Select an audio</option>
                <?php 
                foreach($lyrics as $file){
                $fileinfo=pathinfo($file);
                $extension= strtolower($fileinfo['extension']);
                if($extension == "mp3" || $extension == "mp4" ){
                    echo "<option >" . $fileinfo['basename']. "</option>";
                }
            }
                ?>
            </select>
        </div>
        <div class="form-group"> 
            <label for="location">Link :</label>
           <input type="text" class="form-control" id="links" name="links" placeholder="You tube, External reference links">
        </div>
         <div class="form-group">           
            <button type="submit" class="btn btn-success">Map Songs to File</button>
        </div>  
        </form>
            </div>
</div>
    </div>

 <?php
        include('../footer.php');
?>
</body>
</html>
