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
  echo '<td scope="row">' . $employee['Id'] . '</td>';
  echo '<td scope="row">' . $employee['Full_Name'] . '</td>';
  echo '<td scope="row">' . $employee['Address'] . '</td>';
  echo '<td scope="row">' . $employee['Salary'] . '</td>';
  echo '<td>
            <form id="delete" action="" method="GET" >
              <input class="material-icons" type="submit" name="$employee[Id]" value="remove_red_eye">
            </form>
            <form id="delete" action="" method="GET" >
              <input class="material-icons" type="submit" name="$employee[Id]" value="mode_edit">
            </form>
            <form id="delete" action="delete.php" method="POST" >
              <input class="material-icons" type="submit" name="$employee[Id]" value="delete">
            </form>
        </td>';
  echo '<tr>';
  
}