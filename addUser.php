<?php 
	 include_once('dbconnect.php');

	 if(isset($_POST) && $_POST['user'] != ''){
	 	$user = $_POST['user'];
		$query = "INSERT INTO tblusers VALUES('','$user')";

		 if($conn->query($query) === true){
		 	// $data['status'] = 1;
		 	// $data['msg'] = "Successfully added";
		 	// $data['dataObject'] = array('name' => $user);
		 	// echo json_encode($data);
		 	echo "Successfully Added! <a href='../'>Go back</a>";
		 	//header('Location: ../');
		 }else{
		 	echo "Failed to add";
		 }
	 }else{
	 	echo "Invalid Input";
	 } 
?>