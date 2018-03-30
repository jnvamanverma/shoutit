<?php
//Connect to MySQL
$con = mysqli_connect("localhost", "aman", "12345", "shoutit");

//Test Connection
if(mysqli_connect_errno()){
    echo 'failed to connect to MySQL: '.$mysqli_connect_error();
}
