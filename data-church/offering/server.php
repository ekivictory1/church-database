<?php

session_start();
//initialize variables
    $offering = "";
	$offering_1 = "";
	$offering_2 = "";
	$offering_3 = "";
	$offering_4 = "";
	$offering_5 = "";
	$id = 0;
	$edit_state = false;

//connect to database
$db = mysqli_connect('localhost', 'root', '', 'church');




//insert offering




if (isset($_POST['save'])) {
	$offering = $_POST['offering'];
	$offering_1 = $_POST['offering_1'];
	$offering_2 = $_POST['offering_2'];
	$offering_3 = $_POST['offering_3'];
	$offering_4 = $_POST['offering_4'];
	$offering_5 = $_POST['offering_5'];
	

	$query = "INSERT INTO offering (offering, offering_1, offering_2, offering_3, offering_4, offering_5) VALUES ('$offering', '$offering_1', '$offering_2','$offering_3','$offering_4','$offering_5')";
	mysqli_query($db, $query);
	$_SESSION['msg'] = "Contact Saved";
	header('Location: offering.php');//redirect to index page
}




//update records

if (isset($_POST['update'])) {
	$offering = $_POST['offering'];
	$offering_1 = $_POST['offering_1'];
	$offering_2 = $_POST['offering_2'];
	$offering_3 = $_POST['offering_3'];
	$offering_4 = $_POST['offering_4'];
	$offering_5 = $_POST['offering_5'];
	$id= $_POST['id'];

	mysqli_query($db, "UPDATE offering SET offering='$offering', offering_1='$offering_1', offering_2='$offering_2', offering_3='$offering_3', offering_4='$offering_4' ,offering_5='$offering_5' WHERE id=$id ");
	$_SESSION['msg'] = "contact Updated";
	header('Location: offering.php');
	
}






//retrieve records
$results = mysqli_query($db, "SELECT * FROM offering");
?>



