<?php 
	 include_once('dbconnect.php');
	 if(isset($_GET) && $_GET['user'] != ''){
	 	$user = $_GET['user'];
		$query = "INSERT INTO tblusers VALUES('','$user')";

		 if($conn->query($query) === true){
		 	$data['status'] = 1;
		 	$data['msg'] = "Successfully added";
		 	echo json_encode($data);
		 	//echo "Successfully to added";
		 }else{
		 	echo "Failed to add";
		 }
	 }else{
	 	echo "Invalid Input";
	 } 
?>