<?php
// Include the config file
include_once 'config.php';

// Prepare a SELECT statement
$sql = "SELECT id, Full_Name, Address, Salary FROM employees";
$stmt = $connect_db->prepare($sql);

// Execute the statement
$stmt->execute();

// Fetch the results
$employees = $stmt->fetchAll();

// Close the statement
$stmt->closeCursor();

// Loop through the employees and display them in a table
echo '<table>';
echo '<tr><th>ID</th><th>Full Name</th><th>Address</th><th>Salary</th><th>Actions</th></tr>';
foreach ($employees as $employee) {
  echo '<tr>';
  echo '<td>' . $employee['Id'] . '</td>';
  echo '<td>' . $employee['Full_Name'] . '</td>';
  echo '<td>' . $employee['Address'] . '</td>';
  echo '<td>' . $employee['Salary'] . '</td>';
  echo '<td>';
  // Add buttons for viewing, updating, and deleting the employee
  echo '<a href="read.php?id=' . $employee['Id'] . '">View</a> ';
  echo '<a href="update.php?id=' . $employee['Id'];
}