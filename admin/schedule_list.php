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
    
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
	//echo "";
        
        $query="delete from schedule where id=" . $id;
        $result= mysqli_query($mysqli,$query);
        //echo $query;
        if($result)
        {
//            header("location:viewschedule.php");
            $display = "<p class='success'>Successfully Deleted.<p>";
        }
        else{
        	$display = "";
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
        <p><em> Classes last for 50 mins. Times are EST (Eastern Standard Time).</em></p>
        <?php
             $query="select id, schedule_info from schedule";
                $result= mysqli_query($mysqli,$query);
//                echo $query;
                if($result)
                {
                    echo "<table class='table table-bordered'><tr><td>Class Schedule</td><td class='text-center'>Delete</td></tr>";
                    while($record = mysqli_fetch_array($result)){
                        {
                            echo "<tr><td >".$record['schedule_info']."</td>";
                           // echo "<td class='text-center'><a href='edit?id=".$record['id']."'><span class='glyphicon glyphicon-edit'></span></a></td>";
                            echo "<td class='text-center'><a href='schedule_list.php?id=".$record['id']."&opt=D'> <i class='icon ion-ios-trash'></i></a></td></tr>";
                        }
                    }
                    echo "</table>";
                }
           
        ?>
        

        </div>
</div>
    </div>

 <?php
        include('../footer.php');
?>
   
</body>
</html>
