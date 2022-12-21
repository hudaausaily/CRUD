<?php
    $hostName = "localhost";
    $dbname = "crud";
    $dbuser = "root";
    $dbPassword = "";
    
    $connect_db = mysqli_connect($hostName,$dbuser,$dbPassword,$dbname);


    // check connection 
    if(!$connect_db){
        echo("CONNECTION ERROR" . mysqli_connect_error());
    }
    else{
        echo("DataBase IS Connected");
    }