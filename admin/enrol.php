<?php
session_start();
include("../includes/db.php");
doDB();
$display = "";
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
    <li class="active"><a href="enrol.php">Enrol/Register</a></li>       
  </ol>
    <div id="pagecontent"> 
        <div id="mesg">            
        
        </div>
        <div class="col-md-offset-3 col-md-5">
         <div><ul class="list-inline">
            <li><a href="#">Register Users</a></li>
            <li><a href="#">View Users</a></li>
            </ul>
            </div> 
        <hr>
        <form name="enrol" method="post">
        <div class="form-group">            
        <label for="email">Email *:</label>
            <input type="email" class="form-control" id="email">
        </div>    
        <div class="form-group"> 
            <label for="level">Level *:</label>
            <select class="form-control" id="level">
              <option value="1">Beginner</option>
              <option value="2">Intermediate</option>
              <option value="3">Advanced</option>
              <option value="4">Masters</option>
            </select>
        </div>
        <div class="form-group"> 
            <label for="method">Method *:</label>
            <select class="form-control" id="method">
              <option value="1">Skype</option>
              <option value="2">In-class</option>
            </select>
        </div>
        <div class="form-group"> 
            <label for="level">Schedule *:</label>
            <select class="form-control" id="level">
              <option value="1">Monday 15:00 - 15:50</option>
              <option value="2">Monday 16:00 - 16:50</option>
              <option value="3">Monday 18:00 - 18:50</option>  
                <option value="1">Tuesday 15:00 - 15:50</option>
              <option value="2">Tuesday 16:00 - 16:50</option>
              <option value="3">Tuesday 18:00 - 18:50</option>  
                <option value="1">Wednesday 15:00 - 15:50</option>
              <option value="2">Wednesday 16:00 - 16:50</option>
              <option value="3">Wednesday 18:00 - 18:50</option>  
                <option value="1">Thursday 15:00 - 15:50</option>
              <option value="2">Thursday 16:00 - 16:50</option>
              <option value="3">Thursday 18:00 - 18:50</option>  
                <option value="1">Friday 15:00 - 15:50</option>
              <option value="2">Friday 16:00 - 16:50</option>
              <option value="3">Friday 18:00 - 18:50</option>
            </select>
        </div>
        <div class="form-inline"> 
            <label for="location">Location *:</label>
            <select class="form-control" id="location">
              <option value="1">UK</option>
              <option value="2">Canada</option>
              <option value="2">USA</option>
              <option value="2">Other</option>                
            </select>
           <input type="text" class="form-control" id="other" placeholder="If, Other, type country here">
        </div>
        <div class="form-group">            
            <label for="phone">Phone (Optional)</label>
            <input type="tel" class="form-control" id="phone" placeholder="type country code and phone number.">
        </div>  
         <div class="form-group">           
            <button type="submit" class="btn btn-success">Enrol/Register</button>
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
