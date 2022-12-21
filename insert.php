<?php

    require_once("config.php");

    try
    {
        // Taking all 5 values from the form data(input)
        $Full_Name =  $_REQUEST['Full_Name'];
        $Address = $_REQUEST['Address'];
        $Salary =  $_REQUEST['Salary'];

        $sql = "INSERT INTO employees (Id, Full_Name, Address, Salary) VALUES ('0', '$Full_Name' ,'$Address','$Salary')";

        $connect_db->exec($sql);
        echo "<h3>data stored in a database successfully.</h3>";
        }
        catch(PDOException $e){
            echo "ERROR: Hush! Sorry. " ;
        }
        
        // Close connection
        $connect_db = null;