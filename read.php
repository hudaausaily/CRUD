<?php
// Include the config file
require_once 'config.php';

// Prepare a SELECT statement
$sql = "SELECT Id, Full_Name, Address, Salary FROM employees";
$stmt = $connect_db->prepare($sql);

// Execute the statement
$stmt->execute();

// Fetch the results
$employees = $stmt->fetchAll();

// Close the statement
$stmt->closeCursor();

// Loop through the employees and display them in a table
echo '<table class="table table-striped table-dark">';
echo '<tr><th scope="col">ID</th><th scope="col">Full Name</th><th scope="col">Address</th><th>Salary</th scope="col"><th>Actions</th></tr>';
foreach ($employees as $employee) {
  echo '<tr>';
  echo '<td>' . $employee['Id'] . '</td>';
  echo '<td>' . $employee['Full_Name'] . '</td>';
  echo '<td>' . $employee['Address'] . '</td>';
  echo '<td>' . $employee['Salary'] . '</td>';
  echo '<td>
          <a href="#" style="color:white; margin-right: 15px;"><i class="material-icons">remove_red_eye</i></a>
          <a href="#" style="color:white; margin-right: 15px;"><i class="material-icons">mode_edit</i></a>
          <a href="./delete.php" style="color:white"><i class="material-icons" >delete</i></a>
        </td>';
  echo '<tr>';
  // Add buttons for viewing, updating, and deleting the employee
  // echo '<a href="read.php?id=' . $employee['Id'] . '">View</a> ';
  // echo '<a href="update.php?id=' . $employee['Id'];
}