<?php
	$homedir = "./";
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
            <a href="<?php echo $homedir ?>index.php" class="navbar-brand">Carnatic Music School</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="current"><a href="<?php echo $homedir ?>index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
                <li><a href="<?php echo $homedir ?>guru.php"><img src="img/buddhist-yoga-pose.png" alt="yogi Icon" style="width:17px;height:17px;margin-bottom:5px;">&nbsp;Sri Guru</a></li>
                <li><a href="<?php echo $homedir ?>aboutveena.php"><img src="img/veena%20(1).png" alt="yogi Icon" style="width:17px;height:17px;margin-bottom:5px;">&nbsp;About Veena</a></li>
                <li><a href="<?php echo $homedir ?>contact.php">&nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Contact Me</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;Information
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
<!--                      <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;News</a></li>-->
                      <li><a href="<?php echo $homedir ?>info.php"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Lesson Structure</a></li>
                      <li><a href="<?php echo $homedir ?>fees.php"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Fees</a></li>
                    </ul>
                  </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo $homedir ?>login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login</a></li>
            </ul>
        </div>
    </div>