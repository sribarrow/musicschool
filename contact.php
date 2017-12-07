<?php
 	session_start();
    include('header.php');
    

if(isset($_POST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		
	}
//    else{// Captcha verification is Correct. Final Code Execute here!		
//		$msg="<span style='color:green'>The Validation code has been matched.</span>";		
//	}
}	
?>
  <style>
                html, body{
                    height:100%;   
                }
                
               #map{
                    min-height: 600px;   
/*                    width: 500px;*/
                   border: 1px solid #fff;
                   padding: 0 5px 0 0;
                   text-align: center;
                }
    </style>
    <script type='text/javascript'>
        function refreshCaptcha(){
            var img = document.images['captchaimg'];
            img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }
    </script>
</head>
<body>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
   <?php
        include('navi.php');
    ?>
</nav>
<div class="jumbotron" id = "banner">
     <?php
        include('banner.php');
    ?>
</div>
<div class="container">               
  <ol class="breadcrumb">
    <li class="active"><a href="contact.php">Contact Me</a></li>       
  </ol>
    <div id="pagecontent"> 
        <div id="map" class="col-md-6">
        </div>
        <?php
                    // get user input
                    if(isset($_POST["name"])){
                    $name=$_POST["name"];
                    $email=$_POST["email"];
                    $mesg=$_POST["mesg"];
                    $errors=null;
                        $resultMesg=null;
                    //error messages
                    $missingName = '<p><strong>Name cannot be blank!</strong></p>';
                    $missingEmail = '<p><strong>Email Address cannot be blank!</strong></p>';
                    $invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>';
                    $missingMesg = '<p><strong>Message cannot be blank!</strong></p>';
                    if($_POST["Submit"]){
                        // validate $name
                        if(!$name){
                            $errors .= $missingName;
                        }else{
                            $name=filter_var($name,FILTER_SANITIZE_STRING);
                        } 
                        // validate email
                        if(!$email){
                            $errors .= $missingEmail;
                        }else{
                            $email=filter_var($email,FILTER_SANITIZE_EMAIL);
                            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                $errors .= $invalidEmail;
                            }
                        }
                         if(!$mesg){
                            $errors .= $missingMesg . $msg ;
                        }else{
                            $mesg=filter_var($mesg,FILTER_SANITIZE_STRING);
                        } 
                        if($errors){
                            $resultMesg = '<div class="alert alert-danger">' . $errors . '</div>';
                            
                        }else{
                            $resultMesg = '<div class="alert alert-success">Thanks for your Enquiry. We will respond shortly.</div>';
                        }
                        
                        //print result
                        
                            echo $resultMesg;
                       
                        
                    }  // submit check
                    }
                ?>
        <div id="enquiry" class="col-md-6">
            <h4 class="page-header text-center">Contact Form</h4>                
                 <form action="contact.php" method="post" name="form1" id="form1" >
                     <label for="name">Full Name: </label><input type="text" name="name" id="name" placeholder="ForeName Surname" class="form-control" value="<?php if(isset($_POST["name"])){echo $_POST["name"];} ?>">
                     <label for="email">Email: </label><input type="text" name="email" id="email" placeholder="somename@example.com" class="form-control" value="<?php if(isset($_POST["email"])){echo $_POST["email"];} ?>">
                     <label for="mesg">Message: </label>
                     <textarea name="mesg" id="mesg" class="form-control" rows="4" value="<?php if(isset($_POST["mesg"])){echo $_POST["mesg"];} ?>"></textarea >
                      <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
                        <tr>
                          <td align="right" valign="top"> Validation code:</td>
                          <td><img src="./phpcaptcha/captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
                            <label for='message'>Enter the code above here :</label>
                            <br>
                            <input id="captcha_code" name="captcha_code" type="text">
                            <br>
                            Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
                        </tr>
                        <tr>
                          <td> </td>
                          <td><input name="Submit" type="submit" onclick="return validate();" value="Send Message" class="btn btn-success btn-lg"></td>
                        </tr>
                      </table>
                </form>  <p>&nbsp;</p>
        </div>
</div>
   <p></p>
     <?php
        include('footer.php');
    ?>
         
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5XThpKGR5-hojN4ioD7m7IDE51BdPIZc&sensor=false"></script>
 <script>        
            //set map options
        
            var myLatLng = {lat: 43.56, lng: -79.60};
        
            var mapOptions = {
                center:myLatLng,
                zoom: 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
        
        //create map
        var map= new google.maps.Map(document.getElementById('map'), mapOptions);
        
        //setting the mapTypeId upon construction
//        map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
       
        var marker1Options = {
            position: myLatLng,
            map: map,
            title: "Veena Saraswathi Music School",
//            draggable: true,
            animation: google.maps.Animation.DROP
        };
        var marker1 = new google.maps.Marker(marker1Options);

      </script>
   
</body>
</html>
