<?php 
require_once "config.php";


// if (isset($_GET['del'])) {
// 	$id = $_GET['del'];
// 	mysqli_query($connect_db, "DELETE FROM info WHERE Id=$Id");
// 	$_SESSION['message'] = "Address deleted!"; 
// }
// else{
// 	echo 
// }

// if ($_SERVER["REQUEST_METHOD"] === "POST"){
// 	$del_num = (array_keys($_POST,NULL)[0]);
// 	$sql ="DELETE FROM employees WHERE Id = $del_num";
// 	$connect_db->query($sql);
// }

if ($_SERVER["REQUEST_METHOD"] === "POST"){
	$sql = "DELETE FROM table_name WHERE id = :id";
	$stmt = $connect_db->prepare($sql);
	$stmt->bindParam(':id', $id);
	$stmt->execute();
	echo("<a href='./index.php'>HOME</a>");

}

// try {
		
// 	require_once "config.php";

// 	// Delete a row from the table
// 	$sql = "DELETE FROM employees WHERE Id = $employee[Id]";
// 	$stmt = $connect_db->prepare($sql);
// 	$stmt->bindParam(':id', $Id);
// 	$stmt->execute();
// }
// catch(PDOException $e) {
// 	echo $e->getMessage();
// }

