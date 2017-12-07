<?php
    $homedir ="/";
?>
<div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo $homedir?>index.php" class="navbar-brand">Carnatic Music School</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
<!--                <li class="current"><a href="<?php echo $homedir?>index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>-->
                <li><a href="<?php echo $homedir?>admin/enrol.php"><span class="glyphicon glyphicon-edit"></span>&nbsp;Enrol/Register</a></li>
                <li><a href="<?php echo $homedir?>admin/uploadFile.php"><span class="glyphicon glyphicon-upload"></span>&nbsp;Upload File</a></li>
                <li><a href="<?php echo $homedir?>admin/mapsongs.php"><span class="glyphicon glyphicon-upload"></span>&nbsp;Map songs to File</a></li>
                <li><a href="<?php echo $homedir?>admin/announcements.php"><span class="glyphicon glyphicon-blackboard"></span>&nbsp;Announcements</a></li>
            <li><a href="<?php echo $homedir?>admin/schedule.php"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Scheduler</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo $homedir?>logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Welcome Admin</a></li>
            </ul>
        </div>
    </div>