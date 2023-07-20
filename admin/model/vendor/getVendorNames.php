<?php
	$vendorNamesSql = 'SELECT * FROM vendor';
	$stmt = $database->query($vendorNamesSql);
	if($stmt->num_rows > 0){
		while($row = $stmt->fetch_assoc()){
			echo '<option value="' .$row['fullName'] . '">' . $row['fullName'] . '</option>';
		}
	}
	$stmt->close()
	
?>