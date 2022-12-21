<?php

    require_once("config.php");

    if(isset($_POST['save']))
    {
        // Taking all 5 values from the form data(input)
        $Name =  $_REQUEST['Name'];
        $Address = $_REQUEST['Address'];
        $Salary =  $_REQUEST['Salary'];

        $sql = "INSERT INTO employees (id, Name, Address, Salary) VALUES (NULL, '$Name' ,'$Address','$Salary')";

        if(mysqli_query($connect_db, $sql)){
            echo "<h3>data stored in a database successfully.</h3>";

        } else{
            echo "ERROR: Hush! Sorry. " ;
        }
        
        // Close connection
        mysqli_close($connect_db);
    }