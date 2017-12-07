<?php
//function to connect to database
function doDB(){
    global $mysqli;
    //    connect to database
    //$pwd = "password";
    $pwd="VS_lal1mah@";
    //echo $pwd;
    $mysqli = new mysqli("localhost", "musicsch_root", $pwd , "musicsch_musicschool");
    //if connection fails stop script
    if(mysqli_connect_errno()){
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    } 
}
