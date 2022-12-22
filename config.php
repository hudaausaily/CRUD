<?php

    $hostName = "localhost";
    $dbname = "crud";
    $dbuser = "root";
    $dbPassword = "";
    
    $connect_db = mysqli_connect($hostName,$dbuser,$dbPassword,$dbname);


    // //check connection 
    // if(!$connect_db){
    //     echo("CONNECTION ERROR" . mysqli_connect_error());
    // }
    // else{
    //     echo("DataBase IS Connected");
    // }

    try {
        $connect_db= new PDO("mysql:host=$hostName;dbname=$dbname", $dbuser, $dbPassword);
        $connect_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<h4>DataBase is Connected successfully.</h4>";
      } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
      }
    