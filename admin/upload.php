<?php
if(isset($_POST['submit'])){
    if(count($_FILES['upload']['name']) > 0){
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
             //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
//            echo $tmpFilePath;
            //Make sure we have a filepath
            if($tmpFilePath != ""){
                //save the filename
                $shortname = $_FILES['upload']['name'][$i];

                //save the url and the file
//                $filePath = "/uploaded/" . date('d-m-Y-H-i-s').'-'.$_FILES['upload']['name'][$i];
                $filePath = "../uploads/" . $_FILES['upload']['name'][$i];
                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $filePath)) {
                    $files[]    = $shortname;
                    //insert into db 
                    //use $shortname for the filename
                    //use $filePath for the relative url to the file
                }
            }
        }
    }
    $count=0;
     //show success message
//    echo "<h1>Uploaded:</h1>";    
    if(is_array($files)){
//        echo "<ul>";
        foreach($files as $file){
//            echo "<li>$file</li>";
            $count.=$count;
        }
//        echo "</ul>";
    }
    echo $count;
    
    header("location: uploadFile.php");
}
?>