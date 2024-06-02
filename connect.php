<?php
// session_start();
//initializing variables
$dbhost= "localhost";
$dbuser= "root";
$dbpass="";
$dbname="library";

//connect to the db 
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("failed to connect");
}
