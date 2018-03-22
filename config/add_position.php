<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ))
{
	//ALLOWED
	include 'connect.php';
		$source = $_POST['source'];

		$sqlInsert = "INSERT INTO tbl_sourceapplication (`source_name`, `flag`)VAlUES ('".$source."','0')";
		$res = $conn->query($sqlInsert);
		if ($res == true) {
			echo "New application source added!";
		}else{
			echo "Something went wrong!";
		}
}
else 
{
    // DENIED
	header('location:source_applicationList.php');
} 
?>