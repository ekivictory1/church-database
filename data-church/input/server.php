<?php

session_start();
//initialize variables
    $name = "";
	$interdict = "";
	$tithe_1 = "";
	$tithe_2 = "";
	$tithe_3= "";
	$tithe_4= "";
	$id = 0;
	$edit_state = false;

//connect to database
$db = mysqli_connect('localhost', 'root', '', 'church');

//if save button is clicked

if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$interdict = $_POST['interdict'];
	$tithe_1 = $_POST['tithe_1'];
	$tithe_2 = $_POST['tithe_2'];
	$tithe_3= $_POST['tithe_3'];
	$tithe_4= $_POST['tithe_4'];
	

	$query = "INSERT INTO congregation (name, interdict, tithe_1, tithe_2, tithe_3, tithe_4) VALUES ('$name', '$interdict', '$tithe_1', '$tithe_2', '$tithe_3', '$tithe_4')";
	mysqli_query($db, $query);
	$_SESSION['msg'] = "Contact Saved";
	header('Location: input.php');//redirect to index page
}

//update records

if (isset($_POST['update'])) {
	$name = $_POST['name'];
	$interdict = $_POST['interdict'];
	$tithe_1 = $_POST['tithe_1'];
	$tithe_2 = $_POST['tithe_2'];
	$tithe_3= $_POST['tithe_3'];
	$tithe_4= $_POST['tithe_4'];
	$id= $_POST['id'];

	mysqli_query($db, "UPDATE congregation SET name='$name', interdict='$interdict', tithe_1='$tithe_1', tithe_2='$tithe_2', tithe_3='$tithe_3', tithe_4='$tithe_4' WHERE id=$id");
	$_SESSION['msg'] = "contact Updated";
	header('Location: input.php');
	
}


//delete records
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM congregation WHERE id=$id");
	$_SESSION['msg'] = "contact Deleted";
	header('Location: input.php');
}



//retrieve records
$results = mysqli_query($db, "SELECT * FROM congregation");
?>