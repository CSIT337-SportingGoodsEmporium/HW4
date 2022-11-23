<?php
	//includes database connection
	require_once './database.php';

	//take input and assign to variables
	$RoomNumber = trim($_POST['RoomNumber']);
    $Capacity = trim($_POST['Capacity']);
    $Type = trim($_POST['Type']);
    $Available = intval(trim($_POST['Available']));
	
	//check if all required variables are not empty
	if (empty($RoomNumber) || empty($Capacity) || empty($Type) || !isset ($Available)) {

		header('Location: ./add_room_form.php');

		//closes database connection
		$database = null;
		exit();
	}

    $query = $db->prepare("INSERT INTO rooms (RoomNumber, Capacity, Type, Available)
    VALUES (:RoomNumber, :Capacity, :Type, :Available)");
    $query->bindParam(':RoomNumber', $RoomNumber);
    $query->bindParam(':Capacity', $Capacity);
    $query->bindParam(':Type', $Type);
	$query->bindParam(':Available', $Available);
    $query->execute();
    header("Location: ./index.php");

	//closes database connection
	$database = null;
	exit();
?>