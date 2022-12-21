<?php
include_once 'config.php';
// Connect to the database
$connect_db = mysqli_connect('localhost', 'root', ' ', 'crud');

// Check the connection
if (!$connect_db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set the variables for the UPDATE statement
$id = $_POST['id'];
$name = $_POST['Full_Name'];
$address= $_POST['Address'];
$salary = $_POST['Salary'];

// Create the UPDATE statement
$sql = "UPDATE employees SET Full_Name='$name', Address='$address', Salary='$salary' WHERE id=$id";

// Execute the UPDATE statement
if (mysqli_query($connect_db, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($connect_db);
}

// Close the connection
mysqli_close($connect_db);

?>