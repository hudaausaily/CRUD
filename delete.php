
<?php 

// if (isset($_GET['del'])) {
// 	$id = $_GET['del'];
// 	mysqli_query($connect_db, "DELETE FROM info WHERE Id=$Id");
// 	$_SESSION['message'] = "Address deleted!"; 
// }
// else{
// 	echo 
// }


try {
		
	require_once "config.php";

	// Delete a row from the table
	$sql = "DELETE FROM employees WHERE Id = Id";
	$stmt = $connect_db->prepare($sql);
	$stmt->bindParam('Id', $Id);
	$stmt->execute();
	echo("<a href='./index.php'>HOME</a>");
}
catch(PDOException $e) {
	echo $e->getMessage();
}