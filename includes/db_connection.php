<?php
	$DB_HOST = "localhost";
	$DB_USER = "root";
	$DB_PASS = "";
	$DB_NAME = "hrm";
	$conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

	function sql_select($query){
		global $conn;
		$result = mysqli_query($conn,$query);
		if (mysqli_num_rows($result) > 0) {
		    while($row = mysqli_fetch_assoc($result)) {
		    $resultt = $row; 
				    }
		} else {
				    //exit;
				}
		return $resultt;
	mysqli_close($conn);
	}
?>