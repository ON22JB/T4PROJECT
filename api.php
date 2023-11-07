<?php

$conn = new mysqli("localhost", "root", "", "vueuser");
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$out = array('error' => false);

$vueuser = 'read';

if(isset($_GET['vueuser'])){
	$vueuser = $_GET['vueuser'];
}


if($vueuser == 'read'){
	$sql = "select * from crud";
	$query = $conn->query($sql);
	$crud = array();

	while($row = $query->fetch_array()){
		array_push($crud, $row);
	}
	$out['crud'] = $crud;
}

if($vueuser == 'create'){

	$px = $_POST['px'];
	$pt = $_POST['pt'];
	$em = $_POST['em'];
	$inch = $_POST['inch'];
	$cm = $_POST['cm'];
	$mm = $_POST['mm'];

	$sql = "insert into crud (px, pt, em, inch, cm, mm ) values ('$px', '$pt',  '$em', '$inch','$cm', '$mm')";
	$query = $conn->query($sql);

	if($query){
		$out['message'] = "Added successfully";
	}
	else{
		$out['error'] = true;
		$out['message'] = "Could not add this";
	}	
}

if($vueuser == 'update'){

	$unitid = $_POST['unitid'];
	$px = $_POST['px'];
	$pt = $_POST['pt'];
	$em = $_POST['em'];
	$inch = $_POST['inch'];
	$cm = $_POST['cm'];
	$mm = $_POST['mm'];

	$sql = "update crud set px='$px', pt='$pt', em='$em', inch='$inch', cm='$cm', mm='$mm' where unitid='$unitid'";
	$query = $conn->query($sql);

	if($query){
		$out['message'] = "Updated successfully";
	}
	else{
		$out['error'] = true;
		$out['message'] = "Could not update this";
	}
}

if($vueuser == 'delete'){

	$unitid = $_POST['unitid'];

	$sql = "delete from crud where unitid='$unitid'";
	$query = $conn->query($sql);

	if($query){
		$out['message'] = "Deleted successfully";
	}
	else{
		$out['error'] = true;
		$out['message'] = "Could not delete this";
	}
}

$conn->close();

header("Content-type: application/json");
echo json_encode($out);
die();
?>