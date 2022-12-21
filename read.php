<?php 
require_once('config.php');
$query='SELECT * FROM employees';
$stmt=$conn->prepare($query) ;
$stmt->execute();
$employees=$stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($employees);
echo "</pre>";

foreach($employees as $employee){
  print_r($employee['Salary']);
}

?>