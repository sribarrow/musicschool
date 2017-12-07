<?php
include("includes/db.php");
ob_start();
$mesg = $error = "";
if($_POST)
{
doDB();
// username and password sent from Form
$username=mysqli_real_escape_string($mysqli,$_POST['username']); 
$password=mysqli_real_escape_string($mysqli,$_POST['password']); 
echo $username;
echo $password;
//$password=md5($password); // Encrypted Password
$sql="SELECT id, role, level FROM admin WHERE email='$username' and passcode=PASSWORD('$password')";
$result=mysqli_query($mysqli,$sql);
$count=mysqli_num_rows($result);

    // If result matched $username and $password, table row must be 1 row
    if($count==1)
    {
   
        while($record = mysqli_fetch_array($result)){
            $id=$record['id'];
            $role=$record['role'];
            $level=$record['level'];
        }
       if($role == 0){
           $mesg = $username . ": You are a teacher.";
//           session_register("myusername");
//           session_register("mypassword"); 
           $_SESSION['username']=$username;
           $_SESSION['password']=$password;
            header("location: admin.php");
            
       }
        else{
             $mesg = $username . ": You are a student.";
            header("location: student.php");
        }
    }
    else 
    {
        $error="Your Login Name or Password is invalid";
    }
}

    include('header.php');
?>  

<body>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <?php
        include('navi.php')
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
                echo "<p class='btn-success'>" . $mesg . "</p>";
                echo "<p class='btn-danger'>" . $error . "</p>";
            ?>
        
        </div>
        <div class="col-md-offset-3 col-md-6" >
          <form class="form-signin" name="form1" method="post" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="username" id="username" type="text" class="form-control" placeholder="Email" autofocus>
        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        <div id="message"></div>
      </form></div>
</div>
    </div>

 <script src="assets/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    <?php
        ob_end_flush();
    ?>
</body>
</html>
