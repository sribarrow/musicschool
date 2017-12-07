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
    <li class="active"><a href="enrol.php">Scheduler</a></li>       
  </ol>
    <?php
    
    if(isset($_POST['submit']))
    {
	$stime=$_POST['schedfrom'];
	//echo $stime . "<br />";
        $slen = strlen($stime);
        if($slen<5){
	        	//echo $slen;
	        	$pos = strpos($stime,":");
	        	if($pos==0){ 
	        		if($slen == 2){
	        			$stime=$stime . ":" . "00";
	        		}       		
	        		else{
	        			$stime="0" . $stime . ":" . "00";
	        		}
	        	}
	        	elseif($pos<2){
				$stime="0" . $stime;
			}
			else{
				$stime="00" . ":" . $stime;
			}
        	}
        //echo $stime . "<br />";
	$weekday=mysqli_real_escape_string($mysqli,$_POST['weekdays']);
        $timeFrom=mysqli_real_escape_string($mysqli,$stime);
        //echo $timeFrom . "<br />";
        $hour=substr($timeFrom,0,strrpos($timeFrom, ":"));        
        $minute=substr($timeFrom,strrpos($timeFrom, ":")+1,2);
        $tempMinute=(int) $minute + 50;
        $tempHour = ($tempMinute/60);
        
        if($tempHour > 0){
            $newHour = (int) $hour + (int) $tempHour;
            $newMinute = (int) $tempMinute%60;             
        }
        else{
            $newHour = (int) $hour;
            $newMinute=$tempMinute; 
        }
        echo $newMinute;
        if($newMinute==0){
        	$newMinute="00";
        }

         $schedule = $weekday . " " . $timeFrom . " - " . $newHour . ":" . $newMinute ;
        
        $query="insert into schedule(schedule_info) values('" . $schedule ."')";
        $result= mysqli_query($mysqli,$query);
        echo  date('d-m-Y H:i', strtotime($stime));
        // gmdate("H:i", strtotime($stime));
        if($result)
        {
//            header("location:viewschedule.php");
            $display = "<p class='success'>Successfully added.<p>";
        }
        else{
            $display ="<p class='danger'>" . mysqli_error($mysqli) . ".<p>";
        }
       
    }
           
        ?>
    <div id="pagecontent"> 
        <div id="mesg">            
            <?php
                echo $display;
            ?>
        </div>
        
        <div class="col-md-offset-3 col-md-5">
                    
                    <div><ul class="list-inline">
            <li><a href="schedule.php">Add Schedule</a></li>
            <li><a href="schedule_list.php">View Schedules</a></li>
            </ul>
            </div> 
        <hr>
            
        <form name="schedule" method="post">
        <div class="form-inline"> 
            <label for="weekdays">Weekdays :</label>
            <select class="form-control" id="weekdays" name="weekdays">
              <option value="Monday">Monday</option>
              <option value="Tuesday">Tuesday</option>
              <option value="Wednesday">Wednesday</option>
              <option value="Thursday">Thursday</option>
              <option value="Friday">Friday</option>
              <option value="Saturday">Saturday</option>
            </select>
            
            <label for="schedfrom">Start Time :</label>
            <input type="text" id="schedfrom" name="schedfrom" placeholder="hh:mm" size="6">
        </div>
         <div class="form-group">           
            <button type="submit" class="btn btn-success" id="submit" name="submit">Add</button>
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
